<?php 
function connect(){
 //connexion with mysql
$servername = "localhost";
$dbname = "siteweb";
$username = "root";
$password = "";
 try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
 }
 catch(PDOException $exc){
    echo $exc->getMessage();
    echo "bienn1";
    exit();
}
}
// header("location:index.php");
?>