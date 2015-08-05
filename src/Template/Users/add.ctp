<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Listar usuários', ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Adicionar usuário</legend>
        <?php
            echo $this->Form->input('username', ['label'=>['text'=>'Usuário']]);
            echo $this->Form->input('password', ['label'=>['text'=>'Senha']]);
        ?>
    </fieldset>
    <?= $this->Form->button('Salvar') ?>
    <?= $this->Form->end() ?>
</div>
