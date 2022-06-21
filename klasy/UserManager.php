<?php

class UserManager {

    function loginForm() {
        ?><h1>Logowanie</h1><p>
     <form action="logowanie.php" method="post">
     Login: <br/><input type="text" name="login" required/><br/>
     Haslo: <br/><input type="password" name="haslo" required/><br/>
     <input type="submit" name="zaloguj" value="Zaloguj"/>
     <input type="reset" value="Anuluj"/>
     </form></p><?php
    }

    function login($db) {
        $args = [
            'login' => FILTER_SANITIZE_ADD_SLASHES,
            'haslo' => FILTER_SANITIZE_ADD_SLASHES,
        ];

        $dane = filter_input_array(INPUT_POST, $args);

        $login = $dane["login"];
        $passwd = $dane["haslo"];
        $userId = $db->selectUser($login, $passwd, "uzytkownicy");
        if ($userId >= 0) {
            session_start();
        }
        return $userId;
    }

    function logout($db) {
        session_start();
        $sessionId = session_id();
        $sqlrm = "DELETE FROM logged_in_users WHERE sessionId='$sessionId'";
        $db->delete($sqlrm);
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }
        session_destroy();
    }

    function getLoggedInUser($db, $sessionId) {
        $id = -1;
        $sql = "SELECT * FROM logged_in_users WHERE sessionId='$sessionId'";
        if ($result = $db->getMysqli()->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object();
                $id = $row->userId;
            }
        }
        return $id;
    }
    function checkLogin($db, $login) {
        $czy_jest = $db->checkLoginDB($login);
        return $czy_jest;
    }

}
?>
