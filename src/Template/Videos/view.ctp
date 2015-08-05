<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Editar Vídeo', ['action' => 'edit', $video->id]) ?> </li>
        <li><?= $this->Form->postLink('Apagar Vídeo', ['action' => 'delete', $video->id], ['confirm' => 'Deseja Realmente apagar o vídeo '. $video->titulo . '?']) ?> </li>
        <li><?= $this->Html->link('Listar Vídeos', ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link('Novo Vídeo', ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videos view large-10 medium-9 columns">
    <br>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Título') ?></h6>
            <p><?= h($video->titulo) ?></p>
            <h6 class="subheader"><?= __('URL') ?></h6>
            <p><?= h($video->url) ?></p>
            <h6 class="subheader"><?= __('Início') ?></h6>
            <p><?= h($video->inicio) ?></p>
            <h6 class="subheader"><?= __('Fim') ?></h6>
            <p><?= h($video->fim) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Dia') ?></h6>
            <p><?= $this->Number->format($video->dia) ?></p>
            <h6 class="subheader"><?= __('Mês') ?></h6>
            <p><?= $this->Number->format($video->mes) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Criado') ?></h6>
            <p><?= h($video->created) ?></p>
            <h6 class="subheader"><?= __('Modificado') ?></h6>
            <p><?= h($video->modified) ?></p>
        </div>
    </div>
</div>
