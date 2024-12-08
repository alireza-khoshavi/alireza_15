<?php
include("heder.HTML");
?>
<p>
    ثبت نام کنید لطفا!
</p>

<form action="codsabt.php"method="post">
<input type="text"name="firstname" placeholder="نام">
<input type="text"name="lastname" placeholder="فامیل">
<input type="text"name="email" placeholder="ایمیل">
<input type="text"name="username" placeholder="نام کاربری">
<input type="text"name="password" placeholder="پسورد">
<input type="text"name="repassword" placeholder="تکرار پسورد">
<input type="submit"value="ثبت نام">
</form>
<?php
include("foot.html");
?>