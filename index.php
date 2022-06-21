<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MoviesWeb</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php session_start();?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">MoviesWeb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Strona Główna</a></li>
                        <li class="nav-item"><a class="nav-link" href="strony/filmy.php">Filmy</a></li>
                        <li class="nav-item"><a class="nav-link" href="strony/kontakt.php">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="strony/ankieta.php">Ankieta</a></li>
                        <?php 
                        if(!isset($_SESSION['login'])){ 
                            echo '<li class="nav-item"><a class="nav-link" href="strony/logowanie.php">Zaloguj się!</a></li>'; } 
                        else{
                            if($_SESSION['login'] == 'Admin123'){
                                echo '<li class="nav-item"><a class="nav-link" href="strony/admin.php">'.$_SESSION['login'].'</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="skrypty/wyloguj.php">Wyloguj</a></li>';
                            }else{
                            echo '<li class="nav-item"><a class="nav-link" href="strony/profil.php">'.$_SESSION['login'].'</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="skrypty/wyloguj.php">Wyloguj</a></li>';
                        }}
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="pictures/glow.jpg" alt="1" /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light" >Najchętniej oglądane seriale na HBO GO w Polsce w 2021 roku</h1>
                    <p>Lista najchętniej oglądanych seriali na HBO GO w 2021 roku!</p>
                    <a class="btn btn-primary" href="strony/hbogo.php">Zobacz Listę!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Dobre aktorstwo w filmie jest wtedy, gdy go nie widać. ~ Zygmunt Kałużyński</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title " style="text-align: center">Zobacz zwiastun Batmana</h2>
                            <p class="card-text">Zobacz zwiastun nowego filmu serii Batman! Premiera 4 marca 2022!</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="strony/batman.php">Zwiastun!</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Lighthouse Recenzja</h2>
                            <p class="card-text"> Wciąż młody stażem reżyser zachwycił przed kilkoma laty swoim debiutanckim filmem – zimną, surową, 
                                zakorzenioną w folklorze Nowej Anglii Czarownicą.
                                Teraz twórca oddaje w nasze ręce kameralny, skrojony pod dwóch aktorów dramat psychologiczny,
                                w którym gęsta, sugestywna atmosfera grozy aż wylewa się z ekranu.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="strony/lighthouse.php">Recenzja!</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Dunkierka Recenzja</h2>
                            <p class="card-text"> Historia jest do bólu prosta. Alianccy żołnierze, po tym jak zostali osaczeni 
                                i zmuszeni do odwrotu przez niemieckie wojska, zostają uwięzieni na plaży w Dunkierce.
                                Pomimo prób ewakuacji, sami nie są w stanie poradzić sobie w tej dramatycznej sytuacji.
                                Ich jedyną nadzieją jest trójka pilotów oraz dzielni żeglarze, którzy ryzykując życiem,
                                postanowili wyruszyć na pomoc żołnierzom.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="strony/dunkierka.php">Recenzja!</a></div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Damian Wojtal 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
