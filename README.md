## Arkademy Batch 12 - 5
#### jawaban dari tes yang diberikan oleh Arkademy

<br/>

### Soal 1(1.js)
cara menjalakan program:
* jalankan pada console di browser anda
* atau salin code-nya lalu jalankan(run) diconsole pada website berikut: [es6console.com](https://es6console.com/)

Fungsi JSON pada REST API adalah sebagai tipe dari sebuah data yang diberikan/dikembalikan oleh REST SERVER. dengan tipe JSON maka akan memudahkan kita untuk mengakses data tersebut.

<br/>
<br/>

### Soal 2(2.js)
cara menjalakan program:
* jalankan pada console di browser anda
* atau salin code-nya lalu jalankan(run) diconsole pada website berikut: [es6console.com](https://es6console.com/)

#### pada fungsi ini parameter pertama berupa username dan kedua berupa password

coba ubahlah **username** dan **password** pada bagian ini, dan lihat bagaimana programnya bekerja.

![argument](capture/soal_2-1.JPG)

<br/>

ketika menjalakan program maka akan muncul **username** dan **password** anda pada console

![console.log](capture/soal_2-2.JPG)

<br/>

#### disetiap validasi akan mengeluarkan alert pada halaman website

#### Username

ketika **username** yang anda masukan itu panjangnya kurang atau lebih dari 6 karakter.

![6 karakter](capture/soal_2-3.JPG)

<br/>

ketika **username** yang anda masukan itu bukan kombinasi dari huruf besar dan huruf kecil.

![huruf besar dan kecil](capture/soal_2-4.JPG)

<br/>

ketika **username** yang anda masukan itu mengandung karakter spesial atau angka.

![huruf besar dan kecil](capture/soal_2-5.JPG)

<br/>

#### Password

ketika **password** yang anda masukan itu kurang dari 5 atau lebih dari 10 karkter.

![5-10 password karakter](capture/soal_2-6.JPG)

<br/>

ketika **password** yang anda masukan itu tidak diawali oleh angka 7.

![7 on 0-index](capture/soal_2-7.JPG)

<br/>

ketika **password** yang anda masukan itu tidak mengandung huruf besar, huruf kecil dan angka.

![pw huruf besar, huruf kecil dan angka](capture/soal_2-8.JPG)

<br/>

ketika **password** yang anda masukan itu tidak mengandung karakter spesial.

![pw karakter spesial](capture/soal_2-9.JPG)

<br/>
<br/>

### Soal 3(3.js)

cara menjalakan program:
* jalankan pada console di browser anda
* atau salin code-nya lalu jalankan(run) diconsole pada website berikut: [es6console.com](https://es6console.com/)

#### program ini bertugas untuk mencari angka pada sebuah string(jika ada angka maka akan mengeluarkan output berupa angka yang sudah diurutkan)

program ini default nya menjalankan fungsi dengan mengirim sebuah parameter berupa string **"11adamcanray09"**

![soal-3 jalankan method](capture/soal_3-1.JPG)

<br/>

program ini akan mengeluarkan output pada console berupa **angka** yang ada pada string dan juga **mengurutkan angka tersebut dari yang terkecil hingga angka terbesar.**

![soal-3 jalankan method](capture/soal_3-2.JPG)

<br/>

program ini akan mengeluarkan output pada console berupa **pesan kesalahan** jika di dalam string yang kita input itu **tidak terdapat angka didalamnya.**

![soal-3 jalankan method](capture/soal_3-3.JPG)

<br/>
<br/>

### Soal 4(4.js)

cara menjalakan program:
* jalankan pada console di browser anda
* atau salin code-nya lalu jalankan(run) diconsole pada website berikut: [es6console.com](https://es6console.com/)

#### program ini bertugas untuk menentukan bilangan terbesar ke-3(berupa angka) pada array

program ini default nya menjalankan fungsi dengan mengirim sebuah parameter berupa array **[1,2,3,true,20,'string']**

![soal-4 jalankan method](capture/soal_4-1.JPG)

<br/>

ketika dijalankan di console akan menampilkan angka "2", karena dari array **[1,2,3,true,20,'string']** yang terbesar ke-3 adalah angka "2", method akan mengabaikan tipe data lain selain **number**

![soal-4 default output console](capture/soal_4-2.JPG)

<br/>

ketika anda memasukan paramter yang bukan array(string, char, dll), contoh: **thirdHighest('string');** maka program akan menghasilkan ini pada console

![soal-4 not array](capture/soal_4-3.JPG)

<br/>

ketika anda memasukan array yang panjangnya kurang dari 3, contoh: **thirdHighest([1,2]);** maka program akan menghasilkan ini pada console

![soal-4 default output console](capture/soal_4-4.JPG)

<br/>
<br/>

### Soal 5(5.js)

cara menjalakan program:
* jalankan pada console di browser anda
* atau salin code-nya lalu jalankan(run) diconsole pada website berikut: [es6console.com](https://es6console.com/)

#### program ini bertugas untuk mencari ada berapa character(parameter kedua) didalam sebuah string(parameter pertama)

program ini default nya menjalankan fungsi **countChar("arkademy","a");** dengan mengirim 2 buah, parameter pertama berupa **string** dan parameter kedua berupa **char**

![soal-5 jalankan method](capture/soal_5-1.JPG)

<br/>

program ini default nya akan mengeluarkan **"2"** pada console, angka 2 adalah banyak nya karakter yang ditemukan pada sebuah string. contoh: terdapat 2 karakter **"a"** pada string **"arkademy"**

![soal-5 output method](capture/soal_5-2.JPG)

<br/>

program ini akan mengeluarkan "Not Found!" pada console ketika tidak ada karakter **X** pada sebuah string. contoh: tidak terdapat karaker **"z"** pada string **"arkademy"**

![soal-4 output method notfound](capture/soal_5-3.JPG)

<br/>
<br/>

### Soal 6(soal-6/)

yang harus disiapkan:
* Install Web Server(Xampp,Lamp,Mamp, dll) karena soal-6 membutuhkan web server dan database server.
* disarankan menggunakan **Xampp**
* clone/download repository **ArkademyBatch12-5** simpan di direktori Web Server, contoh: **xampp (C:/xampp/htdocs/)**

<br/>

### Cara menjalankan soal 6_a

Ada dua cara, yakni:

<br/>

1. Cara Pertama, menggunakan **localhost/phpmyadmin/**:
   * buat database baru(nama database bebas, saran: **arkademy_batch_12_5**)
   * langsung menuju menu **Import** klik tombol->**choose file/pilih file** lalu arahkan ke file
     **DB_arkademy_batch_12_5_TB_name_work_salary.sql** pada folder **soal-6/6_a/** lalu klik open, jika sudah klik 
     tombol->**Go** dibawah
   * selamat kamu sudah berhasil membuat database dan mengimport tabel beserta data dumb.
   * sekarang pilih database tadi **arkademy_batch_12_5**
   * lalu ke menu **SQL** dan ketikan query berikut:
    ```SELECT name.name, work.name as work, salary FROM name INNER JOIN work ON name.id_work = work.id INNER JOIN salary ON name.id_salary = salary.id;``` <--query ini terdapat pada file **soal-6/6_a/querySQL.txt**
   * sintaks diatas akan mengambil data dari field name di tabel name, field name di tabel work lalu diberi
     alias (as work, agar tampilan field nya tidak sama dengan field name pada tabel name) dan mengambil data
     dari field salary di tabel salary. ketiga tabel tersebut berelasi.
   * sintaks itu akan menampilkan sebuah tabel dengan field name, work dan salary.

2. Cara Kedua, menggunakan **command(cmd) pada windows**:
   * buka command(cmd) pada windows
   * arahkan ke directori **C:\xampp\mysql\bin** dengan mengetik ```cd C:\xampp\mysql\bin```
   * lalu ketikan ```mysql -u root -p``` lalu enter. 
   * setelah itu akan diminta untuk memasukan password, **masukan password** kalian. jika ketika kalian install
     xampp tidak men-setting password maka **kosongkan** saja lalu enter.
   * jika sudah maka selamat kamu sudah masuk pada menu **database**
   * setelah itu buat lah database baru dengan perintah ```CREATE DATABASE arkademy_batch_12_5;``` lalu enter.
   * sekarang kita akan **Import tabel dan Dumping Data** karena kita sudah memiliki file **.sql**
     caranya:
     * pada command ketikan ```exit;``` agar kita keluar dari mysql command. atau buka command lagi lalu arah kan ke direktori **C:\xampp\mysql\bin** dengan mengetik ```cd C:\xampp\mysql\bin``` pada command.
     * ketika kita sudah berada lagi pada direktori **C:\xampp\mysql\bin** kita tinggal import file ```.sql```-nya
     * arahkan ke file **.sql** ini perintah nya ```mysql -u username -p < \folder\folder\file.sql``` 
     * contoh: ketikan ```mysql -u root -p arkademy_batch_12_5 < D:\arkademyBatch12\batch-5\ArkademyBatch12-5\soal-6\6_a\DB_arkademy_batch_12_5_TB_name_work_salary.sql```
     * masukan password kamu lalu enter(jika tidak setting password kosongkan saja).
     * selamat kita sudah berhasil mengisi database dengan Tabel dan Dumping Data.
   * masuk lagi ke mysql command, ketik ```mysql -u root -p``` lalu enter.
   * gunakan perintah ```show databases;``` lalu enter, untuk melihat database apa saja yang pernah kita buat
   * lalu pilih dengan mengetik nama database yang ingin kita gunakan diawali dengan ```use```, 
     contoh: ketik ```use arkademy_batch_12_5;``` pada command lalu enter, maka kamu akan berada pada database tersebut.
   * jika sudah masuk ke database tersebut maka tinggal kita tuliskan query SQL pada mysql command untuk menampilkan
      data yang ada dengan cara custom(hanya menampilkan apa yang ingin kita tampilkan).
   * ketik lah sintaks berikut lalu enter ```SELECT name.name, work.name as work, salary FROM name INNER JOIN work ON name.id_work = work.id INNER JOIN salary ON name.id_salary = salary.id;``` <--query ini terdapat pada file **soal-6/6_a/querySQL.txt** 
   * maka akan menampilkan data dari relasi/hubungan antara 3 buah tabel.

<br/>

### Cara menjalankan soal 6_b

Untuk menjalankan soal 6_b ini cukup mudah, yaitu:
* jalankan file ```index.html``` pada folder ```soal-6/6_b/index.html``` pada web browser anda masing-masing(contoh: chrome).

<br/>

> note: cukup mudah menjalankan-nya, karena memang hanya tampilan static dari html saja.