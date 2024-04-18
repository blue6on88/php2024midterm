<?php
include("include.inc");
?>

<?php
session_start();
?>

<meta charset="utf8">
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Author"){
        echo "<h1>Author您好，歡迎進入論文投稿網頁</h1><br/>";
        echo "<form action = 'showpaper.php' method = 'get'>";
        echo "論文標題:<br/><input type='text' name='title' value=''><br/>";
        echo "作者姓名:<input type='text' name='aName' value=''><br/>";
        echo "作者Email:<input type='text' name='aEmail' value=''>";
        echo "<br/>";
        echo "論文摘要:<textarea name='point' value='' rows = '15' cols = '40'></textarea>";
        echo "<br/>";
        echo "<input type = 'submit'>";
        echo "</form>";
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