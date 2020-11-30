<?php
   
   //class tumbuhan
   class tumbuhan{
     //menentukan property dengan private
     private $nama = "pulung_koding";
     
     //method public
     public function tampilkan_nama(){
       return " Nama saya " .$this->nama;
       }
       
       
       }
       //instansiasi class tumbuhan
       $tumbuhan = new tumbuhan();
       
       //memanggil method public tampilkan_nama dari class tumbuhan
     echo $tumbuhan->tampilkan_nama();
