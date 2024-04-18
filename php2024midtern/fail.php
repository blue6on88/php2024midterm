<?php
include("include.inc");
?>
<?php
echo "密碼錯誤，3秒後重新回到都入畫面";
header("Refresh:3;url=index.php");
?>