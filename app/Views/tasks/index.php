
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <h2>CRUD App</h2>
            <div class="my-3">
                <a href="<?php echo base_url('tasks/create')?>" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;Create News</a>
            </div>

            <?php if(isset($validation)): ?>
                <div class="alert alert-danger">
                    <strong>Validation Error </strong>
                    <?= $validation->listErrors(); ?>
                </div>
            <?php endif; ?>

            <?php if(session()->has('message_noti')): ?>
                <div class="alert alert-success">
                    <?= session('message_noti') ?>
                </div>
            <?php endif;?>

            <?php if(session()->has('message_error')): ?>
                <div class="alert alert-danger">
                    <?= session('message_error') ?>
                </div>
            <?php endif;?>

            <h1><?= $title ?></h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?= $task['id'] ?></td>
                            <td><?= $task['task_name'] ?></td>
                            <td><?= $task['status'] ?></td>
                            <td>
                                <a href="<?php echo base_url('tasks/edit/' . $task['id']); ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                &nbsp;
                                <a href="<?php echo base_url('tasks/delete/' . $task['id']); ?>"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
