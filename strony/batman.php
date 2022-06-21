<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MoviesWeb</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php session_start();?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../index.php">MoviesWeb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Strona Główna</a></li>
                        <li class="nav-item"><a class="nav-link" href="filmy.php">Filmy</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="ankieta.php">Ankieta</a></li>
                        <?php 
                        if(!isset($_SESSION['login'])){ 
                            echo '<li class="nav-item"><a class="nav-link" href="logowanie.php">Zaloguj się!</a></li>'; } 
                        else{
                            if($_SESSION['login'] == 'Admin123'){
                                echo '<li class="nav-item"><a class="nav-link" href="admin.php">'.$_SESSION['login'].'</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="../skrypty/wyloguj.php">Wyloguj</a></li>';
                            }else{
                            echo '<li class="nav-item"><a class="nav-link" href="profil.php">'.$_SESSION['login'].'</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="../skrypty/wyloguj.php">Wyloguj</a></li>';
                        }}
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Zwiastun filmu Batman 2022</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">16.01.2022 via Wojciech Suchodolski</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Filmy</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Zwiastuny</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/batman.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            The Batman to stanowczo jeden z najbardziej wyczekiwanych 
                            filmów przyszłego roku, a przyczyniły się do tego niezwykle mroczne i klimatyczne
                            zwiastuny zaserwowane przez wytwórnią Warner Bros. Choć początkowo fani DC nie wróżyli
                            sukcesu Robertowi Pattinsonowi, udostępnione zapowiedzi sprawiły, że zamilkli nawet najwięksi hejterzy.
                            <br> <br>
                            Tym razem światło dzienne ujrzał oficjalny opis filmu The Batman, który sugeruje, 
                            że nadciagające widowisko będzie jeszcze brutalniejsze niż to co ujrzeliśmy na zapowiedziach.
                            <br> <br>
                            "The Batman to mroczny pełen akcji thriller, który ukazuje Batmana w jego początkowych latach działalności,
                            kiedy starał się zrównoważyć przepełniającą go złość i chęć niesienia pomocy mieszkańcom Gotham.
                            Robert Pattinson serwuje gorzką wersję Batmana, który nie dostrzega, że przepełniająca go nienawiść sprawia
                            , iż nie jest lepszy od seryjnych morderców, na których poluje" - czytamy w opisie filmu.
                            <br> <br>
                            <iframe style="display: block; border-style:none; margin: 0px auto;" width="560" height="315" src="https://www.youtube.com/embed/bw18JwCPqCs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5" >
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                
                                <form class="mb-4" method="POST"><textarea name="komentarz" value=" " class="form-control" rows="3" placeholder="Podziel się swoimi przemyśleniami!"></textarea>
                                <input type="submit" class="btn btn-primary" style="width: 50%; float: right;" name="dodaj_kom" value="Dodaj komentarz!" />
                                </form>
                                
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Mirek z Bogdańca</div>
                                        Nie mogę sie doczekać!
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Gorol_990</div>
                                                Jo tyż!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Grecki Bóg Domestos</div>
                                        Pattinson jest mierny!
                                    </div>
                                </div>
                                <?php include_once '../skrypty/komentarze.php';  ?>
                                
                            </div>
                            
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Damian Wojtal 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
