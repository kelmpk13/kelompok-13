<?php

//class tumbuhan
class tumbuhan{
  
  //property class tumbuhan
  public $tumbuhan_saya;
  
  //method pada class tumbuhan
  function berinama($saya) {
    $this->tumbuhan_saya=$saya;
    
    }
  }
   
//class turunan atau sub class dari class tumbuhan 
//kita menghubungkan class dengan syntax extends
class teman extends tumbuhan{
  
  //property class warna
  public $tumbuhan_teman;
  
  //method pada class tumbuhan teman
  function berinamateman($teman){
  $this->tumbuhan_teman=$teman;
  }
 }
 
 // instansiasi class tumbuhan teman
 $tumbuhan = new teman;
 
 // method jenis warna adalah method pada class tumbuhan, tapi kita bisa
 $tumbuhan->berinama(" tumbuhan jati ");
 $tumbuhan->berinamateman(" tumbuhan mawar ");
 
 //menampilkan isi property
 echo "Tumbuhan Yang Saya Miliki Adalah : " .$tumbuhan->tumbuhan_saya . "<br/>" ;
 echo " Tumbuhan Yang Teman Saya Miliki Adalah : " .$tumbuhan->tumbuhan_teman; 
 ?>
 
