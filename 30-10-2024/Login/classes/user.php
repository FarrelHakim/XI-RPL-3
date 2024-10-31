<?php
//clases/user.php
require_once 'config/connect.php';

class User{
    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn =$db;
    }

    /**
     * mengecek kredensial login
     * @param string $username
     * @param string $password
     * @return boolean
     */

     public function login($username, $password) {
        //Query untuk mengambil data user yang sesuai dengan username yang diinput
        $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        //Jika ada data user yang sesuai dengan username yang diinput
        if($stmt->rowCount() > 0){
            //ambil data user yang sesuai dengan username yang diinput
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            //Jika password yang diinput sesuai dengan password yang tersimpan di database
            if(password_verify($password, $row['password'])){
                //mulai sesi dan simpan username
                session_start();
                $_SESSION['username'] = $username;
                //kembalikan true
                return true;
            }
        }
        //kembalikan false jika tidak ada data user yang sesuai dengan username yang diinput atau password yang diinput tidak sesuai dengan password yang tersimpan di database
        return false;
     }

     //mfungasi menambah user baru
     public function register($username, $password) {
        $query = "INSERT INTO " . $this->table_name . " (username, password) VALUES (:username, :password)";
        $stmt = $this->conn->prepare($query);

        //enkiripsi password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $hashed_password);

        try {
            if($stmt->execute()) {
                return true;
            }
        }catch(PDOException $exception) {
            return false;
        }

        return false;
     }
}