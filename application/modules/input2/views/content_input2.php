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
			<li class="sidebar-item active">
						<a class="sidebar-link" href="input2">
              <i class="align-middle" data-feather="upload"></i> <span class="align-middle">Input Barang</span>
            </a>
			</li>
			<li class="sidebar-item">
			<a class="sidebar-link" href="list_barang">
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
							
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="assets_toko/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					

					<div class="row">
						

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Input Barang</h5>
										</div>
										<div class="card-body">
											<form class="login100-form validate-form" method="post" action="<?= base_url('input'); ?>">
												<div class="row">
													<div class="mb-3 col-md-6">
														<label class="form-label" for="nama">Nama Barang</label>
														<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="<?= set_value('nama'); ?>" />
													</div>
													
												</div>
												<div class="row">
												<div class="mb-3 col-md-6">
														<label class="form-label" for="harga">Harga</label>
														<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= set_value('harga'); ?>" />
													</div>
													<div class="mb-3 col-md-2">
														<label class="form-label" for="stok">Stok</label>
														<input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?= set_value('stok'); ?>" />
													</div>
												</div>
												<div class="mb-3 col-md-6">
														<label class="form-label" for="kategori">Kategori</label>
														<input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
													</div>
												<button type="submit" class="btn btn-primary">Input Barang</button>
											</form>

										</div>
									</div>

								</div>
								
							</div>
						</div>
					</div>

				</div>
			</main>