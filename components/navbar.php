<?php $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Smart</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?= ($filename == 'index') ? 'active' : '' ?>">
				<a class="nav-link" href="/">Index</a>
			</li>
			<li class="nav-item <?= ($filename == 'test') ? 'active' : '' ?>">
				<a class="nav-link" href="/test.php">Test</a>
			</li>
		</ul>
	</div>
</nav>
