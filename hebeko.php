<?php
$pageTitle = 'Heimbetriebskommission';
$pageDescription = 'TEST';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Heimbetriebskommission</h2>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <section class="pb-4">
                        <ul class="category list-striped">
                            <li class="system-unpublished cat-list-row0">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row0">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row0">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row0">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row0">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <span class="pull-right"> </span>
                            </li>
                            <li class="system-unpublished cat-list-row1">
                                <p>Die Heimbetriebskommission (HEBKO) ist organisatorisch dem Altpfadfinderverband (APV) Alvier-Werdenberg unterstellt und besteht aus Mitgliedern desselben. Sie ist zuständig für den Betrieb und Unterhalt des Pfadiheims und deren Umgebung. Für Mietanfragen, Reservationen und die Betreuung der Gäste während des Mietaufenthalts ist die HEBEKO ebenfalls verantwortlich. Beim Mietvertragsabschluss wird dem Mieter die entsprechende Kontaktperson bekannt gegeben.</p>
                                <p>Die HEBEKO-Mitglieder sind stets bemüht, den Besuchern jederzeit eine intakte Infrastruktur zur Verfügung zu stellen. Darum sind sie auch auf eine gegenseitige und wohlwollende Zusammenarbeit mit den Gästen angewiesen.</p>
                                <p>Die Vermietung von Wohnraum berührt in besonderer Weise die wirtschaftlichen Belange des Vermieters sowie die persönlichen Belange des Mieters. Für den Vermieter geht es um die Nutzungsüberlassung eines Wirtschaftsgutes von hohem Wert. Für den Mieter geht es um einen Aspekt von höchster Wichtigkeit in Bezug auf die Entfaltung während des Aufenthaltes. Das gemeinsame Sorgetragen am Objekt und der Natur beschert allen Menschen Freude und Zufriedenheit, wie auch glückliche und unvergessliche Momente auf dem &laquo;Schneggebödeli&raquo;.</p>
                                <p>Wir freuen uns sehr auf deinen Besuch und wünschen dir schon jetzt eine wunderschöne Zeit!</p>
                                <img src="images/20140225_Home_Pfadiheim.jpeg" class="img-fluid pb-4">
                            </li>
                        </ul>
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
                                <div>
                                    <div class="bg-dark mb-4 pb-3 pt-3 rounded text-white">
                                        <ul class="nav nav-pills flex-column mb-auto">
                                            <li class="nav-item">
                                                <a href="apv.php" class="nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
                                                        <use xlink:href=""></use>
                                                    </svg>APV</a><a href="hebeko.php" class="active nav-link text-white" aria-current="page"><svg class="bi me-2" width="16" height="16">
</svg>HEBEKO</a>
                                            </li>
                                            <li>
                                                <a href="kontaktaufnahme.php" class="nav-link text-white"><svg class="bi me-2" width="16" height="16">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
