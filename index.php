<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : "tampil" ;
switch ($submodule) {
    case 'tampil': 
        default:
        include "guru/tampil.php";
        break;   
    case 'tambah':
        include "guru/tambah.php";
        break;
    case 'simpan' :
        include "guru/simpan.php";
        break;       
    case 'edit' :
        include "guru/edit.php";
        break;       
    case 'update' :
        include "guru/update.php";
        break;       
    case 'hapus' :
        include "guru/hapus.php";
        break;
        
  
}