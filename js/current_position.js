

navigator.geolocation.getCurrentPosition((position) => {

 const lat = position.coords.latitude;
 const lon = position.coords.longitude;
 const queryDOM = document.querySelector("#query_val");
 const loca= window.location.href;
 const radiVal = loca.split('=')[1];
 const kmVal = radiVal.slice(0,2);

 queryDOM.innerHTML = `${kmVal} KM 반경 캠핑장`;
 console.log(loca);
 console.log(radiVal);
  $.ajax({
   url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`, 
   typr:'GET',
   dataType:'json',
   success: function(result){
   // console.log(result);
   const item = result.body.items.item;
   console.log(item);

   // script.js
    var map;

    function initMap() {
      var centerTarget = { lat: Number(lat) ,lng: Number(lon) };
      map = new google.maps.Map( document.getElementById('map'), {
          zoom: 10,
          center: centerTarget
        }
      );

      for(let i=0;i<item.length;i++){
        new google.maps.Marker({
          position: new google.maps.LatLng(Number(item[i].mapY),Number(item[i].mapX)),
          map: map,
          icon: '/lbcamp/img/marker.png'
        });
       }
      }
    initMap();
     }
  });
});