<?php

$id_pegawai = $_GET["id_pegawai"];

function hapus($id){

    $conn = mysqli_connect("localhost:8080", "root", "", "testjttc");
    
    mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai = $id_pegawai");
    
    return mysqli_affected_rows($conn);
}


if(hapus($id) > 0){
    echo "
       <script>
           alert('Data Berhasil Dihapus!!');
            document.location.href = 'datamhs.php';
        </script>
    ";
}
else {
    echo "            
        <script>
            alert('Data Gagal Dihapus!!');
            document.location.href = 'datamhs.php';
        </script>
    ";
        
}


?>
