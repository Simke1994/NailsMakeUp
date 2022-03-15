<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		p{
			position: absolute;
			top:20%;
			left:37%;
			padding:15px;
			padding-left:123.7px;
			padding-right:118px;
			background:black;
			color:white;
		}
		/*.crte{
			position: absolute;
			top:23%;
			left:37%;
			width:26%;
			height:50vh;
			background:transparent;
			opacity: 0.7;
			border:black;
		}*/
	</style>
</head>
<body>
	<p>ADMIN PANEL</p><br><br>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>