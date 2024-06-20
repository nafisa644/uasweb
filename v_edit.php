<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan Codeigniter</title>
</head>
<body>
    <center>
        <h1>Membuat CRUD Dengan Codeigniter</h1>
        <h3>Edit Data 
            <?= $admin->nama ?>
        </h3>
    </center>

    <form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
    <table style="margin: 20px auto; width: 50%; border-collapse: collapse; background-color: #34495e; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <tr style="background-color: #7f8097; color: white;">
            <th style="padding: 10px; border: 1px solid #b2b2c0;">Field</th>
            <th style="padding: 10px; border: 1px solid #b2b2c0;">Input</th>
        </tr>
            <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama</td>
                <td>
                     <input type="hidden" name="no" value="<?php echo $admin->no ?>">
                <input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="nama" value="<?php echo $admin->nama ?>"></td>
            </tr>
            <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Jenis Kelamin</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">
                <select name="jeniskelamin" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
            </select>
        </td>
    </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">TTL</td>
                <td><input type="date" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="ttl" value="<?php echo $admin->ttl ?>"></td>
            </tr>
            <tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">Jumblah Saudara</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="jumblahsaudara" value="<?php echo $admin->jumblahsaudara ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">Asal Sekolah</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="asalsekolah" value="<?php echo $admin->asalsekolah ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama Ayah</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="namaayah" value="<?php echo $admin->namaayah ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama ibu</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="namaibu" value="<?php echo $admin->namaibu ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">Alamat</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="alamat" value="<?php echo $admin->alamat ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">No Telp</td>
                <td><input type="text" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" name="notelp" value="<?php echo $admin->notelp ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="submit" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>