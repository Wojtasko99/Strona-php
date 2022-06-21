<?php

class Ankieta {

    public function pobierzDane($db){
        $args = [
        'email' => ['filter' => FILTER_VALIDATE_EMAIL],
        'ocena' => ['filter' => FILTER_VALIDATE_INT],
        'komentarz' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']],
        'filmy_prop' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/.{1,255}/']]
        ];
        
        $dane = filter_input_array(INPUT_POST, $args);
        
        $errors = "";
        if (is_array($dane) || is_object($dane))
{
        foreach ($dane as $key => $val) {
        if ($val === false or $val === NULL) {
        $errors .= $key . " ";
        }
        }
}
        if($errors === ""){
            return $dane;
        }else{
            echo '<p>Nie udalo sie dodac do bazy!</p>';
        } 
    }
    
    public function saveDBAnkieta($db,$dane) {  
        $email = $dane['email'];
        $ocena = $dane['ocena'];
        $komentarz = $dane['komentarz'];
        $filmy_prop = $dane['filmy_prop'];
        
        $sql = "INSERT INTO ankieta (email, ocena, komentarz, filmy_prop) VALUES"
                . "('$email',"
                . "'$ocena',"
                . "'$komentarz',"
                . "'$filmy_prop')";
        $db->insert($sql);
    }


}
