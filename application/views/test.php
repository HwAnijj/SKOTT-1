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

      .container {
        width :95vw;
        height :95vh;
        border :2px solid red;

      }

      header {
        font-size:15pt;
        border : 3px solid red;
        padding :10px;
        display:flex;
        flex-direction:row;
        margin-top : 20px;

      }
      nav {
        display:flex;
        flex-direction:row;
      }

      article {
/*         border : 3px solid black;*/
         width:70vw;
         height:80vh;
      }

      aside {
/*        border : 1px solid black;*/
         width:30vw;
         height:80vh;
      }

      #div_Logo {
        margin-right:10vw;
        padding:10px;
        border:5px solid gray;
        flex-shrink: 1;
      }

      #div_search {
/*        border:5px solid gray;*/
        margin-top:3px;
        flex-shrink: 1;
      }

      #div_Login {
         margin-left:25vw;
        border:5px solid gray;
        flex-shrink: 1;
      }

      #map {
         position: absolute;
         width:64.9vw;
         height:79.5vh;
      }

      #course {
        border:2px solid black;
        margin-left: -3px;
      }

      .course_title {
        border:1px solid black;
        text-align: center;
        font-size: 18pt;
      }

      .div_course {
        display :flex;
        flex-direction:row;
      }

      .div_content {
        margin-top:15px;
        font-size: 10pt;
        line-height: 3em;
      }

      #p_star {
        font-size: 20pt;
        margin-left: 10px;
      }

/*      #course:nth-child(2) {
          margin-top:10px;
      }*/


</style>

</head>

<body>

<!-- 지도를 표시할 div 입니다 -->

<div class ="container">
    <header>

      <div id = "div_Logo">
        로고이미지
      </div>

      <div id="div_search">
        <input type="text" class="form_control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:30vw">
      </div>
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
        <div id="course" style="overflow:scroll" >
            <div class = "course_title">
            추천코스
            </div>
            <div class = "div_course">
              <img id ="img_div_course" src="/static/image/test.jpg" width="150px" height="150px">
                  <div class ="div_content">

                  <ul>
                    <li>관광지명 :</li>
                    <li>주소 :</li>
                    <li>내용 :</li>
                  </ul>

                  </div>
            </div>
                  <p id="p_star">
                  ★★★★☆ 
                  </p>

            <div class = "div_course">
              <img id ="img_div_course" src="/static/image/test.jpg" width="150px" height="150px">
                  <div class ="div_content">

                  <ul>
                    <li>관광지명 :</li>
                    <li>주소 :</li>
                    <li>내용 :</li>
                  </ul>

                  </div>
            </div>
                  <p id="p_star">
                  ★★★★☆ 
                  </p>

                              <div class = "div_course">
              <img id ="img_div_course" src="/static/image/test.jpg" width="150px" height="150px">
                  <div class ="div_content">

                  <ul>
                    <li>관광지명 :</li>
                    <li>주소 :</li>
                    <li>내용 :</li>
                  </ul>

                  </div>
            </div>
                  <p id="p_star">
                  ★★★★☆ 
                  </p>


        </div>


        </div>
      </aside>

    </nav>

=======

<!-- <a href="javascript:;" onclick="test()" style="z-index: -1;">
  <div id="test" style="visibility: visible; background-color: #FF0000; width: 300px; margin-top: -100px; height: 400px; z-index: -1; position: absolute;">
</a> -->


>>>>>>> a3e78b02e4582e16848dcbc1a78fc9e6540d4330

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery.min.js"></script>

<script>

function test() {

  $('#test').attr('style', 'visibility: hidden');

}

var lat = <?php echo json_encode($lat)?>; 
var lng = <?php echo json_encode($lng)?>;
var idx = <?php echo json_encode($idx)?>;

var mapContainer = document.getElementById('map'), // 지도의 중심좌표
    mapOption = { 
        center: new daum.maps.LatLng(37.565446040775775, 126.98075795787096), // 지도의 중심좌표
        level: 8 // 지도의 확대 레벨
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
'        <div class="title"> dd' + 
'            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
'        </div>' + 
'        <div class="body">' + 
'            <div class="img">' +
'                <img src="http://cfile181.uf.daum.net/image/250649365602043421936D" width="73" height="70">' +
'           </div>' + 
'            <div class="desc">' + 
'                <div class="ellipsis">제주특별자치도 제주시 첨단로 242</div>' + 
'                <div class="jibun ellipsis">(우) 63309 (지번) 영평동 2181</div>' + 
'                <div><a href="http://localhost:8888/index.php/detail/'+ idx[i] +'" class="link">홈페이지</a></div>' + 
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

// 마커를 클릭했을 때 커스텀 오버레이를 표시합니다
daum.maps.event.addListener(marker, 'click', function() {
  overlay.setMap(map);
});
}

// 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
function closeOverlay() {
    overlay.setMap(null);     
}
</script>

</script>
</body>
</html>