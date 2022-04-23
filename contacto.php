<!DOCTYPE html>

<!-- Página donde el usuario puede ponerse en contacto con la iglesia Hacienda del Rey -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com">. Informa al navegador que se va a realizar
     una conexión al servidor remoto e inicie la carga lo antes posible -->

<html lang="es">
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/icono_iglesia.png"/>
        <link href="libs/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="libs/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/contacto.css" rel="stylesheet" type="text/css"/>        
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $direccion = $_POST['direccion'];
                $solicitud = $_POST['solicitud'];
                $comentario = $_POST['comentario'];
            }            
        ?>  
        
        <div class="contenedor">
            <header class="encabezado">
                
                <!-- ***** Inicio sección logotipo encabezado ***** -->
                <div class="logo">
                    <a href="index.html"><img src="imagenes/Logo_iglesia_color.png" alt="Logo oficial de la iglesia Hacienda del Rey"/></a>
                    <a href="#" class="btnMenu" id="btnMenu"><i class="icono fas fa-bars"></i></a>
                </div>
                <!-- ***** Fin sección logotipo encabezado ***** -->
                
                <!-- ***** Inicio sección menú de opciones ***** -->
                <nav class="menu" id="menu">
                    <a href="nuestraVision.html"><i class="fas fa-church"></i>Quiénes somos</a>
                    <a href="reflexiones.html"><i class="fas fa-envelope-open-text"></i>Reflexiones</a>
                    <a href="actividades.html"><i class="far fa-calendar-alt"></i>Actividades</a>
                    <a href="index.html"><i class="fas fa-sign-out-alt"></i>Salir</a>
                </nav>
                <!-- ***** Fin sección menú de opciones ***** -->
            
            </header>
            
            <!-- ***** Inicio sección principal ***** -->
            <main class="contenido">
                <section>
                    <h1><i class="opcion fas fa-envelope-open-text"></i>&nbsp;Contáctenos</h1>
                    <hr>
                    <div class="contenedorFormulario">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="formulario" id="formulario" method="POST">
                            <h3>Si desea hacer una consulta o solicitud de oración, escríbanos:</h3>
                            
                            <!-- Grupo: nombre -->
                            <div class="grupo formulario_grupo" id="grupo_nombre">                                
                                <div class="formulario_grupo_input">
                                    <label for="nombre" class="frmLabel">Nombre:</label>
                                    <input type="text" class="formulario_input" id="nombre" name="nombre" value="<?php if(isset($nombre)){ echo $nombre; } ?>"
                                           placeholder="Escribe tu nombre aquí">
                                    <i class="formulario_validacion_estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario_input_error">Error: Debes agregar nombre y dos apellidos y solamente se permiten letras</p>
                            </div>
                            
                            <!-- Grupo: teléfono -->
                            <div class=" grupo formulario_grupo" id="grupo_telefono">                                
                                <div class="formulario_grupo_input">
                                    <label for="telefono" class="frmLabel">Teléfono:</label>
                                    <input type="text" class="formulario_input" id="telefono" name="telefono" value="<?php if(isset($telefono)){ echo $telefono; } ?>"
                                           placeholder="22223333">
                                    <i class="formulario_validacion_estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario_input_error">Error: No se permiten letras, espacios ni símbolos como número telefónico</p>
                            </div>
                            
                            <!-- Grupo: correo -->
                            <div class=" grupo formulario_grupo" id="grupo_correo">                                
                                <div class="formulario_grupo_input">
                                    <label for="correo" class="frmLabel">Correo:</label>
                                    <input type="text" class="formulario_input" id="correo" name="correo" value="<?php if(isset($correo)){ echo $correo; }?>"
                                           placeholder="correo@correo.com">
                                    <i class="formulario_validacion_estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario_input_error">Error: No has ingresado tu dirección de correo o la has escrito mal</p>
                            </div>
                                                                                    
                            <div class="grupo">
                                <label for="direccion" class="frmLabel">Lugar desde donde nos escribes:</label>
                                <input type="text" class="formulario_input" id="direccion" name="direccion" placeholder="Escribe lugar y dirección de tu residencia">
                            </div>
                            
                            <div class="grupo">
                                <label for="solicitud" class="frmLabel">Describe tu solicitud:</label>
                                <textarea class="formulario_input" id="solicitud" name="solicitud"></textarea>
                            </div>
                            
                            <div class="grupo">
                                <label for="comentario" class="frmLabel">Si te ha gustado nuestra sitio web, déjanos tus comentarios (opcional):</label>
                                <textarea class="formulario_input" id="comentario" name="comentario"></textarea>
                            </div>

<!--                            <div class="formulario_mensaje" id="formulario_mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<b>Error:</b>&nbsp;Favor rellenar el formulario correctamente</p>
                            </div>-->

                            <input type="submit" id="boton" class="frmBoton" name="enviar" value="Enviar datos">
                                                                                                                   
                            <?php                                    
                                require 'validaciones.php';
                            ?>                                
                            
                        </form>
                                                                        
                        <div class="ubicacion">
                            <div class="contenedorMapa">
                                <h3>¿Dónde estamos?</h3>
                                <p>Si desea visitarnos utilice este mapa como su guía</p>
                                <div class="mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.70283055067!2d-84.04686928474239!3d9.958663976475945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e469a2e4657d%3A0x9826495c03757fda!2sIglesia%20Cristiana%20Hacienda%20del%20Rey%2C%20Moravia!5e0!3m2!1ses-419!2scr!4v1628888488798!5m2!1ses-419!2scr" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            
                            <div class="contenedorDatos">
                                <h3>Datos de contacto:</h3>
                                <div class="datos">
                                    <i class="icono fas fa-map-marker-alt"></i>
                                    <p>Moravia, del supermercado Mega Súper 200 mts al este</p>
                                </div>
                                <div class="datos">
                                    <i class="icono fas fa-mobile-alt"></i>
                                    <p>2222-3333</p>
                                </div>
                                <div class="datos">
                                    <i class="icono fas fa-envelope-open-text"></i>
                                    <p>Lorem_ipsum@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- ***** Fin sección principal ***** -->
            
            <!-- ***** Archivos javascript ***** -->            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="libs/sweetalert2.all.min.js" type="text/javascript"></script>
            <script src="javascript/menu.js" type="text/javascript"></script>            
            <script src="javascript/validaciones.js" type="text/javascript"></script>
        </div>
    </body>
</html>
