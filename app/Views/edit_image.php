<?php echo $this->extend('index') ?>
<?php echo $this->section('content') ?>

<style>
    .edit-form {
        max-width: 400px;
        margin: 40px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .edit-form h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #222;
    }
    .edit-form label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #444;
    }
    .edit-form input[type="text"],
    .edit-form input[type="file"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    .edit-form input[type="text"]:focus,
    .edit-form input[type="file"]:focus {
        border-color: #2980b9;
        outline: none;
    }
    .edit-form img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 0 auto 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .edit-form button {
        width: 100%;
        padding: 12px;
        background-color: #2980b9;
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .edit-form button:hover {
        background-color: #1c5980;
    }
</style>
<div class="edit-form">
    <h2>Edit Image</h2>

    <form action="<?php echo base_url('update/' . $record['id']) ?>" method="post" enctype="multipart/form-data">
        <label for="image">Change Image (optional)</label>
        <input type="file" id="image" name="image" accept="image/*">

        <img src="<?php echo base_url('uploads/' . $record['image']) ?>" alt="Current Image" style="max-width: 300px; margin-top: 10px;">


    <button type="submit" style="margin-top: 15px;">Update</button>
</form>

<script>
  const imageInput = document.getElementById('image');
  const imgPreview = document.querySelector('.edit-form img');

  imageInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        imgPreview.src = e.target.result;
      }
      reader.readAsDataURL(file);
    }
  });
</script>

<?php echo $this->endSection() ?>
