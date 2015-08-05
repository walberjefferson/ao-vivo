<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Editar usuário', ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink('Apagar usuário', ['action' => 'delete', $user->id], ['confirm' => 'Deseja realmente remover o usuário ' . $user->username . '?']) ?> </li>
        <li><?= $this->Html->link('Listar usuários', ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link('Adicionar usuário', ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
<br>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Criado') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modificado') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
