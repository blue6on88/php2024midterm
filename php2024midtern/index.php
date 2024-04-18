<html>
<head>
<?php
include("include.inc");
session_start();
?>

</head>
<body>
<h1>高大資管論文投稿系統</h1><br/>
<form action="check.php" method="get">
請選擇您的角色:
<select name="uRole">
<option value="Chair" selected>Chair
<option value="Reviewer">Reviewer
<option value="Author">Author
</select><br/>
<?php
if(isset($_COOKIE["userName"])){
    $userName = $_COOKIE["userName"];
    echo "帳號:<input type = 'text' name = 'uID' value = '$userName' required><br/>";
}
else{
    echo "帳號:<input type = 'text' name = 'uID' value = ''><br/>";
}

?>
密碼:<input type="text" name="uPWD" value=""><br/>
<input type="submit">
</form>
</body>
        
</html>