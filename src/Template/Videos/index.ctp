<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
    <li><?= $this->Html->link('Adicionar Vídeo', ['action' => 'add']) ?></li>
        <li><?= $this->Html->link('Mostrar Vídeo', ['action' => 'lista']) ?></li>
    </ul>
</div>
<div class="videos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="40%"><?= $this->Paginator->sort('titulo', 'Título') ?></th>
                <th width="15%"><?= $this->Paginator->sort('url', 'URL') ?></th>
                <th width="10%"><?= $this->Paginator->sort('inicio', 'Inìcio') ?></th>
                <th width="10%"><?= $this->Paginator->sort('fim', 'Termino') ?></th>
                <th width="10%">Dia / Mês</th>
                <th width="15%" class="actions">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?= h($video->titulo) ?></td>
                    <td><?= h($video->url) ?></td>
                    <td><?= h($video->inicio) ?></td>
                    <td><?= h($video->fim) ?></td>
                    <td><?= $this->Number->format($video->dia) . '/' . $this->Number->format($video->mes) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $video->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $video->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $video->id], ['confirm' => ('Deseja realmente apagar o vídeo '. $video->titulo . '?')]) ?>
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
    </div>
</div>
