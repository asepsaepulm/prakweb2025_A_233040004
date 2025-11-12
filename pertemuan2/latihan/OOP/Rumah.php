<?php 

class Rumah {

    // Properti
    public $warna = "Putih";
    public $jumlahKamar = 3;
    public $alamat = "Jl. Merdeka No. 10";

    //konstruktor
    public function __construct($warnaBaru, $kamarBaru){
        $this->warna = $warnaBaru;
        $this->jumlahKamar = $kamarBaru;

    }

    //Method
    public function kunciPintu() {
        return "Pintu terkunci";
    }

    public function gantiWarna($warnaBaru) {
        $this->warna = $warnaBaru;
        return 'Rumah ini berwarna ' . $this->warna;
    }

    //     public function gantiJumlahKamar($jumlahBaru) {
    //         $this->jumlah = $jumlahBaru;
    //         return 'Rumah ini memiliki kamar ' . $this->jumlah;
    // }
    

}

function pasangListrik($rumah){
    return "Rumah yang berwarna " . $rumah->warna . " ini dipasang listrik";
}

//rumah 1
$rumahSaya = new Rumah('Kuning', 5);
$rumahAsep = new Rumah('abu', 7);
echo pasangListrik($rumahAsep);
// $rumahSaya->gantiWarna('Kuning');
// $rumahSaya->gantiJumlah(5);
// echo "Rumah saya berwarna $rumahSaya->warna";
// echo "<br>";
// echo "Rumah saya $rumahSaya->jumlahKamar";
// echo "<br>";
// echo $rumahSaya->kunciPintu();
// echo "<br>";

//rumah 2
$rumahAdi = new Rumah('Merah', 7);
// echo "Rumah Adi berwarna $rumahAdi->warna";
// echo "<br>";
// echo "Rumah Adi $rumahAdi->jumlahKamar";
// echo "<br>";
?>