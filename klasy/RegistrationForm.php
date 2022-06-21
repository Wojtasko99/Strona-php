<?php
    class RegistrationForm {
     protected $user;
     function __construct(){ ?>
     <h1>Rejestracja</h1><p>
     <form action="rejestracja.php" method="post">
     Login: <br/><input type="text" name="login" required /><br/>
     Haslo: <br/><input type="password" name="passwd" required/><br/>
     Email: <br/><input type="email" name="email"required /><br/>
     <input type="submit" name="submit" value="Rejestruj"/>
     <input type="reset" value="Anuluj"/>
     </form></p>
     <?php
     }
     function checkUser(){ 
     $args = [
     'login' => ['filter' => FILTER_VALIDATE_REGEXP,
     'options' => ['regexp' => '/^[A-Za-z][A-Za-z0-9]{5,31}$/']
     ],
     'passwd' => ['filter' => FILTER_VALIDATE_REGEXP,
     'options' => ['regexp' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/']],
     'email' => ['filter' => FILTER_VALIDATE_EMAIL],
     ];
     //przefiltruj dane:
     $dane = filter_input_array(INPUT_POST, $args);
     
     $errors = "";
        foreach ($dane as $key => $val) {
        if ($val === false or $val === NULL) {
        $errors .= $key . " ";
        }
        }
     if ($errors === "") {
    //Dane poprawne – utwórz obiekt user
     $this->user=new User($dane['login'],$dane['passwd'],$dane['email']);
     } else {
     
     $this->user = NULL;
     }
     return $this->user;
     }
     function getLogin($db, $login) {
        $czy_jest = false;
        $sql = "SELECT * FROM uzytkownicy WHERE login='$login'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $czy_jest = true;
            }
        }
        return $czy_jest;
    }
     

}
?>