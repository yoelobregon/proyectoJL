<?php
    session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

    if(!isset($_SESSION["id_usuario"])){
        header("location: inicio.php");
    }

    $idUsuario = $_SESSION['id_usuario'];

    $sql = "SELECT id , nombre FROM users_clientes WHERE id='$idUsuario'";
    $result = $mysqli->query($sql);
    
    $row=$result->fetch_assoc();
    
?>
<?php if($_SESSION['tipo_usuario'] == 2){?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Styles propios -->
	<link rel="stylesheet" href="styles.css">
	<!--  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

	<title>Trend Stoore| Ropas niños</title>
	<link rel="icon" href="img/logo-icon.ico">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img class="img-responsive " src="../img/logo2.png" width="70" height="70" class="d-inline-block align-top"
					alt="">
				Trend Stoore
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<ion-icon class="btn-menu" name="menu-outline"></ion-icon>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="welcome.php" id="inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_c.php" id="nosotros">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ropas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="rdama_c.php" id="rdama">Damas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="rcaballero_c.php" id="rcaballero">Caballeros</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="niños_c.php" id="niños">Niños</a>
						</div>
					</li>
					<?php if($_SESSION['tipo_usuario'] == 2){?>
					<li class="nav-item">
						<a class="nav-link" href="tendency.php" id="tendencia">Tendencias</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="sale.php" id="sale">
							% Descuentos
						</a>
					</li>
					<?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="contacto.php" id="contacto">Contactanos</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="logout.php">Cerrar Session</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<section id="clothes" style="background-color: #111113">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="content-center">
				<h2 style="color: #f3f3f3"> Ropas variadas para niñas y niños en <b>Trend Stoore Kids</b> </h2>
				<p style="color: #c7c3c3">Las imagenes de los productos son referenciales y las promociones tienen un
					stock
					mínimo.
					<i>Cualquier pedido bajo consulta en la seccion de <b>Contactanos</b></i>.
				</p>
			</div>


			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<!--Carousel Wrapper-->
				<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

					<!--Controls-->
					<div class="controls-top">
						<a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
								class="fa fa-chevron-left"></i></a>
						<a class="btn-floating" href="#multi-item-example" data-slide="next"><i
								class="fa fa-chevron-right"></i></a>
					</div>

					<!--/.Controls-->


					<!--Slides-->
					<div class="carousel-inner" role="listbox">

						<!--First slide-->
						<div class="carousel-item active">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niña3.jpg" alt="Card image cap">

										<div class="card-body">
											<h4 class="card-title">Casaca cuero niña</h4>
											<p class="card-text">Elegante casaca cuero para niñas. </p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niña.png" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Polo floreado Kid + jogger</h4>
											<p class="card-text">Hermoso polo floreado Kid más un jogger.</p>
											<h2><span class="badge badge-dark">S/. 50</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niña5.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Casaca rosa niña + jean + polo </h4>
											<p class="card-text">Casaca Jersey rosa con cierre, jean plomo y polo white.
											</p>
											<h2><span class="badge badge-dark">S/. 50</span></h2>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--/.First slide-->

						<!--Second slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niño7.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Jeans claros + zapatillas (Talla 24-26) </h4>
											<p class="card-text">Jeans con bolsillos, y zapatillas Adidas blancas con 2
												pegatinas .</p>
											<h2><span class="badge badge-dark">S/. 99.90</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niño.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Gorra floreada + Polera ploma Kids</h4>
											<p class="card-text">Gorra floreada y polera de algodon en color plomo.</p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niño6.jpg" height="550" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Camisa cuadros niños + jeans</h4>
											<p class="card-text">Camisa cuadros y jeans exclusivos.</p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!--/.Second slide-->

						<!--Third slide-->
						<div class="carousel-item">

							<div class="row">
								<div class="col-md-4">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niñas.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Conjunto Jean vaquero</h4>
											<p class="card-text">El excluvo conjunto vaquero combinable con
												pantalon o falda.
											</p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/no_1.png" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Conjunto jumper Elegante</h4>
											<p class="card-text">Jumper color azul marino más camisa y cobarta michi
												azul marino.</p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>

								<div class="col-md-4 clearfix d-none d-md-block">
									<div class="card mb-2">
										<img class="card-img-top" src="../img/niño34.png" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Conjunto playero Babys</h4>
											<p class="card-text">Polo manga cero USA, short playero más sombrero
												pescador de paja.</p>
											<h2><span class="badge badge-dark">S/. 79.90</span></h2>
										</div>
									</div>
								</div>

							</div>

						</div>
						<!--/.Third slide-->


					</div>
					<!--/.Slides-->

				</div>
				<!--/.Carousel Wrapper-->

			</div>


			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>



		<div class="col-md-12">
			<center>
				<h2 style="color: #f3f3f3"> Conoce más variedad de ropas para <br>los pequeños de la casa con
					<b>Trend Kids.</b>
				</h2>
			</center>
			<br>
		</div>

		<!-- Seccion de las ropas niños -->
		<div class="container-fluid">
			<div class="col-md-12">
				<center>
					<h2 style="background-color: #f3f3f3 "><b> Variedad de Polos</b> </h2>
				</center>
				<br>
			</div>
			<!-- Polos niñas -->
			<div class="col-md-12">
				<center>
					<h2 style="color: #f3f3f3"><b> Polos niñas </b> </h2>
				</center>
				<br>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo floreado</h2>
							</a>
							<a href="#">
								<p>S/. 50</p>
							</a>
						</div>
						<img src="../img/niña.png" width="450" height="400" class="img-fluid" alt="ropa 1">
					</div>
				</div>




				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo lion negro</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/niña_.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo zebra rosa</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/niña8.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo con blondas White</h2>
							</a>
							<a href="#">
								<p>S/. 45</p>
							</a>
						</div>
						<img src="../img/niña27.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero fucsia</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niña9.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo palo rosa urban</h2>
							</a>
							<a href="#">
								<p>S/. 28.90</p>
							</a>
						</div>
						<img src="../img/niña10.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo con blondas Rose</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niña11.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Rose cuello cero</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niña16.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero White</h2>
							</a>
							<a href="#">
								<p>S/. 50</p>
							</a>
						</div>
						<img src="../img/niña14.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero Rose</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niña13.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<!-- Polos niños -->
				<div class="col-md-12">
					<center>
						<h2 style="color: #f3f3f3"><b> Polos niños </b> </h2>
					</center>
					<br>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero Rubik</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niño8.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero Player</h2>
							</a>
							<a href="#">
								<p>S/. 55</p>
							</a>
						</div>
						<img src="../img/niño18.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Clon turquesa</h2>
							</a>
							<a href="#">
								<p>S/. 45</p>
							</a>
						</div>
						<img src="../img/niño17.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo White Classic</h2>
							</a>
							<a href="#">
								<p>S/. 35</p>
							</a>
						</div>
						<img src="../img/niño13.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero KIds</h2>
							</a>
							<a href="#">
								<p>S/. 55</p>
							</a>
						</div>
						<img src="../img/niño15.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo camisero Glome</h2>
							</a>
							<a href="#">
								<p>S/. 45</p>
							</a>
						</div>
						<img src="../img/niño16.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<!-- VESTIDOS -->
				<div class="col-md-12">
					<br><br><br>
					<center>
						<h2 style="background-color: #f3f3f3"><b> Variedad de vestidos para las nenas</b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Kid largo</h2>
							</a>
							<a href="#">
								<p>S/. 65</p>
							</a>
						</div>
						<img src="../img/niña19.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Kid rayas-Mix Cero</h2>
							</a>
							<a href="#">
								<p>S/. 70</p>
							</a>
						</div>
						<img src="../img/niña18.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Kid rayas-Mix</h2>
							</a>
							<a href="#">
								<p>S/. 65</p>
							</a>
						</div>
						<img src="../img/niña17.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Casual Kid</h2>
							</a>
							<a href="#">
								<p>S/. 85</p>
							</a>
						</div>
						<img src="../img/niña21.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>


				<div class="col-md-12">
					<br> <br><br>
					<center>
						<h2 style="background-color: #f3f3f3"><b> Variedad de blusas y camisas </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Blusa Kid Yellow</h2>
							</a>
							<a href="#">
								<p>S/. 60</p>
							</a>
						</div>
						<img src="../img/niña26.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Blusa Kid White</h2>
							</a>
							<a href="#">
								<p>S/. 75</p>
							</a>
						</div>
						<img src="../img/niña12.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Camisa Kid White</h2>
							</a>
							<a href="#">
								<p>S/. 75</p>
							</a>
						</div>
						<img src="../img/no_1.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Camisa Kid celeste</h2>
							</a>
							<a href="#">
								<p>S/. 75</p>
							</a>
						</div>
						<img src="../img/niños56.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-12">
					<br> <br><br>
					<center>
						<h2 style="background-color: #f3f3f3"><b> Variedad de shorts </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Floreado azul</h2>
							</a>
							<a href="#">
								<p>S/. 55</p>
							</a>
						</div>
						<img src="../img/niña27.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Blanco</h2>
							</a>
							<a href="#">
								<p>S/. 100</p>
							</a>
						</div>
						<img src="../img/niña28.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Classic</h2>
							</a>
							<a href="#">
								<p>S/. 62</p>
							</a>
						</div>
						<img src="../img/niña26.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>



				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Boy </h2>
							</a>
							<a href="#">
								<p>S/. 64</p>
							</a>
						</div>
						<img src="../img/niño17.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Boy Classic</h2>
							</a>
							<a href="#">
								<p>S/. 100</p>
							</a>
						</div>
						<img src="../img/niño18.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jersy fucsia</h2>
							</a>
							<a href="#">
								<p>S/. 72</p>
							</a>
						</div>
						<img src="../img/niño20.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>



				<div class="col-md-12">
					<center>
						<h2 style="background-color: #f3f3f3"><b> Variedad de jeans kids </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Kid Plomo</h2>
							</a>
							<a href="#">
								<p>S/. 65</p>
							</a>
						</div>
						<img src="../img/niño87.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Blue Jean Classic</h2>
							</a>
							<a href="#">
								<p>S/. 85</p>
							</a>
						</div>
						<img src="../img/niños56.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean verde militar</h2>
							</a>
							<a href="#">
								<p>S/. 65</p>
							</a>
						</div>
						<img src="../img/niños34.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Girl rasgado</h2>
							</a>
							<a href="#">
								<p>S/. 90</p>
							</a>
						</div>
						<img src="../img/niña24.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Girl Classic</h2>
							</a>
							<a href="#">
								<p>S/. 80</p>
							</a>
						</div>
						<img src="../img/niña22.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>


				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Girl parche</h2>
							</a>
							<a href="#">
								<p>S/. 65</p>
							</a>
						</div>
						<img src="../img/niña23.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>


	</section>

	<section id="footer" class="bg-dark">
		<div class="container">
			<img class="img-responsive " src="../img/logo2.png" width="100" height="100"
				class="d-inline-block align-top" alt="">
			<ul class="list-inline">
				<li class="list-inline-item footer-menu"><a href="welcome.php">Inicio</a></li>
				<li class="list-inline-item footer-menu"><a href="about_c.php">Nosotros</a></li>
				<li class="list-inline-item footer-menu"><a href="niños_c.php">Ropas</a></li>
				<li class="list-inline-item footer-menu"><a href="tendency.php">Tendencias</a></li>
				<li class="list-inline-item footer-menu"><a href="sale.php">Descuentos</a></li>
				<li class="list-inline-item footer-menu"><a href="contacto.php">Contactanos</a></li>
			</ul>
			<small>@2021 Todos los derechos reservados.</small>
		</div>
	</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>
<?php } ?>