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
                            <h1 class="fw-bolder mb-1">Recenzja filmu Lighthouse - na granicy obłędu.</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">16.01.2022 via Andrzej Niczyporuk ps. Kargul</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Filmy</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Recenzje</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/lighthouse.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            To historia dwóch mężczyzn, którzy zostają strażnikami latarni morskiej na odciętej od świata skalnej wyspie.
                            Starszy, Tom, to były żeglarz. Zrzędzi, nadużywa alkoholu, panoszy się i rozdziela obowiązki, zrzucając wszystkie zadania na barki młodszego Ephraima.
                            Sam spędza nocną zmianę na szczycie latarni, gdzie zamyka się na trzy spusty.
                            Ephraim początkowo pokornie wykonuje polecenia i pozwala się traktować jak psa, z czasem jednak narasta w nim wściekłość na Toma,
                            który ostatecznie obraca wszystko w żart, rozlewając alkohol i snując nieprawdopodobne opowieści z żywota na morzu.
                            Obaj mają swoje sekrety, które nasilają się w miarę pobytu na wyspie.
                            Lodowata sceneria, wielodniowa izolacja, samotność, dziwne wydarzenia i wreszcie nadużywanie alkoholu sprawiają,
                            że w bohaterach narasta wściekłość i wyzwalają swoje najgorsze cechy.
                            <br> <br>
                            Film Eggersa w pierwszej kolejności zabija klimatem. Czarno-biała klisza i niespotykany, nawiązujący do europejskiego kina lat 20. XX wieku format 19:16, a do tego hipnotyzujące opracowanie muzyczne i dźwiękowe kreują wyjątkową, oryginalną atmosferę niepokoju. Liczne statyczne ujęcia i sceny dialogowe kontrastują z momentami surrealistycznymi, rozgrywającymi się gdzieś pomiędzy jawą a snem – rozedrganymi, szarpanymi, ekspresjonistycznymi. To przedwojenne kino odzywa się nie tylko w samej konwencji obrazu, ale również w nadekspresyjnej grze aktorów. Willem Dafoe z teatralną manierą tworzy postać świadomie balansującą na granicy przerysowania, Robert Pattinson z kolei początkowo jest znacznie bardziej stonowany, ale w miarę upływu filmu również wielokrotnie pozwala sobie na szalone wręcz wybuchy. To dwie naprawdę świetne kreacje i same postaci.
                            <br> <br>
                            To, co znakomicie ratuje Lighthouse od nadmiaru tej mrocznej, odpychającej wręcz atmosfery, to z kolei błyskotliwie wpleciony czarny humor, którego – jak na film o tak posępnym klimacie – jest naprawdę dużo. Tu szczególnie dają o sobie znać umiejętności pisarskie Roberta Eggersa i jego brata, Maxa, kiedy zawsze gdy wydaje się, że aktorzy zbliżają się do granicy absurdalnej wręcz powagi, twórcy potrafią w przezabawny sposób rozładować te momenty. Jest więc Lighthouse zupełnie niespotykaną w dzisiejszym kinie mieszanką autentycznego kina grozy, gęstej surrealistycznej atmosfery, konwencji ocierającej się o teatr i wreszcie wyraźnego czarnego humoru.
                            <br> <br>
                            <figure class="mb-4"><img class="img-fluid rounded" src="../pictures/lighthouse1.jpg" alt="..." /></figure>
                            Jednocześnie pod względem treści film Eggersa posiada artystyczne ambicje bycia czymś więcej, niż jedynie psychologicznym horrorem o samotności i izolacji. Twórca śmiało korzysta z symboli, zaprasza widza do świata seksualnych, marynistycznych i, szerzej, intertekstualnych aluzji. Dość powiedzieć, że podczas seansu poczują się nieco jak u siebie miłośnicy H.P. Lovecrafta, ekspresjonizmu niemieckiego, Lśnienia Kubricka, Nosferatu Herzoga (którego kolejną wersję miał realizować właśnie Eggers), czy Davida Lyncha. Dostarcza więc również Lighthouse wciągającej zabawy ze znaczeniami. Zabawy, którą ciężko ostatecznie zakończyć satysfakcjonującym wynikiem, zabawy, w trakcie której część widzów skapituluje twierdząc, że nie wiedzą o czym właściwie jest ten film, a pozostali będą miesiącami snuli analizy i interpretacje, wymieniając się spostrzeżeniami w internecie.
                            <br> <br>
                            Lighthouse Roberta Eggersa to film, o jaki coraz trudniej w dzisiejszym kinie. Z jednej strony to ściśle festiwalowy art house z ambicjami, w dodatku w niezwykle odważnej i niespotykanej konwencji wizualnej, a z drugiej – zakorzeniony w bardzo mainstreamowym dziś gatunku i korzystający z aktorów z hollywoodzkiej czołówki. Taka mieszanka daje naprawdę oszałamiający rezultat. I chociaż Eggers niemal cały film buduje na dorobku wielkich poprzedników, to jednak daje się poznać również jako świadomy artysta, potwierdzając ponadto, że jego doceniony debiut nie był dziełem przypadku.
                            <br> <br>
                            <iframe style="display: block; border-style:none; margin: 0px auto;" width="560" height="315" src="https://www.youtube.com/embed/Hyag7lR8CPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <div class="fw-bold">Michał Pol</div>
                                        Dziwny film.
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Gimbus</div>
                                                +1 byq
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
