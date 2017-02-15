<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php foreach ($location_result as $item) { ?>
	
	<?php echo $item->date; ?>
	<?php echo $item->lat; ?>
	<?php echo $item->lng; ?>
	<br/>

<?php } ?>


</body>


</html>
