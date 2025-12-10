<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Vermietung für Privatpersonen und Firmen</h2>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <section class="pb-4">
                        <h4>Reservation</h4>
                        <p>Unser Belegungsplan zeigt dir alle frei verfügbaren Daten auf. Wähle einfach deine gewünschten Tage aus. Du kannst direkt eine Buchungsanfrage starten. Die externe Webseite von HeimV verarbeitet deine Eingaben und du bekommst für die geplante Reservation umgehend eine Rückmeldung. 
Probier&rsquo;s einfach aus, wir freuen uns auf deine Anfrage!</p>
                        <p><button type="button" class="btn btn-primary"><a href="https://app.heimv.ch/apv-alvier/homes/8/occupancies/embed?display_months=9" target="_blank">Jetzt reservieren</a>
                            </button></p>
                    </section>
                    <section class="pb-3 pt-3">
                        <h2>Informationen</h2>
                        <img src="images/private.png" class="img-fluid pb-4">
                        <p>Für die Feier, den Treff, das Jubiläum, den Kurs, ein Event oder Workshop ist unser Pfadiheim für max. 60 Personen bestens ausgerüstet. Teilnehmende mit langem Anreiseweg finden bei uns eine geeignete Übernachtungsmöglichkeit inklusive WC- und Duschanlagen. Die grosse Küche bietet selbst für die Zubereitung von Festmenüs alles was auf der Wunschliste des Kochpersonals geschrieben steht.&nbsp;Ebenfalls im EG befinden sich Eingangsbereich, Aufenthaltsraum, WCs und  Materialraum. Mit Aussengrill beim überdachten Sitzplatz und den Festbankgarnituren lässt sich in kurzer Zeit eine gemütliche Gartenwirtschaftsstimmung erzeugen.</p>
                        <p>Die Aussenarena mit Feuerschale eignet sich nicht nur zum Würste braten, sondern auch für stimmungsvolle, abendliche Zusammenkünfte bei offenem Feuer. Die angrenzende Wiese in der Waldlichtung ist für Aktivitäten mit Sport, Spiel und Spass besonders begehrt.</p>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="d-lg-block d-sm-none d-xs-none" data-pgc-field="subnavigation">
                        <?php             
    if (isset($_GET["subnav"])) { 
    $subnav = $_GET["subnav"];
?>
                            <div class="bg-dark mb-5 pb-3 pt-3 rounded text-white">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="vermietung-<?php echo $subnav; ?>.php?subnav=<?php echo $subnav; ?>" class="active nav-link text-white" aria-current="page" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
</svg>Reservation</a>
                                    </li>
                                    <li>
                                        <a href="rund-ums-pfadiheim.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
                                                <use xlink:href=""></use>
                                            </svg>Impressionen Pfadiheim</a>
                                    </li>
                                    <li>
                                        <a href="freizeitaktivitaeten.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
                                                <use xlink:href=""></use>
                                            </svg>Freizeitaktivitäten</a>
                                    </li>
                                    <li>
                                        <a href="anreise.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
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
                                <div class="px-3">
                                    <h4 class="fs-6 text-dark-emphasis">Downloads</h4> 
                                    <p><a href="downloads/Tarife/Tarife_Privatpersonen_und_Firmen.pdf" target="_blank">Tarife</a><br><a href="downloads/Heimordnung_Schneggeboedeli.pdf" target="_blank">Heimordnung</a><br><a href="downloads/Grundriss_Schneggeboedeli.pdf" target="_blank">Grundriss</a><br> <a href="downloads/Kuecheninventar_Pfadiheim.pdf" target="_blank">Kücheninventar</a></p>
                                    <p></p> 
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
