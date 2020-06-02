<div class="content-wrapper">

	<section class="content-header">
      <h1>
        Data Kamar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kamar</li>
      </ol>
    </section>

	<section class="content">
		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah data kamar</button>
		
		<a class="btn btn-danger" href="<?php echo base_url('kamar/cetak') ?>"><i class="fa fa-print"></i>Print</a>

	<div class="navbar-form navbar-right">
		<?php echo form_open('kamar/search') ?>
		<input type="text" name="keyword" class="form-control" placeholder="search">
		<button type="submit" class="btn btn-success">Cari</button>
		<?php echo form_close() ?>
	</div>

		<table class="table">
			<tr>
				<th>No.</th>
				<th>Kode kamar</th>
				<th>Lantai</th>
				<th>Nama kamar</th>
				<th>Harga</th>
				<th>Status</th>
				<th>Fasilitas</th>
				<th colspan="3">Aksi</th>
			</tr>
			<?php
				$no = 1;
				foreach ($kamar as $kamar) :
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $kamar->kdkamar ?></td>
				<td><?php echo $kamar->lantai ?></td>
				<td><?php echo $kamar->nmkamar ?></td>
				<td><?php echo $kamar->harga ?></td>
				<td><?php echo $kamar->status ?></td>
				<td><?php echo $kamar->fasilitas ?></td>
				<td><?php echo anchor('kamar/detail/'.$kamar->kdkamar,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></div>') ?></td>
				<td onclick="javascript: return confirm('Yakin data akan dihapus?')"><?php echo anchor('kamar/hapus/'.$kamar->kdkamar,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
				<td><?php echo anchor('kamar/edit/'.$kamar->kdkamar,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="exampleModalLabel">Form input data kamar</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<?php echo form_open_multipart('kamar/aksi'); ?>
				<div class="form-group">
					<label>Kode kamar</label>
					<input type="text" name="kdkamar" class="form-control">
				</div>
				<div class="form-group">
					<label>Lantai</label>
					<input type="number" name="lantai" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama kamar</label>
					<input type="text" name="nmkamar" class="form-control">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="number" name="harga" class="form-control">
				</div>
				<div class="form-group">
					<label>Status</label>
					<input type="text" name="status" class="form-control">
				</div>
				<div class="form-group">
					<label>Fasilitas</label>
					<input type="text" name="fasilitas" class="form-control">
				</div>
				<div class="form-group">
					<label>Foto kamar</label>
					<input type="file" name="ktp" class="form-control">
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			<?php echo form_close(); ?>
	</div>
	</div>
</div>