<?php
session_start();
require_once 'functions.php';

$id = $_GET['id'];

if (hapusPhoto($id) > 0) {
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href = 'uploadphot.php'; 
    </script>";
} else {
    echo "<script>
    alert('Gagal dihapus');
    document.location.href = 'uploadphot.php'; 
    </script>";
}
