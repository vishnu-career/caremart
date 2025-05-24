<?php echo $this->extend('index') ?>
<?php echo $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
</head>
<body>
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

    .action-buttons a.toggle-status {
        background-color: #ffc107;
    }

    .action-buttons a:hover {
        opacity: 0.9;
    }
</style>

<h2>Awards</h2>
<div><button><a href="<?php echo base_url('add-awards') ?>">Add Awards</a></button></div>
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
                            <th>Team</th>
                            <th>Direct</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($awards as $award): ?>
                        <tr>
                            <td><?php echo $award['id'] ?></td>
                            <td><?php echo $award['name'] ?></td>
                            <td><img src="<?php echo base_url('uploads/' . $award['image']) ?>" alt="Image"></td>
                            <td><?php echo $award['team'] ?></td>
                            <td><?php echo $award['direct'] ?></td>

                            <td class="action-buttons">
                                <?php if ($award['status'] === 'Active'): ?>
                                   <a href="<?php echo base_url('toggle-statusawards/' . $award['id']) ?>" class="toggle-status" style="background-color: #ffc107;">Deactivate</a>

                                <?php else: ?>
                                  <a href="<?php echo base_url('toggle-statusawards/' . $award['id']) ?>" class="toggle-status" style="background-color: #28a745;">Activate</a>

                                <?php endif; ?>
                                <a href="<?php echo base_url('edit-awards/' . $award['id']) ?>" class="edit">Edit</a>
                               <a href="<?php echo base_url('delete-awards/' . $award['id']) ?>" class="delete" onclick="return confirm('Delete this award?')">Delete</a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php echo $this->endSection() ?>