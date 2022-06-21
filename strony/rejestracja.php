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
                        <li class="nav-item"><a class="nav-link" href="../strony/filmy.php">Filmy</a></li>
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
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <section class="mb-5">
                              <?php
        include '../klasy/User.php';
        include_once('../klasy/UserManager.php');
        include_once('../klasy/RegistrationForm.php');
        include_once('../klasy/Baza.php');
        $um = new UserManager();
        $rf = new RegistrationForm(); //wyświetla formularz rejestracji
        $db = new Baza("localhost", "root","", "baza");
        if (filter_input(INPUT_POST, 'submit',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
            $user = $rf->checkUser(); //sprawdza poprawność danych
            if ($user === NULL)
                echo "<p>Niepoprawne dane rejestracji.</p>";
            else{
                    
              if($db->checkLoginDB($user->getLogin())){
                    echo "<p>Login jest już użyty:</p>";
            }else{
                echo "<p>Poprawne dane rejestracji:</p>";
                $user->show();
                $user->saveDB($db);
            }
            
            }
        }
        
        
        ?>
                            Wróć do logowania <a href="logowanie.php"> Logowanie! </a>
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
