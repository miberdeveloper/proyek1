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

- [Composer Website]([https://link](https://getcomposer.org/))
- [Referensi lainnya]([https://link](http://javawebmedia.com/blog/cara-install-composer-di-windows/))

## Melakukan remote dan clone file

Remote file dan clone digunakan untuk mengambil file yang terdapat pada **github**, agar bisa dilakukan penambahan dan perubahan pada repository

### Referensi

- [Git Remote](https://www.petanikode.com/git-remote)
- [https://readthedocs.org/projects/tutorial-git/downloads/pdf/latest/](https://readthedocs.org/projects/tutorial-git/downloads/pdf/latest/)
- [Youtube](youtube.com)

---

## Step by step untuk clone repository
1. Melkaukan clone repository dan secara otomatis repository/file akan tersimpan otomatis pada lokasi yang sudah ditentukan
    ```
    $ git clone https://github.com/agusprasetyo30/proyek-mi2b.git
    ```
2. Melakukan remote pada repository yang di clone
   ```
    $ git remote add nama_mahasiswa https://github.com/agusprasetyo30/proyek-mi2b.git
   ```
3. Setelah selesai di clone dan remote, langkah selanjutnya adalah masuk ke file yang sudah di clone dan update composernya
   ```
    $ composer update
   ```
