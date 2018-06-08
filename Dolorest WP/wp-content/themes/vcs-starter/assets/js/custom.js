(function(){

var parallax= document.querySelector(".hero");
window.addEventListener("scroll", function() {
    var scrolledHeight= window.pageYOffset,
    limit = parallax.offsetTop + parallax.offsetHeight;
    if(scrolledHeight > parallax.offsetTop && scrolledHeight <= limit) {
        parallax.style.backgroundPositionY= (scrolledHeight - parallax.offsetTop) /1.5+ "px";
    } 
    else {
        parallax.style.backgroundPositionY= "0";
    }
});


 $('.burger-menu, nav a').click(function(){
      $('nav').toggleClass('show');
      
    });




//  $('.posts-block').masonry({
//   itemSelector: '.grid-item',
//   originTop: false,
//   //resize: false,
//   fitWidth: true,
//   columnWidth: 240,
// });




$( document ).ready(function() {

    var width = $(window).width();

    $(window).resize(function() {
    if (width > 619 && $(window).width() < 619) {
        location.reload();
    }
    else if (width < 619 && $(window).width() > 619) {
        location.reload();
    }
    });

    if ( $(window).width() > 619) {
     
        $('.posts-block').isotope({
          layoutMode: 'masonryHorizontal',
          itemSelector: '.square',
          masonryHorizontal: {
            rowHeight: 240
          }
        });
    }    

   
});

//console.log($(window).width());






// var map;
//   function initMap() {
//     map = new google.maps.Map(document.getElementById('map'), {
//       center: {lat: 54.68, lng: 25.257},
//       zoom: 14
//     });
//   }


        // ymaps.ready(init);
        // var myMap, 
        //     myPlacemark;

        // function init(){ 
        //     myMap = new ymaps.Map("map", {
        //         center: [55.76, 37.64],
        //         zoom: 7
        // });

        // myPlacemark = new ymaps.Placemark([55.76, 37.64], { hintContent: 'Moscow!', balloonContent: 'Capital of Russia'
        //     });
            
        //     myMap.geoObjects.add(myPlacemark);
        // }


//         // Initialize and add the map
// function initMap() {
//   // The location of Uluru
//   var uluru = {lat: -25.344, lng: 131.036};
//   // The map, centered at Uluru
//   var map = new google.maps.Map(
//       document.getElementById('map'), {zoom: 4, center: uluru});
//   // The marker, positioned at Uluru
//   var marker = new google.maps.Marker({position: uluru, map: map});
// }

})();




  


 