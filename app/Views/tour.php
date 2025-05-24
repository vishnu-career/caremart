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

    .action-buttons a.toggle-status {
        background-color: #ffc107;
    }

    .action-buttons a:hover {
        opacity: 0.9;
    }
</style>

<h2>Tour Data</h2>
<div><button><a href="<?php echo base_url('add-tour') ?>">Add Tour</a></button></div>
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
                        <?php foreach ($tours as $tour): ?>
                        <tr>
                            <td><?php echo $tour['id'] ?></td>
                            <td><?php echo $tour['name'] ?></td>
                            <td><img src="<?php echo base_url('uploads/' . $tour['image']) ?>" alt="Image"></td>
                            <td><?php echo $tour['team'] ?></td>
                            <td><?php echo $tour['direct'] ?></td>

                            <td class="action-buttons">
                                <?php if ($tour['status'] === 'Active'): ?>
                                    <a href="<?php echo base_url('toggle-status/' . $tour['id']) ?>" class="toggle-status" style="background-color: #ffc107;">Deactivate</a>
                                <?php else: ?>
                                    <a href="<?php echo base_url('toggle-status/' . $tour['id']) ?>" class="toggle-status" style="background-color: #28a745;">Activate</a>
                                <?php endif; ?>
                                <a href="<?php echo base_url('edit-tour/' . $tour['id']) ?>" class="edit">Edit</a>
                                <a href="<?php echo base_url('delete-tour/' . $tour['id']) ?>" class="delete" onclick="return confirm('Delete this tour?')">Delete</a>
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
