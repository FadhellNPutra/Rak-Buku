<?php 
    if(!defined('INDEX')) die("");

    $halaman = [
        'dashboard',
        'buku',
        'buku_tambah',
        'buku_insert',
        'buku_edit',
        'buku_update',
        'buku_hapus',
        'buku_detail',
        'genre',
        'genre_tambah',
        'genre_insert',
        'genre_edit',
        'genre_update',
        'genre_hapus'
    ];

    if(isset($_GET['hal'])){ 
        $hal = $_GET['hal'];
    }else{
        $hal = 'dashboard';
    }

    foreach($halaman as $h){
        if($hal == $h){
            include "content/$h.php";
            break;
        };
    }
?>