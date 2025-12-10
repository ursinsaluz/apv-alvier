<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>APV Alvier-Werdenberg</h2>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <section class="pb-4">
                        <p>Der Altpfadfinderverband (APV) Alvier-Werdenberg ist ein gemeinnütziger Verein mit Sitz in Buchs SG. Wir fördern die Kameradschaft unter den ehemaligen Pfadis und unterstützen mit dem Betrieb und Unterhalt des Pfadiheims die aktive Pfadfinderabteilung Alvier. Als Besitzer vom Pfadiheim &laquo;Schneggebödeli&raquo; bieten wir allen interessierten Gruppen Raum für die unterschiedlichsten Aktivitäten inmitten schönster Natur.</p>
                        <p>Alle Personen, die in der Pfadfinderabteilung Alvier aktiv waren, der Pfadfinderabteilung Alvier oder dem APV nahestehen, können die Mitgliedschaft erwerben.</p>
                        <p><img src="images/APVAlvierLogo_transBG.png"></p>
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
                                <section>
                                    <div>
                                        <div class="bg-dark mb-4 pb-3 pt-3 rounded text-white">
                                            <ul class="nav nav-pills flex-column mb-auto">
                                                <li class="nav-item"><a href="apv.php" class="active nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
                                                            <use xlink:href=""></use>
                                                        </svg>APV</a>
                                                    <a href="hebeko.php" class="nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
</svg>HEBEKO</a>
                                                </li>
                                                <li><a href="kontaktaufnahme.php" class="nav-link text-white"><svg class="bi me-2" width="16" height="16">
                                                            <use xlink:href=""></use>
                                                        </svg>Kontaktaufnahme</a>
                                                </li>
                                            </ul>
                                        </div>                                         
                                        <p></p> 
                                    </div>
                                    <div class="px-3"> 
                                        <p><a href="https://intern.apv-alvier.ch" target="_blank">Downloads Mitglieder</a><br></p>
                                        <p></p> 
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
