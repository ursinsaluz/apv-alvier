<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Kontakt</h2>
                <?php
# echo $_SERVER['HTTP_ACCEPT_CHARSET'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
require 'includes/mail_config.php';

//Create an instance; passing `true` enables exceptions
if ( (isset ($_POST['submit'], $_POST['nemaid'], $_POST['meiladi'], $_POST['agemesser'])) && (empty ($_POST['surname'])) && (empty ($_POST['name'])) && (empty ($_POST['email'])) ) {
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    # $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = SMTP_HOST;                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = SMTP_USERNAME;                     //SMTP username
	    $mail->Password   = SMTP_PASSWORD;                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = SMTP_PORT;    				//TCP port to connect to
	    $mail->CharSet    = "UTF-8";
	                              

	    //Recipients
	    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
	    $mail->addAddress(SMTP_FROM_EMAIL, 'APV-Alvier');     //Add a recipient
	    # $mail->addAddress('ellen@example.com');               //Name is optional
	    $mail->addReplyTo($_POST['meiladi'], $_POST['nemaid']);
	    # $mail->addCC('cc@example.com');
	    # $mail->addBCC('bcc@example.com');

	    //Attachments
	    # $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    # $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Nachricht vom APV-Webformular';
        $safeMessage = htmlspecialchars($_POST['agemesser'], ENT_QUOTES, 'UTF-8');
	    $mail->Body    = nl2br($safeMessage);
	    $mail->AltBody = $_POST['agemesser'];
	    $mail->send();
	    echo '<p class="text-primary">Vielen Dank. Die Nachricht wurde versendet. Wir werden uns in Kürze melden.</p>';
		} catch (Exception $e) {
		    echo "Das senden der Nachricht ist fehlgeschlagen. Mailer Error: {$mail->ErrorInfo}";
		}
} elseif ((isset ($_POST['surname'])) && (isset ($_POST['name'])) && (isset ($_POST['email']))) {
    echo '<p class="text-primary">Error 400 Bad Request: Something went wrong. Please contact the administrator.</p>';
}
?>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <form method="post" action="kontaktaufnahme.php" name="Kontaktaufnahme">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" required="true" name="nemaid">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">E-Mail-Adresse</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="true" name="meiladi">
                        </div>
                        <div class="mb-3 hpt">
                            <label for="exampleFormControlInput1" class="form-label">Surname</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="surname" name="surname" isrequired="true">
                        </div>
                        <div class="mb-3 hpt">
                            <label for="exampleFormControlInput1" class="form-label">Last name</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" isrequired="true" name="name">
                        </div>
                        <div class="mb-3 hpt">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" placeholder="email" isrequired="true" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nachricht</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true" accept-charset="UTF-8" name="agemesser"></textarea>
                        </div>
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">Nachricht senden</button>
                    </form>
                    <div class="d-grid gap-2">
</div>
                </div>
                <div class="col-md-4">
                    <section class="d-lg-block d-sm-none d-xs-none" data-pgc-field="subnavigation">
                        <?php             
    if (isset($_GET["subnav"])) { 
    $subnav = htmlspecialchars($_GET["subnav"], ENT_QUOTES, 'UTF-8');
?>
                            <div class="bg-dark mb-5 pb-3 pt-3 rounded text-white">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item"><a href="vermietung-<?php echo $subnav; ?>.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" aria-current="page" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
</svg>Reservation</a>
                                    </li>
                                    <li><a href="rund-ums-pfadiheim.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
                                                <use xlink:href=""></use>
                                            </svg>Impressionen Pfadiheim</a>
                                    </li>
                                    <li><a href="freizeitaktivitaeten.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
                                                <use xlink:href=""></use>
                                            </svg>Freizeitaktivitäten</a>
                                    </li>
                                    <li><a href="anreise.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
                                                <use xlink:href="#table"></use>
                                            </svg>Anreise</a>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </section>
                    <div class="row">
                        <div class="col-md-12" data-pgc-field="downloads"> 
                            <section>
                                <div class="bg-dark mb-4 pb-3 pt-3 rounded text-white">
                                    <ul class="nav nav-pills flex-column mb-auto">
                                        <li class="nav-item">
                                            <a href="apv.php" class="nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
                                                    <use xlink:href=""></use>
                                                </svg>APV</a><a href="hebeko.php" class="nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
</svg>HEBEKO</a>
                                        </li>
                                        <li>
                                            <a href="kontaktaufnahme.php" class="active nav-link text-white"><svg class="bi me-2" width="16" height="16">
                                                    <use xlink:href=""></use>
                                                </svg>Kontaktaufnahme</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
