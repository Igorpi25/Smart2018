<?php include('components/header.php') ?>

	<?php include('components/navbar.php') ?>

	<div class="container mt-3">
		<h3 class="mb-4 text-center">Smart forum</h3>
		<?php
			$messages = json_decode(file_get_contents('data.json'), true);

			foreach ($messages as $message) {
				if ($message['name'] == 'Jane') {
					echo "<div class='message alert alert-info'><?= {$message['text']} ?></div>";
				} else {
					echo "<div class='message alert alert-success text-right'><?= {$message['text']} ?></div>";
				}
			}
		?>
	</div>

<?php include('components/footer.php') ?>