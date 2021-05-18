<?php $session = \Config\Services::session(); ?>
<div class="container">

	<?php if(isset($session->success)): ?>
		<div class="alert alert-success alert-dismissible fade show my-5" role="alert" align="center">
			<?= $session->success ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif ?>

	<div class="jumbotron">
		<h1>Bootstrap Tutorial</h1>
		<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
		responsive, mobile-first projects on the web.</p>
	</div>
	<p>This is some text.</p>
	<p>This is another text.</p>
	
	<section class="blog-section">
		<?php if($news): ?>

			<?php foreach($news as $item): ?>
				<div class="my-5">
					<div class="card">
						<div class="card-body">
							<a href=<?= base_url('post/'.$item['slug']) ?>>
								<h3><?= $item['title'] ?></h3>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>

		<?php else: ?>
			<h3>No posts haave been found!</h3>
		<?php endif ?>
	</section>
</div>