<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stlesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">


  <title>SELCAN NARİN</title>
</head>

<body background="images\arkaplan.jpg">
  <section id="cover">
    <div class="container">
       <div class="row">

         <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light ">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">ANASAYFA <span class="sr-only">(current)</span></a>
              <li class="nav-item">
              </li>
                <a class="nav-link" href="ozgecmis.html">ÖZGEÇMİŞ<Main></Main></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">ŞEHRİM<Main></Main></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kulturelmiras.html">KÜLTÜREL MİRAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">LOGIN</a>
              </li>
            </ul>
           <form class="form-inline my-2 my-lg-0"></form>
		
        </div>
	
    </nav>
    </div>

</div>


<header >
			<div class="container" style="text-align:center;">

				<div class="col-md-8 px-0">
					<h1 class="display-4 font-italic" style="margin-left:400px; margin-top:90px;">
						İletişim Bilgileriniz:
					</h1>
				</div>

			</div>
    </header>


	<main>

		<div class="container" style="text-align:center;">

			<div class="row text-center"></div>

			    <div class="card my-2 ">
				    <div class="card-body" style="text-align:center;">
                    <br> <h4 class="card-text">Ad Soyad: <?php echo $_POST["ad"];  ?>&nbsp; <?php echo $_POST["soyad"];  ?><br></h4>
					<p class="card-text">Kullanıcı Adı: <?php echo $_POST["kadi"]; ?><br></p>
					<p class="card-text">Email: <?php echo $_POST["email"]; ?><br></p>
					<p class="card-text">Telefon Numarası: <?php echo $_POST["telNo"]; ?><br></p>
					<p class="card-text">Doğum Tarihi: <?php echo $_POST["dogumTarihi"]; ?><br></p>
                    <p class="card-text">Cinsiyet: <?php echo $_POST["cinsiyet"]; ?><br></p>
					<p class="card-text">Eğitim durumunuz: <?php echo $_POST["secenek"]; ?><br></p>
					<p class="card-text">Yorum veya isteğiniz: <?php echo $_POST["yorum"]; ?><br></p>
				     </div>
			</div>
        
            </div>
        </div>
    </main>
 
</section>
</body>

</html>
