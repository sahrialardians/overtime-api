# Overtime API

Soal test code dari Kledo build REST-API pada sisi backend untuk memenuhi kebutuhan sistem perhitungan lembur (atau overtime).
Fitur:

-   Mengubah data settings
-   Membuat data employees
-   Membuat data overtimes
-   Menampilkan hasil perhitungan dari overtimes yang ada pada setiap employees, berdasarkan bulan yang ditentukan.

## Installation

1. Clone Repository

```bash
$ git clone https://github.com/sahrialardians/overtime-api
```

2. Install Depedency

```bash
$ composer install
```

3. Setup Environment Variable

```bash
$ cp .env.example .env
```

Kemudian, jika aplikasi Laravel tersebut memiliki database, buatlah nama database baru. Lalu sesuaikan nama database, username, dan password database di file .env.
Setelah berhasil membuat file .env dan mengisi variable untuk koneksi database, berikutnya jalankan perintah berikut:

```bash
$ php artisan key:generate
```

Perintah ini akan meng-generate key untuk dimasukkan ke APP_KEY di file .env

4. Run Migration

```bash
$ php artisan migrate
```

Perintah ini akan membuat table yang sudah di buat di migration file.

5. Seeding Data

```bash
$ php artisan db:seed
```

Perintah ini akan membuat data yang sudah disiapkan di table referenses dan settings.

## Usage

1. Run aplikasi dengan artisan

```bash
$ php artisan serve
```

Lalu run di host http://localhost:8000
