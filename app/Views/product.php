<?php echo $this->extend('index') ?>

<?php echo $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <style>


  .form-container {
    max-width: 500px;
    margin: auto;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  label {
    display: block;
    margin: 15px 0 5px;
    font-weight: bold;
    color: #555;
  }

  input[type="text"],
  textarea,
  input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }
  .back-button {
  display: block;
  width: 200px;
  margin: 20px auto;
  text-align: center;
  background-color: #6c757d;
  color: white;
  padding: 12px;
  border-radius: 6px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.back-button:hover {
  background-color: #5a6268;
}

</style>

</head>
<body>
    <h1>Add products</h1>
    <div class="form-container">
        <form action="<?php echo base_url('saveProduct') ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" id="product_name" required>
            </div>
            <div>
                <label for="product_image">Product Image:</label>
                <input type="file" name="product_image" id="product_image" accept="image/*" required>
            </div>
            <div>
                <label for="product_price">Description:</label>
                <input type="text" name="product_description" id="product_description" required>
            </div>
            <button type="submit">Add Product</button>

        </form>

    </div>
   <a href="<?php echo base_url('product_list') ?>" class="back-button">Back</a>

</body>
</html>
<?php echo $this->endSection() ?>
