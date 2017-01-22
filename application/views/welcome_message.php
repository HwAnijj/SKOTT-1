<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<form action="" method="POST">

id : <input type="text" id="id" name="id">
pw : <input type="password" id="pw" name="pw">

<input type="submit">

</form>


<button id="id_check" onclick="javascript_test()">아이디 체크</button>

<script>


function javascript_test() {
	//alert($('#id').val());

	alert($('#id').value());

	alert("dd");
}


</script>





</body>
</html>