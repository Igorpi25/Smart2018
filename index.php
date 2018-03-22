<?php include('components/header.php') ?>

	<?php include('components/navbar.php') ?>

	<?php
		if (isset($_POST['text']) && $_POST['text']) {
			if (isset($_POST['name']) && $_POST['name']) {
				addMessageToFile($_POST['text'], $_POST['name']);
			} else {
				addMessageToFile($_POST['text']);
			}
		}
	?>

	<div class="container mt-3">
		<h3 class="mb-4 text-center">Smart forum</h3>
		<?php
			$messages = getMessages();

			foreach ($messages as $key => $message):
				switch ($message['name']) {
					case 'Igor':
						$class = "success text-right";
						break;
					case 'Jane':
						$class = "info";
						break;
					case 'Vasya':
						$class = "danger";
						break;
					default:
						$class = "warning";
						break;
				} ?>

				<?php if ($message['name'] != $messages[$key - 1]['name']): ?>
					<div class="text-center"><small class='text-secondary'><?= date('j M H:i', strtotime($message['date'])) ?></small></div>
				<?php endif; ?>
				<div class='message alert alert-<?= $class ?>'>
					<b><?= $message['name'] ?>:</b> <?= $message['text'] ?>
					<br>
				</div>

		<?php endforeach; ?>

		<form method="POST">
			<input class="form-control" type="text" name="name" placeholder="Igor">
			<textarea name="text" class="form-control"></textarea>
			<button class="btn btn-success" type="submit">Отправить</button>
		</form>

	</div>

<?php include('components/footer.php') ?>