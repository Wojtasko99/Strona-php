<?php


    $zawartosc = '<br><form method="post"><table>'
            . '<h4>Zmiana tytulu.</h4>'
            . '<p>Jaki tytuł filmu?: <input type="text" name="tytul"/></p>'
            . '<p>Na jaki tytuł chcesz zmienić?:<input type="text" name="new_tytul"/></p></table>'
            . '<br><div style="display: flex; justify-content: center;"><input type="submit" class="btn btn-primary" value="Zmień!" name="zmientytul"/></div> '
            . ' </form>';
    echo $zawartosc;
    if (filter_input(INPUT_POST, "zmientytul")){
                    $dane = $admin->pobierzDaneAktTytul($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                     if ($errors === "") {
                        $admin->aktTytul($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się zmienic! </p>';
                     }}
    
    $zawartosc = '<br><form method="post"><table>'
            . '<h4>Zmiana roku.</h4>'
            . '<p>Jaki tytuł filmu?: <input type="text" name="tytul1"/></p>'
            . '<p>Na jaki rok zmienić?:<input type="number" name="new_rok"/></p></table>'
            . '<br><div style="display: flex; justify-content: center;"><input type="submit" class="btn btn-primary" value="Zmień!" name="zmienrok"/></div> '
            . ' </form>';
    echo $zawartosc;
    if (filter_input(INPUT_POST, "zmienrok")){
                    $dane = $admin->pobierzDaneAktRok($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                     if ($errors === "") {
                        $admin->aktRok($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się zmienic! </p>';
                     }}
    $zawartosc = '<br><form method="post"><table>'
            . '<h4>Zmiana reżysera.</h4>'
            . '<p>Jaki tytuł filmu?: <input type="text" name="tytul2"/></p>'
            . '<p>Na jaki reżyser?:<input type="text" name="new_rezyser"/></p></table>'
            . '<br><div style="display: flex; justify-content: center;"><input type="submit" class="btn btn-primary" value="Zmień!" name="zmienrezyser"/></div> '
            . ' </form>';
    echo $zawartosc;
    if (filter_input(INPUT_POST, "zmienrezyser")){
                    $dane = $admin->pobierzDaneAktRezyser($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                     if ($errors === "") {
                        $admin->aktRezyser($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się zmienic! </p>';
                     }}
    $zawartosc = '<br><form method="post"><table>'
            . '<h4>Zmiana oceny.</h4>'
            . '<p>Jaki tytuł filmu?: <input type="text" name="tytul3"/></p>'
            . '<p>Jaka ocena?:<input type="text" name="new_ocena"/></p></table>'
            . '<br><div style="display: flex; justify-content: center;"><input type="submit" class="btn btn-primary" value="Zmień!" name="zmienocene"/></div> '
            . ' </form>';
    echo $zawartosc;
    if (filter_input(INPUT_POST, "zmienocene")){
                    $dane = $admin->pobierzDaneAktOcena($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                     if ($errors === "") {
                        $admin->aktOcena($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się zmienic! </p>';
                     }}
                
                     
                
                    
    
?>