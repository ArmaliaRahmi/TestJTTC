<?php 
$conn = mysqli_connect("localhost:8080", "root", "", "testjttc");

if( isset($_POST["proses"]) ){
    $id_pegawai = htmlspecialchars($_POST["id_pegawai"]);
    $nama_pegawai = htmlspecialchars($_POST["nama_pegawai"]);
    $jabatan_pegawai = htmlspecialchars($_POST["jabatan_pegawai"]);
    $kontrak_pegawai = htmlspecialchars($_POST["kontrak_pegawai"]);

    $query = "INSERT INTO pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai FROM pegawai AS pegawai LEFT JOIN jabatan_pegawai AS jabatan_pegawai ON pegawai.id_pegawai=jabatan_pegawai.id_pegawai LEFT JOIN kontrak AS kontrak ON pegawai.id_pegawai = kontrak.id_pegawai (pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai) VALUES ('id_pegawai','.$nama_pegawai','.$jabatan_pegawai.','.$kontrak_pegawai.');
                VALUES
            ('id_pegawai', '$nama_pegawai', '$jabatan_pegawai', '$kontrak_pegawai')";
    mysqli_query($conn, $query);

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



