<?php 
    include("header.php");
?>
<H2>Login</h2>
<form method="POST" action="category.php" enctype="multipart/form-data">
<input type="text" name="username">
<input type="password" name="pwd">
<input type="file" name="profileimage"> 
<input type="submit">
</form>
<?php 
include("footer.php");
?>