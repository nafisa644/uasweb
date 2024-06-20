<section>
    <h1>
        <center><?php echo $judul ?></center>
    </h1>
    <center>
        <!-- Tampilkan alert berhasil -->
        <?php if ($this->session->flashdata('message')) {
            echo '<div style="color: blue;">'.$this->session->flashdata('message').'</div>';
        } ?>

        <!-- Tampilkan alert gagal -->
        <?php if ($this->session->flashdata('error')) {
            echo '<div style="color: red;">'.$this->session->flashdata('error').'</div>';
        } ?>
    </center>
    
    <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
    <table style="margin: 20px auto; width: 50%; border-collapse: collapse; background-color: #34495e; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <tr style="background-color: #7f8097; color: white;">
            <th style="padding: 10px; border: 1px solid #b2b2c0;">Field</th>
            <th style="padding: 10px; border: 1px solid #b2b2c0;">Input</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="nama" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
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
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="date" name="ttl" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Jumblah Saudara</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="jumblahsaudara" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Asal Sekolah</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="asalsekolah" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama Ayah</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="namaayah" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Nama Ibu</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="namaibu" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">Alamat</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="alamat" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;">No. telp</td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="text" name="notelp" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></td>
        </tr>
        <tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"></td>
            <td style="padding: 10px; border: 1px solid #b2b2c0;"><input type="submit" value="Tambah" style="background-color: #7f8097; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; width: 100%;"></td>
        </tr>
       


    </table>
    </form>
</section>
