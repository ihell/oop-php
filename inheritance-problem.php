<?php

// jualan produk 
// figure
// keychain

class produk {
    public $nama,
           $asal,
           $pembuatKarakter,
           $harga,
           $jmlUnit,
           $jmlStok,
           $tipe;

   public function __construct( $nama, $asal, $pembuatKarakter, $harga, $jmlUnit, $jmlStok, $tipe ) {
        $this->nama = $nama;
        $this->asal = $asal;
        $this->pembuatKarakter = $pembuatKarakter;
        $this->harga = $harga;
        $this->jmlUnit = $jmlUnit;
        $this->jmlStok = $jmlStok;
        $this->tipe = $tipe;
        }

   public function getLabel() {
    return "$this->pembuatKarakter,
            $this->harga";
   }

   public function getInfoLengkap() {
         $str = "{$this->tipe} : {$this->nama} | {$this->asal}, {$this->getLabel()}";
         if( $this->tipe == "figure" ) {
                $str .= "- {$this->jmlUnit} Unit.";
         } else if( $this->tipe == "keychain" ) {
                $str .= " ~ {$this->jmlStok} Stok";
         }

         return $str;
   }
}

class CetakInfoProduk {
        public function cetak( produk $produk ) {
                $str = "{$produk->nama} | {$produk->asal} {$produk->pembuatKarakter} (Rp. {$produk->harga})";
                return $str;
        }
}

$produk1 = new produk("Ruka Sarashina", "Rent A Girlfriend", "Reiji Miyamija", 50000, 100, 0, "figure" );
$produk2 = new produk("Chizuru Mizuhara", "Rent A Girlfriend", "Reiji Miyamija", 50000, 0, 50, "keychain");

echo $produk1->getInfoLengkap();