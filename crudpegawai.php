<?php 

//koneksi ke database
$conn = mysqli_connect("localhost:8080", "root", "", "testjttc");

//cek apakah tombol proses sudah ditekan atau belum
if( isset($_POST["proses"]) ){

    // ambil data dari tiap elemen dalam form
        //htmpspecialchars() = berfungsi apabila ada kode html masuk dalam data akan dijadikan tulisan biasa dan tidak dieksekusi
    $id_pegawai = htmlspecialchars($_POST["id_pegawai"]);
    $nama_pegawai = htmlspecialchars($_POST["nama_pegawai"]);
    $jabatan_pegawai = htmlspecialchars($_POST["jabatan_pegawai"]);
    $kontrak_pegawai = htmlspecialchars($_POST["kontrak_pegawai"]);

    //query insert data
    $query = "INSERT INTO mhs
                VALUES
            ('id_pegawai', '$nama_pegawai', '$jabatan_pegawai', '$kontrak_pegawai')";
    
    mysqli_query($conn, $query);

    //cek keberhasilan penambahan data
    if(mysqli_affected_rows($conn) > 0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!!');
                document.location.href = 'datapeggawai.php';
            </script>
        ";
    }
    else {
        echo "            
            <script>
                alert('Data Gagal Ditambahkan!!');
                document.location.href = 'datapegawai.php';
            </script>
        ";
        
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pegawai</title>
</head>

<body>
   <h1>Tambah Data Pegawai</h1> 

   <form action = "" method = "post">
       <table>
            <!--required = apabila input data kosong program tidak bisa disubmit-->
            <tr>
                <td>Id Pegawai</td>
                <td> <input type="text" name="Id_pegawai" required></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td> <input type="text" name="nama_pegawai" required></td>
            </tr>
            <tr>
                <td>Jabatan Pegawai</td>
                <td> <input type="text" name="jabatan_pegawai" required></td>
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



