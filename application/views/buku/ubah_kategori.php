<div class="container">
	<?php if (validation_errors()) { ?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors(); ?> </div>
			<?php } ?>

			<from action="<? base_url('buku/ubahkategori'); ?>" method="post" enctype="multipart/from-data">

				<label for="id">ID kategori</label>
				<div class="from-group">
					<input type="text" name="id_kategori" class="frok-control" value="<?= $kategori['id_kategori'] ?>" id="">
				</div>

				<label for="id">nama kategori</label>
				<div class="from-group">
					<input type="text" name="nama_kategori" class="frok-control" value="<?= $kategori['nama_kategori'] ?>" id>
				</div>

				<button type="submit" class="btn btn-info">Update kategori</button>

			</from>
		</div>

