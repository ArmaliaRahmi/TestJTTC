<!DOCTYPE html>
<html>
<body>

<?php

//menampilkan angka 1 -100

for ($i = 1; $i <= 100; $i++) { 
    echo $i . "\n";
}

function fizzBuzz($angka)
{
    // Jika habis dibagi 3 dan 5 tambahkan 'FizzBuzz'
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo $angka."FizzBuzz\n";
        
    // Jika habis dibagi 3 tambahkan 'Fizz'
    } elseif ($angka % 3 == 0) {
        echo $angka. "Fizz\n";
        
        
    // Jika habis dibagi 5 tambahkan 'Buzz'
    } elseif ($angka % 5 == 0) {
        echo $angka."Buzz\n";
        
    // Jika bukan ketiganya, menampilkan angka asli
    } else {
        echo $angka . "\n";
    }
}
for ($i = 1; $i <= 100; $i++) { 
    fizzBuzz($i);
}
?>


</body>
</html>
