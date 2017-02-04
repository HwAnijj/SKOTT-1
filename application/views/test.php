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

      body {
        margin-top:25px;
      }

      * {
        box-sizing:border-box;
      }

      .container {
        width :98%;
        height :90%;
        border :2px solid red;
        margin:auto;
      }

      header {
        border-bottom: 1px solid gray;
        padding :10px;
        display:flex;
        flex-direction:row;
        margin-top : 30px;
      }

      article {
        float:left;
      }

      aside {
        float:left;
      }

      #div_Logo {
        flex-basis:150px;
        border:2px solid gray;
        padding :15px;
        margin-right :200px;
      }

      #div_search {
        margin-right:20px;
        margin-top:10px;
      }

      #div_Login {
        margin-left:500px;
        border:2px solid gray;
        padding :15px;
      }

      #map {
        width:1200px;
        height:800px;
      }
      #course {
        border:3px solid red;
        width:80%;
        height:80%;
        display:flex;
        flex-direction:column;
      }

      #img_div_course {
        float :left;
        margin-right: 30px;
      } 

      .div_content {
/*        border :5px solid black;*/
        line-height: 50px;
        font-size:15px;
      }

      .div_course:nth-child(1) {
/*        margin : 30px;
        border :5px solid black;
        padding:20px;*/
        text-align: center;
        font-size:25px;
      }
      .div_course:nth-child(2) {
        background-color: powderblue;
        padding:5px;

      }

      #p_star {
        font-size:25px;
        margin-left: 12px;
        margin-top:10px;
      }

</style>

</head>

<body>
<!-- 지도를 표시할 div 입니다 -->

<div class ="container">
    <header>

<!--       <div id = "div_Logo">
        로고이미지
      </div>

      <div id="div_search">
        <input type="text" class="form_control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:500px">
        </div>
       <button onclick="ajax_test()" class="btn btn-primary" style ="width:100px">찾아보기</button>

      <div id = "song">
        Facebook Login
      </div> -->

    </header>
    <nav id = "nav_body">
      <article>
<!--         <div id="map">
        </div> -->
      </article>

      <aside>
        <div id="course">
 <!--            <div class = "div_course">
              추천코스
            </div> -->
            <div class = "div_course">
  <!--             <img id ="img_div_course" src="/static/image/test.jpg" width="150px" height="150px">
              <div class ="div_content">
                <ul>
                  <li>관광지명 :</li>
                  <li>주소 :</li>
                  <li>내용 :</li>
                </ul>
                <p id="p_star">
                ★★★★☆ 
                </p>
 -->
              </div>
            </div >
        </div>
      </aside>
    </nav>

</div>


<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701"></script>
<script>


var lat_ar = ['37.57770795141244', '37.57165517322067', '37.57741959814934', '37.5707893660768', '37.571799341978114'];
var lng_ar = ['126.97720010187147', '127.00835400352203', '126.97701905922823', '126.98354121886416', '126.99178181809195'];
var name_ar = ['창덕궁', '동대문', '경복궁', '종각', '종로3가'];

var mapContainer = document.getElementById('map'), // 지도의 중심좌표
    mapOption = { 
        center: new daum.maps.LatLng(37.565446040775775, 126.98075795787096), // 지도의 중심좌표
        level: 8 // 지도의 확대 레벨
    }; 

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

for (var i = 0; i<= 4; i++) {

// 지도에 마커를 표시합니다 
var marker = new daum.maps.Marker({
  map: map, 
  position: new daum.maps.LatLng(lat_ar[i], lng_ar[i])
});


// 커스텀 오버레이에 표시할 컨텐츠 입니다
// 커스텀 오버레이는 아래와 같이 사용자가 자유롭게 컨텐츠를 구성하고 이벤트를 제어할 수 있기 때문에
// 별도의 이벤트 메소드를 제공하지 않습니다 
var content = '<div class="wrap">' + 
'    <div class="info">' + 
'        <div class="title">' + name_ar[i]  + 
'            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
'        </div>' + 
'        <div class="body">' + 
'            <div class="img">' +
'                <img src="http://cfile181.uf.daum.net/image/250649365602043421936D" width="73" height="70">' +
'           </div>' + 
'            <div class="desc">' + 
'                <div class="ellipsis">제주특별자치도 제주시 첨단로 242</div>' + 
'                <div class="jibun ellipsis">(우) 63309 (지번) 영평동 2181</div>' + 
'                <div><a href="http://www.kakaocorp.com/main" target="_blank" class="link">홈페이지</a></div>' + 
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