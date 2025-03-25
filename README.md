
---

# DemokrasiWEB

**DemokrasiWEB**, Türkiye ve/veya genel olarak demokrasi kavramını, görsel ve metinsel içeriklerle anlatmayı amaçlayan, HTML, CSS ve PHP tabanlı dinamik bir web projesidir. Proje, kullanıcıların demokratik değerlere ve Atatürk’e ait simgelerin yer aldığı görsel ve dokümanları barındırması amacıyla hazırlanmış görünmektedir.

---

## İçerik

- [Özellikler](#özellikler)
- [Proje Yapısı](#proje-yapısı)
- [Kurulum ve Gereksinimler](#kurulum-ve-gereksinimler)
- [Dosya ve Dizin Açıklamaları](#dosya-ve-dizin-açıklamaları)
- [Kullanım Talimatları](#kullanım-talimatları)
- [Lisans](#lisans)

---

## Özellikler

- **Statik Web Sayfası:**  
  Proje, HTML ve CSS kullanılarak hazırlanmış statik sayfalardan oluşur. PHP dosyaları, dinamik içerik sunumu veya sunucu taraflı işlemler için yer alabilir.

- **Görsel ve Simge Kullanımı:**  
  Depoda Türkiye bayrağı (`Flag_of_Turkey.png`), Mustafa Kemal Atatürk’ün imzası (`Signature_of_Mustafa_Kemal_Atatürk.svg`), ve diğer simgesel dosyalar (ör. `tr.svg`, `country.svg`) yer almaktadır. Bu dosyalar, projenin temasını ve mesajını destekler niteliktedir.

- **API Entegrasyonu (Opsiyonel):**  
  `apis` klasörü içerisinde yer alan dosyalar, projenin dış sistemlerle entegrasyon yapabileceğini gösterir. Bu entegrasyonlar, örneğin haber, oy sonuçları veya diğer demokratik verilerin çekilmesi gibi senaryoları destekleyebilir.

- **.htaccess Dosyası:**  
  Apache web sunucuları için yönlendirme, güvenlik veya URL yeniden yazım ayarlarını içeren `.htaccess` dosyası projede bulunmaktadır.

- **Arşivlenmiş İçerik:**  
  `htdocs.zip` dosyası, projenin önceki sürümlerini veya ek kaynaklarını içerebilir.

---

## Proje Yapısı

```
DemokrasiWEB/
├── apis/                   # API entegrasyon dosyaları (örneğin, veri çekmek için)
├── styles/                 # CSS dosyaları ve stil düzenlemeleri
├── .htaccess               # Apache yapılandırma dosyası (URL yönlendirme ve güvenlik ayarları)
├── Flag_of_Turkey.png      # Türkiye bayrağı görseli
├── Signature_of_Mustafa_Kemal_Atatürk.svg  # Atatürk imzası vektör dosyası
├── aaa.txt                 # Muhtemelen test veya not amaçlı basit bir metin dosyası
├── country.svg             # Ülke simgesine ait SVG dosyası (örneğin, Türkiye’ye referans)
├── htdocs.zip              # Ek kaynaklar veya projenin arşivlenmiş sürümü
└── index.html              # Ana giriş sayfası (web arayüzü)
└── tr.svg                  # Türkçe veya Türkiye’ye ait başka bir SVG simgesi
```

---

## Kurulum ve Gereksinimler

1. **Web Sunucusu:**  
   Projeyi yerel veya uzak bir sunucuda çalıştırmak için Apache, Nginx gibi bir web sunucusuna ihtiyacınız var. PHP desteğinin aktif olduğundan emin olun.

2. **PHP:**  
   Eğer proje dinamik içerik sunuyorsa, PHP 7.x veya üzeri bir sürüm kullanılması önerilir.

3. **Dosya Yapılandırması:**  
   - `index.html` ana sayfa olarak ayarlanmıştır.  
   - `.htaccess` dosyası sayesinde URL yönlendirmeleri veya güvenlik ayarları yapılabilir.
   - `styles/` dizini içerisinde CSS dosyaları bulunur; bu dosyalar, sayfa tasarımını düzenler.

4. **Ek Kaynaklar:**  
   - `apis` dizini, harici veri çekme veya API entegrasyonu için konfigürasyon dosyalarını içerebilir.
   - `htdocs.zip` dosyasını açarak ek içeriklere erişebilir veya projenin daha önceki sürümlerini inceleyebilirsiniz.

---

## Dosya ve Dizin Açıklamaları

- **apis/**  
  İçerisinde API isteklerini yöneten veya üçüncü taraf servislerle entegrasyon sağlayan dosyalar bulunabilir. Bu dizin, projenin dinamik verilerle çalıştığı durumlarda kullanılır.

- **styles/**  
  Tüm CSS dosyaları bu dizinde yer alır. Projenin görünümü ve düzeni bu dosyalarla kontrol edilir.

- **.htaccess**  
  Apache sunucuları için yapılandırma dosyası. URL yeniden yazımı, güvenlik kuralları ve yönlendirme işlemleri bu dosya üzerinden yapılır.

- **Flag_of_Turkey.png, Signature_of_Mustafa_Kemal_Atatürk.svg, tr.svg, country.svg**  
  Projenin temasını destekleyen ve görsel anlatımı güçlendiren simge ve logolar.

- **aaa.txt**  
  Test amaçlı veya kısa metin içeriklerinin bulunduğu dosya olabilir.

- **htdocs.zip**  
  Projenin ek kaynaklarını veya eski sürümlerini içeren arşiv dosyası.

- **index.html**  
  Ana giriş sayfası; projeye ait ana web içeriğinin sunulduğu dosya.

---

## Kullanım Talimatları

1. **Kurulum:**  
   - Projeyi web sunucunuza yükleyin veya yerel geliştirme ortamınızda çalıştırın.
   - Apache kullanıyorsanız, `.htaccess` dosyasının doğru şekilde okunabilmesi için `AllowOverride All` ayarının etkin olduğundan emin olun.
   - PHP kodları çalıştırılacaksa, PHP’nin doğru sürümünü yükleyin.

2. **Navigasyon:**  
   - `index.html` dosyasını açarak projenin ana sayfasını görüntüleyin.
   - Stil dosyaları `styles/` dizininden otomatik olarak yüklenir; gerekirse CSS dosyalarında değişiklik yaparak özelleştirebilirsiniz.
   - API entegrasyonu veya dinamik içerik sunumu varsa, `apis/` dizinindeki dosyaları inceleyip, gerekli API anahtarları veya konfigürasyon ayarlarını güncelleyin.

3. **Özelleştirme:**  
   - Görsel içerikleri veya metin içeriklerini değiştirmek için ilgili dosyalarda düzenleme yapabilirsiniz.
   - `.htaccess` dosyası üzerinden URL yönlendirmeleri veya güvenlik ayarlarını yapılandırabilirsiniz.

---

## Lisans



---

## Son Notlar

DemokrasiWEB, Türkiye’nin demokratik değerlerini ve Atatürk’ün simgesel öğelerini ön plana çıkaran bir web projesidir. Projenin statik yapısı ve PHP destekli dinamik içerik yönetimi ile, hem görsel hem de metinsel anlatımı güçlendirilmektedir. Geliştiriciler, projeyi kendi ihtiyaçlarına göre özelleştirebilir, API entegrasyonlarını güncelleyebilir ve tasarım öğelerini değiştirebilir.

Herhangi bir sorunuz veya geliştirme öneriniz için lütfen iletişime geçin.

---
