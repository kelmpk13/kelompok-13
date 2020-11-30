<?php

  //class tumbuhan
   class tumbuhan {
     //property
     public $nama;
     public $warna;
     
     //method construct di jalankan pertama kali
     function __construct (){
       echo "ini adalah isi method construct </br>";
      }
      
     //menthod destruct di jalankan terakhir 
      function __destruct (){
        echo "ini adalah isi method destruct <\br>";
        }
        
        //method tumbuhan
        function tampilkan_nama(){
          return "Nama saya sri Wulan_coding </br>";
        
        }
  }
  //instansiasi class tumbuhan  
  $tumbuhan = new tumbuhan ();
  
  
  //memanggil method tampilkan_nama dari class tumbuhan
  echo $tumbuhan ->tampilkan_nama ();
