# Aktion 1 — 3 ELFA Pods al → 1 ELFA Basisgerät hediye (0.3.0)

Aynı yol (Aktion 2'de canlıda kanıtlandı): cihaz **gerçek tek renk varyasyonu, tam fiyatla (7,49 €)** sepete girer → eklenti Aktion 1 **Aktionsgutschein** kodunu uygular (Festbetrag 7,49 €) → cihaz fiilen 0 €. Pod 3'ün altına düşerse cihaz (1 adet) + kupon kalkar. Sipariş başına 1 cihaz. Tarih penceresi **yok**: kampanya yalnız „Aktion 1 aktiv“ ile açılır/kapanır.

Varsayılan: **Aktion 1 aktiv = hayır, Testmodus = evet, Gutscheincode boş** → bereitstellen edilse bile davranış değişmez. Kod boşken modül hiçbir şey yapmaz.

## A1-1. Ölçülen katalog (20.11.2026, Plenty API + mağazaların kendi IO uç noktası + misafir sepeti)

İki Mandant aynı Plenty sisteminde (57085) → **ID'ler iki mağazada aynı**.

**Hediye cihaz — ELFA Pod Kit 500 mAh, tek renk item'ları** (paket değil; `bundle_item`). Fiyat: satış fiyatı 1 „Aktionspreis Webshop“ = **7,49 €** (Lostmary + elfbargermany, müşteri sınıfı 2). İki mağazada da 9 renk görünür + satılabilir + misafir sepetine 7,49 € ile girdi ve kaldı (itemType 10).

| Renk | Item | Varyasyon | Nummer | Stok 113 | 115 | 107 |
|---|---|---|---|---|---|---|
| Aurora Blue | 11259 | 2548 | ELFA-KIT-AB | 901 | 240 | – |
| Aurora Purple | 11262 | 2551 | ELFA-KIT-AP | 852 | 350 | 36 |
| Black | 11272 | 2561 | ELFA-KIT-BL | 2891 | 160 | 84 |
| Navy Blue | 11273 | 2562 | ELFA-KIT-NB | 797 | 100 | 23 |
| White | 11278 | 2567 | ELFA-KIT-WH | 1121 | 210 | 31 |
| Twilight Blue | 11742 | 3095 | ELFA-KIT-TB | 996 | 300 | 23 |
| Aurora Green | 11743 | 3096 | ELFA-KIT-AG | 773 | 180 | 12 |
| Aurora Pink | 11744 | 3097 | ELFA-KIT-API | 1493 | 60 | 6 |
| Twilight Brown | 11745 | 3098 | ELFA-KIT-TBR | 4240 | 340 | 11 |

Not: 24vapestore'un Plenty karşılığı **24835 „ELFA Pod Kit – Alle Farben“** (varyasyonlar 109391–109399) **PAKET** ve yalnız 62081/62082'ye bağlı (Lostmary'de yok). Hediye olarak **kullanılmıyor**: elfbargermany paketleri bölmediği için sepette ayrı tipte (11) satır olurdu. Tek renk item'lar iki mağazada da aynı şekilde çalışıyor.

**Sepet satır tipleri (ölçüldü):** Lostmary paketleri **böler** (ör. 87121 → 86644 tek tat satırı, 109391 → 2561), elfbargermany **bölmez** (Sammelartikel pod'u itemType **11**). Aktion 1 tip 0/10/11 sayar.

**Sayılan ELFA Pods (Artikel-IDs, ayarda varsayılan dolu, 57 ID):**
- 52 tek tat item (20 mg + 0 mg), iki mağazada satılabilir: 11028 … 24529
- Filter Series tek item'lar 23695, 23696
- Sammelartikel (yalnız elfbargermany'de pod paketleri satılıyor): **12569** „ELFA Pods ALLE SORTEN“ (37 aktif paket), **24839** Filter Series, **24840** 0 mg

Sayılmayan: 10x/D10 B2B paketleri, EBAY 3er/5er, „Elfa Pods + Elfa Master/Turbo Bundle“ (24312, 24568), Refillable/Leer Pod, Turbo/Master cihazları.

## A1-2. Kuponları panelde aç (API ile açılamıyor)

Her Mandant için **bir** kampanya. Yol: **Aufträge » Gutscheine » Neue Kampagne**.

| Alan | Lostmary | elfbargermany |
|---|---|---|
| Name | Aktion 1 – ELFA Basisgerät gratis (Lostmary) | Aktion 1 – ELFA Basisgerät gratis (Elfbargermany) |
| Typ | **Aktionsgutschein** | **Aktionsgutschein** |
| Rabatt | **Festbetrag 7,49 €** | **Festbetrag 7,49 €** |
| Code-Länge | 16 Zeichen | 16 Zeichen |
| Code / Einlösung | **tek kod, sınırsız / çok kez** (müşteri başına sınırsız) | aynı |
| Mindestbestellwert | 0 | 0 |
| Gültigkeit | bugünden (test) → 01.12.2026 | 23.11.2026 → 01.12.2026 (test için bugünden) |
| **Mandant** | **yalnız Lostmarygermany.de (65060)** | **yalnız Elfbargermany (62081)** |
| **Filter** | **Kategorie 1282 „ELFA Basisgerät“** | **Kategorie 1282 „ELFA Basisgerät“** |
| Versandkosten | etkilenmesin | etkilenmesin |

- Neden kategori: Aktion 2'de ELFLIQ kuponunda **Artikel filtresi tutmadı** (24534), **Kategorie filtresine çevrilince çalıştı** (ELFX'te Artikel 14359 çalışmıştı). Kategori 1282 yalnız cihazları içeriyor (9 tek renk + 24835 + 128701 B2B), pod yok → güvenli. Kategori seçeneği yoksa: Artikel filtresi **11259, 11262, 11272, 11273, 11278, 11742, 11743, 11744, 11745**.
- Kaydet → 16 karakterlik **Code**'u kopyala → A1-3'teki ayara yapıştır. Kod repoya yazılmaz.
- Fiyat değişirse (Black Deals) Festbetrag'ı da değiştir.

## A1-3. Eklenti ayarları (sekme „Aktion 1: ELFA Pods → ELFA Gerät“)

| Ayar | Lostmary test | elfbargermany |
|---|---|---|
| Aktion 1 aktiv | **evet** | test: evet / canlı: evet |
| Aktion 1 Testmodus | **evet** | evet → canlıda hayır |
| Test-Kunden (Kontakt-IDs) | **591963** (varsayılan) | elfbargermany'de kayıtlı bir test kontağı (591963 Lostmary'ye kayıtlı; orada giriş yapamayabilir) |
| Anzahl ELFA Pods | **3** | 3 |
| ELFA Pods (Artikel-IDs) | varsayılan liste (dokunma) | aynı |
| ELFA Pods (Variations-IDs) | boş | boş |
| Geschenk ELFA Basisgerät (Artikel-IDs) | varsayılan **11259, 11262, 11272, 11273, 11278, 11742, 11743, 11744, 11745** | aynı |
| Aktion 1 Gutscheincode | Lostmary kampanyasının kodu | elfbargermany kampanyasının kodu |

Not: ayarlar plugin set başına. elfbargermany için ayrı set ise orada da girilir.

## A1-4. Container bağlantıları

Plugin-Set » VaporAktion1 » **Container-Verknüpfungen** (yeni sağlayıcılar kendiliğinden bağlanmazsa elle):

| Data Provider | Container |
|---|---|
| Aktion 1: Script (Pflicht) | `Ceres::Script.AfterScriptsLoaded` |
| Aktion 1: Box Warenkorb | `Ceres::Basket.BeforeBasketTotals` |
| Aktion 1: Box Warenkorb-Vorschau | `Ceres::BasketPreview.BeforeBasketTotals` |
| Aktion 1: Box Artikelseite (optional) | `Ceres::SingleItem.AfterAddToBasket` |

Aktion 2 bağlantılarına dokunma. Ürün sayfası kutusu yalnız ayardaki pod item'larında görünür (öbür ürünlerde boş).

## A1-5. Aktion 2 ile birlikte

Plenty sepetinde **tek kupon** olur → iki kampanya aynı anda kupon isteyemez.
- Sepette Aktion 2 hediyesi (kodu) varken Aktion 1 kutusu: **„Nicht mit anderer Aktion kombinierbar …“**, renk seçtirmez. Tersi: Aktion 1 cihazı varken Aktion 2 kutusu kendi metnini gösterir („Aktion nicht mit anderen Gutscheinen kombinierbar …“) — Aktion 2'ye dokunulmadığı için metni değişmedi.
- Müşteri hangi hediyeyi önce seçerse o geçerli; diğerini isterse ilkini „Entfernen“ ile kaldırır, sonra öbür kutudan seçer.
- Biri elle diğerinin kodunu girerse: kupon değişir → ilk kampanya hediyesini kaldırır, ikinci kampanya „hediyesiz kod“ diye kodu siler → sepet hediyesiz/kuponsuz kalır (sızıntı koruması).

## A1-6. Test (591963 ile, Lostmary)

| # | Adım | Beklenen |
|---|---|---|
| 1 | Misafir: 3 pod (ör. 2294 ×2 + 2282) | Kutu yok (test modu) |
| 2 | 591963 ile giriş, 2 pod | „1/3 … Noch 1 ELFA Pod …“ + çubuk |
| 3 | 3. pod (farklı tat) | 9 renk kutucuğu, „7,49 € Gratis“ |
| 4 | Black → „Gratis-Gerät in den Warenkorb“ | Black 7,49 € + kupon −7,49 €; kutu „Dein Gratis ELFA Basisgerät …: Black“ |
| 5 | „Andere Farbe wählen“ → Navy Blue | Black gider, Navy Blue + kupon |
| 6 | Bir pod'u sil (2) | Cihaz + kupon gider |
| 7 | 3 pod + Black ücretli koy, sonra kutudan Black | Black 2 adet, kupon −7,49 (1 ücretli + 1 hediye); „Entfernen“ → 1 kalır |
| 8 | Aktion 2 hediyesi varken 3 pod | Aktion 1 kutusu „Nicht mit anderer Aktion kombinierbar“ |
| 9 | Hediye varken başka kupon gir | Cihaz kalkar, yabancı kupon kalır |
| 10 | Sepet önizlemesi (sağ panel) | Kompakt seçim (açılır liste + Hinzufügen) |
| 11 | Pod ürün sayfası (Artikelseite bağlıysa) | İlerleme/seçim kutusu; cihaz/başka ürün sayfasında kutu yok |
| 12 | Sipariş (Vorkasse) | Satır ELFA Kit 7,49 + kupon satırı −7,49; stok o renkten düşer; sonra iptal |
| 13 | Daten » Log » VaporAktion1 | „Aktion 1: …“ satırları |
| 14 | Aktion 2 testleri (6 ELFLIQ + ELFX) | Değişmeden çalışır |

## A1-7. Canlıya alma / kapatma

- 23.11.: Testmodus = hayır (kod dolu, aktiv = evet) → bereitstellen.
- 30.11. akşam: **Aktion 1 aktiv = hayır** → bereitstellen (sepetlerde kalan Aktion 1 kodu bir sonraki değişimde silinir, kayıtlı cihaz satırı 1 adet azaltılır). En hızlı acil kapatma: panelde Aktion 1 kupon kampanyasını pasif yap.

## Teknik (Aktion 1)

- `src/Aktion1/`: `A1Regel` (saf kural), `A1GeschenkService`, `A1KatalogService` (yalnız aktif + görünür + satılabilir + fiyatlı renkler), `A1Controller`, dinleyiciler, container'lar.
- Oturum anahtarı `VaporAktion1_aktion1`; Aktion 2 kodları yalnız okunur (`gutscheinElfx`, `gutscheinElfliq`) → „başka kampanya“ mesajı.
- REST `GET/POST/DELETE /rest/vapor-aktion1/geschenk` (POST/DELETE `csrf`), JS fetch + tek `X-CSRF-TOKEN`, token yoksa sayfa yenilenir.
- Testler: `php tests/run_aktion1.php` (43) + `php tests/run.php` (Aktion 2, 50).
