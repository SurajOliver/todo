

<?php if(isset($validation)): ?>
    <div>
        <strong>Validation Error</strong>
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<form action="<?php echo base_url('tasks/store'); ?>" method="post">
    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="" value="">
    </div>

    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="" value="">
    </div>

    <div>
        <a href="" class="button"></a>
        <button type="submit">Save</button>
    </div>
</form>