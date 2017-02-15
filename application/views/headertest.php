<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">

      * {
        box-sizing:border-box;
      }

      .container {
        width :95vw;
        height :95vh;
        border :2px solid red;
        margin-top:20px;

      }

      header {
      	background-color: powderblue;
        font-size:15pt;
        border : 3px solid red;
        padding :10px;
        display:flex;
        flex-direction:row;
        margin-top : 20px;

      }
      nav {
      	border :3px solid black;
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
         width:30vw;
         height:80vh;
      }

      #div_Logo {

        flex-shrink: 1;
       	margin-right: 100px
      }

      #div_search {
        flex-shrink: 1;
         margin:auto;
      }

      #div_Login {
         margin-left:20vw;
        flex-shrink: 1;
      }

      #image {
      	border :3px solid red;
         width:64.9vw;
         height:80.8vh;
      }
      #div_course {
      	 border :3px solid blue;
         width:27.6vw;
         height:80.8vh;
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
       </div>
      <div id = "div_Login">
        Facebook Login
      </div>
    </header>

    <nav>
      <article>
          <div id="image"></div>
      </article>

      <aside>
      <div id ="div_course">
      
      </div>
      </aside>
    </nav>


    <script type="text/javascript">
    	var idx = <?php echo json_encode($idx)?>; 
		var name = <?php echo json_encode($name)?>;

		alert(idx);
		alert(name);

    </script>
</body>
</html>