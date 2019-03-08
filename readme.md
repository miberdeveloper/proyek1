# Proyek 1 ( Kelas MI-2B)

Pada mata kuliah ini kita akan membuat sebuah program **koperasi**, dimana di dalamnya terdapat sebuah transaksi penjualan, administrasi anggota dll.

----------

## Yang akan dilakukan pada repository ini
- Install composer
- Mengclone / meremote file di github untuk melakukan perubahan / penambahan yang terdapat pada proyek
 
> **Peringatan** : Sebelum memulai melakukan remote projek pada file ini, diusahakan untuk mengerti atau memahami terlebih dahulu dasar-dasar perintah dari github


## Install Composer 
**Composer** adalah alat manajemen dependency pada PHP seperti npm (Node.js) dan Bundler (Ruby). **Composer** memungkinkan untuk membuat library pada project anda dan **composer** sendiri akan menginstall atau mengupdate secara otomatis tanpa anda harus menginstall manual. 

### Referensi

- [Composer Website](https://getcomposer.org/)
- [Referensi 1](http://javawebmedia.com/blog/cara-install-composer-di-windows/)
- [Referensi 2](https://jagowebdev.com/cara-install-menjalankan-composer-di-windows/)

## Melakukan remote dan clone file

Remote file dan clone digunakan untuk mengambil file yang terdapat pada **github**, agar bisa dilakukan penambahan dan perubahan pada repository

### Referensi

- [Tutorial Git Remote](https://www.petanikode.com/git-remote)
- [Tutorial Github](https://readthedocs.org/projects/tutorial-git/downloads/pdf/latest/)
- [Petani Kode](https://www.petanikode.com/tutorial/git/)
- [Github Cheat-sheet](https://github.com/arslanbilal/git-cheat-sheet)

---

## Step by step untuk clone repository
1. Melkaukan clone repository dan secara otomatis repository/file akan tersimpan otomatis pada lokasi yang sudah ditentukan
    ```
    $ git clone https://github.com/miberdeveloper/proyek1.git
    ```
2. Melakukan remote pada repository yang di clone
   ```
    $ git remote add nama_mahasiswa https://github.com/miberdeveloper/proyek1.git
   ```
3. Setelah selesai di clone dan remote, langkah selanjutnya adalah masuk ke file yang sudah di clone dan update composernya
   ```
    $ composer update
   ```
4. Menjalankan laravel
   ```
    $ php artisan serve
   ```

    #SemangatProyek :fire:
    
    #NgodingItuMudah :boom::boom::boom:
