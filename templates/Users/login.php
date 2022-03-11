<?php $this->assign('title', 'Se connecter') ?>

<h1>Se connecter</h1>

<?= $this->form->create() ?>

	<?= $this->form->control('pseudo') ?>

	<?= $this->form->control('password') ?>

	<?= $this->form->button('Se connecter') ?>

<?= $this->form->end() ?>