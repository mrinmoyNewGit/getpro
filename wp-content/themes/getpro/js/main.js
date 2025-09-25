//this is only for demonstration of different fly-in directions
var changeClass = function(name){
  $('#search, #nav ul').removeAttr('class').addClass(name);

}

/*##################### OWL CAROUSEL ############################*/

jQuery(document).ready(function($){

   $("#banner").owlCarousel({
    autoplay: true,
    loop:true,
    center: false,
    items : 6, 
    navText:  false,
    dots: false,       
    nav : false,
    mouseDrag:true,
    lazyLoad : false,
    smartSpeed: 2000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        992:{
            items:1
        },
        1000:{
            items:1
        }
    }
      }); 
                  
 });   

/*##################### End OWL CAROUSEL ############################*/


/*##################### OWL CAROUSEL ############################*/

jQuery(document).ready(function($){

   $("#expertise_area").owlCarousel({
    autoplay: false,
    loop:true,
    center: false,
    items : 6, 
    navText:  false,
    dots: true,       
    nav : false,
    mouseDrag:true,
    lazyLoad : false,
    smartSpeed: 2000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        },
        1000:{
            items:3
        }
    }
      }); 
                  
 });   

/*##################### End OWL CAROUSEL ############################*/

/*##################### OWL CAROUSEL ############################*/

jQuery(document).ready(function($){
   $("#our_team").owlCarousel({
      autoplay: true,
      loop:true,
      items : 6, 
      navText:  false,
      dots: false,       
      nav : false,
      mouseDrag:true,
      lazyLoad : false,
      smartSpeed: 2000,
      responsive:{
          0:{ items:1 },
          768:{ items:2 },
          992:{ items:3 },
          1000:{ items:3 }
      }
   }); 
});  

/*##################### End OWL CAROUSEL ############################*/