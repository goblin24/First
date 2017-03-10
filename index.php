<!doctype html>
<html>
<head>
<title>IMDB</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
<h1>IMDB Movie </h1>
</header>

<form action="index.php?movie_search" Method="GET">
<input type="search" name="movie_search" Placeholder="Search Movie">
</form>

<?php 

if (isset($_GET['movie_search'])) 
{
	
	$moviename= $_GET['movie_search'];
	$json=file_get_contents("http://www.omdbapi.com/?t='.$moviename'");
$info=json_decode($json);
echo "Movie Name :   "; print_r($info->Title); echo "  <br/>";
echo "Year :   "; print_r($info->Year); echo "  <br/>";
echo "Actors :   "; print_r($info->Actors); echo "  <br/>";
echo "Released :   "; print_r($info->Released); echo "  <br/>";
echo "Plot :  ";print_r($info->Plot); echo "  <br/>";
echo "Rating :  ";print_r($info->imdbRating); echo "  <br/>";
	
}


?>
</body>

</html>
