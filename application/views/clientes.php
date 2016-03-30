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
							$enlace1 = tagcontent('a','Inicio',array('href'=>'index'));
								echo tagcontent('li', $enlace1);
							$enlace3 = tagcontent('a','Clientes',array('href'=>base_url('#')));
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
	//inicio imagen header
	echo Open('div');
		echo Image('../resources/css/img/progra4.jpg',array('id'=>'ima-header'));
		echo tagcontent('h1','Nuestros Clientes',array('id'=>'txt-header'));
	echo Close('div');
	//fin imagen header
	echo Open('div',array('class'=>'presentacion-clientes'));
  		echo Open('header',array('class'=>'header-inferior-clientes'));
  			echo tagcontent('h2','Nuestros Clientes',array(''));
  		echo close('header');
  		//inicio de linea divisoria de proyectos
		echo Open('center');
			echo lineBreak2(1,array('class'=>'linea'));
		echo Close('center');
		//fin de linea divisoria de proyectos			
  		echo Open('div',array('class'=>'row'));
  			echo Open('div',array('class'=>'col-md-2','id'=>'clientes'));//LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/ahorra_mas.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/camiones.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br	
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/chipslondon.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/claro_churon.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/clinica_celular.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
  				//se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila
  			echo Close('div');
  			echo Open('div',array('class'=>'col-md-2','id'=>'clientes'));//LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/Ecology.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/gpl.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br	
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/ecoteltv.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/guiaflash.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/hospital-cuenca.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
  				//se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila
  			echo Close('div');
  			echo Open('div',array('class'=>'col-md-2','id'=>'clientes'));//LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/hotel_loja.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/iexport.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br	
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/logo-mix.png',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/LogoCmin.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/maribi.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
  				//se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila
  			echo Close('div');
  			echo Open('div',array('class'=>'col-md-2','id'=>'clientes'));//LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/masterpc.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/minasur.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br	
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/oyeshoes.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/silmogas1.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
				echo LineBreak(1,''); //esto es un br
				//espacio entre imagenes
  				echo LineBreak(1,''); //esto es un br
  				$imagen = Image('../resources/css/img/vidaanimal.jpg',array('class'=>'img-clientes'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
  				//se tienen 2 imagenes en el mismo div para mantener el orden de 4 imagenes por fila
  			echo Close('div');
  		echo Close('div');			
  	echo Close('div');
	//span para subir al top
	echo tagcontent('span','',array('class'=>'ir-arriba icon-arrow-up'));
	//fin span 
	//footer inicio	
	echo Open('footer', array('class'=>'footer-cliente'));
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