<?php

class User {

    protected $login;
    protected $passwd;
    protected $email;

    function __construct($login, $passwd,$email) {

        $this->login = $login;
        $this->passwd = password_hash($passwd, PASSWORD_DEFAULT);
        $this->email = $email;
    }

    function toArray() {
        $arr = [
            "login" => $this->login,
            "email" => $this->email,
            "haslo" => $this->haslo,
        ];
        return $arr;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function show() {
        echo "$this->login  $this->passwd $this->email<br>";
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPasswd() {
        return $this->passwd;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDate() {
        return $this->date;
    }

    public function setUserName($login): void {
        $this->login = $login;
    }

    public function setPasswd($passwd): void {
        $this->passwd = $passwd;
    }

    public function setFullName($fullName): void {
        $this->fullName = $fullName;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setDate($date): void {
        $this->date = $date;
    }

    public function saveDB($db) {   
        $sql = "INSERT INTO uzytkownicy (login, haslo, email) VALUES"
                . "('$this->login',"
                . "'$this->passwd',"
                . "'$this->email')";
        $db->insert($sql);
    }

    static public function getAllUsersFromDB($db) {
        $sql = "SELECT * FROM uzytkownicy";
        $pola = ["id", "login", "haslo", "email"];
        echo $db->select($sql, $pola);
    }
     public function czyLoginIstnieje($db, $login) {
        $zapytanie_sprawdz_usera= "select * from uzytkownicy where login='$login' ";
            $db->check($zapytanie_sprawdz_usera);
    }

}
