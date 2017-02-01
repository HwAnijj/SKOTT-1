<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701">
	
</script>
</head>

<style>

#map { margin: 0px 50px 0px 65px; }

</style>
<body>


<table class="table table-Margin">
	<thead>
	<tr>
		<th>로고</th>
		<th>
		<form class="form-inline">
			  <div class="form-group">
			    <label for="exampleInputName2" style="margin-left:100px">돋보기 이미지</label>
			    <input type="text" class="form-control" id="exampleInputName2" placeholder="원하는 지역명 / 관광지명을 입력하세요." style="width:500px;"">
			  </div>

			  <button type="submit" class="btn btn-default">찾아보기</button>
	 	 </th>
		</form>
	</tr>
	</thead>
	<tbody>
		<tr>
			<div id="map" style="width:1400px; height:650px; position: absolute; margin-top: 70px"></div>
			
		</tr>
	</tbody>

	<tfoot>
		<tr>

		</tr>
	</tfoot>


</table>
	
<div id="clickLatlng" style="margin-top: 800px;"></div>
</body>

<script>
					// var container = document.getElementById('map');
					// var options = 
					// {
					// 	center: new daum.maps.LatLng(35.34300719029792,127.91308829060601),
					// 	level: 12,
					// //	draggable: false
					// };


					// var map = new daum.maps.Map(container, options);

					// 지도에 표시할 원을 생성합니다

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(35.34300719029792,127.91308829060601), // 지도의 중심좌표
        level: 12 // 지도의 확대 레벨
    };  

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 지도에 표시할 원을 생성합니다
var circle = new daum.maps.Circle({
    center : new daum.maps.LatLng(36.55658134553188, 127.10115509947225),  // 원의 중심좌표 입니다 
    radius: 25000, // 미터 단위의 원의 반지름입니다 
    strokeWeight: 5, // 선의 두께입니다 
    strokeColor: '#75B8FA', // 선의 색깔입니다
    strokeOpacity: 1, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'dashed', // 선의 스타일 입니다
    fillColor: '#CFE7FF', // 채우기 색깔입니다
    fillOpacity: 0.7  // 채우기 불투명도 입니다   
}); 

// 지도에 원을 표시합니다 
circle.setMap(map); 

var circle1 = new daum.maps.Circle({
    center : new daum.maps.LatLng( 35.76759151956484,  127.03786458878612),  // 원의 중심좌표 입니다 
    radius: 30000, // 미터 단위의 원의 반지름입니다 
    strokeWeight: 5, // 선의 두께입니다 
    strokeColor: '#75B8FA', // 선의 색깔입니다
    strokeOpacity: 1, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
 //   strokeStyle: 'dashed', // 선의 스타일 입니다
    fillColor: '#CFE7FF', // 채우기 색깔입니다
    fillOpacity: 0.7  // 채우기 불투명도 입니다   
}); 

// 지도에 원을 표시합니다 
circle1.setMap(map); 


var circle2 = new daum.maps.Circle({
    center : new daum.maps.LatLng(  35.033842111944146,   127.03752305296699),  // 원의 중심좌표 입니다 
    radius: 40000, // 미터 단위의 원의 반지름입니다 
    strokeWeight: 5, // 선의 두께입니다 
    strokeColor: '#75B8FA', // 선의 색깔입니다
    strokeOpacity: 1, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
 //   strokeStyle: 'dashed', // 선의 스타일 입니다
    fillColor: '#CFE7FF', // 채우기 색깔입니다
    fillOpacity: 0.7  // 채우기 불투명도 입니다   
}); 

// 지도에 원을 표시합니다 
circle2.setMap(map); 


// 지도를 클릭한 위치에 표출할 마커입니다
var marker = new daum.maps.Marker({ 
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter() 
}); 
// 지도에 마커를 표시합니다
marker.setMap(map);

// 지도에 클릭 이벤트를 등록합니다
// 지도를 클릭하면 마지막 파라미터로 넘어온 함수를 호출합니다


daum.maps.event.addListener(map, 'click', function(mouseEvent) {        
    
    // 클릭한 위도, 경도 정보를 가져옵니다 
    var latlng = mouseEvent.latLng; 
    
    // 마커 위치를 클릭한 위치로 옮깁니다
    marker.setPosition(latlng);
    
    var message = '클릭한 위치의 위도는 ' + latlng.getLat() + ' 이고, ';
    message += '경도는 ' + latlng.getLng() + ' 입니다';

   
    var resultDiv = document.getElementById('clickLatlng'); 
    resultDiv.innerHTML = message;
});

</script>

</html>