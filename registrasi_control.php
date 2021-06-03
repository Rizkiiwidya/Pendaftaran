<?php

include ('config/koneksi.php');

//Menampilkan pesan jika registrasi berhasil
session_start();

if($_POST['btn_registrasi']){
//print_r($_POST);

$nama = $_POST['nama']; 
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$password = md5($_POST['password']);
$ulangi_password = md5($_POST['ulangi_password']);

if($password != $ulangi_password){
    echo "Error : Password tidak sama";
    echo "<br><br> <button type = 'button' onclick='history.back();'> Kembali </button>";
    die;
}

//insert ke table user
$sql_user = "INSERT INTO users (nama,username,password,level) values('$nama','$email','$password','siswa')";
$result_user = mysqli_query($koneksi, $sql_user);
if($result_user){
    $data_user = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()");
    while($u = mysqli_fetch_array($data_user)){
        $id_user = $u[0];
    }

    //insert table pendaftar
    $sql_pendaftar = "INSERT INTO pendaftar (nama,tempat_lahir,tgl_lahir,jenis_kelamin,agama,alamat,email,telepon,users_id) values ('$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$email','$telepon','$id_user')";
    $result_pendaftar = mysqli_query($koneksi,$sql_pendaftar);

    if($result_pendaftar){
        //jika berhasil registrasi maka akan menampilkan pesan berhasil
        $_SESSION['pesan_registrasi'] = "Registrasi Berhasil, Login Menggunakan Email dan Password Anda!";
        //Redirect ke menu login jika berhasil
        header('location: login.php');

    }else{
        //query gagal
        echo "Error insert pendaftar : ". mysqli_error($koneksi);
        echo "<br><br> <button type = 'button' onclick='history.back();'> Kembali </button>";
        die;
    }
    
}else{
    //jika query gagal
    echo "Error insert users : ". mysqli_error($koneksi);
    echo "<br><br> <button type = 'button' onclick='history.back();'> Kembali </button>";
    die;
}







}else{
    echo "Tidak ada";
}

?>