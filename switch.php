<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM SWITCH</title>
</head>
<body>
    <h2>Switch Case !</h2>
    <form method = "POST" action= "">
    <table>
<tr>
        <td>Masukan Angka</td>
<td>:</td>
        <td><input type="text" name="angka"></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>        
              
</body>
</html>

<?php
if(isset($_POST["simpan"])) {
    $angka = $_POST["angka"];

    switch ($angka) {
        case 1:
            echo "Isi variabel angka adalah satu";
            break;
        case 2:
            echo "Isi variabel angka adalah dua";
            break;
        case 3:
            echo "Isi variabel angka adalah tiga";
            break;
        case 4:
            echo "Isi variabel angka adalah empat";
            break;
        case 5:
            echo "Isi variabel angka adalah lima";
            break;
        case 6:
            echo "Isi variabel angka adalah enam";
            break;
        default:
            echo "Isi variabel tidak ditemukan";
            break;
        
    }
}

?>