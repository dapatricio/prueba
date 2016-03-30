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
								$enlace1 = tagcontent('a','Inicio',array('href'=>base_url('menu/index')));
									echo tagcontent('li', $enlace1);
								$enlace3 = tagcontent('a','Clientes',array('href'=>base_url('menu/clientes')));
									echo tagcontent('li', $enlace3);
								$enlace4 = tagcontent('a','Proyectos',array('href'=>base_url('menu/proyectos')));
									echo tagcontent('li', $enlace4);
								$enlace5 = tagcontent('a','Nosotros/Contacto',array('href'=>'#'));	
									echo tagcontent('li', $enlace5);
							?>
						</ul>
					<?php	
					echo Close('nav');
					//fin de menu
				echo Close('div');	
			echo Close('section');
	echo Close('header');
	echo Open('div');
		echo Image('../resources/css/img/progra4.jpg',array('id'=>'ima-header'));
		echo tagcontent('h1','Contactanos',array('id'=>'txt-header'));
	echo Close('div');

	echo Open('div',array('class'=>'back_video'));
		echo Open('center');
		?>
		<iframe src="https://www.youtube.com/embed/0DzvRtwO34c" frameborder="0" allowfullscreen class="video"></iframe>
		<?php
		echo Close('center');
		echo lineBreak2(1,array('class'=>''));//esto es un br
		echo tagcontent('label','Aqui viene la descripcion acerca de la empresa y de todos los datos relevantes de la misma.',array('for'=>'exampleInputName1','class'=>'descrip-nosotros'));
		echo lineBreak2(1,array('class'=>''));//esto es un br
	echo Close('div');
	echo Open('div',array('class'=>'row', 'id'=>'plano-contact'));
		echo tagcontent('h1','Contactanos',array('class'=>''));
		echo LineBreak(2, array('class'=>''));
		echo Open('div',array('class'=>'col-md-5', 'id'=>'formulario'));
			echo Open('formulario');
				// formulario de envio de comentario
				echo Open('div',array('class'=>'form-group'));
    				echo tagcontent('label','Nombre*',array('for'=>'exampleInputName1'));
    				echo input(array('type'=>'text','class'=>'form-control', 'id'=>'exampleInputName1', 'placeholder'=>'Su nombre','required'));
  				echo Close('div');
  				echo Open('div',array('class'=>'form-group'));
  					echo tagcontent('label','Telefono',array('for'=>'exampleInputName1')); 
  					echo input(array('type'=>'text','class'=>'form-control', 'placeholder'=>'0900000000'));
  				echo Close('div');
  				echo Open('div',array('class'=>'form-group'));
  					echo tagcontent('label','Email*',array('for'=>'exampleInputEmail1')); 
  					echo input(array('type'=>'email','class'=>'form-control','id'=>'exampleInputEmail1' ,'placeholder'=>'ejemplo@ejemplo.com', 'required'));
  				echo Close('div');
  				echo Open('div',array('class'=>'form-group'));
  					echo tagcontent('label','Mensaje*',array('for'=>'exampleInputName1')); 
  					?>
  					<textarea class="form-control" id="txt-mensaje" rows="6" placeholder="Mensaje a escribir..." required></textarea>
  					<?php
  				echo Close('div');
  				?>
  				<button type="submit" id="boton-enviar" class="btn btn-default">Enviar</button>
  				<?php
			echo Open('form');
		echo Close('div');
		echo Open('div',array('class'=>'col-md-5','id'=>'informacion'));
			echo Open('div');
				//mapa con la coordenada del local, esto echo en google maps
				?>
				<iframe id="mapa" src="https://www.google.com/maps/d/embed?mid=z0R-LPJMSGLw.k7BSRdNt1ZWQ">
				</iframe>
				<?php
			echo Close('div');
			echo Open('address', array('id'=>'direccion'));
	  			echo Open('strong');
	  				echo "Master PC Cia. Ltda.";
	  			echo Close('strong');
	  			echo '<br/>';
	  			echo Open('abbr',array('title'=>'Direccion'));
					  echo "Azuay 1257 y Olmedo";
				echo Close('abbr');
				echo '<br/>';
	  			echo Open('abbr',array('title'=>'Cuidad, País'));
					  echo "Loja, Ecuador";
				echo Close('abbr');
				echo '<br/>';
	  			echo "Telefono: ";
	  			echo Open('abbr',array('title'=>'Extencion Internacional'));
					  echo "(+593)";
				echo Close('abbr');
				echo "07-3700520";
				echo '<br/>';
				echo '<br/>';
				echo Open('strong');
	  				echo "Facebook:";
	  			echo Close('strong');
	  			echo tagcontent('a','Master PC',array('href'=>"https://www.facebook.com/masterpcloja", 'target'=>'_blank'));	
	  			echo '<br/>';
	  			echo Open('strong');
	  				echo "Twitter:";
	  			echo Close('strong');
				echo tagcontent('a','@MasterPcloja',array('href'=>"https://twitter.com/masterpcloja",'target'=>'_blank'));	
				echo '<br/>';
			echo Close('address');
		echo Close('div');
	echo Close('div');
	//span para subir al top
	echo tagcontent('span','',array('class'=>'ir-arriba icon-arrow-up'));
	//fin span
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

	$jsquery =array(base_url('resources/js/jquery-1.12.1.min.js'),'');
		echo jsload($jsquery);
	$jsboots =array(base_url('resources/js/bootstrap.min.js'),'');
		echo jsload($jsboots);
	$jsmain =array(base_url('resources/js/main.js'),'');
		echo jsload($jsmain);