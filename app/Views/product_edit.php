<?php echo $this->extend('index') ?>
<?php echo $this->section('content') ?>
<style>
  form {
    max-width: 500px;
    margin-top: 20px;
  }

  form div {
    margin-bottom: 16px;
  }

  form label {
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
  }

  form input[type="text"],
  form input[type="file"],
  form textarea {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
  }

  form textarea {
    height: 120px;
    resize: vertical;
  }

  img {
    margin-top: 8px;
    border-radius: 4px;
    display: block;
  }

  button {
    padding: 10px 18px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }

  .btn-secondary {
    display: inline-block;
    margin-top: 12px;
    padding: 8px 14px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
  }

  .btn-secondary:hover {
    background-color: #5a6268;
  }
</style>

<h2>Edit Product</h2>

<form action="<?php echo base_url('product-update/' . $product['id']) ?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="product_name">Name:</label>
        <input type="text" name="product_name" value="<?php echo esc($product['name']) ?>" required>
    </div>

    <div>
        <label for="product_image">Current Image:</label><br>
        <img src="<?php echo base_url('uploads/' . $product['image']) ?>" width="100">
    </div>

    <div>
        <label for="product_image">Change Image:</label>
        <input type="file" name="product_image">
    </div>

    <div>
        <label for="product_description">Description:</label>
        <textarea name="product_description" required><?php echo esc($product['description']) ?></textarea>
    </div>

    <button type="submit">Update Product</button>
</form>
<a href="<?php echo base_url('product-list') ?>" class="btn btn-secondary">Back</a>


<?php echo $this->endSection() ?>
