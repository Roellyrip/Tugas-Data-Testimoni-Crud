<?php 
include 'koneksi.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Tanggal= $_POST['Tanggal'];
$Rasa_id= $_POST['Rasa_id'];
$Kualitas= $_POST['Kualitas'];
$Screenshot = $_POST['Screenshot'];

$query = mysqli_query($conn, "UPDATE oreo SET Nama='$Nama', Tanggal='$Tanggal', 
Rasa_id='$Rasa_id', Kualitas='$Kualitas', Screenshot='$Screenshot', 
WHERE id=$id") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='../view/index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

header("location:../view/index.php");
?>