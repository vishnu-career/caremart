
<?php echo $this->extend('index') ?>

<?php echo $this->section('content') ?>
<h2 style="text-align: center; margin-bottom: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333;">Upload Image</h2>

<style>
  .x_content {
    max-width: 450px;
    margin: 0 auto;
    background: #fff;
    padding: 25px 30px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    border-radius: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .preview-img {
    max-width: 100%;
    max-height: 300px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    display: none;
    object-fit: contain;
  }

  form input[type="file"] {
    display: block;
    margin-bottom: 20px;
    cursor: pointer;
    border: 2px dashed #bbb;
    padding: 20px;
    width: 100%;
    font-size: 16px;
    border-radius: 8px;
    transition: border-color 0.3s ease;
  }

  form input[type="file"]:hover {
    border-color: #007bff;
  }

  form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
  }

  form button:hover {
    background-color: #0056b3;
  }
</style>

<div class="x_content">
    <form action="<?php echo base_url('save') ?>" method="post" enctype="multipart/form-data" style="margin-bottom: 20px;">
        <img id="preview" class="preview-img" src="#" alt="Image Preview" />
        <input type="file" name="image" id="imageInput" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
</div>

<script>
  const imageInput = document.getElementById('imageInput');
  const preview = document.getElementById('preview');

  imageInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function(e) {
        preview.setAttribute('src', e.target.result);
        preview.style.display = 'block';
      }

      reader.readAsDataURL(file);
    } else {
      preview.style.display = 'none';
      preview.setAttribute('src', '#');
    }
  });
</script>

<?php echo $this->endSection() ?>
