<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata Diri</title>
</head>
<body>
    <h2>Form Biodata Diri</h2>
    <form method = "POST" action="hasil.php">
    <table>

    <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
    </tr>
    <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value = "Laki_laki">Laki_Laki 
            <input type="radio" name="jenis_kelamin" value = "Perempuan">Perempuan 
            <input type="radio" name="jenis_kelamin" value = "Yang Lainnya">Yang Lainnya</td>

    </tr>
    <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name = "agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>                      
                <option>Konghucu<option>
                </select>
                </td>
    </tr>
    <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><select name = "pendidikan">
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>SMK</option>
                <option>S1</option>
                </select>
                </td>
    </tr>
    <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name = "status">
                <option>Sudah Menikah</option>
                <option>Belum Menikah</option>
                <option>Pelajar</option>
                <option>Guru</option>
                <option>Pengangguran</option>
                </select>
                </td>
    </tr>
    <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value= "Berenang">Berenang
            <input type="checkbox" name="hobi" value= "Membaca Buku">Membaca Buku
            <input type="checkbox" name="hobi" value= "Bernyanyi">Bernyanyi
            <input type="checkbox" name="hobi" value= "Mendengarkan Music">Mendengarkan Music
            <<input type="checkbox" name="hobi" value= "Bermain Game">Bermain Game</td>

    </tr>
    <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td><select name ="cita">
            <option>Pengusaha Management</option>
            <option>Programmer</option>
            <option>Guru</option>
            <option>Penyanyi</option>
            </select>
            </td>
    </tr>
    <tr>
            <td>Kata-Kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata_bijak"></textarea></td>
    </tr>
    <tr>
            <td></td>
            <td></td>
            <td><input type= "submit" name= "simpan" value='KIRIM'></td>
    </tr>
    </table>
    </form>
</body>
    </html>

    