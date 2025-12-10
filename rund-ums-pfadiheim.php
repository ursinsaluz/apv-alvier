<?php
$pageTitle = 'APV Alvier-Werdenberg';
$pageDescription = 'Pinegrow Web Editor - Professional Services Bootstrap v5 Template';
include 'includes/header.php';
?>
        <div class="container pb-5 pt-5" id="content">
            <div class="row" data-pgc-field="Titel">
                <h2>Rund ums Pfadiheim</h2>
            </div>
            <div class="row">
                <div class="col-md-8" data-pgc-field="Content"> 
                    <div id="carouselExampleInterval" class="carousel pb-4 slide mb-2" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1946_1.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim Pfadiheim 1946 &ndash; 1947</p>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1946_2.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1946</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1946_3jpg.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1946</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1946-1947_1.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1946 &ndash; 1947</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1946-1947_2.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1946 &ndash; 1947</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1947-1971_1.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1947 &ndash; 1971</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1947-1971_2.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1947 &ndash; 1971</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1972-1976_1.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1972 &ndash; 1976</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1972-1976_2.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1972 &ndash; 1976</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_1972-1976-4.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 1972 &ndash; 1976</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/pfadiheim_2013_1.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 2013</p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/rund_ums_pfadiheim/20140225_Home_Pfadiheim-2.jpeg" class="w-100"/>
                                <p class="bg-dark text-white">Pfadiheim 2013</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev"> <span class="visually-hidden">Previous</span><span class="carousel-control-prev-icon" aria-hidden="true"></span> </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </a>
                    </div>
                    <h5>Rundgang Pfadiheim</h5>
                    <div class="mb-3 youtube-video-container_4-3">
                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/Cm8Pc-VNucU" title="Rundgang neu Pfadiheim" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <section class="pb-3 pt-3">
                        <h5>Impressionen Pfadiheim 2013 / 2014</h5>
                        <div class="youtube-video-container">
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/eTT4zABY2ak" title="Pfadiheim 2013 / 2014" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>                         
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
                                    <li><a href="rund-ums-pfadiheim.php?subnav=<?php echo $subnav; ?>" class="active nav-link text-white" data-pgc-field="null"><svg class="bi me-2" width="16" height="16">
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
</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
<?php include 'includes/footer.php'; ?>
