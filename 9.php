<?php
   
   //class tumbuhan
   class tumbuhan{
     //menentukan property dengan protected
     protected $nama = "Pulung Koding";
     
     //method protected
     protected function nama () {
       return "Nama saya " .$this->nama;
     }
     
     public function tampilkan_nama () {
       return $this->tampilkan_nama;
     }
   
  }
  
//instansiasi class tumbuhan
$tumbuhan = new tumbuhan () ;

//memanggil method public tampilkan_nama dari class tumbuhan
echo $tumbuhan->tampilkan_nama () ;
