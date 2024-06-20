<section>
    <h1>
        <center><?php echo $judul ?></center>
    </h1>
    
    <!-- Logout Link -->
    <p style="text-align: center;"><a href="<?php echo base_url('ppdb/index'); ?>">Logout</a></p>

    <center>
        <table style="margin: 20px auto; width: 90%; border-collapse: collapse; background-color: #34495e; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <tr style="background-color: #7f8097; color: white;">
                <th style="padding: 10px; border: 1px solid #b2b2c0;">No</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Nama</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Jenis Kelamin</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">TTL</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Jumlah Saudara</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Asal Sekolah</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Nama Ayah</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Nama Ibu</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Alamat</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">No. Telp</th>
                <th style="padding: 10px; border: 1px solid #b2b2c0;">Aksi</th>
            </tr>
            <?php $no = $this->uri->segment('3') + 1;
            foreach($admin as $u) { ?>
            <tr style="background-color: #fff; color: #000;">
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $no++ ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->nama ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->jeniskelamin ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->ttl ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->jumblahsaudara ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->asalsekolah ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->namaayah ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->namaibu ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->alamat ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;"><?php echo $u->notelp ?></td>
                <td style="padding: 10px; border: 1px solid #b2b2c0;">
                    <?php echo anchor('crud/edit/'.$u->no,'Edit'); ?>  
                    <?php echo anchor('crud/hapus/'.$u->no,'Hapus'); ?>  
                </td>
            </tr>
            <?php } ?>
        </table>
        <center>
            <?php echo $this->pagination->create_links(); ?>
        </center>
    </center>
</section>
