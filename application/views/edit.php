<div class="content-wrapper">
    <section class="content ">
        <?php foreach($kamar as $kamar) { ?>
        <form action = "<?php echo base_url().'kamar/update';?>" method="post">
        
        <div class="form-group">
            <label>Kode kamar</label>
            <input type="text" name="kdkamar" class="form-control" value="<?php echo $kamar->kdkamar ?>">
        </div>
        <div class="form-group">
            <label>Lantai</label>
            <input type="number" name="lantai" class="form-control" value="<?php echo $kamar->lantai ?>">
        </div>
        <div class="form-group">
            <label>Nama kamar</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $kamar->kdkamar ?>">
            <input type="text" name="nmkamar" class="form-control" value="<?php echo $kamar->nmkamar ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $kamar->harga ?>">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control" value="<?php echo $kamar->status ?>">
        </div>
        <div class="form-group">
            <label>Fasilitas</label>
            <input type="text" name="fasilitas" class="form-control" value="<?php echo $kamar->fasilitas ?>">
        </div>

        <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>
        <?php } ?>

    </section>
</div>