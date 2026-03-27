# 📘 Projekt PHP – Wyświetlanie danych o zwierzętach

## 📋 Opis projektu

Aplikacja napisana w PHP, która łączy się z bazą danych MySQL i wyświetla dane o zwierzętach w formie tabeli HTML.

Dane pobierane są z tabeli `zwierzeta` i obejmują m.in. gatunek, występowanie oraz obraz.

---

## ⚙️ Wymagania

Aby uruchomić projekt, potrzebujesz:

* PHP (np. XAMPP / WAMP / LAMP)
* MySQL
* Przeglądarka internetowa

---

## 🗄️ Konfiguracja bazy danych

1. Utwórz bazę danych o nazwie:

```
bazamyk
```

2. Utwórz tabelę:

```
zwierzeta
```

3. Struktura tabeli:

```sql
CREATE TABLE zwierzeta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gromady_id INT,
    odzywianie_id INT,
    gatunek VARCHAR(255),
    wystepowanie VARCHAR(255),
    czy_zagrozony VARCHAR(50),
    obraz VARCHAR(255)
);
```

4. (Opcjonalnie) dodaj przykładowe dane:

```sql
INSERT INTO zwierzeta 
(gromady_id, odzywianie_id, gatunek, wystepowanie, czy_zagrozony, obraz)
VALUES 
(1, 2, 'Lew', 'Afryka', 'Tak', 'lew.jpg');
```

---

## 🚀 Uruchomienie

1. Umieść plik `index.php` w katalogu serwera (np. `htdocs`)
2. Uruchom Apache i MySQL
3. Otwórz w przeglądarce:

```
http://localhost/index.php
```

---

## 🔍 Jak działa aplikacja

* Łączy się z bazą danych:

```php
$conn = new mysqli("localhost", "root", "", "bazamyk");
```

* Pobiera wszystkie rekordy:

```sql
SELECT * FROM zwierzeta
```

* Wyświetla dane w tabeli HTML zawierającej:

  * ID
  * ID gromady
  * ID odżywiania
  * Gatunek
  * Występowanie
  * Informację o zagrożeniu
  * Obraz

---

## 🖼️ Obsługa obrazów

* Ścieżka do obrazu jest przechowywana w bazie danych
* Obraz wyświetlany jest za pomocą:

```html
<img src="ścieżka_do_pliku">
```

* Upewnij się, że pliki graficzne znajdują się w odpowiednim katalogu

---

## ⚠️ Uwagi

* Brak zabezpieczeń (np. przed SQL Injection)
* Brak obsługi błędów połączenia z bazą
* Dane wyświetlane są bez walidacji

---

## 🔧 Możliwe ulepszenia

* Prepared statements
* Obsługa błędów (`try/catch`)
* Lepsze stylowanie (np. Bootstrap)
* Formularz dodawania danych
* Filtrowanie i sortowanie

---

## 👨‍💻 Autor

Projekt edukacyjny w PHP.
