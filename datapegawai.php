<?php 

//koneksi ke database
$conn = mysqli_connect("localhost:8080", "root", "", "testjttc");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai FROM pegawai AS pegawai LEFT JOIN jabatan_pegawai AS jabatan_pegawai ON pegawai.id_pegawai=jabatan_pegawai.id_pegawai LEFT JOIN kontrak AS kontrak ON pegawai.id_pegawai = kontrak.id_pegawai");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Data Pegawai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <a href="crudpegawai.php"><b>+Tambah Data Pegawai</b></a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Id Pegawai</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Jenis Kontrak</th>
        </tr>
        
        <?php 
        $i = 1 ;
        while( $row = mysqli_fetch_assoc($result) ) : 
        ?>
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $row["id_pegawai"]; ?></td>
            <td><?php echo $row["nama_pegawai"]; ?></td>
            <td><?php echo $row["jabatan_pegawai"]; ?></td>
            <td><?php echo $row["kontrak_pegawai"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" >ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" 
                onclick="return confirm('Anda yakin data ini dihapus?');">hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
  </body>
</html>
