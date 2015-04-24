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
                    <a class="navbar-brand" href="http://localhost">ENTONO APPS - YEE</a>
                </div>
                <div class="navbar-collapse collapse">
                </div>
            </div>
        </div>
        <div id="contenedor-principal" class="container-fluid">
            <div class="row">
                <?php
                    $directorio = opendir("."); // directorio localhost
                    while ( $archivo = readdir($directorio) ) { // listado del directorio ?>
                        <?php if ( is_dir($archivo) ): // solo directorios (apps) ?>
                            <?php if ( $archivo != '.' && $archivo != '..' && $archivo != '.git' && $archivo != 'apps' && $archivo != 'phpMyAdmin' ): // excluir del listado ?>

                                <div class="col-sm-3">
                                    <div class="well text-center">
                                        <span class="glyphicon glyphicon-hdd" aria-hidden="true" style="font-size:30pt;"></span>
                                        <br>
                                        <a href="http://localhost/<?= $archivo ?>" target="_blank"><kbd><?= $archivo ?></kbd></a>
                                    </div>
                                </div>

                            <?php endif ?>
                        <?php endif ?>
                    <?php }
                ?>
            </div>
        </div>
    </body>
</html>