# Template LSP

Template LSP SMK Negara 1 Surabaya

## Prerequisite

- PHP 8.2 ~ 8.4
- Composer
- Node.js
- Git
- MySQL (XAMPP / Laragon)

## Cara menggunakan

### 0. Menyalakan MySQL

Menyalakan MySQL di XAMPP atau Laragon

### 1. Clone project dengan Git

```bash
git clone https://github.com/RasyaJusticio/template-lsp.git
cd template-lsp
```

### 2. Menginstall packages

```bash
composer install
npm install
```

### 3. Membuat file .env dan mengkonfigurasi database (PowerShell)

```bash
Copy-Item -Path ".env.example" -Destination ".env"
```

```php
DB_DATABASE={{GANTI SESUAI NAMA DATABASE}}
DB_USERNAME=root
DB_PASSWORD=
```

Contoh

```php
DB_DATABASE=template_lsp
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Menjalankan migration

```bash
php artisan migrate:fresh --seed
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Menjalankan projek (Di 2 terminal berbeda)

```bash
php artisan serve
npm run dev
```

### 7. Mengakses website di browser

Buka laman `http://127.0.0.1:8000/` di browser Anda.

## Cara Berkolaborasi

## Kredit

[RasyaJusticio](https://github.com/RasyaJusticio) - Semua
[vanDunviel](https://github.com/vanDunviel) - Produk & Kategory
