<?php
require "php/conexion.php";
$sql= "SELECT * FROM infografias";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modelo de cajas Movy Rute</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<link rel="stylesheet"  href="css/estilos.css">
</head>
<body>
	<div id="fondo">
		<div class="trian"></div>

		<div class="controles">
			<img class="vi" src="img/video.png" alt="">		
			<a href="#con" class="imagen">
		 		<img  src="img/control.png" alt="">
		 	</a>
		 	<section class="grande">
			 	<div class="modal">
			 		<div class="cont">
			 			<div class="imgGrandePlay" id="con">
			 				<img src="img/goplay.png" alt="">
			 			</div>
			 		</div>
			 	</div>
		 	</section>
		 	<a href="registroFormulario.php">
		 		<img  src="img/registro.png" alt="">
		 	</a>
		 	<a href="contactohtml.php">
		 		<img  src="img/contacto.png" alt="">
		 	</a>
		 	<a href="login.php">
		 		<img  src="img/login.png" alt="">
		 	</a>
		</div>
		<div class="planeta"><img  src="img/planeta.png" alt=""></div>
		<div class="logo"><img  src="img/logo.png" alt=""></div>
		<a href="#sec1" class="flecha"><img  src="img/flecha.png" href="#sec1" alt=""></a>
	</div>
		<nav class="menu1">
					<ul>
						<li class="boton1"><a href="#sec1">1839</a></li>
						<li class="boton2"><a href="#sec2">1868</a></li>
						<li class="boton3"><a href="#sec3">1870</a></li>
						<li class="boton4"><a href="#sec4">1879</a></li>
						<li class="boton5"><a href="#sec5">1883</a></li>
						<li class="boton6"><a href="#sec6">1896</a></li>
						<li class="boton7"><a href="#sec7">1903</a></li>
						<li class="boton8"><a href="#sec8">1933</a></li>
						<li class="boton9"><a href="#sec9">1948</a></li>
						<li class="boton10"><a href="#sec10">1969</a></li>
						<li class="boton11"><a href="#sec11">2017</a></li>
					</ul>
				<a href="#fondo"><img class="flecha2" src="img/flecha2.png" alt=""></a>
		  </nav>
		

		<div class="contenedores">

			<section id="sec1" class="seccion uno">
				<article>
					<div class="velocipedo"><img src="<?php
					$row= mysqli_fetch_array($resultado);
					echo $row ["foto"];?>"></div>
				</article>
				
				<article class="texto1">
					<h1 class="titulo"><?php
					echo $row ["titulo"];?></h1>
					<p class="parrafo"><?php

					echo $row ["texto"];?></p>
				</article>
			</section>


			<section id="sec2" class="seccion dos">
				<article class="container_info2">
					<div class="videoUno"> <i class="far fa-play-circle"></i>
					</div>
				</article>
			</section>



			<section id="sec3" class="seccion tres">
				<article class="container_info3">
					<div class="audio"><img src="img/audio.png" alt=""></div>
					<div class="imagenFlorencia"></div>
				</article>
			</section>


			<section id="sec4" class="seccion cuatro">
				<div class="organizar">
					<article>
					<div class="linea1"></div>
					</article>
					<section class="container_info4">
						<a href="#foto1" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto1">
							<div class="cont">
								<div class="imgGran">
									<img src="<?php echo $row ["foto"];?>">
								</div>
								<div class="artCont">
									<h2><?php echo $row ["titulo"]?></h2>
									<p><?php echo $row ["texto"]?></p>
								</div>
								
							</div>	
						</div>


						<a href="#foto2" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto2">
							<div class="cont">
								<div class="imgGran">
									<img src="<?php echo $row ["foto"];?>">
								</div>
								<div class="artCont">
									<h2><?php echo $row ["titulo"]?></h2>
									<p><?php echo $row ["texto"]?></p>
								</div>
							</div>	
						</div>


						<a href="#foto3" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto3">
							<div class="cont">
								<div class="imgGran">
									<img src="<?php echo $row["foto"];?>">
								</div>
								<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
							</div>	
						</div>

						<a href="#foto4" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto4">
							<div class="cont">
								<div class="imgGran">
									<img src="<?php echo $row["foto"];?>">
								</div>
								<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
							</div>	
						</div>
					</section>
					</div>
			</section>



				<section id="sec5" class="seccion cinco">
					<article class="container_info5">
						<div class="videoUno"> <i class="far fa-play-circle"></i>
						</div>
					</article>
				</section>

				<section id="sec6" class="seccion seis">
					<div class="organizar">
						<article>
						<div class="linea1"></div>
						</article>
						<section class="container_info6">
							<a href="#foto5" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto5">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
								</div>	
							</div>


							<a href="#foto6" class="imagen">
								<img src="<?php $row = mysqli_fetch_array ($resultado);
								echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto6">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
									
								</div>	
							</div>

							<a href="#foto7" class="imagen">
								<img src="<?php $row = mysqli_fetch_array ($resultado);
								echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto7">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
								</div>	
							</div>
							<a href="#foto8" class="imagen">
								<img src="<?php $row = mysqli_fetch_array ($resultado);
								echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto8">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2><?php echo $row["titulo"]?></h2>
									<p><?php echo $row["texto"]?></p>
								</div>
								</div>
							</div>
						</section>
						</div>
				</section>




				<section id="sec7" class="seccion siete">
					<div class="organizar">
						<article>
						<div class="linea1"></div>
						</article>
						<section class="container_info7">
							<a href="#foto9" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto9">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2>"<?php echo $row["titulo"]?>"</h2>
									<p>"<?php echo $row["texto"]?>"</p>
								</div>
									
								</div>	
							</div>
							<a href="#foto10" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto10">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2>"<?php echo $row["titulo"]?>"</h2>
									<p>"<?php echo $row["texto"]?>"</p>
								</div>
									
								</div>	
							</div>
							<a href="#foto11" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto11">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2>"<?php echo $row["titulo"]?>"</h2>
									<p>"<?php echo $row["texto"]?>"</p>
								</div>
									
								</div>	
							</div>

							<a href="#foto12" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto12">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
								<div class="artCont">
									<h2>"<?php echo $row["titulo"]?>"</h2>
									<p>"<?php echo $row["texto"]?>"</p>
								</div>
									
								</div>	
							</div>
						</section>> 
						</div>
				</section>




				<section id="sec8" class="seccion ocho">
					<article class="container_info8">
						<div class="videoUno"> <i class="far fa-play-circle"></i>
						</div>
					</article>
				</section>


				

				<section id="sec9" class="seccion nueve">
					<div class="organizar">
						<article>
						<div class="linea1"></div>
						</article>
						<section class="container_info9">
							<a href="#foto13" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto13">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
							</div>
							<a href="#foto14" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto14">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
							</div>
							<a href="#foto15" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto15">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
							</div>
							<a href="#foto16" class="imagen">
								<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
							</a>
							<div class="modal" id="foto16">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
							</div>
						</section>
					</div>
					</section> 
						



				<section id="sec10" class="seccion diez">
					<article class="container_info10">
						<div class="videoUno"> <i class="far fa-play-circle"></i>
						</div>
					</article>
				</section>





				<section id="sec11" class="seccion once">
				<div class="organizar">
					<article>
					<div class="linea1"></div>
					</article>
					<section class="container_info11">
						<a href="#foto17" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto17">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
						</div>


						<a href="#foto18" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto18">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
						</div>
						<a href="#foto19" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto19">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
						</div>
						<a href="#foto20" class="imagen">
							<img src="<?php
							$row= mysqli_fetch_array($resultado);
							echo $row ["foto"];?>">
						</a>
						<div class="modal" id="foto20">
								<div class="cont">
									<div class="imgGran">
										<img src="<?php echo $row["foto"];?>">
									</div>
									<div class="artCont">
										<h2><?php echo $row["titulo"];?></h2>
										<p><?php echo $row["texto"];?></p>
									</div>
								</div>	
						</div>
					</section>
						
					</div>
				</section> 

			
		</div>		
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script src="js/codigo.js"></script>
</body>
</html>