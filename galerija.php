<?php include "baza.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nails and makeup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/stil.css">
        <link rel="stylesheet" href="css/goredole.css">
		<link rel="stylesheet" href="css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

		<style>
		.slicke {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 70vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
			position: relative;
			top:30%;
		}
		.galerijaslike{
			width: 12%;
			height: 18vh;
			margin-top: 1%;
			margin-left: 0.6%;
			transition: 1s;
		}
		.galerijaslike:hover{
			transform: scale(1.1);
		}
		.uplslk {
			text-decoration: none;
			color: white;
		}
		.uplslk:hover{
			color:white;
		}
		a{
			color:white!important;
			text-decoration:none!important;
		}
		ul li a{
			color:#b3b3b3!important;
		}
		.razmak{
			height:10vh;
			margin-bottom:50px;
		}
		.lb-cancel{
			background:url(slike/loading.gif) no-repeat
		}
		.lb-nav a{
			background-image:url(data:slike/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)
		}
		.lb-nav a.lb-prev{
			background:url(slike/prev.png) left 48% no-repeat;
		}
		.lb-nav a.lb-next{
			background:url(slike/next.png) right 48% no-repeat;
		}
		.lb-data .lb-close{
			background:url(slike/close.png) top right no-repeat;
		}
	</style>

    </head>
    <body>
		<header>
			<?php include "navigacija.php"; ?>
    	</header>
		<a href="logadmgal.php" class="uplslk">ADMIN</a>
    	<div class="slicke">
			<?php 
			$sql = "SELECT * FROM images ORDER BY id DESC";
			$res = mysqli_query($conn,  $sql);

			if (mysqli_num_rows($res) > 0) {
				while ($images = mysqli_fetch_assoc($res)) {  ?>
				
					<div class="alb">
						<a href="uploads/<?=$images['image_url']?>" data-lightbox="mygallery"><img src="uploads/<?=$images['image_url']?>" class="galerijaslike"></a>
					</div>
					
				<?php } 
			}?>
		</div>
		<div class="razmak"></div>
		<footer>
			<?php include "donjideo.php"; ?>
		</footer>
		<script src="JS/lightbox-plus-jquery.min1.js"></script>
    </body>
</html>