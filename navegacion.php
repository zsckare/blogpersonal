<header>
			<div class="info">
				<p>Vagabundo Informatico</p>
				<p class="masinfo" style="margin-top: 2em;">Web Developer</p>
				<p class="masinfoplus">Estudiante de CodigoFacilito, Rails Lover, Amante de la Pizza, le muevo al FrontEnd.</p>
			</div>
			<div class="cabezera">
				<div class="form_container">
					<div class="slideContainer">
						<?php 
							$sliders=mysql_query("SELECT * FROM `slideshow` ");
							while ($slides=mysql_fetch_row($sliders)) {
								echo '<div class="slide" data-background="'.$slides[1].'"></div>';
							}
						 ?>
						
					</div>
					<button class="left"><i class="ion-arrow-left-b"></i></button>
					<button class="right"><i class="ion-arrow-right-b"></i></button>
				</div>
				
			</div>
			<nav class="menu" >
				<ul class="container"  >
					<li><a href="index.php"><i class="ion-android-home izq "></i>Inicio</a></li>
					<li><a href=""><i class="ion-briefcase izq"></i>Portafolio</a></li>
					<li><a href=""><i class="ion-man izq"></i>Sobre Mi</a></li>
					<li><a href=""><i class="ion-settings izq"></i>Tutoriales	</a></li>
				</ul>
			</nav>
			<div class="navegacionmoblie">
				<div class="cortina"></div>
				<button id="menu-mobile"><i class="ion-android-menu"></i></button>
				<div class="nav-mobile">
					<ul >
						<li><a href="index.php"><i class="ion-android-home izq"></i>Inicio</a></li>
						<li><a href=""><i class="ion-briefcase izq"></i>Portafolio</a></li>
						<li><a href=""><i class="ion-man izq"></i>Sobre Mi</a></li>
						<li><a href=""><i class="ion-settings izq"></i>Tutoriales	</a></li>
					</ul>
				</div>
			</div>
		</header>