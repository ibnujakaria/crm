Aplikasi CRM Open Source
===================


Hey! I'm your first Markdown document in **StackEdit**[^stackedit]. Don't delete me, I'm very helpful! I can be recovered anyway in the **Utils** tab of the <i class="icon-cog"></i> **Settings** dialog.

Hello, project ini adalah project CRM berbasis PHP. Dibangun menggunakan framework laravel. Berisi setidak beberapa hal berikut:

- Management Leads
- Management Customers
- Management Sales
- Management Product
- Management Oportunities
- Management Quotations

Ada dua actor utama:
- admin
- sales

## Admin
Akses tak terbatas. Mulai menambah sales, menambah product, dan menambah leads, customers, sebagainya.

## Sales
Sales hanya bisa melakukan beberapa hal sebagai berikut:
 - menambah, menghapus, mengedit, data berkaitan dengan leads
 - menambah oportunities terhadap leads tersebut (progress)
 - melakukan perubahan data terhadap dirinya sendiri

----------

Cara install dan kontribusi
-------------

> - Fork terlebih dahulu project ini dengan akun github anda.
> - Clone project anda dengan melakukan hal berikut:

```
$ git clone https://github.com/{username-kamu}/crm.git
$ cd crm
$ git remote add upstream https://github.com/hudasanca/crm.git
$ composer update

```
> - setelah itu. Buat sebuah database mysql, lalu beri nama terserah keinginan anda
> - Kopikan file .env.example menjadi file bernama .env (saja)
> - Isikan detail database anda lalu lakukan

```
$ php artisan migrate
$ php artisan db:seed
```

> Untuk menjalankan program, silakan lakukan perintah berikut:
> $ php artisan serve
> lalu buka browser anda, ketikkan alamat localhost:8000
> **Voila! Project CRM ini sudah terinstall** 




## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
