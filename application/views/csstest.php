<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS Tutorial | Layout</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>

      * {
        box-sizing:border-box;
      }

      .container {
        width :95vw;
        height :95vh;
        border :2px solid red;

      }

      header {
        font-size:25pt;
        border : 3px solid red;
        padding :10px;
        display:flex;
        flex-direction:row;
        margin-top : 20px;

      }
/*
      article {
        float:left;
      }

      aside {
        float:left;
      }
*/
      #div_Logo {
/*        flex-basis:150px;*/
        margin-right:250px;
        padding:10px;
        border:5px solid gray;
      }

      #div_search {
        border:5px solid gray;
      }

      #div_Login {
         margin-left:600px;
        border:5px solid gray;
      }
/*
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
        border :5px solid black;
        line-height: 50px;
        font-size:15px;
      }

      .div_course:nth-child(1) {
        margin : 30px;
        border :5px solid black;
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
      }*/
    </style>
  </head>

  <body>

<body>

<!-- 지도를 표시할 div 입니다 -->

<div class ="container">
    <header>

      <div id = "div_Logo">
        로고이미지
      </div>

      <div id="div_search">
        <input type="text" class="form_control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:700px">
        </div>
       <button onclick="ajax_test()" class="btn btn-primary" style ="width:8vw">찾아보기</button>

      <div id = "div_Login">
        Facebook Login
      </div>

    </header>
    <nav id = "nav_body">
      <article>
<!--         <div id="map">
        </div> -->
      </article>

      <aside>
        <div id="course">
            <div class = "div_course">
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
  </body>
</html>