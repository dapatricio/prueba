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
	//inicio de header
	echo Open('header',array(''));
		echo Open('section',array(''));
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
							$enlace3 = tagcontent('a','Clientes',array('href'=>base_url('menu/Clientes')));
								echo tagcontent('li', $enlace3);
							$enlace4 = tagcontent('a','Proyectos',array('href'=>base_url('#')));
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
	//inicio imagen de header
	echo Open('div');
		echo Image('../resources/css/img/gravity-products.jpg',array('id'=>'ima-header-prod'));
		echo tagcontent('h1','Proyectos',array('id'=>'txt-header-prod'));
	echo Close('div');
	//fin de imagen de header
	//inicio de el div principal
	echo Open('div',array('class'=>'row','id'=>'prod-1'));
		//inicio del producto 1
		echo Open('div',array('class'=>'col-md-5'));
			echo tagcontent('p','Marketing Digital',array('class'=>'txt1-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
			echo tagcontent('p','Descripcion acerca del proyecto',array('class'=>'txt2-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
				echo tagcontent('a','Ver Mas +',array('class'=>'btn btn-info','role'=>'button','data-toggle'=>'collapse','href'=>'#collapseExample','aria-expanded'=>'false','aria-controls'=>'collapseExample'));
				echo open('div',array('class'=>'collapse','id'=>'collapseExample'));
					//texto a mostrar al aplastar el boton de ver mas en cada proyecto
  					echo Open('div',array('class'=>'well'));
    						echo("Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.");
    						echo lineBreak2(1,array('class'=>''));
			   				echo tagcontent('a','Ver Proyecto',array('class'=>'btn btn-default','href'=>'#','id'=>'boton-prod','role'=>'button'));
  					echo Close('div');
				echo Close('div');
		echo Close('div');
		//imagen que se mostrara de acuerdo al proyecto, las imagenes de preferencia mas largas que altas
		echo Open('div',array('class'=>'col-md-6','id'=>'img-produc'));
			$imagen = Image('../resources/css/img/socialbusiness.jpg',array('class'=>'imagen-produc'));
				echo tagcontent('a',$imagen,array('href'=>'#'));
		echo Close('div');	
		//fin del producto 1
	echo Close('div');
	//inicio de linea divisoria de proyectos
	echo Open('center');
		echo lineBreak2(1,array('class'=>'linea'));
	echo Close('center');
	//fin de linea divisoria de proyectos
	echo Open('div',array('class'=>'row','id'=>'prod-2'));
		//inicio del producto 2
		//imagen que se mostrara de acuerdo al proyecto, las imagenes de preferencia mas largas que altas
		echo Open('div',array('class'=>'col-md-6','id'=>'img-produc'));
			$imagen = Image('../resources/css/img/socialbusiness.jpg',array('class'=>'imagen-produc'));
				echo tagcontent('a',$imagen,array('href'=>'#'));
		echo Close('div');
		echo Open('div',array('class'=>'col-md-5'));
			echo tagcontent('p','Marketing Digital',array('class'=>'txt1-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
			echo tagcontent('p','Descripcion acerca del proyecto',array('class'=>'txt2-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
				echo tagcontent('a','Ver Mas +',array('class'=>'btn btn-info','role'=>'button','data-toggle'=>'collapse','href'=>'#collapseExample1','aria-expanded'=>'false','aria-controls'=>'collapseExample1'));
				echo open('div',array('class'=>'collapse','id'=>'collapseExample1'));
					//texto a mostrar al aplastar el boton de ver mas en cada proyecto
  					echo Open('div',array('class'=>'well'));
    						echo("Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.");
    						echo lineBreak2(1,array('class'=>''));
			   				echo tagcontent('a','Ver Proyecto',array('class'=>'btn btn-default','href'=>'#','id'=>'boton-prod','role'=>'button'));
  					echo Close('div');
				echo Close('div');
		echo Close('div');	
		//fin del producto 2
	echo Close('div');
	//inicio de linea divisoria de proyectos
	echo Open('center');
		echo lineBreak2(1,array('class'=>'linea'));
	echo Close('center');
	//fin de linea divisoria de proyectos
	echo Open('div',array('class'=>'row','id'=>'prod-2'));
		//inicio del producto 1
		echo Open('div',array('class'=>'col-md-5'));
			echo tagcontent('p','Marketing Digital',array('class'=>'txt1-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
			echo tagcontent('p','Descripcion acerca del proyecto',array('class'=>'txt2-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
				echo tagcontent('a','Ver Mas +',array('class'=>'btn btn-info','role'=>'button','data-toggle'=>'collapse','href'=>'#collapseExample2','aria-expanded'=>'false','aria-controls'=>'collapseExample2'));
				echo open('div',array('class'=>'collapse','id'=>'collapseExample2'));
					//texto a mostrar al aplastar el boton de ver mas en cada proyecto
  					echo Open('div',array('class'=>'well'));
    						echo("Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.");
    						echo lineBreak2(1,array('class'=>''));
			   				echo tagcontent('a','Ver Proyecto',array('class'=>'btn btn-default','href'=>'#','id'=>'boton-prod','role'=>'button'));
  					echo Close('div');
				echo Close('div');
		echo Close('div');
		//imagen que se mostrara de acuerdo al proyecto, las imagenes de preferencia mas largas que altas
		echo Open('div',array('class'=>'col-md-6','id'=>'img-produc'));
			$imagen = Image('../resources/css/img/socialbusiness.jpg',array('class'=>'imagen-produc'));
				echo tagcontent('a',$imagen,array('href'=>'#'));
		echo Close('div');	
		//fin del producto 1
	echo Close('div');
	//inicio de linea divisoria de proyectos
	echo Open('center');
		echo lineBreak2(1,array('class'=>'linea'));
	echo Close('center');
	//fin de linea divisoria de proyectos
	echo Open('div',array('class'=>'row','id'=>'prod-2'));
		//inicio del producto 2
		//imagen que se mostrara de acuerdo al proyecto, las imagenes de preferencia mas largas que altas
		echo Open('div',array('class'=>'col-md-6','id'=>'img-produc'));
			$imagen = Image('../resources/css/img/socialbusiness.jpg',array('class'=>'imagen-produc'));
				echo tagcontent('a',$imagen,array('href'=>'#'));
		echo Close('div');
		echo Open('div',array('class'=>'col-md-5'));
			echo tagcontent('p','Marketing Digital',array('class'=>'txt1-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
			echo tagcontent('p','Descripcion acerca del proyecto',array('class'=>'txt2-prod'));
			echo lineBreak2(1,array('class'=>''));//esto es un hr
				echo tagcontent('a','Ver Mas +',array('class'=>'btn btn-info','role'=>'button','data-toggle'=>'collapse','href'=>'#collapseExample3','aria-expanded'=>'false','aria-controls'=>'collapseExample3'));
				echo open('div',array('class'=>'collapse','id'=>'collapseExample3'));
					//texto a mostrar al aplastar el boton de ver mas en cada proyecto
  					echo Open('div',array('class'=>'well'));
    						echo("Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.");
    						echo lineBreak2(1,array('class'=>''));
			   				echo tagcontent('a','Ver Proyecto',array('class'=>'btn btn-default','href'=>'#','id'=>'boton-prod','role'=>'button'));
  					echo Close('div');
				echo Close('div');
		echo Close('div');	
		//fin del producto 2
	echo Close('div');
	//span para subir al top
	echo tagcontent('span','',array('class'=>'ir-arriba icon-arrow-up'));
	//fin span 
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

