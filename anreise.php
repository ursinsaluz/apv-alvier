<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Anreise</h2>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <section class="pb-4">
                        <p>Das Pfadiheim ist mit dem öffentlichen Verkehr und per Auto erreichbar. Weil Buchs verkehrsgünstig liegt und gut erschlossen ist, sind die Städte St.Gallen, Chur und Zürich sowie Feldkirch (A) und Bregenz (A) innerhalb einer Fahrzeit von rund einer Stunde erreichbar. Bis zum Flughafen St.Gallen-Altenrhein sind es 40 Kilometer.</p>
                    </section>
                    <div class="pb-4">
                        <iframe src='https://map.geo.admin.ch/embed.html?lang=de&topic=ech&bgLayer=ch.swisstopo.pixelkarte-farbe&layers=ch.swisstopo.zeitreihen,ch.bfs.gebaeude_wohnungs_register,ch.bav.haltestellen-oev,ch.swisstopo.swisstlm3d-wanderwege,ch.astra.wanderland-sperrungen_umleitungen&layers_opacity=1,1,1,0.8,0.8&layers_visibility=false,false,false,false,false&layers_timestamp=18641231,,,,&E=2753803&N=1225182&zoom=9.928492228190104&crosshair=marker' width='100%' height='500' frameborder='0' style='border:0' allow='geolocation'></iframe>
                    </div>
                    <section class="pb-3 pt-3">
                        <h2>Mit Bahn und Bus</h2>
                        <p>Ab Sargans und St.Gallen sowie Feldkirch (A) bestehen gute Zugverbindungen. Der Bahnhof Buchs SG bietet ein P+R Angebot sowie einen Car Sharing Standort.
Rail Service täglich 24 h Tel 0900 300 300.<br>Links: <a href="https://www.sbb.ch" target="_blank">sbb.ch</a> / <a href="https://www.thurbo.ch" target="_blank">thurbo.ch</a></p>
                        <p>Die Region Rheintal wird neben postauto.ch durch die RTB Rheintal und Bus Sarganserland bedient.
Es besteht die Möglichkeit vom Bahnhof Buchs mit dem Ortsbus Linie 401 zur katholischen Kirche zu fahren. Von hier zu Fuss ca. 20 Minuten bis zum Pfadiheim. Oder Bus gemäss Winter- Fahrplan Haltestelle Mühle Altendorf. Ab hier ca. 20 Minuten Fussmarsch.<br>Links: <a href="https://www.rtb.ch" target="_blank">rtb.ch</a> / <a href="https://www.postauto.ch" target="_blank">postauto.ch</a></p>
                    </section>
                    <section class="pb-3 pt-3">
                        <h2>Mit dem Auto</h2>
                        <p>Ausfahrt Autobahn A13 Buchs, auf Rheinstrasse Richtung Buchs, Kreisel, Bahnhofstrasse, nach UBS links, Altendorferstrasse, Richtung Buchserberg, Abzweigen in Nebenbachweg, Fallengässli. Ab Parkplatz dann auf Natur Strasse.</p>
                        <p>Achtung: <b>Kein Winterdienst!</b></p>
                        <p>Parkmöglichkeiten gibt es bei Mühle Altendorf, bei ehemals Rest. Schneggen, beim Vitaparcour und beim Marktplatz Werdenberg. Der Fussmarsch ab Marktplatz beträgt ca. 30 Minuten.</p>
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
                                        <a href="vermietung-<?php echo $subnav; ?>.php?subnav=<?php echo $subnav; ?>" class="nav-link text-white" aria-current="page" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
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
                                        <a href="anreise.php?subnav=<?php echo $subnav; ?>" class="active nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
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
                                    <h4 class="fs-6 text-dark-emphasis">Standort</h4> 
                                    <p><a href="https://s.geo.admin.ch/2xb2pdo1foj6" target="_blank">SwissTopo</a><br><a href="#">Google-Maps</a><br><a href="https://www.sbb.ch" target="_blank">SBB</a><br><a href="https://www.thurbo.ch" target="_blank">Thurbo</a><br></p>
                                    <h4 class="fs-6 text-dark-emphasis">Downloads</h4>
                                    <p><a href="downloads/Anfahrt_Schneggeboedeli.pdf" target="_blank">Anreise</a><br><a href="downloads/Parkplatzsituation_Schneggeboedeli.pdf" target="_blank">Parkplätze</a></p>
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
