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
                            <h1 class="fw-bolder mb-1">Najchętniej oglądane seriale na HBO GO w Polsce w 2021 roku</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">16.01.2022 via Krzysztof Kononowicz</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Seriale</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Listy</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/hbofilm.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p>Miniony 2021 rok w HBO GO wypełniony był wieloma różnorodnymi nowościami zarówno filmowymi, jak i serialowymi. Były wśród nich chwalone przez krytyków produkcje obyczajowe, trzymające w napięciu historie kryminalne, niesamowite opowieści fantasy, zabawne komedie czy poruszające dokumenty. Z każdym miesiącem biblioteka HBO GO powiększała się o nowe tytuły filmowe i serialowe, dzięki czemu użytkownicy serwisu mieli okazję na znalezienie idealnej dla siebie propozycji do oglądania. 
                                Jakie filmy i seriale widzowie najczęściej wybierali z oferty HBO GO?<br> <br>
                                Najchętniej oglądanym serialem w 2021 roku w HBO GO w Polsce okazał się być wyróżniony m.in.
                                Emmy miniserial HBO "Mare z Easttown" z Kate Winslet w roli głównej.
                                W produkcji tej podążamy śladami policjantki z małego miasteczka w Pensylwanii podczas prowadzonego przez nią śledztwa w sprawie morderstwa. Historia zagłębia się w mroczne strony zżytej ze sobą społeczności i podejmuje próbę analizy tego, jak rodzinne i dawne tragedie mogą definiować naszą teraźniejszość.
                                <br> <br>
                                Na drugim miejscu znalazła się "Gra o tron", a na trzecim "Opowieść podręcznej", której czwarty sezon debiutował w zeszłym roku.</p>
                            <p>TOP 10 oglądalności HBO GO w Polsce w 2021 roku – seriale:</p>
                            1. <a href="https://www.filmweb.pl/serial/Mare+z+Easttown-2021-849761">Mare z Easttown</a><br>
                            2. <a href="https://www.filmweb.pl/serial/Gra+o+tron-2011-476848">Gra o tron<br></a>
                            3. <a href="https://www.filmweb.pl/serial/Opowie%C5%9B%C4%87+podr%C4%99cznej-2017-771634">Opowieść podręcznej<br></a>
                            4. <a href="https://www.filmweb.pl/serial/Rick+i+Morty-2013-671074">Rick i Morty<br></a>
                            5. <a href="https://www.filmweb.pl/serial/Przyjaciele-1994-33993">Przyjaciele<br></a>
                            6. <a href="https://www.filmweb.pl/serial/Czarnobyl-2019-799827">Czarnobyl<br></a>
                            7. <a href="https://www.filmweb.pl/serial/Ksi%C4%99ga+czarownic-2018-800443">Księga czarownic<br></a>
                            8. <a href="https://www.filmweb.pl/serial/Sukcesja-2018-779456">Sukcesja<br></a></a>
                            9. <a href="https://www.filmweb.pl/serial/I+tak+po+prostu...-2021-868514">I tak po prostu<br></a>
                            10. <a href="https://www.filmweb.pl/serial/Nierealne-2021-834936">Nierealne<br></a>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
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
                                        <div class="fw-bold">Janusz2703</div>
                                        Uwielbiam Gre o tron!
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Troll z Choroszczy</div>
                                                Co ty gadasz Janusz?
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Janusz2703</div>
                                                Nie rozmumiem pana!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Fan kostek do toalety barwiacych na niebiesko</div>
                                        Gdzie jest SQUID GAME ????!!!!!!111
                                    </div>
                                </div>
                                <?php include_once '../skrypty/komentarze.php';  ?>
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
