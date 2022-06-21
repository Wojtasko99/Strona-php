<?php


    $zawartosc = '<br><form method="post"><table>'
            . '<h3>Dodaj film.</h3>'
            . '<td>Tytul: </td><td><input type="text" name="tytul"/></td>'
            . '<td>Rok: </td><td><input type="number" name="rok"/></td>'
            . '<td>Autor:</td><td> <input type="text" name="autor"/></td>'
            . '<td>Ocena: </td><td><input type="text" name="ocena"/></td></table>'
            . '<br><div style="display: flex; justify-content: center;"><input type="submit" class="btn btn-primary" value="Dodaj!" name="dodajfilm"/></div> '
            . ' </form>';
    echo $zawartosc;
                if (filter_input(INPUT_POST, "dodajfilm")){
                    $dane = $admin->pobierzDane($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                     if ($errors === "") {
                        $admin->dodajFilm($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się dodać do bazy! </p>';
                     }}
                    
                    
    
?>