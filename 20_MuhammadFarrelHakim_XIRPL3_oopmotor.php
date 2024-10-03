<?php
// Definisi kelas
class Motor {
    private $warna;
    private $merek;
    private $model;
    private $cc;

    
    public function bergerak() {
        echo "Motor bergerak\n";
        echo"<br>";
    }
    
    public function berhenti() {
        echo "Motor berhenti\n";
        echo"<br>";
    }
    public function belok() {
        echo "Motor belok\n";
        echo"<br>";
    }

    public function getWarna() {
        return $this->warna;
    }
    
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getCc() {
        return $this->cc;
    }
    
    public function setCc($cc) {
        $this->cc = $cc;
    }
    public function __construct($warna, $merek, $model, $cc) {
        $this->warna = $warna;
        $this->merek = $merek;
        $this->model = $model;
        $this->cc = $cc;
    }
}

// Penggunaan kelas
$motorKu = new Motor("Merah", "Honda", "Beat", "110cc");

$motorKu->bergerak();
$motorKu->berhenti();
$motorKu->belok();

echo "Warna Motor: " . $motorKu->getWarna() . "\n";
echo"<br>";

$motorKu->setWarna("Hitam");
echo "Warna Motor setelah diubah: " . $motorKu->getWarna() . "\n";
echo"<br>";

echo "Merek Motor : " . $motorKu->getMerek() . "\n";
echo"<br>";

$motorKu->setMerek("Kawasaki");
echo "Merek Motor setelah diubah: " . $motorKu->getMerek() . "\n";
echo"<br>";

echo "Model Motor : " . $motorKu->getModel() . "\n";
echo"<br>";

$motorKu->setModel("Zx25R");
echo "Model Motor setelah diubah: " . $motorKu->getModel() . "\n";
echo"<br>";

echo "CC Motor : " . $motorKu->getCc() . "\n";
echo"<br>";

$motorKu->setCc("250cc");
echo "CC Motor setelah diubah: " . $motorKu->getCc() . "\n";
?>
