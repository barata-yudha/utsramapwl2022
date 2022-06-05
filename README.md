MATA KULIAH : PEMROGRAMAN WEB 2
KELAS : K1 dan K2 Semester 6 (Non Reguler)
DOSEN PENGAMPU : Freddy Wicaksono, M.Kom
WAKTU : Mei 2022
SIFAT UJIAN : OPEN BOOK
Soal 1:
Buatlah sebuah database baru di MySQL dgn nama: 
uts[nama singkat anda]
cth. utsfaris
Buatlah 3 tabel berikut:
dokter
iddokter auto_increment primary key
nip varchar(10) unique 
nama_lengkap varchar(20) 
spesialis varchar(20) 
tempat_praktek varchar(50)
obat
idobat auto_increment primary key
kode_obat varchar(10) unique 
nama_obat varchar(50) 
bentuk varchar(20)
berat varchar(20)
SOAL
UJIAN TENGAH SEMESTER
pasien
idpasien auto_increment primary key
nomor_pasien varchar(10) unique 
nama_lengkap varchar(50)
jenis_kelamin varchar(20)
umur int
Tambahkan 3 buah data ke masing2 tabel.
Soal 2.
Buatlah Aplikasi CRUD untuk mengelola 3 tabel tersebut dengan teknik Class
Setiap tabel wajib memiliki 1 class
Pastikan tampilan yang creatif sehingga pasti berbeda dengan teman yang lain.
Aplikasi CRUD setiap tabel harus dapat :
1. Menampilkan semua isi tabel
2. Menambahkan data ke dalam tabel
3. Mencari data berdasarkan field unik
4. Mengubah data
5. Menghapus data 
Cara Kirim Jawaban:
1. Export database atau tabel mysql kemudian copykan file .sql ke dalam folder project
2. Zip folder tersebut dan beri nama : uts_web2_2022_nama_anda.zip
3. Publish aplikasi tersebut ke Internet, tuliskan alamat linknya pada sebuah file text dan kirim sebagai 
jawaban di elearning.
4. Kirim file zip ke email: freddy.wicaksono@umc.ac.id sebagai backup di hari yang sama denga ujian