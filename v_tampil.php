<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan Codeigniter</title>
</head>
<body>
    <center>
        <h1>Membuat CRUD Dengan Codeigniter</h1>
    </center>
    <center>
      <?php echo anchor('crud/tambah','Tambah Data'); ?>  
    </center>
    <center>
        <!-- Tampilkan alert berhasil -->
        <?php if ($this->session->flashdata('message')) {
            echo '<div style="color: green;">'.$this->session->flashdata('message').'</div>';
        } ?>

        <!-- Tampilkan alert gagal -->
        <?php if ($this->session->flashdata('error')) {
            echo '<div style="color: red;">'.$this->session->flashdata('error').'</div>';
        } ?>
    </center>
    <table style="margin: 20px auto;" border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>TTl</th>
        <th>Jumblah Saudara</th>
        <th>Asal Sekolah</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
        <th>Alamat</th>
        <th>No. Telp</th>
    </tr>
    <?php $no = 1; foreach($admin as $u){ ?>
        <tr>
            <td>
                <?php echo $no++ ?>
            </td>
            <td>
            <?php echo $u->nama ?>
        </td>
        <td>
            <?php echo $u->jeniskelamin ?>
        </td>
        <td>
            <?php echo $u->ttl ?>
        </td>
        <td>
            <?php echo $u->jumblahsaudara ?>
        </td>
        <td>
            <?php echo $u->asalsekolah ?>
        </td>
        <td>
            <?php echo $u->namaayah ?>
        </td>
        <td>
            <?php echo $u->namaibu ?>
        </td>
        <td>
            <?php echo $u->alamat ?>
        </td>
        <td>
            <?php echo $u->notelp ?>
        </td>
                <?php echo anchor('crud/edit/'.$u->id_admin,'Edit'); ?>  
                <?php echo anchor('crud/hapus/'.$u->id_admin,'Hapus'); ?>  
            </td>
        </tr>
        <?php } ?>

</table>
</body>
</html>