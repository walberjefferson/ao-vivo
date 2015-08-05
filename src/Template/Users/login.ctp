<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
	<legend><?= 'Entre com usuário e senha' ?></legend>
		<?= $this->Form->input('username', ['label'=>['text'=>'Usuário']]) ?>
		<?= $this->Form->input('password', ['label'=>['text'=>'Senha']]) ?>
	</fieldset>
	<?= $this->Form->button('Entrar'); ?>
	<?= $this->Form->end() ?>
</div>