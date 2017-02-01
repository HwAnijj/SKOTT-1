<!DOCTYPE html>
<html>
	<style type="text/css">

		body {
			display : flex;
			justify-content : center;
			align-items : center;
			padding : 10px;
/*			padding-top:300px;*/
		}		

		.container {
				display :flex;
				flex-direction: column;
				width :800px;
				border:3px solid powderblue;
				padding:30px;
		}

		header {
			border-bottom:1px solid gray;
			padding-left:20px;
		}

		footer {
			border-top:1px solid red;
			padding-left:20px;
			text-align: center;
		}

		.content {
			display:flex;
		}

		.content nav {
			border-right:1px solid gray;
		}

		.content aside {
			border-left:1px solid gray;
		}

		nav, aside {
			flex-basis: 150px;
			flex-shrink: 0;
		}



	</style>
<body>
	<div class="container">
		<header>

		<h1>생활코딩</h1>
			
		</header>

		<section class="content">
			<nav>
				<li>HTM</li>
				<li>CSS</li>
				<li>Javascript</li>
			</nav>
			<main>
				새로운 flexbox 레이아웃 모드는 우리가 CSS로 레이아웃을 잡는 방법을 재정의할 기세입니다. 아쉽게도 flexbox 규격이 최근에 상당히 많이 바뀌었기 때문에 각 브라우저마다 다른 식으로 구현돼 있습니다. 그럼에도 어떤 것인지 알아두는 차원에서 몇 가지 예제를 공유하고자 합니다. 여기서 선보이는 예제는 현재 최신 버전의 표준을 사용하는 일부 브라우저에서만 동작합니다.

				flexbox와 관련된 오래된 자료가 굉장히 많습니다. flexbox에 관해 좀 더 배우고 싶다면 참고 자료가 최신 내용을 반영하고 있는지 확인하는 방법을 배울 수 있도록 이곳에서 시작하세요. 저도 최신 구문을 이용하는 상세한 글을 쓴 적이 있습니다.

				flexbox를 이용해서 할 수 있는 일은 아주 많습니다. 영감을 주는 차원에서 몇 가지 예제를 알려주자면 다음과 같습니다.
			</main>
			<aside>
				AD
			</aside>
		</section>

		<footer>
			<a href="http://opentutorials.org">홈페이지</a>
		</footer>		

	</div>
</body>

</html>