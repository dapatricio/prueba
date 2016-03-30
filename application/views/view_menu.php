<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo Doctype();
//de claracion de los css
$css = array(base_url('resources/css/estilos.css'),'');
	echo csslink($css);
$bootstrap = array(base_url('resources/css/bootstrap/bootstrap.min.css'),'');
	echo csslink($bootstrap);
$fonts = array(base_url('resources/css/fonts.css'),'');
	echo csslink($fonts);
?>
	<link rel="icon" type="image/png" href="../resources/css/img/favicon.jpg"/>	
<?php	
	//inicio de div principal
	echo Open('div',array('class'=>'contenido'));
		echo Open('header',array(''));
			echo Open('section',array(''));
			//inicio de header
				echo Open('div',array('class'=>'row'));
					//inicio de logo
					echo Open('div',array('id'=>'logo'));
						echo Image('../resources/css/img/pymeslogo.png',array('id'=>'img-logo'));
					echo Close('div');
					//fin de logo
					//inicio menu	
					echo Open('nav', array('class'=>'col-md-8', 'id'=>'menu'));
					?>
						<ul>
							<?php
								$enlace1 = tagcontent('a','Inicio',array('href'=>'#'));
									echo tagcontent('li', $enlace1);
								$enlace3 = tagcontent('a','Clientes',array('href'=>base_url('menu/clientes')));
									echo tagcontent('li', $enlace3);
								$enlace4 = tagcontent('a','Proyectos',array('href'=>base_url('menu/proyectos')));
									echo tagcontent('li', $enlace4);
								$enlace5 = tagcontent('a','Nosotros/Contacto',array('href'=>base_url('menu/contacto')));	
									echo tagcontent('li', $enlace5);
							?>
						</ul>
					<?php	
					echo Close('nav');
					//fin de menu
				echo Close('div');	
			echo Close('section');
		echo Close('header');
		//fin de header	
		//inicio de barra social
		echo Open('div',array('class'=>'social'));
			?>
			<ul>
				<?php
				$facebook = tagcontent('a','',array('href'=>"http://www.facebook.com", 'class'=>'icon-facebook2', 'target'=>'_blank'));	
				echo tagcontent('li', $facebook);
				$twitter = tagcontent('a','',array('href'=>"http://www.twitter.com", 'class'=>'icon-twitter', 'target'=>'_blank'));	
				echo tagcontent('li', $twitter);
				$youtube = tagcontent('a','',array('href'=>"http://www.youtube.com", 'class'=>'icon-youtube', 'target'=>'_blank'));	
				echo tagcontent('li', $youtube);
				?>
			</ul>
			<?php
		echo Close('div');
		//fin de barra social
		//inicio de contenedor de imagen
		echo Open('div',array('id'=>'roll','class'=>'container-fuild'));
			echo Open('div', array('class'=>'row','id'=>'imagenes'));
				echo Open('div', array('id'=>'carousel-ejemplo','class'=>'carousel slide', 'data-ride'=>'carousel'));
					?>
					<ol class="carousel-indicators">
						<?php
							echo tagcontent('li','',array('data-target'=>'#carousel-ejemplo','data-slide-to'=>'0','class'=>'active'));
							echo tagcontent('li','',array('data-target'=>'#carousel-ejemplo','data-slide-to'=>'1'));
							echo tagcontent('li','',array('data-target'=>'#carousel-ejemplo','data-slide-to'=>'2'));
							echo tagcontent('li','',array('data-target'=>'#carousel-ejemplo','data-slide-to'=>'3'));
						?>
					</ol>
					<?php
					echo Open('div',array('id'=>'control','class'=>'carousel-inner','role'=>'listbox'));
						echo Open('div',array('class'=>'item active'));
							echo Image('../resources/css/img/imagen1.jpg',array('class'=>'imagenes'));
							echo Open('div',array('class'=>'carousel-caption','id'=>'content'));
								echo tagcontent('h1','Texto Principal');
								echo tagcontent('h3','Texto Secundario');
							echo Close('div');
						echo Close('div');
						echo Open('div',array('class'=>'item'));
							echo Image('../resources/css/img/imagen2.jpg',array('class'=>'imagenes'));
							echo Open('div',array('class'=>'carousel-caption','id'=>'content'));
								echo tagcontent('h1','Texto Principal');
								echo tagcontent('h3','Texto Secundario');
							echo Close('div');
						echo Close('div');
						echo Open('div',array('class'=>'item'));
							echo Image('../resources/css/img/imagen3.jpg',array('class'=>'imagenes'));
							echo Open('div',array('class'=>'carousel-caption','id'=>'content'));
								echo tagcontent('h1','Texto Principal');
								echo tagcontent('h3','Texto Secundario');
							echo Close('div');
						echo Close('div');
						echo Open('div',array('class'=>'item'));
							echo Image('../resources/css/img/imagen4.jpg',array('class'=>'imagenes'));
							echo Open('div',array('class'=>'carousel-caption','id'=>'content'));
								echo tagcontent('h1','Texto Principal');
								echo tagcontent('h3','Texto Secundario');
							echo Close('div');
						echo Close('div');
					echo Close('div');	
					$span1= tagcontent('span','',array('class'=>'icon-prev','aria-hidden'=>'true'));
					$span2= tagcontent('span','Previo',array('class'=>'sr-only'));
						echo tagcontent('a',$span1.$span2,array('class'=>'left carousel-control','href'=>'#carousel-ejemplo','role'=>'button','data-slide'=>'prev'));
					$span3= tagcontent('span','',array('class'=>'icon-next','aria-hidden'=>'true'));
					$span4= tagcontent('span','','Siguiente',array('class'=>'sr-only'));
						echo tagcontent('a',$span3.$span4,array('id'=>'control_derecha','class'=>'right carousel-control','href'=>'#carousel-ejemplo','role'=>'button','data-slide'=>'next'));	
				echo Close('div');
			echo Close('div');
		echo Close('div');
		//fin de contenedor de imagen
		// inicio div todo
		echo Open('div',array('class'=>'todo'));
			//inicio div con texto e imagenes
			echo Open('div',array('class'=>'row','id'=>'text-down'));
				echo Open('div',array('class'=>'col-md-3'));
						$imagen = Image('../resources/css/img/img-soft.jpg',array('class'=>'img-sup'));
					echo tagcontent('p',$imagen,array('class'=>'texto-sup'));
					echo tagcontent('p','SOFTWARE',array('class'=>'texto-medio'));
					echo tagcontent('p','Software de escritorio o aplicaciones web, según tus requerimientos, usamos las últimas tecnologías.',array('class'=>'texto-bajo'));
				echo Close('div');
				echo Open('div',array('class'=>'col-md-3'));
						$imagen = Image('../resources/css/img/img-web.jpg',array('class'=>'img-sup'));
					echo tagcontent('p',$imagen,array('class'=>'texto-sup'));
					echo tagcontent('p','SOFTWARE',array('class'=>'texto-medio'));
					echo tagcontent('p','Software de escritorio o aplicaciones web, según tus requerimientos, usamos las últimas tecnologías.',array('class'=>'texto-bajo'));
				echo Close('div');
				echo Open('div',array('class'=>'col-md-3'));
						$imagen = Image('../resources/css/img/img-celu.jpg',array('class'=>'img-sup'));
					echo tagcontent('p',$imagen,array('class'=>'texto-sup'));
					echo tagcontent('p','SOFTWARE',array('class'=>'texto-medio'));
					echo tagcontent('p','Software de escritorio o aplicaciones web, según tus requerimientos, usamos las últimas tecnologías.',array('class'=>'texto-bajo'));
				echo Close('div');
				echo Open('div',array('class'=>'col-md-3'));
						$imagen = Image('../resources/css/img/img-nube.jpg',array('class'=>'img-sup'));
					echo tagcontent('p',$imagen,array('class'=>'texto-sup'));
					echo tagcontent('p','SOFTWARE',array('class'=>'texto-medio'));
					echo tagcontent('p','Software de escritorio o aplicaciones web, según tus requerimientos, usamos las últimas tecnologías.',array('class'=>'texto-bajo'));
				echo Close('div');
			echo Close('div');
			//fin div con texto e imagenes	
			echo tagcontent('h3','Tenemos los productos que se adecuan a tus necesidades', array('class'=>'texto-separado'));
			echo Open('center');
				echo lineBreak2(1, array('class'=>'linea'));
			echo Close('center');
			//inicio de presentacion de proyectos
			echo Open('div',array('class'=>'row', 'id'=>'txt-proyectos'));
			    //inicio de textos de presentacion
			    echo Open('div',array('class'=>'col-md-5','id'=>'txts'));
			        echo Open('div');
			          echo tagcontent('p','Marketing Digital', array('class'=>'txt-resaltado'));
			          echo tagcontent('p','Descripcion acerca del proyecto que se vaya a colocar',array('class'=>'txt-normal'));
			        echo Close('div');
			        echo Open('div');
			          echo tagcontent('p','Servicio Tecnico', array('class'=>'txt-resaltado'));
			          echo tagcontent('p','Descripcion acerca del proyecto que se vaya a colocar',array('class'=>'txt-normal'));
			        echo Close('div');
			        echo Open('div');
			          echo tagcontent('p','Gestion de Recursos', array('class'=>'txt-resaltado'));
			          echo tagcontent('p','Descripcion acerca del proyecto que se vaya a colocar',array('class'=>'txt-normal'));
			        echo Close('div');
			        echo Open('div');
			          echo tagcontent('p','Publicidad de Audio-Video', array('class'=>'txt-resaltado'));
			          echo tagcontent('p','Descripcion acerca del proyecto que se vaya a colocar',array('class'=>'txt-normal'));
			        echo Close('div');
			 	echo Close('div');
    			//fin de textos de presentacion
			    //inicio de imagen de proyectos
			    echo Open('div',array('class'=>'col-md-5','id'=>'imagen-txt'));
			    		$imagen = Image('../resources/css/img/logopuntopymesface2.jpg',array('class'=>''));
			        echo tagcontent('a', $imagen,array('href'=>""));    
				echo Close('div');
				//fin de imagen de proyectos
			echo Close('div');
			//fin de presentacion de proyectos
			//inicio presentacion de planes
			echo Open('div',array('class'=>'presentacion-proy'));
			    //inicio header de planes
			    echo Open('header',array('class'=>'header-inferior'));
			        echo tagcontent('h2','Planes de Software',array('class'=>''));
			    echo Close('header');
			    //fin de header de panes
			    echo Open('center');
			        echo lineBreak2(1, array('class'=>'linea'));
			    echo Close('center');
			    //inicio imagenes de planes
			    echo Open('div',array('class'=>'row'));
			        echo Open('div', array('class'=>'col-md-3','id'=>'proyecto'));
			            $imagen = Image('../resources/css/img/gravity-products4.jpg',array('class'=>'img-proy'));
			               echo tagcontent('a',$imagen,array('href'=>"#"));
			        echo Close('div');
			        echo Open('div', array('class'=>'col-md-3','id'=>'proyecto'));
			            $imagen = Image('../resources/css/img/techservice2.jpg',array('class'=>'img-proy'));
			               echo tagcontent('a',$imagen,array('href'=>"#"));
			        echo Close('div');
			        echo Open('div', array('class'=>'col-md-3','id'=>'proyecto'));
			            $imagen = Image('../resources/css/img/billingsoft2.jpg',array('class'=>'img-proy'));
			               echo tagcontent('a',$imagen,array('href'=>"#"));
			        echo Close('div');
			    echo Close('div');
			    //fin imagenes de planes
			echo Close('div');
			//fin presentacion de planes
			//inicio de presentacion de auspiciantes        
			echo Open('div',array('class'=>'presentacion-auspi'));
			    //inicio de header auspiciantes
			    echo Open('header', array('class'=>'header-inferior'));
			        echo tagcontent('h2','Nuestros Auspiciantes', array('class'=>''));
			    echo Close('header');
			    echo Open('center');
			        echo lineBreak2(1, array('class'=>'linea'));
			    echo Close('center');
			    echo Open('div',array('class'=>'row'));
			        echo Open('div',array('class'=>'col-md-2','id'=>'auspiciantes'));
			            $imagen = Image('../resources/css/img/callcent.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen,array('href'=>"#")); 
			            $imagen1 = Image('../resources/css/img/cherry.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen1,array('href'=>"#"));  
			            //se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila     
			        echo Close('div');

			        echo Open('div',array('class'=>'col-md-2','id'=>'auspiciantes'));
			            $imagen = Image('../resources/css/img/clinical.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen,array('href'=>"#")); 
			            $imagen1 = Image('../resources/css/img/compuhelp.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen1,array('href'=>"#"));  
			            //se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila     
			        echo Close('div');

			        echo Open('div',array('class'=>'col-md-2','id'=>'auspiciantes'));
			            $imagen = Image('../resources/css/img/gravity.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen,array('href'=>"#")); 
			            $imagen1 = Image('../resources/css/img/keimbrocks.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen1,array('href'=>"#"));  
			            //se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila     
			        echo Close('div');

			        echo Open('div',array('class'=>'col-md-2','id'=>'auspiciantes'));
			            $imagen = Image('../resources/css/img/secureservice.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen,array('href'=>"#")); 
			            $imagen1 = Image('../resources/css/img/traveler.png',array('class'=>'img-auspi'));
			               echo tagcontent('a',$imagen1,array('href'=>"#"));  
			            //se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila     
			        echo Close('div');
			    echo Close('div');
			    //fin de header auspiciantes
			echo Close('div');
			//fin de presentacion de auspiciantes
			//inicio flecha para top
			echo tagcontent('span','',array('class'=>'ir-arriba icon-arrow-up'));
			//fin flecha para top
		echo Close('div');
		//fin div todo
	echo Close('div');
	//fin div principal
	//footer inicio	
	echo Open('footer', array('class'=>'footer'));
		echo Open('address',array('id'=>'direccion'));
			echo Open('strong');
				echo "Master Pc Cia. Ltda";
			echo Close('strong');			
			echo '<br/>';
	  		echo "Loja, Ecuador";
	  		echo '<br/>';
	  		echo Open('abbr',array('title'=>'Telefono'));
	  			echo "Telefono:";
	  		echo Close('abbr');
	  		echo " (593) 07-3700520";
	  		echo '<br/>';
	  		echo '<br/>';
	  		echo Open('strong');
				echo "Horario de atencion:";
			echo Close('strong');
			echo " LUNES A VIERNES de 09:00 A 19:00 HORAS";
			echo '<br/>';
			echo Open('strong');
				echo "Derechos Reservados 2016";
			echo Close('strong');
			echo '<br/>';
			echo "Desarrollado por: Daniel Peñarreta.";
	  	echo Close('address');			
	echo Close('footer');
	//footer fin
//declaracion de todos los js
$jsquery =array(base_url('resources/js/jquery-1.12.1.min.js'),'');
	echo jsload($jsquery);
$jsboots =array(base_url('resources/js/bootstrap.min.js'),'');
	echo jsload($jsboots);
$jsmain =array(base_url('resources/js/main.js'),'');
	echo jsload($jsmain);
?>