<?php


class profil {
    
    function wybierzDaneProfil($db,$login){
        $email="";
        $sql = "SELECT * FROM uzytkownicy WHERE login='$login'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $email = $row->email;
            }
            
        }
        return $email;
    }
    
}
?>