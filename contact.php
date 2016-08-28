<?php
	//error_reporting( error_reporting() & ~E_NOTICE );
	if (isset($_POST["submit"])) {
	
		$error = "";
		$name = $_POST['name']; 
		$email = $_POST['email'];
		$message = $_POST['message']; 

		if(empty($name)){
			
			$error .="va rugam sa va introduceti numele";
		}
		
		if(empty($email)){
			
			$error .= "<br /> va rugam sa introduceti adresa e-mail";
		}
		
		if(empty($message)){
			$error .="<br /> va rugam sa introduceti un mesaj";
		}
		
		if($email!="" AND !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
			$error.="<br /> va rugam sa introduceti un email valid";
			
		}
		
		if (!empty($error)){
			
			$result = $error;
			
		} else {
			if (mail("contact@consultanta-pentru-constructii.ro", "Mesaj nou primit", "Nume: ".$name ."
			
			Email: ".$email."
			Comment: ".$message

			)) {
				
				$result = "multumim. vom raspunde in cel mai scurt timp posibil.";
			} else {
				
				$result = "ne pare rau, nu s-a putut trimite mesajul. incercati mai tarziu.";
				
			}
			
		}
	}


?>

<!DOCTYPE html>
<html lang="ro">
<head>

<meta charset="utf-8" />
<meta name="description" content="Consultanta pentru constructii" />
<meta name="keywords" content="dirigentie de santier, diriginte de santier, diriginte, santier, constructii, responsabil tehnic cu executia, R.T.E., consultanta " />
<meta name="author" content="devingdan" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Consultanta pentru constructii</title>


<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/navbar-fixed-side.css" rel="stylesheet" />

<!-- END OF Bootstrap -->

<!-- External styles -->

<link href="css/style.css" rel="stylesheet" type="text/css" />



<!-- END OF External styles -->


</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2">
				<nav class="navbar navbar-default navbar-fixed-side">
				<!-- normal collapsible navbar markup -->
			
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="logo-header">
								<img alt = "logo" src="img/logo-small.png" width="170"/>
							</div> 
							
						</div>
					</div>
			
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="logo">
							<img alt = "logo" src="img/logo-small.png" width="170"/>
			
						</div> 
						<ul class="nav navbar-nav">
							<li><a href="index.html">prima pagina <span class="sr-only">(current)</span></a></li>
							<li><a href="dirigentie.html">dirigentie de santier</a></li>
							<li><a href="rte.html">r.t.e.</a></li>
							<li><a href="proiectare.html">proiectare</a></li>
							<li><a href="galerie_foto.html">galerie foto</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="contact.php">contact </a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
			
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10">
			
				<!--page content -->
				
				<div class="content">
				
					<h1 class="top-heading" id="contact"> contact: </h1>
					
					<div class="contact-panel">
					
						
						<ul>
							<li id="arrow-glyphicon">D&amp;D Construct Consulting COM S.R.L.</li>
							<li id="road-glyphicon">Bucuresti, Romania</li>
							<li id="tel-glyphicon">0722.607.182</li>
							<li id="email-glyphicon"><a href="mailto:contact@consultanta-pentru-constructii.ro">contact@consultanta-pentru-constructii.ro</a></li>
						
						</ul>
						
						<form id="form" name="form" method="POST">
							<p>
								<label for="name">nume:</label><br />
								<input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name; ?>"/>
							</p>
							
							<p>
								<label for="email">e-mail:</label><br />
								<input type="email" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>"/>
							</p>
							
							<p>
								<label for="message">mesaj</label><br />
								<textarea name="message" id="message" ><?php if(isset($message)) echo $message; ?></textarea><br/>
								<input  type="submit" name="submit" id="submit" value="trimite"/> <br/>
								<input  type="reset" name="reset" id="reset" value="reseteaza"/> <br/>
							</p>
							
							<p><?php if(isset($result)) echo $result; ?> </p>
						</form>
					</div>
				
				</div>
			
			</div>
		</div>
	</div>




<footer class="footer">
	<div class="container">
		<span><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Termeni și condiții utilizare site</a> </span> <br />
		<span>Designed by <a href="mailto:devingdan@gmail.com">devingdan[at]gmail.com</a> </span>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center" id="exampleModalLabel">Termeni si conditii de utilizare a site-ului www.consultanta-pentru-constructii.ro</h4>
					</div>
					
					<div class="modal-body">
						<div>
							<h5 class="bold">ACCEPTAREA CONDITIILOR </h5>
							<p>Prin accesarea acestui site web si/sau a oricarei pagini a acestuia sunteti de acord cu aceste conditii de utilizare. Daca nu sunteti de acord cu acesti termeni si conditii de utilizare nu accesati acest site. </p>
							<br/>
							<h5 class="bold"> DESCRIEREA SERVICIILOR </h5>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> pune la dispozitie informatiile din acest site web in scop informativ general, si nu garanteaza de exactitatea lor la un moment dat, desi se va incerca pe cat posibil ca la publicarea lor pe site toate informatiile sa fie exacte.</p>
							<br/>
							<h5 class="bold">NEANGAJAREA RASPUNDERII</h5>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> nu poate fi facut raspunzatoar in nici un fel de pierderile sau daunele pe care cineva le-ar putea suferi ca urmare a folosirii in vreun fel a informatiilor prezentate in acest site web.</p>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> nu garanteaza in nici un fel acurateţea, gradul de utilitate sau caracterul complet al informatiilor sau al materialelor cuprinse in acest site. <strong>www.consultanta-pentru-constructii.ro</strong> nu garanteaza rezultatele ce s-ar putea obţine din utilizarea informatiilor prezentate prin intermediul acestui sit şi nici disponibilitatea spre folosire a oricaror informatii prezente pe site.</p>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> nu isi asuma nici o responsabilitate pentru continutul nici unui material (contract) prezntat pe acest site. Acestea sunt prezentate in scop informativ si fiind considerate ca fiind utile.</p>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> nu poate fi tras la raspundere pentru materialele (contractele) prezente pe site, acestea sunt prezntate in scop informativ, nu in scop comercial. </p>
							<br/>
							<h5 class="bold">REGULI GENERALE</h5>
							<p>Orice utilizator care vizitează acest site o face pe propria raspundere. Materialele şi informatiile continute in acest site sunt furnizate în scop de informare generala, nefiind însotite de nici un fel de garanţii, explicite sau implicite.</p>
							<br/>
							<h5 class="bold">LIMITARI DE ORDIN TEHNIC ALE SERVICIILOR</h5>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> nu isi asuma nici o responsabilitate in cazul in care serviciile site-ului nu pot fi accesate de catre utilizatori, pe o perioada nelimitata/nedeterminata de timp, din orice motive tehnice sau comerciale.</p>
							<br/>
							<h5 class="bold">INCHEIEREA ACORDULUI</h5>
							<p><strong>www.consultanta-pentru-constructii.ro</strong> isi rezerva dreptul de a schimba termenii, conditiile şi politicile in orice moment fara a anunta in prealabil, prin urmare sunteti rugat sa revedeti in mod regulat aceasta sectiune pentru a fi la curent cu modificarile aduse.</p>
						</div>
					</div>
				
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
					
				</div>
			</div>
		</div>
			

	</div>
</footer>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	
</body>

</html>