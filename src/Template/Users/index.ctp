<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Adicionar usuário', ['action' => 'add']) ?></li>
        <li><?= $this->Html->link('Listar vídeos', ['controller' => 'videos', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="users index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('username', 'Usuário') ?></th>
            <th width="15%" class="actions">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= h($user->username) ?></td>
            <td class="actions">
                <?= $this->Html->link('Ver', ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink('Apagar', ['action' => 'delete', $user->id], ['confirm' => 'Deseja realmente remover o usuário ' . $user->username . '?']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('Próximo >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
