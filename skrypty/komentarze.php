<?php
$komentarz = " ";

$zawartosc = " ";
if(isset($_POST['dodaj_kom'])){
    if(!isset($_SESSION['login'])){ 
       echo "<script type='text/javascript'>alert('Nie jestes zalogowany!');</script>";
    }else{
        if(isset($_POST['komentarz'])){
            $komentarz = $_POST['komentarz'];
         $zawartosc .= '<div class="d-flex">
          <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
          <div class="ms-3">
          <div class="fw-bold">'.$_SESSION['login'].'</div>
          '.$komentarz.'
          </div>
          </div> ';
        echo $zawartosc;}
}
    
    
}

?>

