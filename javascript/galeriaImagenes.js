/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
   $('#slideshow .contenedor-imagenes').slick({
        slidesToShow: 1,                
        infinite: true,                
        autoplay: true,        
        autoplaySpeed: 7000,
        dots: true,
        prevArrow: '<span class="flecha-previo"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="flecha-siguiente"><i class="fas fa-chevron-right"></i></span>'           
   });
});