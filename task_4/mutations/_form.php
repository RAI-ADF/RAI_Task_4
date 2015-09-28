<form action="../mutations/index.php" method="post" class="minimal">
  <input type="hidden" name="_METHOD" value="<?php echo $action; ?>" />
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

  <label name="name">Name
    <input type="text" name="name" value="<?php echo $data['name']; ?>">
  </label>

  <label name="date">Date
    <input type="text" name="date" class="date" value="<?php echo $data['date']; ?>">
  </label>

  <label name="type">Type
    <input type="text" name="type" value="<?php echo $data['type']; ?>">
  </label>

  <label name="amount">Amount
    <input type="text" name="amount" value="<?php echo $data['amount']; ?>">
  </label>

  <label name="note">Note
    <textarea name="note"><?php echo $data['note']; ?></textarea>
  </label>

  <button type="submit" class="btn-minimal">Save</button>
</form>
