<?php
class Mahasiswa{
    // property declaration
    public $umur = '20 Tahun';

    // method declaration
    public function IPK() {
        echo '3.00';
    }
}
$Guntur = new Mahasiswa;
?>

<p>Halo, nama saya Guntur, umur saya <?php echo $Guntur->umur; ?>, dan IPK saya <?php $Guntur->IPK(); ?></p>
