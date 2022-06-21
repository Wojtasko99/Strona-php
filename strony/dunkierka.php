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
                            <h1 class="fw-bolder mb-1">"Dunkierka" to jeden z najbardziej przerażających filmów o wojnie, jaki widziałem – recenzja MoviesWeb</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">16.01.2022 via Andrzej Niczyporuk ps. Kargul</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Filmy</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Recenzje</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/dunkierka.jpeg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <h1>"Dunkierka" już od pierwszych sekund seansu wciska w fotel i sprawia, że z niepokojem trzymamy się jego krawędzi.</h1>
                            <br> <br>
                            Chyba nikt obecnie we współczesnym kinie nie potrafi tak mistrzowsko pochłaniać uwagi widza od samego początku filmu. Precyzja i specyficzna rytmika Nolana w opowiadaniu obrazem osiągnęła w "Dunkierce" swój szczytowy punkt. Genialnie prowadzona kamera (za obiektywem absolwent łódzkiej filmówki, Hoyte van Hoytema ) oraz hipnotyzujące i oszczędne dźwięki muzyki Hansa Zimmera (brzmiące jak tykająca bomba, która ma zaraz wybuchnąć) wprowadzają widza w stan niesłychanego wręcz niepokoju i napięcia, które chwilami jest nie do zniesienia!
                            <br> <br>
                            Tymi prostymi, acz nieoczywistymi środkami Christopher Nolan stworzył iście przerażający obraz wojny i przy okazji swoje najbardziej imponujące formalnie dokonanie od czasu "Incepcji".
Korzystając z poetyki filmowej, dał nam obraz tak mocny, surowy i sugestywny, jak to tylko możliwe. Co więcej, owe środki formalne w pełni wystarczyły mu do tego, by pokazać horror żołnierzy na froncie.

W filmie nie pada wcale wiele trupów (przynajmniej nie są one pokazywane widzom). Nie widzimy za dużo krwi ani rozczłonkowanych ciał żołnierzy – a sceny takie są niemalże nieodzowną częścią współczesnego kina wojennego. "Dunkierka" ucieka od tego typu obrazów. I mimo to stanowi potężny oraz brutalny cios między oczy oglądającego ten
                            <br> <br>
                            <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/dunkierka1.png" alt="..." /></figure>
                            Tym, co szczególnie pozytywnie mnie zaskoczyło, to klarowność i fantastyczna dyscyplina Nolana, widoczna nie tylko w kompozycji kadrów i każdej ze scen, ale też w czasie trwania całego obrazu.
"Dunkierka" trwa ok. 100 minut. Tym razem Nolan postawił na prostotę przekazu, nie bawił się w rozbudowane wątki fabularne czy wymyślne zwroty akcji – skupił się na tym, by pokazać okropieństwa wojny i piękno ludzkiego bohaterstwa, które potrafiło zrodzić się z mroku ówczesnych wydarzeń.
                            I choć ciężko w takim przypadku nie wpaść na tory patosu, to Nolan i z tego wyszedł obronną ręką, pokazując podniosłe sceny, ale z dość sporą dozą wstrzemięźliwości.
                            <br> <br>
                            Wszystko to składa się na naprawdę wspaniałe widowisko, choć na pewno nie jest to film dla każdego.
                            Przepięknie sfilmowane sceny na plaży (dziesiątki kadrów z tego filmu mogłoby zwisnąć w galerii sztuki) oraz pokazane z wirtuozerią bitwy powietrzne są skrojone pod masowego widza lubującego się w blockbusterach. Natomiast ich ascetyczna surowość i napięcie rodem z horroru, jakie towarzyszy "Dunkierce" od pierwszej do ostatniej sekundy, sprawiają, że na pewno nie jest to film dla całych rodzin oraz dla ludzi o słabszych nerwach.
                            Oczywiście nie mógłbym nie polecić wybrania się na "Dunkierkę", bo to po prostu fantastyczna filmowa robota.
A także kolejne ważne przypomnienie o tym, jak potworna jest wojna w jakiejkolwiek postaci. Ludziom wciąż trzeba to przypominać, bo ciągle jeszcze nie do każdego dociera to, jakie spustoszenie i ofiary (materialne i niematerialne) wiążą się z machiną wojenną.
                            <br> <br>
                            <iframe style="display: block; border-style:none; margin: 0px auto;" width="560" height="315" src="https://www.youtube.com/embed/XNupATI9P0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <div class="fw-bold">Antonina123</div>
                                        Uwielbiam filmy wojenne
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Jurek1111</div>
                                                Ja akurat nie przepadam, ale lubie filmy Nolana, więc pewnie obejrzę.
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
