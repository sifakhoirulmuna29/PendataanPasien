<html>
    <head>
        <title>Membuat Login</title>
</head>
<body>
    <h2>Daftar User Anda</h2>
<br/>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "DAFTAR GAGAL-!! USERNAME ATAU PASSWORD SALAH!";
    }else if($_GET['pesan'] == "daftar"){
        echo "ANDA TELAH BERHASIL daftar-!!";
    }else if($_GET['pesan'] == "belum_daftar"){
        echo "ANDA HARUS DAFTAR UNTUK MENGKASES HALAMAN ADMIN";
    }
}
?>
<br/>
<br/>
<form method="POST" action="login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukkan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><a href="login.php"><input type="button" name="daftar" value="daftar"/></a></td>
</tr>
</table>
</form>
</body>
</html>