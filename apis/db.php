<?php
    // Hata ayıklama için tüm hataları göster
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header("Access-Control-Allow-Origin: *"); // CORS hatasını önler
    header("Content-Type: application/json; charset=UTF-8"); // JSON formatında veri döndür

    // MySQL bağlantısı
    $servername = "localhost";
    $username = "demo8610_root"; // MySQL kullanıcı adın
    $password = "----"; // MySQL şifren
    $database = "demo8610_protesto_db"; // CPanel'deki doğru veritabanı adı

    $conn = new mysqli($servername, $username, $password, $database);
    $conn->set_charset("utf8mb4");

    if ($conn->connect_error) {
        die(json_encode(["error" => "Veritabanı bağlantısı başarısız: " . $conn->connect_error]));
    }

    // API metodu kontrolü
    $method = $_SERVER['REQUEST_METHOD'];

    // JSON giriş verisini al ve kontrol et
    function getJsonInput() {
        $rawData = file_get_contents("php://input");

        if (!$rawData) {
            die(json_encode(["error" => "Gelen veri boş veya okunamadı."]));
        }

        $data = json_decode($rawData, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            die(json_encode(["error" => "Geçersiz JSON formatı: " . json_last_error_msg()]));
        }
    
        return $data;
    }
    

    // GET: Şehir listesini çek
    if ($method == "GET") {
        $sql = "SELECT * FROM sehirler";
        $result = $conn->query($sql);
        
        if (!$result) {
            die(json_encode(["error" => "Sorgu hatası: " . $conn->error]));
        }
        
        $cities = [];
        while ($row = $result->fetch_assoc()) {
            $cities[] = $row;
        }
        
        echo json_encode($cities, JSON_UNESCAPED_UNICODE);
        
    }
    
    
    

    // POST: Yeni şehir ekleme
    elseif ($method == "POST") {
        $data = getJsonInput();

        if (isset($data['plaka'], $data['sehir'], $data['katilim'])) {
            $plaka = (int) $data['plaka'];
            $sehir = $conn->real_escape_string($data['sehir']);
            $katilim = (int) $data['katilim'];

            $sql = "INSERT INTO sehirler (plaka, sehir, katilim) VALUES ('$plaka', '$sehir', '$katilim')";
            if ($conn->query($sql)) {
                echo json_encode(["message" => "Şehir eklendi!"]);
            } else {
                echo json_encode(["error" => "Ekleme hatası: " . $conn->error]);
            }
        } else {
            echo json_encode(["error" => "Eksik veri"]);
        }
    }

    // DELETE: Şehir silme
    elseif ($method == "DELETE") {
        $data = getJsonInput();

        if (isset($data['plaka'])) {
            $plaka = (int) $data['plaka'];

            $sql = "DELETE FROM sehirler WHERE plaka = $plaka";
            if ($conn->query($sql)) {
                echo json_encode(["message" => "Şehir silindi!"]);
            } else {
                echo json_encode(["error" => "Silme hatası: " . $conn->error]);
            }
        } else {
            echo json_encode(["error" => "Eksik veri"]);
        }
    }

    // PATCH: Plaka koduna göre şehre +1 katılımcı ekle
    elseif ($method == "PATCH") {
        $data = getJsonInput();

        if (isset($data['plaka'])) {
            $plaka = (int) $data['plaka'];

            $sql = "UPDATE sehirler SET katilim = katilim + 1 WHERE plaka = $plaka";
            if ($conn->query($sql)) {
                echo json_encode(["message" => "$plaka plakalı şehre +1 kişi eklendi!"]);
            } else {
                echo json_encode(["error" => "Güncelleme hatası: " . $conn->error]);
            }
        } else {
            echo json_encode(["error" => "Eksik veri"]);
        }
    }

    // Bilinmeyen metodlar için hata mesajı döndür
    else {
        echo json_encode(["error" => "Geçersiz istek metodu: $method"]);
    }

    $conn->close();
?>
