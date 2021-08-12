<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
 <title>Go Camping</title>

 <!-- Favicon Link -->
 <link rel="shortcut icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
 <link rel="icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
 <link rel="apple-touch-icon" href="/lbcamp/img/favicon.ico">


 <!-- Font Awesome Link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/lbcamp/css/owl.carousel.css">

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
   <!-- Animation Style Link -->
   <link rel="stylesheet" href="/lbcamp/css/animation.css">
</head>
<body>
 
<div class="wrap">
 <!-- Main Background Image -->

 <!-- Header -->
 <?php include $_SERVER["DOCUMENT_ROOT"].'/lbcamp/include/header.php';?>

 <!-- Map Box -->
 <div class="map_img" id="map">
    <img src="img/gocamp_map.jpg" alt="">
 </div>

 <!-- Search and Select Bar -->
   <div class="contents_bar search_position">
      <div class="center">
      <div class="search_bar">
         <input type="text" placeholder="검색할 키워드를 입력해주세요">
         <button><img src="/lbcamp/img/gocamp_icon.png" alt=""></button>
      </div>
      </div>
   </div>
  <!-- End of Contents bar -->
 <div class="bt_box">
    <span><i class="fa fa-chevron-up"></i></span>
    <div class="bt_sl carousel_section">
       <div class="carousel_container">
        <div class="owl-carousel owl-theme" id="contents_box">

         <!-- <div class="carousel_item">
           <div class="item_card">
              <div class="sl_img">
                 <img src="img/ex.jpg" alt="">
              </div>
              <div class="sl_txt">
                 <h2>청계산 캠핑장</h2>
                 <p>청계산 캠핑장은 청계산에서 겁나 멀게 있으며 어쩌구 저쩌구..</p>
              </div>
              <div class="sl_icons">
                 <img src="img/ico_mart.png" alt="">
                 <em>운동시설,샤워장</em>
              </div>
           </div>
         </div> -->
         <!-- end of carousel_item -- Looping item -->

        </div>
        <!-- end of owl-carousel -- wrap all slide items -->
       </div>
       <!-- end of carousel_container -->
    </div>
 </div>
</div>

<!-- Jquery Framework Load -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/lbcamp/js/owl.carousel.js"></script>
<script src="/lbcamp/js/main.js"></script>
<script src="/lbcamp/js/key_position.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCW9CWV25aNbKNllvax_gO8bwj-VY9FtY&region=kr"></script>
</body>
</html>