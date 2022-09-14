<?php 
include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);


?>
<!DOCTYPE html>
<html lang="en">
<body>
<h1>Tambah Data Matakuliah</h1>

<form action="create.php" method="post">
    <table >
        <tr>
            <td>Kode</td> <td>:</td> <td><input type="text" placeholder="" name="kode"></td>
        </tr>
        <tr>
            <td>Matakuliah</td> <td>:</td> <td><input type="text" placeholder="" name="nama_matkul"></td>
        </tr>
        <tr>
            <td>SKS</td> <td>:</td> <td><input type="text" placeholder="" name="sks"></td>
        </tr>
        <tr>
            <td>Semester</td> <td>:</td> <td><input type="text" placeholder="" name="semester"></td>
        </tr>
        <tr>
            <td>Nama Dosen</td> <td>:</td> 
            <td><select name="id_dosen" id="nama_dosen">
    <option value="-">--Pilih salah satu--</option>
    <?php
    while ($data = mysqli_fetch_assoc($result)){
        ?>
        <option value="<?php echo $data['id_dosen']; ?>">
        <?php echo $data['nama_dosen'];?>
    </option>
    <?php
    }
?>
</select></td>

        </tr>
        <td></td><td></td><td><input type="submit" value="simpan" name="btnSimpan"></td>
    </tr>
</table>

    
</select>
</form>
</body>
</html>
