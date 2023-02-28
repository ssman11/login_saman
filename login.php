<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>login</title>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $a=$_POST['name'];
    $b=$_POST['last name'];
    $s=$_POST['number'];
    $_SESSION['name']=$a;
    $_SESSION['last name']=$b;
    $_SESSION['number']=$s;

if (isset($_FILES['file'])) {
    $nn = $_FILES['file']['name'];
} $tmp = $_FILES['file']['tmp_name'];
if (move_uploaded_file($tmp, "picture/$nn")) {
    $_SESSION['picture'] = $nn;
}

header("location; /profile.php");
}
?>
<form method="post" enctype="multipart/form-data">
    <label>نام را وارد کنید </label><br>
    <input type="text" name="name"><br>
    <label>نام خانوادگی را وارد کنید</label><br>
    <input type="text" name="last name"><br>
    <label>شماره خود را وارد کنید</label><br>
    <input type="number" name="number"><br>
    <input type="file" name="file">
    <input type="submit" name="submit" value="run">
</form>
</body>
</html>
