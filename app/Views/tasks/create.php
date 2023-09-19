
<div class="container">
    <div class="row">   
        <div class="col-md-6 offset-md-3">
            <?php if(isset($validation)): ?>
                <div>
                    <strong>Validation Error</strong>
                    <?= $validation->listErrors(); ?>
                </div>
            <?php endif; ?>

            <h1><?= $title ?></h1>

            <form action="<?php echo base_url('tasks/create'); ?>" method="post">
                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" class="form-control" name="task_name" value="">
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status" value="">
                </div>

                <div>
                    <a href="<?php echo base_url('tasks'); ?>" class="btn btn-secondary">Back to Tasks</a>&nbsp;
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
