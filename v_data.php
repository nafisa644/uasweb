<!DOCTYPE html>
<html>
    <head>
        <title>Membuat pagination dengan Codeigniter</title>
    </head>

    <body>
        <center>
            <h1>Membuat pagination dengan Codeigniter</h1>
        </center>
        <table style="margin: 20px auto;" border="1">
            <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>TTL</th>
            <th>Jumblah Saudara</th>
            <th>Asal Sekolah</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            </tr>
            <?php
            $no = $this->uri->segment('3') + 1;
            foreach($user as $u){ ?>
            <tr>
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
            </tr>
            <?php } ?>           
        </table>
        <center>
            <?php
            echo $this->pagination->create_links();
            ?>
        </center>
</body>
</html>