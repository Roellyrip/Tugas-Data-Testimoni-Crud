<?php 
include 'koneksi.php';

$Nama = $_POST['Nama'];
$Tanggal= $_POST['Tanggal'];
$Rasa_id= $_POST['Rasa_id'];
$Kualitas= $_POST['Kualitas'];
$Screenshot = $_POST['Screenshot'];

$query = mysqli_query($conn, "INSERT INTO oreo (Nama, Tanggal, Rasa_id, Kualitas, Screenshot) VALUES ('$Nama', '$Tanggal', '$Rasa_id', '$Kualitas', '$Screenshot')") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='../view/index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

header("location:../view/index.php");
?>