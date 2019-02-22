WARNING :
DILARANG MENGUMPULKAN FILE DENGAN UPLOAD FILE RAR. 
JIKA GUNAKAN UPLOAD FILE RAR, NILAI PRAKTIKUM DIANGGAP 0.
UPLOAD HASIL PRAKTIKUM ANDA DENGAN PHPSTORM.

Buat aplikasi penerimaan paket pos di asrama/apartemen.

Proses bisnis:
1. Setiap paket pos datang akan diterima oleh karyawan front desk.
2. Data paket dimasukkan ke sistem dan barang disimpan oleh front desk.
3. Penghuni yang akan mengambil barang, datang ke front desk.
4. Karyawan front desk melihat daftar paket yang belum diambil, mencocokkan nama pada paket dan wajah penghuni dengan nama dan foto yang tersimpan di sistem.
5. Setelah barang diambil, karyawan mengupdate data paket tersebut.
6. Yang bisa login ke sistem hanya karyawan.

FITUR:
- Create paket
- List paket
- Update paket
- Create penghuni
- Update penghuni

TABEL:
- Karyawan (nama, NIP)
- Penghuni (nama, unit, no KTP)
- Paket (tanggal datang, sasaran (penghuni), penerima (karyawan), isi paket, tanggal ambil)

PETUNJUK FITUR CREATE PAKET:
Ketika karyawan create paket, yang diinput oleh karyawan hanya isi paket (teks) dan sasaran paket (dropdown pengguna). Kolom tanggal datang dan penerima paket diisi dengan mekanisme berikut:
- Ambil tanggal saat ini untuk diisikan ke data tanggal datang 
- Ambil session untuk mengisi data karyawan penerima paket
