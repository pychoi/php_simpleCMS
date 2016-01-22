<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if(!$page): ?>
		<p>No page found.  Sorry!</p>
	<?php else: ?>

		<h2><?php echo escape($page['title']); ?></h2>

		<?php echo escape($page['body']); ?>

		<p class="faded">
			Created on 
			<?php echo $page['created']->format('M d Y'); ?>
		</p>
		<p>
			<?php if($page['updated']): ?>
				Last updated on
				<?php echo $page['updated']->format('M d Y'); ?>
			<?php endif; ?>
		</p>

	<?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>



