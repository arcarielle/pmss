<!DOCTYPE html>

<?php    
	if(session_id() == '' || !isset($_SESSION)){  
		echo "<script> $( #signin ).css( 'display', 'none' ); </script>";
	}
?>  

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<head>
		<meta charset="UTF-8"/> 
		<title>Agencia Migrante</title>
		
		<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Base
					ball_cap_line_drawing.svg/1200px-Baseball_cap_line_drawing.svg.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/pmss/assets/css/mystyle.css"/>
	</head>
    <body>