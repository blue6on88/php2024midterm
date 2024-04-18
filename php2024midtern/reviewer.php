<?php
include("include.inc");
?>

<?php
session_start();
?>

<meta charset="utf8">
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Reviewer"){
        echo "<h1>Reviewer您好，歡迎進入論文評論網頁</h1><br/>";
        echo "<form action = 'showreview.php' method = 'get'>";
        echo "論文評審決定: Accept<input type='radio' name='decide' value='Minor Revision' checked>Minor Revision";
        echo "<input type='radio' name='decide' value='Major Revision'>MaJor Revision";
        echo "<input type='radio' name='decide' value='Reject'>Reject";
        echo "<br/>";
        echo "論文評論評語:<textarea name='Comment' value='' rows = '15' cols = '40'></textarea>";
        echo "<br/>";
        echo "<input type = 'submit'>";
        echo "</form>";
        echo "<a href = 'logout.php'>登出</a>";
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