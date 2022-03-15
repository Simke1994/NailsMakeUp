<!DOCTYPE html>
<html>
    <head>
        <title>Nails and makeup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/stil.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		
        <style>
            .ekran .card{
                box-shadow: -1px 15px 30px -10px black;
            }
            .kartica1,.kartica2,.kartica3{
                transition: all 1s;
            }
            .kartica1:hover{
                background-color: green;
                cursor: pointer;
                transform: scale(1.04);
                color:white;
            }
            .kartica2:hover{
                background-color: #f07a85;
                cursor: pointer;
                transform: scale(1.04);
                color:white;
            }
            .kartica3:hover{
                background-color: blue;
                cursor: pointer;
                transform: scale(1.04);
                color:white;
            }
        </style>

    </head>
    <body>
        <header>
			<?php include "navigacija.php"; ?>
    	</header>
    	<div class="ekran" >
            <div class="d-flex justify-content-center">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mt-5">
                        <div class="card kartica1" style="width: 23rem;top:17%;border: 1px solid green;">
                            <img class="card-img-top" src="slike/nokti1.png" alt="Card image cap" style="height:15rem;">
                            <div class="card-body">
                                <h5 class="card-title">Izlivanje</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a role="button"
                                data-toggle="modal" data-target="#zakazivanje" class="btn btn-outline-success">Zakazi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card kartica2" style="width: 23rem;top:17%;border: 1px solid red;">
                            <img class="card-img-top" src="slike/nokti2.png" alt="Card image cap" style="height:15rem;">
                            <div class="card-body">
                                <h5 class="card-title">Dekoracija</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a role="button"
                                data-toggle="modal" data-target="#zakazivanje" class="btn btn-outline-danger">Zakazi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card kartica3" style="width: 23rem;top:17%;border: 1px solid blue;">
                            <img class="card-img-top" src="slike/nokti3.png" alt="Card image cap" style="height:15rem;">
                            <div class="card-body">
                                <h5 class="card-title">French</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a role="button"
                                data-toggle="modal" data-target="#zakazivanje" class="btn btn-outline-primary">Zakazi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer style="margin-top:-45px;">
			<?php include "donjideo.php"; ?>
		</footer>
    </body>
</html>
