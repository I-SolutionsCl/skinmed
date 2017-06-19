<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SKINMED</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
        <link href="css/cubeportfolio.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

        <!-- Theme skin -->
        <link id="t-colors" href="skins/default.css" rel="stylesheet" />

        <!-- boxed bg -->
        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div id="wrapper">
            <?php include ('include/header.php'); ?>
            <section id="content" >
                <div class="container">
                    <div class="rows">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <h3>Informacion</h3>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Direccion</h3>
                                    </div>
                                    <div class="panel-body">
                                        Del Inca 4446, Piso 3, Oficina 301 y 305.<br>
                                        Las Condes, Región Metropolitana <br>
                                        Sector Nororiente de Santiago, a pasos del metro escuela militar.<br>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Telefonos</h3>
                                    </div>
                                    <div class="panel-body">
                                        <i class="fa fa-phone" aria-hidden="true"></i> +56 2 2286 99170<br>
                                        <i class="fa fa-whatsapp"></i> +56 9 9758 95729<br>
                                        <i class="fa fa-whatsapp"></i> +56 9 9758 94124<br>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-lg-6 ">
                                <h3>Contactenos</h3>
                                <form action="" method="post" role="form">
                                    <div class="form-group">
                                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" />
                                    </div>
                                    <div class="form-group">
                                        <select id="como-nos-conociste" name="como-nos-conociste" class="form-control">
                                            <option selected="">Como nos conociste</option>
                                            <option>Via Publica</option>
                                            <option>Google</option>
                                            <option>Redes Sociales</option>
                                            <option>Sitio Web</option>
                                            <option>Agmigo / familiar</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="4" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-mg">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h3 class="">Donde Encontrarnos</h3>
                        </div>
                        <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.200178751601!2d-70.584561485084!3d-33.4180251032344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf197012727f%3A0x1b87ea24b4cb3e32!2sDel+Inca+4446%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1497458681722" <!--width="800" height="450"--> frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            
        </div>
        <?php include ('include/footer.php'); ?>
    </body>
</html>

