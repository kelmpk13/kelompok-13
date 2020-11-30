<?php
   //PHP OOP part 2 pengertian Class, Object, Property dan Method
   //class tumbuhan
   
   class tumbuhan{
     //property
     var $nama;
     var $warna;
     
    //method manusia
    function tampilkan_nama(){
    return " Nama Saya pulung_coding <br/>";
    }
    
    function warna_kulit(){
    return "Warna kulit saya hitam <br/>";
    }
    
    }
    //instansiasi class tumbuhan 
    $tumbuhan = new tumbuhan();
    
    //memanggil method tampilkan_nama dari class tumbuhan
    echo $tumbuhan->tampilkan_nama();
    
    //memanggil method warna_kulit dari class tumbuhan
    echo $tumbuhan->warna_kulit();
