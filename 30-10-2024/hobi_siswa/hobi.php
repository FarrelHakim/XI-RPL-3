<?php
class hobi {
    private $conn;
    private $table_name = "hobi_siswa";

    public $id;
    public $nama;
    public $kelas;
    public $hobi_siswa;
    public $profile;

    public function __construct($db) {
        $this->conn = $db;
        
    }
    // Read
    function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();


        return $stmt;
    }

    function hasId($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id=" . $id;

        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) return true;
        else return false;
    }

    function getLength() {
        $query = "SELECT COUNT(*) AS total FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC)["total"];
    }

    // Create
    function create() {
        $query = "INSERT INTO " . $this->table_name . " SET Nama=:nama, Kelas=:kelas, Hobi=:hobi, Profile=:profile";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":kelas", $this->kelas);
        $stmt->bindParam(":hobi", $this->hobi_siswa);
        $stmt->bindParam(":profile", $this->profile);

        if ($stmt->execute()) {
            return $query;
        }

        return false;
    }

    function edit() {
        $query = "UPDATE " . $this->table_name . " SET Nama=:Nama, Kelas=:Kelas, Hobi=:Hobi, Profile=:Profile WHERE ID=:ID";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":Nama", $this->nama);
        $stmt->bindParam(":Kelas", $this->kelas);
        $stmt->bindParam(":Hobi", $this->hobi_siswa);
        $stmt->bindParam(":Profile", $this->profile);

        if ($stmt->execute()) {
            return $query;
        }

        return false;
    }

    function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE ID=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);
        if ($stmt->execute()) {
            return $query;
        }

        return false;
    }
}