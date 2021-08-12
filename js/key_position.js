const key_val = document.location.href.split("=")[1];
const decord_val = decodeURI(key_val);
const contentBox = document.querySelector("#contents_box");
// console.log(decord_val);
// const imgBox = document.querySelector(".map_img");

$.ajax({
  url: `/lbcamp/php/key.php?key=${decord_val}`,
  Type: "GET",
  dataType: "json",
  success: function (result) {
    // console.log(result);
    const item = result.body.items.item;
    // let imgItem = "";
    // let detailItem = "";
    let currentItems = "";

    function itemDOM() {}

    if (Array.isArray(item)) {
      item.forEach(function (data) {
        currentItems = `
    
  <div class="carousel_item">
        <div class="item_card">
          <a href="/lbcamp/detail_position.php?lat=${data.mapY}&lon=${data.mapX}">
          <div class="sl_img">
            <img src="${data.firstImageUrl}" alt="" onerror="this.src='/lbcamp/img/no_image.png'">
          </div>
          </a>
          <div class="sl_txt">
            <h2>${data.facltNm}</h2>
            <p>${data.addr1}</p>
          </div>
          <div class="sl_icons">
            <img src="img/ico_mart.png" alt="">
            <em>${data.sbrsCl}</em>
          </div>

        </div>
      </div>
      </div>
  `;
        contentBox.innerHTML += currentItems;
        // console.log(data);

        var map;

        function initMap() {
          var centerTarget = {
            lat: Number(item[0].mapY),
            lng: Number(item[0].mapX),
          };

          map = new google.maps.Map(document.getElementById("map"), {
            zoom: 7,
            center: centerTarget,
          });
          // console.log(item.length);
          for (let i = 0; i < item.length; i++) {
            new google.maps.Marker({
              position: new google.maps.LatLng(
                Number(item[i].mapY),
                Number(item[i].mapX)
              ),
              map: map,
              //label: "서울 중심 좌표",
              icon: "/lbcamp/img/marker.png",
            });
          }
        }
        initMap();
      });
    } else {
      currentItems = `
    
  <div class="carousel_item">
        <div class="item_card">
          <a href="/lbcamp/detail_position.php?lat=${item.mapY}&lon=${item.mapX}">
          <div class="sl_img">
            <img src="${item.firstImageUrl}" alt="" onerror="this.src='/lbcamp/img/no_image.png'">
          </div>
          </a>
          <div class="sl_txt">
            <h2>${item.facltNm}</h2>
            <p>${item.addr1}</p>
          </div>
          <div class="sl_icons">
            <img src="img/ico_mart.png" alt="">
            <em>${item.sbrsCl}</em>
          </div>

        </div>
      </div>
      </div>
  `;
      contentBox.innerHTML += currentItems;
      // console.log(item);
      var map;

      function initMap() {
        var centerTarget = {
          lat: Number(item.mapY),
          lng: Number(item.mapX),
        };

        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: centerTarget,
        });
        new google.maps.Marker({
          position: centerTarget,
          map: map,
          icon: "/lbcamp/img/marker.png",
        });
      }
      initMap();
    }
  },
});
$(document).ajaxComplete(function () {
  //ajax 데이터가 DOM으로 모두 로드된 이후 실행되는 함수
  let slider = $(".owl-carousel");
  slider.each(function () {
    $(this).owlCarousel({
      loop: false,
      margin: 5,
      autoHeight: false,
      responsive: {
        0: {
          items: 1,
          stagePadding: 20,
          margin: 15,
        },
      },
    });
  });
});