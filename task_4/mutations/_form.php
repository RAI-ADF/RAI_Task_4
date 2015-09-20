<form action="../mutations/index.php" method="post">
  <input type="hidden" name="_METHOD" value="<?php echo $action; ?>" />
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
  Name:<br>
  <input type="text" name="name" value="<?php echo $data['name']; ?>">
  <br>
  Date:<br>
  <input type="text" name="date" value="<?php echo $data['date']; ?>">
  <br>
  Type:<br>
  <input type="text" name="type" value="<?php echo $data['type']; ?>">
  <br>
  Amount:<br>
  <input type="text" name="amount" value="<?php echo $data['amount']; ?>">
  <br>
  Note:<br>
  <input type="text" name="note" value="<?php echo $data['note']; ?>">
  <br>
  <input type="submit" value="Save">
</form>
