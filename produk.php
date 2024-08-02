<?php

// jualan produk 
// figure
// keychain

class produk {
    public $nama,
           $asal,
           $pembuatKarakter,
           $harga;

   public function getLabel() {
    return "$this->nama,
            $this->asal,
            $this->pembuatKarakter,
            $this->harga";
   }
}

$produk1 = new produk();
$produk1->nama = "Ruka Sarashina";
$produk1->asal = "Rant A Girlfriend";
$produk1->pembuatKarakter = "Reiji Miyajima";
$produk1->harga = "50000";


$produk2 = new produk();
$produk2->nama = "Chizuru Mizuhara";
$produk2->asal = "Rent A Girlfriend";
$produk2->pembuatKarakter = "Reiji Miyajima";
$produk2->harga = "50000";

// echo "Figure : $produk1->nama,
//                $produk1->asal";

echo "<br>";
echo "Figure : " . $produk1->getLabel();
echo "<hr>";
echo "Keychain : " . $produk2->getLabel();
?>