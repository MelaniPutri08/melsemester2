<?php

include 'koneksi.php';

$id = $_POST ['id'];
$nama = $_POST ['nama'] ;
$nim = $_POST ['nim'] ;
$jurusan = $_POST ['jurusan'] ;
$semester = $_POST ['semester'] ;





$query = "INSERT INTO mahasiswa (nama, nim, jurusan, semester)
k

if($conn->query($query) === TRUE ){
    header("Location: index.php");}

    $conn->close();