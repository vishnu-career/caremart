<?php echo $this->extend('index') ?>
<?php echo $this->section('content') ?>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
        margin-right: 8px;
        font-size: 18px;
    }

    .action-buttons i:hover {
        opacity: 0.8;
        transform: scale(1.1);
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

<h2>Tour Data</h2>
<a href="<?php echo base_url('add-tour') ?>" class="add-button">Add Tour</a>

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
                        <?php
                            $serial   = 1;
                            $reversed = array_reverse($tours);
                        foreach ($reversed as $tour): ?>
                            <tr>
                                <td><?php echo $serial++; ?></td>
                                <td><?php echo $tour['name'] ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $tour['image']) ?>" alt="Image"></td>
                                <td><?php echo $tour['team'] ?></td>
                                <td><?php echo $tour['direct'] ?></td>
                                <td class="action-buttons">
                                    <a href="<?php echo base_url('toggle-status/' . $tour['id']) ?>" title="<?php echo $tour['status'] === 'Active' ? 'Deactivate' : 'Activate' ?>">
                                        <i class="fas                                                      <?php echo $tour['status'] === 'Active' ? 'fa-rotate-left' : 'fa-check' ?>" style="color:<?php echo $tour['status'] === 'Active' ? '#ffc107' : '#28a745' ?>"></i>
                                    </a>
                                    <a href="<?php echo base_url('edit-tour/' . $tour['id']) ?>" title="Edit">
                                        <i class="fas fa-edit" style="color:#17a2b8;"></i>
                                    </a>
                                    <a href="<?php echo base_url('delete-tour/' . $tour['id']) ?>" onclick="return confirm('Delete this tour?')" title="Delete">
                                        <i class="fas fa-trash-alt" style="color:#dc3545;"></i>
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

<?php echo $this->endSection() ?>
