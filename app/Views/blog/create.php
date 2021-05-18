<div class="container">
    <h1>Create a new post</h1>

    <?php if ($_POST): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= \Config\Services::validation()->listErrors() ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <form action=<?= base_url('/blog/create') ?> method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="">
        </div>

        <div class="form-group">
            <label for="body">Post</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
    </form>
</div>