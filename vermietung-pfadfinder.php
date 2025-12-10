<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Vermietung für Pfadi</h2>
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
                        <img src="images/pfadis.png" class="img-fluid pb-4">
                        <p>Für das Pfila, Sola oder Hela und für Fortbildungskurse und Weekends  ist unser Pfadiheim die beste Wahl. Das Haus bietet im OG Platz für max. 42 Personen, aufgeteilt in 3 Schlafräume für je 12 Pfadis und 1 Schlafraum mit  integrierter Nasszelle (WC/Dusche) für die Lagerleitung (max. 6 Personen). Zusätzlich gibt&rsquo;s da für alle getrennte WCs und Duschanlagen. Ein Raum für Vorbereitungen steht im OG auch zur Verfügung. Im EG befinden sich Eingangsbereich, Aufenthaltsraum, WCs, Materialraum und eine grosse Küche.</p>
                        <p>Der überdachte Sitzplatz mit Aussengrill eignet sich besonders gut für den Aufenthalt im Freien. Für den gemeinsamen Genuss vom Lagermenü oder zum Spielen und Singen ist dieser Platz sehr beliebt. Für Outdooraktivitäten lässt die Wiese mit Aussenarena und dem angrenzenden Wald dein Pfadiherz höher schlagen. Die Nähe zum Dorf mit allen Einkaufsmöglichkeiten gerät somit komplett in Vergessenheit.</p>
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
                                    <li class="nav-item"><a href="vermietung-<?php echo $subnav; ?>.php?subnav=<?php echo $subnav; ?>" class="active nav-link text-white" aria-current="page" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
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
                                <div class="col-md-12" data-pgc-field="downloads"> 
                                    <section>
                                        <div class="px-3">
                                            <h4 class="fs-6 text-dark-emphasis">Downloads</h4> 
                                            <p><a href="downloads/Tarife/Tarife_Pfadis.pdf" target="_blank">Tarife</a><br><a href="downloads/Heimordnung_Schneggeboedeli.pdf" target="_blank">Heimordnung</a><br><a href="downloads/Grundriss_Schneggeboedeli.pdf" target="_blank">Grundriss<br><a href="downloads/Kuecheninventar_Pfadiheim.pdf" target="_blank">Kücheninventar</a></a></p>
                                            <p></p> 
                                        </div>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
