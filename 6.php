<?php

   //class tumbuhan
   class tumbuhan{
     //property
     var $nama;
     var $warna;
     
     function __construct(){
       echo "ini adalah isi method construct <br/>";
       
       }
       
       //method tumbuhan
       function tampilkan_nama(){
       return "Nama Saya pulung_koding <br/>";
       
       }
      
      }
      //instansiasi class tumbuhan
      $tumbuhan = new tumbuhan ();
      
      //memanggil method tampilkan_nama dari class tumbuhan
      echo $tumbuhan->tampilkan_nama();
