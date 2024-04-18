<?php
include("include.inc");
?>

<?php
session_start();
?>

<meta charset="utf8">
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Chair"){
        echo "成功登入，您的身分為Chair<br/>";
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