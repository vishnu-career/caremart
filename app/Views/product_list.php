<?php echo $this->extend('index') ?>

<?php echo $this->section('content') ?>
<style>
    .green {
        background-color: #95C897;
        color: #fff;
        text-align: center;
        border-radius: 5px;
    }

    .pending {
        background-color: #DCAA81;
        color: white;
        text-align: center;
        border-radius: 5px;
    }

    img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 4px;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .action-buttons a {
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 4px;
        font-size: 14px;
        color: #fff;
        white-space: nowrap;
    }

    .action-buttons a.edit {
        background-color: #17a2b8;
    }

    .action-buttons a.delete {
        background-color: #dc3545;
    }

    .action-buttons a.activate {
        background-color: #28a745;
    }

    .action-buttons a:hover {
        opacity: 0.9;
    }

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

    .top-bar .btn:hover {
        background-color: #0056b3;
    }
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
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['id'] ?></td>
                            <td><?php echo $product['name'] ?></td>
                            <td><img src="<?php echo base_url('uploads/' . $product['image']) ?>" alt="Image"></td>
                            <td><?php echo $product['description'] ?></td>
                            <td class="action-buttons">
                               <a href="<?php echo base_url('product-toggle/' . $product['id']) ?>" class="<?php echo $product['status'] ? 'delete' : 'edit' ?>">
    <?php echo $product['status'] ? 'Deactivate' : 'Activate' ?>
</a>
| <a href="<?php echo base_url('product-edit/' . $product['id']) ?>" class="edit">Edit</a>
| <a href="<?php echo base_url('product-delete/' . $product['id']) ?>" class="delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
|
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>
