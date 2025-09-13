<?php
include 'config.php';

	if (isset($_POST['email'])) {

		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "$your_email";
		$email_subject = "La Mia Offerta per $your_domain";


		$name = $_POST['name']; // required
		$email_from = $_POST['email']; // required
		$telephone = $_POST['phone']; // not required
		$price = $_POST['price']; // not required
		$comments = $_POST['comments']; // required


		$email_message = "Form details below.\n\n";

		function clean_string($string) {
				$bad = array("content-type", "bcc:", "to:", "cc:", "href");
				return str_replace($bad, "", $string);
		}

		$email_message .= "Nome: " . clean_string($name) . "\n";
		$email_message .= "Email: " . clean_string($email_from) . "\n";
		$email_message .= "Telefono: " . clean_string($telephone) . "\n";
		$email_message .= "Prezzo (€): " . clean_string($price) . "\n";
		$email_message .= "Messaggio: " . clean_string($comments) . "\n";

		// create email headers
		$headers = 'From: ' . $email_from . "\r\n" .
						'Reply-To: ' . $email_from . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

?>
<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Informazioni Vendita || <?php echo $your_domain; ?></title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
				<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet">
				<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
				<link rel="stylesheet" href="css/style.css" />
		</head>
		<body>
			<section class="bg-alt hero p-0">
				<div class="container-fluid">
					<div class="row">
							<div class="bg-faded col-sm-6 text-center col-fixed">
									<div class="vMiddle">
										<h1 class="pt-4 h2">
											<span>Grazie per l'offerta, Verrà ricontattato al più presto possibile.</span>
										</h1>
										<div class="row d-md-flex text-center justify-content-center text-primary action-icons">
											<div class="col-sm-4">
												<p><em class="ion-ios-chatbubble-outline icon-md"></em></p>
												<p>Email: <a href="mailto:<?php echo $your_email; ?>"><?php echo $your_email; ?></a></p>
											</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</section>
		</body>
</html>
<?php } ?>
