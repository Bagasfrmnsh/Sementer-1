<?php

$kelas = "x";
$nilai = 74;
if($kelas == "X" || $kelas == "x")
{
    if($nilai >= 75)
    {
        echo "Selamat Anda Lulus";
    }
else
{
        echo "Selamat Anda Tidak Lulus";
}
}
else if($kelas == "XI" || $kelas == "xi")
{
    if($nilai >= 78 )
    {
        echo "Selamat Anda Lulus";
    }
    else 
    {
        echo "Selamat Anda Tidak Lulus";
    }
}
else if($kelas == "XII" || $kelas == "xii")
{
    if($nilai >= 80 )
    {
        echo "Selamat Anda Lulus";
    }
    else 
    {
        echo "Selamat Anda Tidak Lulus";
    }
}
else 
{
    echo "tidak ada kelas";
}

?>