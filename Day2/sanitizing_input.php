<?php

if (isset($_POST['submit'])) {
  // filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
}
?>


<!-- Pass data through a form -->
<!-- php_self can be used for xss -->

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
    <label>Name: </label>
    <input type="text" name="name">
</div>
<br>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>

<div>
  Result
</div>
<?php echo $name ?? ''; ?>
<br>
<?php echo $email ?? ''; ?>
