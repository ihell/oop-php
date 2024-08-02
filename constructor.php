<?php

// jualan produk 
// figure
// keychain

class produk {
    public $nama,
           $asal,
           $pembuatKarakter,
           $harga;

   public function __construct( $nama, $asal, $pembuatKarakter, $harga ) {
        $this->nama = $nama;
        $this->asal = $asal;
        $this->pembuatKarakter = $pembuatKarakter;
        $this->harga = $harga;
        }

   public function getLabel() {
    return "$this->nama,
            $this->asal,
            $this->pembuatKarakter,
            $this->harga";
   }
}

$produk1 = new produk("Ruka Sarashina", "Rent A Girlfriend", "Reiji Miyamija", "50000");
$produk2 = new produk("Chizuru Mizuhara", "Rent A Girlfriend", "Reiji Miyamija", "50000");

// echo "Figure : $produk1->nama,
//                $produk1->asal";

echo "<br>";
echo "Figure : " . $produk1->getLabel();
echo "<hr>";
echo "Keychain : " . $produk2->getLabel();
?>