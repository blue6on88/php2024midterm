<?php
session_start();
?>


<meta charset="utf8">
<?php
$uID = $_GET["uID"];
$uPWD = $_GET["uPWD"];
$uRole = $_GET["uRole"];

$oneID = "chair";
$onePWD = "123";
$twoID = "reviewer";
$twoPWD = "234";
$threeID = "author";
$threePWD = "345";

$date = strtotime("+7 days",time());

if($uID == $oneID && $uPWD == $onePWD && $uRole == "Chair"){
    setcookie("userName",$uID,$date );
    $_SESSION["check"]="Chair";
    header("Location:chair.php");
}
elseif($uID == $twoID && $uPWD == $twoPWD && $uRole == "Reviewer"){
    setcookie("userName",$uID,$date );
    $_SESSION["check"]="Reviewer";
    header("Location:reviewer.php"); 
}
elseif($uID == $threeID && $uPWD == $threePWD && $uRole == "Author"){
    setcookie("userName",$uID,$date );
    $_SESSION["check"]="Author";
    header("Location:author.php"); 
}
else{
    $_SESSION["check"]="Other";
    header("Location:fail.php");
}


?>