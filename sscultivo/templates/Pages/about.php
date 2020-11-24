<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Acerca de</title>
</head>

<body>
	<!-- full Title -->
	<div class="full-title" style="background-image: url('../img/all-title-bg.jpg')">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Acerca de
				<small>Subheading</small>
			</h1>
		</div>
	</div>
	<!-- Page Content -->
	<div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a>
						<?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'display']) ?>
					</a>
				</li>
				<li class="breadcrumb-item active">Acerca de</li>
			</ol>
		</div>
		<!-- About Content -->
		<div class="about-main">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid rounded mb-4" src="../img/about-img.jpg" alt="" />
				</div>
				<div class="col-lg-6">
					<h2>About Modern Business</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
				</div>
			</div>
			<!-- /.row -->
		</div>

		<!-- Team Members -->
		<div class="team-members-box">
			<h2>Our Team</h2>
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<img class="card-img-top" src="../img/team_01.jpg" alt="" />
						<div class="card-body">
							<h4 class="card-title">Team Member</h4>
							<h6 class="card-subtitle mb-2 text-muted">Position</h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
						</div>
						<div class="card-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<img class="card-img-top" src="../img/team_02.jpg" alt="" />
						<div class="card-body">
							<h4 class="card-title">Team Member</h4>
							<h6 class="card-subtitle mb-2 text-muted">Position</h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
						</div>
						<div class="card-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<img class="card-img-top" src="../img/team_03.jpg" alt="" />
						<div class="card-body">
							<h4 class="card-title">Team Member</h4>
							<h6 class="card-subtitle mb-2 text-muted">Position</h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
						</div>
						<div class="card-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- Our Customers -->
		<div class="customers-box">
			<h2>Our Customers</h2>
			<div class="row">
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_01.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_02.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_03.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_04.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_05.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
					<img class="img-fluid" src="../img/logo_06.png" alt="" />
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
</body>

</html>