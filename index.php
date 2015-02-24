<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>APPS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <link href="apps/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .navbar-static-top {
        margin-bottom: 19px;
        }
        </style>
        <script src="apps/js/jquery-1.11.2.min.js"></script>
        <script src="apps/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost">ENTONO DE APPS - YEE</a>
                </div>
                <div class="navbar-collapse collapse">
                </div>
            </div>
        </div>


        <div id="contenedor-principal" class="container-fluid">

        	<?php
				$directorio = opendir("."); //ruta actual

				while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente

				    if (is_dir($archivo)) { //verificamos si es o no un directorio
			
				        //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes

				        echo '<a href="http://localhost/' . $archivo . '" target="_blank">' . $archivo . '</a><br/>';
				    }else{
				        //echo $archivo . "<br />";
				    }
				}
			?>

        </div>


    </body>
</html>