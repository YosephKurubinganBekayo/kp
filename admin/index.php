<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: ../login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dinas Kearsipan dan Perpustakaan Kota Kupang</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- botstrap -->
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<!-- DataTables2 -->
	<link rel="stylesheet" href="plugins/datatables2/datatables.css">
	<link rel="stylesheet" href="plugins/datatables2/datatables.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->


</head>

<body class="hold-transition skin-yellow-light sidebar-mini">

	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header ">
			<style>
				.main-header {
					position: fixed;
				}
			</style>
			<!-- Logo -->
			<a href="index.php" class="logo">
				<span class="logo-lg">
					<!-- <img src="dist/img/logo.png" width="37px"> -->
					<b>Arspus</b>
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar  navbar-fixed-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a class="dropdown-toggle">
								<span>
									<b>
										Sistem Informasi Dinas Kearsipan dan Perpustakaan Kota kupang
									</b>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<style>
				.main-sidebar {
					position: fixed;

					height: 100vh;
				}
			</style>
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				</<b>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/avatar.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>
							<?php echo $data_nama; ?>
						</p>
						<span class="label label-warning">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>
				</br>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>

					<!-- Level  -->
					<?php
					if ($data_level == "Administrator") {
					?>

						<li class="treeview">
							<a href="?page=admin">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>



						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i>
								<span>Kelola Data</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">

								<li>
									<a href="?page=MyApp/data_buku">
										<i class="fa fa-book"></i>Data inventaris Buku</a>
								</li>
								<li>
									<a href="?page=MyApp/data_agt">
										<i class="fa fa-users"></i>Data Anggota</a>
								</li>
								<li>
									<a href="?page=MyApp/data_pegawai">
										<i class="fa fa-users"></i>Data Pegawai</a>
								</li>
							</ul>
						</li>

						<li class="treeview">
							<a href="?page=data_sirkul">
								<i class="fa fa-refresh"></i>
								<span>Sirkulasi</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Log Data</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">

								<li>
									<a href="?page=log_pinjam">
										<i class="fa fa-arrow-circle-o-down"></i>Peminjaman</a>
								</li>
								<li>
									<a href="?page=log_kembali">
										<i class="fa fa-arrow-circle-o-up"></i>Pengembalian</a>
								</li>
							</ul>
						</li>


						<li class="treeview">
							<a href="#">
								<i class="fa fa-print"></i>
								<span>Laporan</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="?page=laporan_sirkulasi">
										<i class="fa fa-file"></i>Laporan Sirkulasi</a>
								</li>
								<li>
									<a href="?page=laporan_inventaris_buku">
										<i class="fa fa-file"></i>Laporan Inventaris Buku</a>
								</li>
							</ul>
						</li>




						<li class="header">SETTING</li>

						<li class="treeview">
							<a href="?page=MyApp/data_pengguna">
								<i class="fa fa-user"></i>
								<span>Pengguna Sistem</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li class="treeview">
							<a href="?page=MyApp/halaman_profile">
								<i class="fa fa-dashboard"></i>
								<span>Halaman Profil</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

					<?php
					} elseif ($data_level == "Petugas") {
					?>

						<li class="treeview">
							<a href="?page=petugas">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i>
								<span>Kelola Data</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">

								<li>
									<a href="?page=MyApp/data_buku">
										<i class="fa fa-book"></i>Data inventaris Buku</a>
								</li>
								<li>
									<a href="?page=MyApp/data_agt">
										<i class="fa fa-users"></i>Data Anggota</a>
								</li>
							</ul>
						</li>

						<li class="treeview">
							<a href="?page=data_sirkul">
								<i class="fa fa-refresh"></i>
								<span>Sirkulasi</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Log Data</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">

								<li>
									<a href="?page=log_pinjam">
										<i class="fa fa-arrow-circle-o-down"></i>Peminjaman</a>
								</li>
								<li>
									<a href="?page=log_kembali">
										<i class="fa fa-arrow-circle-o-up"></i>Pengembalian</a>
								</li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-print"></i>
								<span>Laporan</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<!-- <li>
									<a href="?page=laporan_sirkulasi">
										<i class="fa fa-file"></i>Laporan Sirkulasi</a>
								</li> -->
								<li>
									<a href="?page=laporan_inventaris_buku">
										<i class="fa fa-file"></i>Laporan Inventaris Buku</a>
								</li>
							</ul>
						</li>

						<li class="header">SETTING</li>

					<?php
					}
					?>

					<li>
						<a href="logout.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
							<i class="fa fa-sign-out"></i>
							<span>Logout</span>
							<span class="pull-right-container"></span>
						</a>
					</li>


			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<br><br>
				<?php
				if (isset($_GET['page'])) {
					$hal = $_GET['page'];

					switch ($hal) {
							//Klik Halaman Home Pengguna
						case 'admin':
							include "home/admin.php";
							break;
						case 'petugas':
							include "home/petugas.php";
							break;
							// profile page
						case 'MyApp/halaman_profile':
							include "admin/profile/profile.php";
							break;

							//Pengguna
						case 'MyApp/data_pengguna':
							include "admin/pengguna/data_pengguna.php";
							break;
						case 'MyApp/add_pengguna':
							include "admin/pengguna/add_pengguna.php";
							break;
						case 'MyApp/edit_pengguna':
							include "admin/pengguna/edit_pengguna.php";
							break;
						case 'MyApp/del_pengguna':
							include "admin/pengguna/del_pengguna.php";
							break;


							//agt
						case 'MyApp/data_agt':
							include "admin/agt/data_agt.php";
							break;
						case 'MyApp/add_agt':
							include "admin/agt/add_agt.php";
							break;
						case 'MyApp/edit_agt':
							include "admin/agt/edit_agt.php";
							break;
						case 'MyApp/del_agt':
							include "admin/agt/del_agt.php";
							break;
						case 'MyApp/print_agt':
							include "admin/agt/print_agt.php";
							break;
						case 'MyApp/print_allagt':
							include "admin/agt/print_allagt.php";
							break;

							// pegawai
						case 'MyApp/data_pegawai':
							include "admin/pegawai/data_pegawai.php";
							break;
						case 'MyApp/add_pegawai':
							include "admin/pegawai/add_pegawai.php";
							break;
						case 'MyApp/edit_pegawai':
							include "admin/pegawai/edit_pegawai.php";
							break;
						case 'MyApp/del_pegawai':
							include "admin/pegawai/del_pegawai.php";
							break;
							// case 'MyApp/print_agt':
							// 	include "admin/agt/print_agt.php";
							// 	break;
							// case 'MyApp/print_allagt':
							// 	include "admin/agt/print_allagt.php";
							// 	break;
							//buku
						case 'MyApp/data_buku':
							include "admin/buku/data_buku.php";
							break;
						case 'MyApp/add_buku':
							include "admin/buku/add_buku.php";
							break;
						case 'MyApp/edit_buku':
							include "admin/buku/edit_buku.php";
							break;
						case 'MyApp/del_buku':
							include "admin/buku/del_buku.php";
							break;

							//sirkul
						case 'data_sirkul':
							include "admin/sirkul/data_sirkul.php";
							break;
						case 'add_sirkul':
							include "admin/sirkul/add_sirkul.php";
							break;
						case 'panjang':
							include "admin/sirkul/panjang.php";
							break;
						case 'kembali':
							include "admin/sirkul/kembali.php";
							break;

							//log
						case 'log_pinjam':
							include "admin/log/log_pinjam.php";
							break;
						case 'log_kembali':
							include "admin/log/log_kembali.php";
							break;

							//laporan
						case 'laporan_sirkulasi':
							include "admin/laporan/laporan_sirkulasi.php";
							break;
						case 'laporan_inventaris_buku':
							include "admin/laporan/laporan_inventaris_buku.php";
							break;
							// case 'MyApp/print_laporan':
							// 	include "admin/laporan/print_laporan.php";
							// break;



							//default
						default:
							echo "<center><br><br><br><br><br><br><br><br><br>
				  <h1> Halaman tidak ditemukan !</h1></center>";
							break;
					}
				} else {
					// Auto Halaman Home Pengguna
					if ($data_level == "Administrator") {
						include "home/admin.php";
					} elseif ($data_level == "Petugas") {
						include "home/petugas.php";
					}
				}
				?>



			</section>
			<!-- /.content -->
		</div>



		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

		<!-- Bootstrap 5-->
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Select2 -->
		<script src="plugins/select2/select2.full.min.js"></script>

		<!-- DataTables -->
		<script src="plugins/datatables2/datatables.js"></script>
		<script src="plugins/datatables2/Buttons-1.5.1/js/dataTables.buttons.min.js"></script>


		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<script src="dist/js/bootstrap.bundle.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>

		<script>
			$(function() {
				$("#tabel_kelola_data").DataTable({
					columnDefs: [{
						"defaultContent": "-",
						"targets": "_all"
					}],
				});
				$("#tabel_laporanasli").DataTable({
					dom: 'Bfrtip', // Tambahkan 'Bfrtip' untuk mengaktifkan tombol
					buttons: ['csv', 'excel', 'pdf', 'print'],
					// "paging": true,
					// "lengthChange": true,
					// "searching": false,
					"ordering": false,
					// "info": true,
					"autoWidth": false

				});
				$(document).ready(function() {
					// Inisialisasi DataTable
					$('#tabel_laporan_inventaris_buku').DataTable({
						dom: 'Bfrtip',
						buttons: [{
							extend: 'excel',
							filename: function() {
								// Dapatkan tanggal hari ini
								let date = new Date();
								let formattedDate = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
								// Ambil nilai filter dari form (bulan, tahun, no_kelas)
								let bulan = $('input[name="bulan"]').val() || '';
								let tahun = $('input[name="tahun"]').val() || '';
								let noKelas = $('select[name="no_kelas"]').val() || '';
								let ket = $('input[name="keterangan"]').val() || '';
								// Gabungkan nama file dengan nilai filter
								return 'Laporan inventaris buku_' + bulan + tahun + noKelas + ket + '_' + formattedDate;
							},
							text: 'Export to Excel'
						}]
					});
				});
				$("#tabel_laporan1").DataTable({
					dom: 'Bfrtip', // Tambahkan 'Bfrtip' untuk mengaktifkan tombol
					buttons: ['csv', 'excel', 'pdf', 'print'],
					// "paging": true,
					// "lengthChange": true,
					// "searching": false,
					// "ordering": true,
					// "info": true,
					// "autoWidth": false

				});
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				$("#readtabels").DataTable({
					columnDefs: [{
						"defaultContent": "-",
						"targets": "_all"
					}],
				});
			});
		</script>

		<script>
			$(function() {
				// Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>

</body>

</html>