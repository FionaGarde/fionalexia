<?php $this->assign('title', 'Se connecter') ?>

<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Connexion</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Veuillez s\'il vous plaît entrer votre pseudo et votre mot de passe') ?></legend>
        <?= $this->Form->control('pseudo', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
