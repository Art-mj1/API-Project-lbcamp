<!DOCTYPE html>
<html lang="en" id="detail_html">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
 <title>Camping || Details</title>

 <!-- Favicon Link -->
 <link rel="shortcut icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
 <link rel="icon" href="/lbcamp/img/favicon.ico" type="image/x-icon">
 <link rel="apple-touch-icon" href="/lbcamp/img/favicon.ico">


 <!-- Font Awesome Link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
   <!-- Animation Style Link -->
   <link rel="stylesheet" href="/lbcamp/css/animation.css">
</head>
<body id="detail_page">
 
<div class="wrap">

 <!-- Header -->
 <?php include $_SERVER["DOCUMENT_ROOT"].'/lbcamp/include/header.php';?>
 
 <div class="details">
    <div class="detail_bg">
     <!-- <img src="img/ex.jpg" alt=""> -->
     <!-- <span class="radi_bar"></span> -->
    </div>
    <div class="detail_contents">
        <!-- <div class="detail_wrap">
         <h2 class="detail_tit">캠핑장 이름</h2>
         <span class="line"></span>
         <div class="detail_info">
            <p>
             <span class="info_ico"> <i class="fa fa-map-marker"></i></span>
             <span class="info_txt">서울시 서초구 에이비시로 80번길 어쩌고 저쩌고..</span>
            </p>
            <p>
             <span class="info_ico"> <i class="fa fa-dog"></i></span>
             <span class="info_txt">서울시 서초구 에이비시로 80번길 어쩌고 저쩌고..</span>
            </p>
            <p>
             <span class="info_ico"> <i class="fa fa-cutlery"></i></span>
             <span class="info_txt">서울시 서초구 에이비시로 80번길 어쩌고 저쩌고..</span>
            </p>
            <p>
             <span class="info_ico"> <i class="fa fa-clock"></i></span>
             <span class="info_txt">서울시 서초구 에이비시로 80번길 어쩌고 저쩌고..</span>
            </p>
         </div>
         <!-- end of detail_info-->
         <!-- <span class="line"></span>
         <h2 class="detail_tit">캠핑장 소개</h2>
         <span class="line"></span>
         <div class="info_desc">
         대통령은 국가의 독립·영토의 보전·국가의 계속성과 헌법을 수호할 책무를 진다. 모든 국민은 소급입법에 의하여 참정권의 제한을 받거나 재산권을 박탈당하지 아니한다. 국회는 의장 1인과 부의장 2인을 선출한다. 대통령은 국회에 출석하여 발언하거나 서한으로 의견을 표시할 수 있다. 이 헌법중 공무원의 임기 또는 중임제한에 관한 규정은 이 헌법에 의하여 그 공무원이 최초로 선출 또는 임명된 때로부터 적용한다.
         </div>
         <span class="line"></span>
         <h2 class="detail_tit">위치 지도</h2>
         <div class="detail_map"></div>
       </div>  --> 
       <!-- End of detail_wrap -->
    </div>
 </div>
 <!-- end of details -->
</div>

<!-- Jquery Framework Load -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCW9CWV25aNbKNllvax_gO8bwj-VY9FtY&region=kr"></script>
<script src="/lbcamp/js/main.js"></script>
<script src="/lbcamp/js/detail_position.js"></script>
<script>
   window.addEventListener('scroll',function(){
    const header = document.querySelector('header');
    if(window.pageYOffset > 0){
     header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
   });
</script>
</body>
</html>