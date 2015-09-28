<form action="../users/index.php" method="post" class="minimal">
  <input type="hidden" name="_METHOD" value="<?php echo $action; ?>" />
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

  <label name="username">Username
    <input type="text" name="username" value="<?php echo $data['username']; ?>">
  </label>


  <label name="password">Password
    <input type="text" name="password" value="<?php echo $data['password']; ?>">
  </label>

  <label name="name">Name
    <input type="text" name="name" value="<?php echo $data['name']; ?>">
  </label>

  <label name="email">Email
    <input type="text" name="email" value="<?php echo $data['email']; ?>">
  </label>

  <label name="birthplace">Birthplace
    <input type="text" name="birthplace" value="<?php echo $data['birthplace']; ?>">
  </label>

  <label name="birthdate">Birthdate
    <input type="text" name="birthdate" value="<?php echo $data['birthdate']; ?>">
  </label>

  <button type="submit" class="btn-minimal">Save</button>
</form>
