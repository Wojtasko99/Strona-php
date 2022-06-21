<?php


class Admin {
    
    public function pobierzDane($db){
        $args = [
        'tytul' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        'rok' => ['filter' => FILTER_VALIDATE_INT],
        'autor' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        'ocena' => ['filter' => FILTER_VALIDATE_FLOAT]
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function pobierzDaneUsun($db){
        $args = [
        'tytul' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']]
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function usunFilm($db,$dane){
        $tytul=$dane['tytul'];
        
        $czy_jest = false;
        $sql = "SELECT * FROM filmy WHERE Tytul='$tytul'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        
        if($czy_jest == true)      {     
        $sql = "DELETE FROM filmy where Tytul='".$tytul."'";
        $db->delete($sql);
        echo '<p>Pomyślnie usunięto film!</p>';
        }
        else{
            echo '<p>Nie ma takiego filmu!</p>';
        }
    }
    public function dodajFilm($db,$dane){
        $tytul=$dane['tytul'];
        $rok=$dane['rok'];
        $autor=$dane['autor'];
        $ocena=$dane['ocena'];

        $sql = "INSERT INTO filmy (Tytul, Rok_produkcji, Rezyser, Ocena) VALUES"
                . "('$tytul',"
                . "'$rok',"
                . "'$autor',"
                . "'$ocena')";
        
        $db->insert($sql);
    }
    public function pobierzDaneAktTytul($db){
        $args = [
        'tytul' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
            'new_tytul' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']]
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function aktTytul($db,$dane){
        $tytul=$dane['tytul'];
        $new_tytul=$dane['new_tytul'];
        
        $czy_jest = false;
        $sql = "SELECT * FROM filmy WHERE Tytul='$tytul'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        if($czy_jest == true){
        $sql = "UPDATE filmy SET Tytul='$new_tytul' WHERE Tytul='$tytul'";    
        $db->update($sql);}
        else{
            echo "<script type='text/javascript'>alert('Nie ma takiego filmu w bazie!');</script>";
        }
    }
    public function pobierzDaneAktRok($db){
        $args = [
        'tytul1' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
            'new_rok' => ['filter' => FILTER_VALIDATE_INT]
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function aktRok($db,$dane){
        $tytul=$dane['tytul1'];
        $new_rok=$dane['new_rok'];
        
        $czy_jest = false;
        $sql = "SELECT * FROM filmy WHERE Tytul='$tytul'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        if($czy_jest == true){
        $sql = "UPDATE filmy SET Rok_produkcji='$new_rok' WHERE Tytul='$tytul'";    
        $db->update($sql);}
        else{
            echo "<script type='text/javascript'>alert('Nie ma takiego filmu w bazie!');</script>";
        }
    }
    public function pobierzDaneAktRezyser($db){
        $args = [
        'tytul2' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        'new_rezyser' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function aktRezyser($db,$dane){
        $tytul=$dane['tytul2'];
        $new_rezyser=$dane['new_rezyser'];
        
        $czy_jest = false;
        $sql = "SELECT * FROM filmy WHERE Tytul='$tytul'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        if($czy_jest == true){
        $sql = "UPDATE filmy SET Rezyser='$new_rezyser' WHERE Tytul='$tytul'";    
        $db->update($sql);}
        else{
            echo "<script type='text/javascript'>alert('Nie ma takiego filmu w bazie!');</script>";
        }
    }
    public function pobierzDaneAktOcena($db){
        $args = [
        'tytul3' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        'new_ocena' => ['filter' => FILTER_VALIDATE_FLOAT],
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        if($dane){
            return $dane;
        }else{
            echo 'Cos poszlo nie tak';
        }
    }
    public function aktOcena($db,$dane){
        $tytul=$dane['tytul3'];
        $new_ocena=$dane['new_ocena'];
        
        $czy_jest = false;
        $sql = "SELECT * FROM filmy WHERE Tytul='$tytul'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        if($czy_jest == true){
        $sql = "UPDATE filmy SET Ocena='$new_ocena' WHERE Tytul='$tytul'";    
        $db->update($sql);}
        else{
            echo "<script type='text/javascript'>alert('Nie ma takiego filmu w bazie!');</script>";
        }
    }
}