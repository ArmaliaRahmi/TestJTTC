<?php 

//koneksi ke database
$conn = mysqli_connect("localhost:8080", "root", "", "testjttc");

//ambil data di URL
$id = $_GET["id"];

//query data mhs


//cek apakah tombol proses sudah ditekan atau belum
if( isset($_POST["proses"]) ){

    // ambil data dari tiap elemen dalam form
    //htmpspecialchars() = berfungsi apabila ada kode html masuk dalam data akan dijadikan tulisan biasa dan tidak dieksekusi
    $id_pegawai = htmlspecialchars($_POST["id_pegawai"]);
    $nama_pegawai = htmlspecialchars($_POST["nama_pegawai"]);
    $jabatan_pegawai = htmlspecialchars($_POST["jabatan_pegawai"]);
    $kontrak_pegawai = htmlspecialchars($_POST["kontrak_pegawai"]);

    //query insert data
    $query = "INSERT INTO pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai FROM pegawai AS pegawai LEFT JOIN jabatan_pegawai AS jabatan_pegawai ON pegawai.id_pegawai=jabatan_pegawai.id_pegawai LEFT JOIN kontrak AS kontrak ON pegawai.id_pegawai = kontrak.id_pegawai
                VALUES ('id_pegawai', '$nama_pegawai', '$jabatan_pegawai', '$kontrak_pegawai')";
    
    mysqli_query($conn, $query);

    //cek keberhasilan ubah data
    if(mysqli_affected_rows($conn) > 0){
        echo "
            <script>
                alert('Data Berhasil Diubah!!');
                document.location.href = 'datapegawai.php';
            </script>
        ";
    }
    else {
        echo "            
            <script>
                alert('Data Gagal Diubah!!');
                document.location.href = 'datapegawai.php';
            </script>
        ";
        
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Pegawai</title>
</head>

<body>
   <h1>Ubah Data Pegawai</h1> 

   <form action = "" method = "post">
       <table>
            <!--required = apabila input data kosong program tidak bisa disubmit-->
            <tr>
                <td>Id Pegawai</td>
                <td> <input type="text" name="id_pegawai" required></td>
            </tr>
            <tr>
                <td>Nama Pengawai</td>
                <td> <input type="text" name="nama_pegawai" required></td>
            </tr>
            <tr>
                <td>Kontrak Pegawai</td>
                <td> <input type="text" name="kontrak_pegawai" required></td>
            </tr>
            <tr>
                <td></td>
                <td> <input 
                        type="submit" 
                        value="Simpan" 
                        name="proses">
                </td>
            </tr>
        </table> 
   </form>
</body>
</html>



