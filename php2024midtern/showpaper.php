<?php
include("include.inc");
session_start();
?>

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Author"){
        if(isset($_GET["title"])){
            $title = strip_tags (nl2br($_GET["title"]));
            echo "論文標題:".$title;
            echo "<br/>";    
        }
        if(isset($_GET["aName"])){
            $aName = strip_tags (nl2br($_GET["aName"]));
            echo "作者姓名:".$aName;
            echo "<br/>";    
        }
        if(isset($_GET["aEmail"])){
            $aEmail = strip_tags (nl2br($_GET["aEmail"]));
            echo "作者EEmail:".$aEmail;
            echo "<br/>";    
        }
        if(isset($_GET["point"])){
            $point = $_GET["point"];
            echo "論文摘要:".strip_tags (nl2br($_GET["point"]));   
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