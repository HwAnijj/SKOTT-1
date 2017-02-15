<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>지도 생성하기</title>
  
</head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>

    .wrap {position: absolute;left: 0;bottom: 40px;width: 288px;height: 132px;margin-left: -144px;text-align: left;overflow: hidden;font-size: 12px;font-family: 'Malgun Gothic', dotum, '돋움', sans-serif;line-height: 1.5;}
    .wrap * {padding: 0;margin: 0;}
    .wrap .info {width: 286px;height: 120px;border-radius: 5px;border-bottom: 2px solid #ccc;border-right: 1px solid #ccc;overflow: hidden;background: #fff;}
    .wrap .info:nth-child(1) {border: 0;box-shadow: 0px 1px 2px #888;}
    .info .title {padding: 5px 0 0 10px;height: 30px;background: #eee;border-bottom: 1px solid #ddd;font-size: 18px;font-weight: bold;}
    .info .close {position: absolute;top: 10px;right: 10px;color: #888;width: 17px;height: 17px;background: url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/overlay_close.png');}
    .info .close:hover {cursor: pointer;}
    .info .body {position: relative;overflow: hidden;}
    .info .desc {position: relative;margin: 13px 0 0 90px;height: 75px;}
    .desc .ellipsis {overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
    .desc .jibun {font-size: 11px;color: #888;margin-top: -2px;}
    .info .img {position: absolute;top: 6px;left: 5px;width: 73px;height: 71px;border: 1px solid #ddd;color: #888;overflow: hidden;}
    .info:after {content: '';position: absolute;margin-left: -12px;left: 50%;bottom: 0;width: 22px;height: 12px;background: url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')}
    .info .link {color: #5085BB;}

<<<<<<< HEAD

      * {
        box-sizing:border-box;
      }

      body {
        background-image: url('/static/image/background.jpg');
      }

      .container {
        width :95vw;
        height :95vh;
/*        border :2px solid red;*/
        margin-top:20px;

      }

      header {
        background-color: white;
        font-size:15pt;
        border : 2px solid powderblue;
        padding :10px;
        display:flex;
        flex-direction:row;
        margin-top : 20px;

      }
      nav {
/*        border :3px solid black;*/
        display:flex;
        flex-direction:row;
        height:81.5vh;
        width:92.8vw;
      }

      article {
/*         border : 3px solid black;*/
         width:70vw;
         height:80vh;
      }

      aside {
        background-color: white;
         width:30vw;
         height:80vh;
      }

      #div_Logo {

        margin-right: 120px
      }

      #div_search {
        display:flex;
        flex-direction:row;
        margin:auto;
      }

      #div_Login {
         margin-left:20vw;

      }

      #map {
/*        border :3px solid red;*/
         width:64.9vw;
         height:80.8vh;
      }

      #course {
/*        border:2px solid black;*/
        width:28.5vw;
        height:80.8vh;
      }

      .div_head {
         display :flex;
        flex-direction:column;
      }

      .div_course {
/*        border :2px solid blue;*/
        width:28.3vw;
        height:20.4vh;
        display :flex;
        flex-direction:row;
      }

      .div_img {
        display :flex;
        flex-direction:column;
      }

      .div_content {
        font-size: 10pt;
        width:19.5vw;
        line-height: 2em;
      }

      #p_star {
        font-size: 20pt;
        margin-left: 10px;
      }

    .first_tour {
      font-size:15px;
    }



</style>

</head>

<body>
<div class ="container">
    <header>

      <div id = "div_Logo">
        로고이미지
      </div>

      <div id="div_search">
        <input type="text" class="form_control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:30vw">

       <button onclick="ajax_test()" class="btn btn-primary" style ="width:10vw; height:4vh">찾아보기</button>

      <div id = "div_Login">
        Facebook Login
      </div>

    </header>
    <nav id = "nav_body">

      <article>
          <div id="map"></div>
      </article>


      <aside>

      <?php foreach ($recommand_spot as $item) { ?>

        <div id="course" style="overflow:scroll;">
          <div class="div_head">
            <div class = "div_course">
              <div class = "div_img">
              <?php 
                  $image_idx = $item->reco_idx;
              ?>
<!--                   echo $image_idx; -->


              <img id ="img_div_course" src="'/static/image/'<?php echo $image_idx;?>.jpg" width="150px" height="150px">

               <?php 
                   $star = $item->reco_star;
               ?>

               <?php   if($star==1){ ?>

                        <p id="p_star">
                        ★☆☆☆☆ 
                        </p>

                   <?php } else if($star==2) { ?>
                              <p id="p_star">
                              ★★☆☆☆ 
                              </p>

                    <?php } else if($star==3) { ?>
                              <p id="p_star">
                              ★★★☆☆ 
                              </p>

                   <?php } else if($star==4) { ?>
                              <p id="p_star">
                              ★★★★☆ 
                              </p>

                    <?php } else if($star==5) { ?>
                              <p id="p_star">
                              ★★★★★ 
                              </p>
                   <?php } ?>



              </div>
              <div class ="div_content"  style="overflow:scroll;">
                  <table>
                    <tr>
                      <td class = "first_tour">(관광지명)</td>
                    </tr>

                    <tr>
                      <td><?php echo $item->reco_name; ?></td>
                    </tr>

                    <tr>
                      <td class = "first_tour">(주소)</td>
                    </tr>

                    <tr>
                      <td><?php echo $item->reco_address; ?></td>
                    </tr>

                    <tr>
                      <td class = "first_tour">(내용)</td>
                    </tr>


                    <tr>
                      <td><?php echo $item->reco_text; ?></td>
                    </tr>
                  </table>
              </div>
            </div>

                  <?php } ?>

         </div>
      </aside>

    </nav>



<!-- <a href="javascript:;" onclick="test()" style="z-index: -1;">
  <div id="test" style="visibility: visible; background-color: #FF0000; width: 300px; margin-top: -100px; height: 400px; z-index: -1; position: absolute;">
</a> -->



<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script src="//code.jquery.com/jquery.min.js"></script>

<script>

function test() {
  $('#test').attr('style', 'visibility: hidden');
}

var lat = <?php echo json_encode($lat)?>; //데이터 뽑기 
var lng = <?php echo json_encode($lng)?>;
var idx = <?php echo json_encode($idx)?>;
var name = <?php echo json_encode($name)?>;
var text = <?php echo json_encode($text)?>;
var image = <?php echo json_encode($image)?>;

var slice_nm = name.split(',');

var mapContainer = document.getElementById('map'), // 지도의 중심좌표
    mapOption = { 
        center: new daum.maps.LatLng(37.565446040775775, 126.98075795787096), // 지도의 중심좌표
        level: 7 // 지도의 확대 레벨
    }; 

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

for (var i = 0; i<= 3; i++) {

// 지도에 마커를 표시합니다 
var marker = new daum.maps.Marker({
  map: map, 
  position: new daum.maps.LatLng(lat[i], lng[i])
});

// 커스텀 오버레이에 표시할 컨텐츠 입니다
// 커스텀 오버레이는 아래와 같이 사용자가 자유롭게 컨텐츠를 구성하고 이벤트를 제어할 수 있기 때문에
// 별도의 이벤트 메소드를 제공하지 않습니다 
var content = '<div class="wrap">' + 
'    <div class="info">' + 
'        <div class="title"> ' + slice_nm[i] +
'            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
'        </div>' + 
'        <div class="body">' + 
'            <div class="img">' +
'                <img src="/static/image/'+ idx[i] +'.jpg" width="73" height="70">' +
'           </div>' + 
'            <div class="desc">' + 
'                <div class="ellipsis">' + text[i] +

'                <div><a href="http://localhost/index.php/topic/detail/'+ idx[i] +'" class="link">상세 페이지</a></div>' + 
'            </div>' + 
'        </div>' + 
'    </div>' +    
'</div>';

// 마커 위에 커스텀오버레이를 표시합니다
// 마커를 중심으로 커스텀 오버레이를 표시하기위해 CSS를 이용해 위치를 설정했습니다
var overlay = new daum.maps.CustomOverlay({
  content: content,
  map: map,
  position: marker.getPosition()       
});

}

// 마커를 클릭했을 때 커스텀 오버레이를 표시합니다
daum.maps.event.addListener(marker, 'click', function() { overlay.setMap(map); });

// 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
function closeOverlay() {
    overlay.setMap(null);     
}


</script>
</body>
</html>
