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

echo Open('body',array('class'=>'admin'));
	echo Open('div',array('class'=>'cont-admin'));
		echo open('div',array('class'=>'row'));
			echo Open('div',array('id'=>'navbar-example','class'=>'col-md-3'));
			?>
				<ul class="menuVert">
					<?php
					$enlace = tagcontent('a','Inicio',array('href'=>'#rol-inicio'));
						echo tagcontent('li', $enlace);
					$enlace = tagcontent('a','Proyectos',array('href'=>base_url('#rol-proyectos')));
						echo tagcontent('li', $enlace);
					$enlace = tagcontent('a','Clientes',array('href'=>base_url('#rol-clientes')));
						echo tagcontent('li', $enlace);
					$enlace = tagcontent('a','Nosotros/Contacto',array('href'=>base_url('#rol-contactos')));	
						echo tagcontent('li', $enlace);
					$enlace = tagcontent('a','Salir',array('href'=>base_url('index')));	
						echo tagcontent('li', $enlace);
					?>
				</ul>
				<?php	
			echo Close('div');
			echo Open('div',array('class'=>'saludo col-md-8'));
				echo tagcontent('h1','Bienvenido al Administrador',array(''));
				echo LineBreak(1,''); //esto es un br
				$imagen = Image('../resources/css/img/pymeslogo.png',array('class'=>'logo-admin'));
					echo tagcontent('a',$imagen,array('href'=>'#'));
			echo Close('div');
		echo Close('div');
	echo Close('div');
	echo Open('div',array('class'=>'span9 my-content'));
		echo Open('section',array('id'=>'rol-inicio'));
			echo tagcontent('h3','Inicio', array('class'=>'texto-separado-admin'));
			echo Open('center');
				echo lineBreak2(1, array('class'=>'linea-admin'));
			echo Close('center');
			echo Open('div',array('class'=>'servicios row'));
				echo Open('div',array('class'=>'col-md-5'));
					echo Open('div',array('class'=>'cambio-descripcion-serv'));
						echo tagcontent('h4','Titulos acerca de los servicios que ofrecemos',array(''));
						echo Open('select',array('class'=>'form-control','id'=>'titulos_descrip','name'=>'titulos_descrip'));
						?>
								<option value="1">Software</option>
								<option value="2">Diseño Web</option>
								<option value="3">APLICACIONES MÓVILES</option>
								<option value="4">SERVICIOS EN LA NUBE</option>
								<?php
						echo CLose('select');
						?>
						<input class="btn btn-default" type="button" value="Seleccionar" onclick="mifuncion()"><br>
						<br><input type="text" class="form-control" id="tit_servicios" placeholder="Titulo a cambiar">
						<input class="btn btn-default" type="button "value="Cambiar" onclick="mifuncion1()">
						<?php
					echo Close('div');
				echo Close('div');
				echo Open('div',array('class'=>'col-md-5'));
					echo Open('div',array('class'=>'cambio-descripcion-serv'));
						echo tagcontent('h4','Descripciones acerca de los servicios que ofrecemos',array(''));
						echo Open('select',array('class'=>'form-control','id'=>'titulos_descrip','name'=>'titulos_descrip'));
						?>
								<option value="1">Software</option>
								<option value="2">Diseño Web</option>
								<option value="3">APLICACIONES MÓVILES</option>
								<option value="4">SERVICIOS EN LA NUBE</option>
								<?php
						echo CLose('select');
						?>
						<input class="btn btn-default" type="button" value="Seleccionar"><br>
						<br><textarea class="form-control" rows="3" id="descrip_servicios" placeholder="Descripcion a cambiar"></textarea>
						<input class="btn btn-default" type="button" value="Cambiar" onclick="mifuncion2()"><br><br>
						<?php
					echo Close('div');
				echo Close('div');
			echo Close('div');
			echo Open('div',array('class'=>'productos row'));
				echo Open('div',array('class'=>'col-md-5'));
					echo Open('div',array('class'=>'cambio-descripcion-serv'));
						echo tagcontent('h4','Titulos de los productos que ofrecemos',array(''));
						echo Open('select',array('class'=>'form-control','id'=>'titulos_descrip','name'=>'titulos_descrip'));
						?>
								<option value="1">Software</option>
								<option value="2">Diseño Web</option>
								<option value="3">APLICACIONES MÓVILES</option>
								<option value="4">SERVICIOS EN LA NUBE</option>
								<?php
						echo CLose('select');
						?>
						<input class="btn btn-default" type="button" value="Seleccionar"><br>
						<br><input type="text" class="form-control" placeholder="Titulo a cambiar">
						<input class="btn btn-default" type="button" value="Cambiar">
						<?php
					echo Close('div');
				echo Close('div');
				echo Open('div',array('class'=>'col-md-5'));
					echo Open('div',array('class'=>'cambio-descripcion-serv'));
						echo tagcontent('h4','Descripciones acerca de los productos que ofrecemos',array(''));
						echo Open('select',array('class'=>'form-control','id'=>'titulos_descrip','name'=>'titulos_descrip'));
						?>
								<option value="1">Software</option>
								<option value="2">Diseño Web</option>
								<option value="3">APLICACIONES MÓVILES</option>
								<option value="4">SERVICIOS EN LA NUBE</option>
								<?php
						echo CLose('select');
						?>
						<input class="btn btn-default" type="button" value="Seleccionar"><br>
						<br><textarea class="form-control" rows="3" placeholder="Descripcion a cambiar"></textarea>
						<input class="btn btn-default" type="button" value="Cambiar"><br><br>
						<?php
					echo Close('div');
				echo Close('div');
			echo Close('div');
		echo Close('section');
	echo Close('div');
echo Close('body');

//declaracion de todos los js
$jsquery =array(base_url('resources/js/jquery-1.12.1.min.js'),'');
	echo jsload($jsquery);
$jsboots =array(base_url('resources/js/bootstrap.min.js'),'');
	echo jsload($jsboots);
$jsmain =array(base_url('resources/js/main.js'),'');
	echo jsload($jsmain);
?>