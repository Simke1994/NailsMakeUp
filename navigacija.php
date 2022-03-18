<!-- Navigation -->

<?php 
  if(isset($_POST['submit'])){
      $to = "aleksandar.simic94@gmail.com";
      $from = $_POST['email']; // this is the sender's Email address
      $ime = $_POST['ime'];
      $broj = $_POST['broj'];
      $datum = $_POST['datum'];
      $zakazuje = $_POST['zakazuje'];
      $message = $ime . " broj mobilnog: " . $broj . " zakazuje termin za " . $zakazuje . " datum: " . $datum;

      $headers = "Poruka od:" . $from;
      mail($to,$message,$headers);
      echo '<div class="modal fade" id="zakazanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i> Kontakt telefon</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              Fala
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Izadji</button>
                  <button type="button" class="btn btn-primary" style="background:green;" onclick="copyBroj()">Sacuvaj broj</button>
              </div>
          </div>
      </div>
  </div>';
    }
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="css/modal.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="slike/logo2.png" alt="..." style="width:20%;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-home fa-fw mr-1"></i>Pocetna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galerija.php"><i class="fa fa-picture-o fa-fw mr-1"></i>Galerija</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="button"
					data-toggle="modal" data-target="#zakazivanje"><i class="fa fa-th-list fa-fw mr-1"></i>Zakazivanje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="button"
					data-toggle="modal" data-target="#kontaktModal"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="kontaktModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i> Kontakt telefon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Nevena Simić <i class="fab fa-whatsapp"> </i> <i class="fab fa-viber"></i></i> <i class="fa fa-phone"></i> <i class="fa fa-envelope"></i><br>Broj: +38161234567
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Izadji</button>
                <button type="button" class="btn btn-primary" style="background:green;" onclick="copyBroj()">Sacuvaj broj</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="zakazivanje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-image:url('slike/slicica.png');border-radius:3%;border:2px solid black;">
      <img src="slike/logoo.png" style="position:absolute;top:-17%;left:34%;opacity:1;width:30%;border-radius:100%;">
      <div class="modal-header border-bottom-0 d-flex justify-content-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" id="form" method="post" name="form">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1" class="d-flex justify-content-center">Ime i prezime</label>
            <input type="text" class="form-control" name="ime" aria-describedby="emailHelp" required placeholder="Upisite vase ime i prezime">
          </div>
          <div class="form-group">
            <label for="email1" class="d-flex justify-content-center">Email adresa</label>
            <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" required placeholder="Upisite vasu email adresu">
          </div>
          <div class="form-group">
            <label for="password1" class="d-flex justify-content-center">Sta zelite da zakazete?</label>
            <input type="text" class="form-control"  name="zakazuje" placeholder="Nokti - Sminka" required>
          </div>
          <div class="form-group">
            <label for="password1" class="d-flex justify-content-center">Vas broj telefona</label>
            <input type="number" class="form-control"  name="broj" placeholder="Broj mobilnog?" required>
          </div>
          <div class="form-group">
            <label for="password1" class="d-flex justify-content-center">Izaberite datum</label>
            <input type="date" class="form-control"  name="datum" placeholder="Confirm Password" required>
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" name="submit" class="btn btn-warning" data-toggle="modal" data-target="#zakazanModal">Zakazi</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
		function copyBroj() {
			var copyText = "+38161234567";
			navigator.clipboard.writeText(copyText);
			alert("Sacuvan broj: +38161234567");
		}
	</script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
