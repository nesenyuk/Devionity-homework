<form action="div.28.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name">
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for=tel>phone</label>
    <input type="tel" name="tel" id="tel">
    <input type="submit">
</form>
<?php
print_r($_POST);
?>
