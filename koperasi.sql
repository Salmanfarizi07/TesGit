CREATE TABLE peminjaman (
  id int(11) NOT NULL AUTO_INCREMENT,
  nama_peminjam varchar(255) NOT NULL,
  tanggal_pinjam date NOT NULL,
  tanggal_kembali date NOT NULL,
  jumlah_pinjaman int(11) NOT NULL,
  PRIMARY KEY (id)
);
