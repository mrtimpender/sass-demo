<?php
	$userName = "Tim Pender";
	$pageID = strtolower($pageTitle);
?>


<!DOCTYPE html> 
<html lang="en">
<head>
  	
  	<title><?php echo $pageTitle; ?> | Tim Pender</title>

  	<meta name="viewport" content="device-width initial-scale=1">

  	<link rel="stylesheet" href="style.css"> 
</head>

<body id="<?php echo $pageID; ?>">

<header> 
	<div class="row">
		<a href="index.php"><img class="logo" src="img\logo.png"/>
		</a>

<?php include 'nav.php'; ?>

	</div>
</header>

