# TPDPBO2425C2


**Janji**

Saya Naufal rizki rabbani dengan NIM 2410946 mengerjakan soal tugas praktikum 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

**desain**

<img width="141" height="651" alt="tp2 drawio (1)" src="https://github.com/user-attachments/assets/9269eb2f-806f-42e3-836d-dc0e726dbc8d" />

**penjelasan**

Multi-level inheritance adalah konsep dalam pemrograman berorientasi objek di mana sebuah kelas (misalnya, Gadget) mewarisi dari kelas lain (ProdukElektronik), dan kemudian kelas yang diwarisi tersebut (Gadget) menjadi kelas induk untuk kelas lainnya (Smartphone).


1.Kelas Induk Paling Atas (Grandparent): ProdukElektronik

  Kelas ini adalah dasar dari semua produk, menyimpan properti umum seperti kode, nama, harga, dan deskripsi.
  Setiap produk elektronik yang dibuat akan memiliki properti dasar ini.

2.Kelas Induk Tengah (Parent): Gadget

  Kelas ini mewarisi semua properti dan metode dari ProdukElektronik. Ini berarti Gadget secara otomatis memiliki kode, nama,   harga, dan deskripsi.Selain itu, kelas Gadget menambahkan properti yang lebih spesifik untuk kategori gadget, sepertijenis,   garansi, status, dan stok.
  Dengan demikian, Gadget adalah produk elektronik yang lebih spesifik.

3.Kelas Anak (Child): Smartphone

  Kelas ini mewarisi semua properti dan metode dari kelas induknya, Gadget. Ini berarti Smartphone secara otomatis memiliki     semua properti dari Gadget (jenis, garansi, status, stok) dan juga dari ProdukElektronik (kode, nama, harga, deskripsi).
  untuk membedakannya dari gadget lain, kelas Smartphone menambahkan properti yang lebih spesifik lagi, sepert sistemOperasi,   memori, dan kamera.
