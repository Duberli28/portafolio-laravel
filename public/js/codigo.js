
$(function() {
  
    // elementos de la lista
    // let migaPan = document.querySelector(".nav li a"); 
    //Aquí seleccionamos todos los enlaces (etiqueta a) que estén dentro del DIV con la clase card-header y p-2
    //Se puede colocar solo card-header, o colocarle una clase única que identifique a esa zona nada más.
    let migaPan = $(".card-header.p-2").find("a");
  
    // manejador de click sobre todos los elementos
    // Aquí activamos el evento a cualquier elemento que tenga la clase nav-link, si es que tienes otros elementos en tu vista con
    // esa clase entonces se activará el evento  también, lo ideal es colocarle a esos elementos una clase única que los identifique
    $(".tab").click(function() {
       // eliminamos active de todos los elementos
   
       //    migaPan.removeClass("active");
       //Recorre todas las etiquetas a que se seleccionaron y les quita la clase active
      migaPan.each(function(i){
         $(this).removeClass("activo");
      });
       // activamos el elemento clicado.
       //Una vez que termina el recorrido se le asigna la clase active al elemento que se le hizo clic
       $(this).addClass("activo");
    });
  
  });


  var mq = window.matchMedia( "(max-width: 767px)" );

   if (mq.matches) {
   // la anchura del documento es 500px o mayor
   

   let modificarTexto= document.querySelector('.cambiarTexto');

   modificarTexto.innerHTML='#quedateEnCasa';

 }