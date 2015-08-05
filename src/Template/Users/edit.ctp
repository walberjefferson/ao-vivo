<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                'Apagar',
                ['action' => 'delete', $user->id],
                ['confirm' => 'Deseja realmente remover o usuário ' . $user->username . '?']
            )
        ?></li>
        <li><?= $this->Html->link('Listar usuários', ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Editar usuário</legend>
        <?php
            echo $this->Form->input('username', ['label'=>['text'=>'Usuário']]);
            echo $this->Form->input('password', ['label'=>['text'=>'Senha']]);
        ?>
    </fieldset>
    <?= $this->Form->button('Salvar') ?>
    <?= $this->Form->end() ?>
</div>
