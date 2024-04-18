<?php
include("include.inc");
session_start();
?>

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Reviewer"){
        if(isset($_GET["decide"])){
            $decide = $_GET["decide"];
            echo "決定:".$decide;
            echo "<br/>";    
        }
        if(isset($_GET["Comment"])){
            $decide = $_GET["decide"];
            echo "您的評語:".strip_tags (nl2br($_GET["Comment"]));   
        }
        echo "<br/>";
        echo "<a href = 'logout.php'>登出";
    }
    else{
        echo "非法登入";
        echo "<br/>"."3秒後回登入畫面";
        header("Refresh:3;url=index.php");
    }
}else{
    echo "非法登入";
    echo "<br/>"."3秒後回登入畫面";
    header("Refresh:3;url=index.php");
}
?>