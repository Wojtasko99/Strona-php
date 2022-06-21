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
                        <li class="nav-item"><a class="nav-link " href="kontakt.php">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page"  href="ankieta.php">Ankieta</a></li>
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
                            <h1 class="fw-bolder mb-1">Jak oceniasz naszą stronę?:</h1>
                            
                        </header>
                        
                        <section class="mb-5"><p>
                            <form action="ankieta.php" method="post">
                                <h3>Email: </h3><input type="email" name="email" class="form-control"  required /><br/><br/>
                            <h3>Ocena strony:</h3>
                            <div style="justify-content: center; text-align: center; margin: 0px auto; padding: 0px auto;">
                            <input type="radio" name="ocena" id="1" value="1" checked>1
                            <input type="radio" name="ocena" id="2" value="2">2
                            <input type="radio" name="ocena" id="3" value="3">3
                            <input type="radio" name="ocena" id="4" value="4">4
                            <input type="radio" name="ocena" id="5" value="5">5
                            <input type="radio" name="ocena" id="6" value="6">6
                            <input type="radio" name="ocena" id="7" value="7">7
                            <input type="radio" name="ocena" id="8" value="8">8
                            <input type="radio" name="ocena" id="9" value="9">9
                            <input type="radio" name="ocena" id="10" value="10">10</br><br/>
                            </div>
                            <h3>Co możemy zmienić na naszej stronie?</h3>
                            <input type="textarea" class="form-control" rows="3" cols="2" maxlength="255" name="komentarz" required/></br><br/>
                            <h3>Na recenzję jakiego filmu czekasz?</h3>
                            <input type="textarea" class="form-control" rows="3" cols="2" maxlength="255" name="filmy_prop" required/></br><br/>
                            <input type="submit" name="ankieta" value="Wyślij"/>
                            <input type="reset" value="Anuluj"/>
                            </form></p>
                            <?php include_once '../klasy/Ankieta.php';
                            include_once '../klasy/Baza.php'; 
                                $db = new Baza("localhost", "root", "", "baza");
                                $ankieta = new Ankieta();
                                $dane = $ankieta->pobierzDane($db);
                                if($dane){
                                $ankieta->saveDBAnkieta($db, $dane);
                                
                                }
                            ?>
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
