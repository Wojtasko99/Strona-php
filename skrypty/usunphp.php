<?php
    
    $zawartosc = '<br><p><h3>Jaki film chcesz usunac?</h3></p>'
            . '<form method="post"><table>'
            . '<td>Tytul: </td><td><input type="text" name="tytul"/></td></table>'
            . '<br><div style="display: flex; justify-content: center;">'
            . '<input type="submit" class="btn btn-primary" value="Usuń!" name="usunfilm"/></div> '
            . ' </form>';
    echo $zawartosc;

    if (filter_input(INPUT_POST, "usunfilm")){
                    $dane = $admin->pobierzDaneUsun($db);
                    $errors = "";
                    foreach ($dane as $key => $val) {
                        if ($val === false or $val === NULL) {
                            $errors .= $key . " ";
                            }
                    }
                    
                     if ($errors === "") {
                        $admin->usunFilm($db,$dane);}
                        
                     else{
                         echo '<p> Nie udało się usunąć filmu z bazy! </p>';
                     }}
?>

