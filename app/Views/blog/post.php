<div class="container">
    <div class="row" align='center'>
        <div class="col-4"></div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $news['title'] ?></h5>
                <small><strong>Date: </strong><?= date('M d Y', strtotime($news['created_at'])) ?></small>
                <p class="card-text mt-5"><?= $news['body'] ?></p>
            </div>
        </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>