<?php

include 'config.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

<?php 

if( !isset($_POST['name'])){

	$title = "Select version";



} else {

	$title = "Form submitted";

}

?>



  <title><?php

echo htmlspecialchars($gcmdname) . " - $title";

?></title>

  <meta charset="utf-8">




  <meta name="viewport" content="width=device-width, initial-scale=1">

  

</head>

<body>





  

 

<?php 



include 'homepage.php';


echo "$gcmdadcode";

?>

<footer>  

<?php 

$year = date("Y"); 

echo "Copyright $year $gcmdowner. ";

?> 

</footer>

</body>

</html>
