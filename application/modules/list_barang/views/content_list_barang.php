<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="fish">
          <span class="align-middle">FishBox</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="toko">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
			<li class="sidebar-item">
						<a class="sidebar-link" href="input2">
              <i class="align-middle" data-feather="upload"></i> <span class="align-middle">Input Barang</span>
            </a>
			</li>
			<li class="sidebar-item active">
			<a class="sidebar-link" href="list_barang.php">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Barang</span>
            </a>
					</li>
				</ul>

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>


				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
					
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="assets_toko/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="akun"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						

						
					</div>
					

					

					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">List Barang</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>No</th>
											<th class="d-none d-xl-table-cell">Nama</th>
											<th class="d-none d-xl-table-cell">Harga</th>
											<th>Stok</th>
											<th class="d-none d-md-table-cell">Kategori</th>
										</tr>
									</thead>
									<tbody>
									<?php $no = 1; foreach($barang as $art): ?>
										<tr>
											<td><?= $no++?></td>
											
											<td class="d-none d-xl-table-cell"><?= $art->nama ?></td>
											<td ><?= $art->harga ?></td>
											<td ><?= $art->stok ?></td>
											<td class="d-none d-md-table-cell"><?= $art->kategori ?></td>
										</tr>
									<?php endforeach; ?>	
									</tbody>
								</table>
							</div>
						</div>
						
					</div>

				</div>
			</main>