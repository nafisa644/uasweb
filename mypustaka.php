<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypustaka 
{
    function nama_saya(){
        echo "Nama saya adalah Nafis !";
    }
    function nama_kamu($nama){
        echo "Nama Kamu adalah ". $nama ." !";
    }

}