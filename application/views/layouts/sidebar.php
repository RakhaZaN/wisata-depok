<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="../../index3.html" class="brand-link">
		<img src="<?= base_url('public/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Wisata Depok</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url("public/img/user2-160x160.jpg")?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="<?=base_url('Users/profile')?>" class="d-block">
					<?php
					if($this->session->has_userdata('USERNAME')){
						echo $this->session->userdata('USERNAME');
					}
					?>
				</a>
			</div>
      	</div> -->
		<!-- SidebarSearch Form -->
		<!-- <div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div> -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('Home/admin') ?>" class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active':'' ?>">
						<i class="nav-icon fas fa-square"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('TempatWisata/') ?>" class="nav-link <?= $this->uri->segment(1) == 'tempatwisata' ? 'active':'' ?>">
						<i class="nav-icon fas fa-mountain"></i>
						<p>
							Tempat Wisata
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('JenisWisata/') ?>" class="nav-link <?= $this->uri->segment(1) == 'jeniswisata' ? 'active':'' ?>">
						<i class="nav-icon fas fa-list-ul"></i>
						<p>
							Jenis Wisata
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Kecamatan/') ?>" class="nav-link <?= $this->uri->segment(1) == 'kecamatan' ? 'active':'' ?>">
						<i class="nav-icon fas fa-map"></i>
						<p>
							Kecamatan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Users/') ?>" class="nav-link <?= $this->uri->segment(1) == 'users' ? 'active':'' ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Akun
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>" class="nav-link">
						<i class="nav-icon fas fa-globe"></i>
						<p>
							Public
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
