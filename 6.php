<?php
  
//class tumbuhan
class tumbuhan{
      //prop
      public $nama; 
      public $warna; 
      
      //method tumbuhan
      function tampilkan_nama () {
          return "Nama saya pulung_coding <br/>";
      }
      
}
//instansiasi class tumbuhan
$tumbuhan = new tumbuhan () ;

//memanggil method tampilkan_nama dari class tumbuhan
echo $tumbuhan->tampilkan_nama () ;
