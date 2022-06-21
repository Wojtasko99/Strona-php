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
                        <li class="nav-item"><a class="nav-link " href="filmy.php">Filmy</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="ankieta.php">Ankieta</a></li>
                        <?php 
                        if(!isset($_SESSION['login'])){ 
                            echo '<li class="nav-item"><a class="nav-link" href="logowanie.php">Zaloguj się!</a></li>'; } 
                        else{
                            if($_SESSION['login'] == 'Admin123'){
                                echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="admin.php">'.$_SESSION['login'].'</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="../skrypty/wyloguj.php">Wyloguj</a></li>';
                            }else{
                            echo '<li class="nav-item"><a class="nav-link "  href="profil.php">'.$_SESSION['login'].'</a></li>';
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
                    <article >
                        <section class="mb-5">
                            <div>
                            <?php
                            include '../klasy/Admin.php';
                                include '../klasy/Baza.php';
                            if(isset($_SESSION['login'])){
                            if($_SESSION['login'] != 'Admin123'){
                            echo '<h1>NATYCHMIAST OPUŚĆ STRONĘ!</h1>';
                            }
                            if($_SESSION['login'] == 'Admin123'){
                                echo '<h2>Konfiguracja bazy danych przez ';
                                echo $_SESSION['login'];
                                echo '</h2><br><br>';
                                echo '<h3>Konfiguracja:</h3><br>';
                                echo '<form method="GET">';
                                echo '<button class="btn btn-primary" style="margin-right: 10px;" type="submit" value="dodaj" name="strona">Dodaj film!</button>';
                                echo '<button class="btn btn-primary" style="margin-right: 10px;" type="submit" value="usun" name="strona">Usun film!</button>';
                                echo '<button class="btn btn-primary" style="margin-right: 10px;" type="submit" value="akt" name="strona">Aktualizuj film!</button>';
                                echo '<button class="btn btn-primary" style="margin-right: 10px;" type="submit" value="wys" name="strona">Wyswietl uzytkownikow!</button>';
                                echo '<button class="btn btn-primary" style="margin-right: 10px;" type="submit" value="glowna" name="strona">Resetuj!</button>';
                                echo '</form>';
                                
                                $db = new Baza("localhost", "root", "", "baza");
                                $admin = new Admin();
                                if (filter_input(INPUT_GET, 'strona')) {
                                    $strona = filter_input(INPUT_GET, 'strona');
                                    switch ($strona) {
                                    case 'dodaj': include '../skrypty/dodajphp.php';
                                    break;
                                    case 'usun': include '../skrypty/usunphp.php';
                                    break;
                                    case 'akt': include '../skrypty/aktphp.php';
                                    break;
                                    case 'wys': include '../skrypty/wysuztyk.php';
                                    break;
                                    case 'glowna': include '../skrypty/glowna.php';
                                    break;
                                    default: include '../skrypty/glowna.php';
                                    }
                                } else {
                                    include '../skrypty/glowna.php';
                                }
                                  
                        }
                            else{
                                echo '<h1>NATYCHMIAST OPUŚĆ STRONĘ!</h1>';
                            }}
                            ?>
                            </div>
                        </section>
                    </article>
                    
                    
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
