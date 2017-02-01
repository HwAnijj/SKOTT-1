<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS Tutorial | Layout</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
      #jb-container {
        width: 1400px;
        margin: 0px auto;
      }
      #jb-header {
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #bcbcbc;
        height :40px;
        text-align: right;
      }
      #jb-content {
        width: 1400px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-footer {
/*        clear: both;*/
        padding: 20px;
        border: 1px solid #bcbcbc;
        background-color: black;
        opacity:0.7;
        height:120px;
      }

/*      #jb-footerBox {
      	display :flex;
        background-color: white;
        height:60px;
        width:600px;
        margin:auto;
        align-items:center;
        margin-top:25px;
      }*/

      .main_text {
      	display:flex;
      	display:inline;
      	margin-right :60px;
      	font-size :20px;
      	flex-shrink:1;
		margin-bottom:100px;
      }

      .form-inline {
      	text-align: center;
      	margin-top :35px;
      }

	  .main_text:nth-child(1) {
		 	margin-right :690px;
			}

	  .main_text:nth-child(2) {

			}
    </style>
  </head>

  <body>
    <div id="jb-container">
      <div id="jb-header">
        <div class="main_text">로고</div>
        <div class="main_text"><a href ="web_map">지도보기</a></div>
        <div class="main_text">추천코스</div>
        <div class="main_text">내위치</div>
        <div class="main_text">FaceBook Login</div>
     </div>

      <div id="jb-content">
        <img src = "/static/image/plane.jpg" width="105%" height="470px">
            <div id="jb-footer">
            	<form class="form-inline">
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
					    	<div class="input-group">
					    			  <input type="text" class="form-control" id="exampleInputAmount" placeholder="원하시는 지역명/관광지명을 입력하세요." style = "width:500px">
					    	     <div class="input-group-addon">.00</div>
					   	    </div>
					 </div>
					  <button type="submit" class="btn btn-primary">찾아보기</button>
				</form>
            </div>
      </div>

    </div>
  </body>
</html>