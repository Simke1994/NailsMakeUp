<?php include "baza.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dizajn/lightbox.min.css">
    <script type="text/javascript" src="JS/lightbox-plus-jquery.min.js"></script>
	<link rel="stylesheet" href="css/goredole.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>Nails and Makeup</title>
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
			top: 110%;
			padding-bottom:-150px;
		}
		.uplslk {
			color: black;
			position:absolute;
			top: 15%;
			left:43%;
            padding:20px;
            padding-right:40px;
            padding-left:40px;
			border-radius: 60px;
			background: black;
            color:white;
            cursor:pointer;
		}
        .uplslk .aslk{
            text-decoration: none;
            color:white;
            transition: 1s;
        }
        .uplslk .aslk:hover{
            font-size:18px;
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
		a{
			text-decoration:none!important;
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
		@media (max-width: 880px) {
			.uplslk{
				left:32%;
			}
		}
	</style>
	
</head>
<body>
	<header>
		<?php include "navigacija.php"; ?>
    </header>
	<div class="uplslk"><a href="view.php" class="aslk">UPLOAD SLIKE</a></div>
	<div class="slicke">
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
			 <a href="uploads/<?=$images['image_url']?>" data-lightbox="mygallery"><img src="uploads/<?=$images['image_url']?>" class="galerijaslike"></a>
             </div>
          		
    <?php } }?>
	</div>
</body>
</html>