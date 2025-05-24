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
</style>

<h2>Add Awards</h2>
<form action="<?php echo base_url('insert-awards') ?>" method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="name" required><br>

    <label>Team</label>
    <input type="text" name="team" required><br>

    <label>Direct</label>
    <input type="text" name="direct" required><br>

    <label>Status</label>
    <select name="status">
        <option value="Active">Active</option>
        <option value="Deactive">Deactive</option>
    </select><br>

    <label>Image</label>
    <input type="file" name="image"><br><br>

    <button type="submit">Add Awards</button>
</form>

<?php echo $this->endSection() ?>
