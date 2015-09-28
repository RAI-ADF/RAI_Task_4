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

  <label name="birthplace">Birthplace<br>
    <select id="province" name="province" class="province">
      <option>Province</option>
      <option value="Aceh">Aceh</option>
      <option value="Jawa Barat">Jawa Barat</option>
      <option value="Papua">Papua</option>
    </select>
    <select id="city" name="city" class="city">
      <option>City</option>
    </select>
    <input type="hidden" id="birthplace" name="birthplace" value="<?php echo $data['birthplace']; ?>">
  </label>

  <label name="birthdate">Birthdate
    <input type="text" name="birthdate" class="date" value="<?php echo $data['birthdate']; ?>">
  </label>

  <button type="submit" class="btn-minimal">Save</button>
</form>
