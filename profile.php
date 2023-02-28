<? phpsession_start();
echo $_SESSION['name'] . " ";
echo $_SESSION['last name'];
echo $_SESSION['number'];
$c = $_SESSION['picture'];
echo " <img src='picture/$c' width='150px' height='150px'>" ;
