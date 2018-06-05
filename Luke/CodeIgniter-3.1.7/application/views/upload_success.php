<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<iframe src = "/ViewerJS/#/uploads/<?=$upload_data['file_name']?>" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>

</body>
</html>
