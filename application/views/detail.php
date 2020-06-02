<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA KAMAR</strong></h4>
        <table class="table">
            <tr>
                <th>Kode kamar</th>
                <td><?php echo $detail->kdkamar ?></td>
            </tr>
            <tr>
                <th>Lantai</th>
                <td><?php echo $detail->lantai ?></td>
            </tr>
            <tr>
                <th>Nama kamar</th>
                <td><?php echo $detail->nmkamar ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $detail->harga ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?php echo $detail->status ?></td>
            </tr>
            <tr>
                <th>Fasilitas</th>
                <td><?php echo $detail->fasilitas ?></td>
            </tr>
            <tr>
                <th>Foto kamar</th>
                <td><img src="<?php echo base_url(); ?>assets/ktp/<?php echo $detail->ktp; ?>" width="200"></td>
            </tr>
        </table>

        <a href="<?php echo base_url('kamar/index'); ?>" class="btn btn-primary">Kembali</a>

    </section>
</div>