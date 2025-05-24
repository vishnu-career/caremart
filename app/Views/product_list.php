<?php echo $this->extend('index') ?>
<?php echo $this->section('content') ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .green { background-color: #95C897; color: #fff; text-align: center; border-radius: 5px; }
    .pending { background-color: #DCAA81; color: white; text-align: center; border-radius: 5px; }
    img { width: 50px; height: 50px; object-fit: cover; border-radius: 4px; }

    .action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .action-buttons a {
        font-size: 18px;
        text-decoration: none;
        color: #fff;
        padding: 6px 10px;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .action-buttons a.activate { background-color: #28a745; }
    .action-buttons a.deactivate { background-color: #dc3545; }
    .action-buttons a.edit { background-color: #17a2b8; }
    .action-buttons a.delete { background-color: #dc3545; }

    .action-buttons a:hover { opacity: 0.85; }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .top-bar .btn {
        background-color: #007bff;
        color: white;
        padding: 8px 14px;
        border-radius: 5px;
        text-decoration: none;
    }

    .top-bar .btn:hover { background-color: #0056b3; }
</style>

<h2>Product List</h2>
<div class="top-bar">
    <a href="<?php echo base_url('product') ?>" class="btn">Add Products</a>
    <a href="<?php echo base_url('/') ?>" class="btn">Back</a>
</div>

<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $display_id        = 1;
                            $reversed_products = array_reverse($products);
                        foreach ($reversed_products as $product): ?>
                            <tr>
                                <td><?php echo $display_id++; ?></td>
                                <td><?php echo $product['name']; ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $product['image']); ?>" alt="Image"></td>
                                <td><?php echo $product['description']; ?></td>
                                <td class="action-buttons">
                                    <a href="<?php echo base_url('product-toggle/' . $product['id']); ?>"
                                       class="<?php echo $product['status'] ? 'deactivate' : 'activate'; ?>"
                                       title="<?php echo $product['status'] ? 'Deactivate' : 'Activate'; ?>">
                                        <i class="fas                                                                                                           <?php echo $product['status'] ? 'fa-toggle-on' : 'fa-toggle-off'; ?>"></i>
                                    </a>
                                    <a href="<?php echo base_url('product-edit/' . $product['id']); ?>" class="edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url('product-delete/' . $product['id']); ?>" class="delete"
                                       onclick="return confirm('Are you sure you want to delete this product?')" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
