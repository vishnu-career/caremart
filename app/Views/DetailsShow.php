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

    .action-buttons a {
        margin-right: 5px;
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 14px;
        color: #fff;
    }

    .action-buttons a.edit {
        background-color: #17a2b8;
    }

    .action-buttons a.delete {
        background-color: #dc3545;
    }

    .action-buttons a.view {
        background-color: #28a745;
    }

    .action-buttons a:hover {
        opacity: 0.9;
    }
    .add-button {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 16px;
    font-size: 14px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 15px;
    transition: background-color 0.3s ease;
}

.add-button:hover {
    background-color: #0056b3;
}

</style>

<h2>Uploaded Images</h2>
<button><a href="<?php echo base_url('upimages') ?>" class="btn">Add Scroll Images</a></button>
<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($images as $img): ?>
                        <tr>
                            <td><?php echo $img['id'] ?></td>
                            <td><img src="<?php echo base_url('uploads/' . $img['image']) ?>" alt="Image"></td>

                           <td class="action-buttons">
    <a href="<?php echo base_url('toggle/' . $img['id']) ?>" class="<?php echo $img['status'] ? 'delete' : 'edit' ?>">
        <?php echo $img['status'] ? 'Deactivate' : 'Activate' ?>
    </a>
    |
    <a href="<?php echo base_url('edit/' . $img['id']) ?>" class="edit">Edit</a>
    |
    <a href="<?php echo base_url('delete/' . $img['id']) ?>" class="delete" onclick="return confirm('Are you sure you want to delete this image?')">Delete</a>
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