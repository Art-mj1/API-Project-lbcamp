navigator.geolocation.getCurrentPosition((position) => {
 const lat= position.coords.latitude;
 const lon= position.coords.longitude;
 // console.log(lat, lon);
 const radiVal= 20000;

 $.ajax({
  url: `/lbcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`, 
  typr:'GET',
  dataType:'json',
  success: function(result){
  // console.log(result);
  const item = result.body.items.item;
  console.log(item);
  }
 });
});