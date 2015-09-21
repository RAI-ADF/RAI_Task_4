<form action="../users/index.php" method="post">
  <input type="hidden" name="_METHOD" value="<?php echo $action; ?>" />
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
  Username:<br>
  <input type="text" name="username" value="<?php echo $data['username']; ?>">
  <br>
  Password:<br>
  <input type="text" name="password" value="<?php echo $data['password']; ?>">
  <br>
  Name:<br>
  <input type="text" name="name" value="<?php echo $data['name']; ?>">
  <br>
  Email:<br>
  <input type="text" name="email" value="<?php echo $data['email']; ?>">
  <br>
  Birthplace:<br>
  <input type="text" name="birthplace" value="<?php echo $data['birthplace']; ?>">
  <br>
  Birthdate:<br>
  <input type="text" name="birthdate" value="<?php echo $data['birthdate']; ?>">
  <br>
  <input type="submit" value="Save">
</form>
