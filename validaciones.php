<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    

    // Realizamos las validaciones para el formulario. Verificamos si existe algún elemento con el nombre 'submit'
    if(isset($_POST['nombre'])) {
        
        // Verifica si el campo 'nombre' está vacío
        if(empty($_POST['nombre'])) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu nombre</p>";                 
        } 
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen($_POST['nombre']) < 10) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Debes agregar nombre y dos apellidos y solamente se permiten letras</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu nombre de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo 'teléfono' está vacío        
        if(empty($_POST['telefono'])) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega un número telefónico</p>";
        } 
        
        // Verifica que los datos ingresados no sean diferentes a valores numéricos
        else if (!is_numeric($_POST['telefono'])) {    
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: No se permiten letras, espacios ni símbolos como número telefónico</p>";
        }
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen($_POST['telefono']) < 8) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: La cantidad de números ingresados no corresponde a un número telefónico</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu número telefónico de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo 'correo' está vacío
        if(empty($_POST['correo'])) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu dirección de correo</p>";
        }
        
        // Esta función verifica que el contenido de la variable sea el correcto usando el filtro especificado
        else if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Has escrito mal tu dirección de correo</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu dirección de correo de forma correcta</p>";
        }
                
        if(isset($_POST['submit'])) {
            require 'enviarCorreo.php';
        }
    }        
    
