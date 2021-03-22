<!-- Begin Page Content --> 
<div class="container-fluid">

	<div class="row">
		<div class="col-6 justify-content-x">
			<?= $this->session->flashdata ('pesan'); ?>
		</div>
	</div>
	<div class="card mb-3" style="max-widht: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
			<img width="200" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="imgthumbnail" alt="">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title"><?= $user['nama']; ?></h5>
					<p class="card-text"><?= $user['email']; ?></p>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid --> 
 
</div> 
<!-- End of Main Content --> 
