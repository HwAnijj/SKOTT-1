
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">

			body {
				margin-top:25px;
			}

			* {
				box-sizing:border-box;
			}

			.container {
				width :1700px;
				height : 920px;
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
				width:465px;
				height:800px;
				display:flex;
				flex-direction:column;
			}

			#img_div_course {
				float :left;
				margin-right: 30px;
			} 

			.div_content {
/*				border :5px solid black;*/
				line-height: 50px;
				font-size:15px;
			}

			.div_course:nth-child(1) {
				background-color: powderblue;
				margin : 30px;
/*				border :5px solid black;*/
				padding:20px;
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
<div class ="container">
		<header>

			<div id = "div_Logo">
				로고이미지
			</div>

			<div id="div_search">
		   	<input type="text" class="form_control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:500px">
		   	</div>
		   <button onclick="ajax_test()" class="btn btn-primary" style ="width:100px">찾아보기</button>

			<div id = "song">
				Facebook Login
			</div>

		</header>
		<nav id = "nav_body">
			<article>
				<div id="map">
				
				</div>
			</article>

			<aside>
				<div id="course">
						<div class = "div_course">
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
								<p id="p_star">
								★★★★☆ 
								</p>

							</div>
						</div >
				</div>
			</aside>
		</nav>

</div>




</body>

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=6f9cc1cd3f08a51269ed1888616c3701"/>


<script>

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(35.34300719029792,127.91308829060601), // 지도의 중심좌표
        level: 12 // 지도의 확대 레벨
    };  

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다


// 지도를 클릭한 위치에 표출할 마커입니다
var marker = new daum.maps.Marker({ 
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter() 
}); 
// 지도에 마커를 표시합니다
marker.setMap(map);

// 지도에 클릭 이벤트를 등록합니다
// 지도를 클릭하면 마지막 파라미터로 넘어온 함수를 호출합니다



</script>
</html>
