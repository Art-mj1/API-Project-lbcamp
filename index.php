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
  <link rel="stylesheet" href="/lbcamp/css/style.css">
   <!-- Animation Style Link -->
   <link rel="stylesheet" href="/lbcamp/css/animation.css">
</head>
<body>
 
<div class="wrap">
 <!-- Main Background Image -->
 <img src="/lbcamp/img/gocamp_bg.png" alt="" class="bg">

 <!-- Header -->
 <?php include $_SERVER["DOCUMENT_ROOT"].'/lbcamp/include/header.php';?>

 <!-- Search and Select Bar -->
 <div class="contents_bar">
  <div class="center">
      <div class="search_bar">
         <input type="text" placeholder="검색할 키워드를 입력해주세요">
         <button><img src="/lbcamp/img/gocamp_icon.png" alt=""></button>
      </div>
      <div class="drop_bar">
         <div class="dropdown">
            <div class="select">
               <span>내 주변 캠핑장 검색</span>
               <i class="fa fa-chevron-down"></i>
            </div>
            <ul class="dropdown_menu">
              <li><a href="/lbcamp/search_position.php?radi=10000">반경 10KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=20000">반경 20KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=30000">반경 30KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=40000">반경 40KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=50000">반경 50KM 검색</a></li>
            </ul>
         </div>
      </div>
  </div>
 </div>
</div>


<div id="landing" class="start">
 <div class="landing_logo">
    <img src="/lbcamp/img/gocamp_logo.png" alt="">
 </div>
 <h2>Go Camp be free</h2>
</div>
<!-- Jquery Framework Load -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/lbcamp/js/main.js"></script>
<!-- <script src="/lbcamp/js/current_position.js"></script> -->
<script>
   const key_btn = document.querySelector('.search_bar button');
   key_btn.addEventListener('click',function(){
    const key_val = document.querySelector('.search_bar input').value;
    location.href=`/lbcamp/key_position.php?key_val=${key_val}`;
   });

</script>
</body>
</html>