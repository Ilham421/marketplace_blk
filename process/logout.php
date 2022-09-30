<?php
// Inisialisasi session
session_start();
 
// Hapus semua variabel didalam session
$_SESSION = array();
 
// Destroy session.
session_destroy();
 
// Alihkan ke halaman login
header("location: ../");
exit;