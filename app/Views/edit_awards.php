  <?php echo $this->extend('index') ?>
  <?php echo $this->section('content') ?>

  <style>
    form label {
      display: block;
      margin-top: 12px;
      font-weight: bold;
    }
    form input[type="text"],
    form select,
    form input[type="file"] {
      width: 300px;
      padding: 6px 8px;
      margin-top: 4px;
    }
    form button {
      margin-top: 16px;
      padding: 8px 16px;
      cursor: pointer;
    }
    img {
      margin-top: 8px;
      border-radius: 4px;
    }
  </style>

  <h2>Edit Awards</h2>
  <form action="<?php echo base_url('update-awards/' . $award['id']) ?>" method="post" enctype="multipart/form-data">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo esc($award['name']) ?>" required><br>

      <label>Team</label>
      <input type="text" name="team" value="<?php echo esc($award['team']) ?>" required><br>

      <label>Direct</label>
      <input type="text" name="direct" value="<?php echo esc($award['direct']) ?>" required><br>

      <label>Status</label>
      <select name="status">
          <option value="Active"                                <?php echo($award['status'] === 'Active') ? 'selected' : '' ?>>Active</option>
          <option value="Deactive"                                 <?php echo($award['status'] === 'Deactive') ? 'selected' : '' ?>>Deactive</option>
      </select><br>

      <label>Image (optional)</label>
      <input type="file" name="image"><br>

      <?php if (! empty($award['image'])): ?>
          <img src="<?php echo base_url('uploads/' . $award['image']) ?>" width="100" alt="Current Image"><br>
      <?php endif; ?>

      <button type="submit">Update Awards</button>
  </form>

  <?php echo $this->endSection() ?>
