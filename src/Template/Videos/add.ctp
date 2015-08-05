<div class="actions columns large-2 medium-3">
    <h3>Ações</h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Listar Vídeos', ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="videos form large-10 medium-9 columns">
    <?= $this->Form->create($video) ?>
    <fieldset>
        <legend><?= __('Add Video') ?></legend>
        <?php
            echo $this->Form->input('titulo', ['label'=>['text'=>'Título']]);
            echo $this->Form->input('url', ['label'=>['text'=>'URL']]);
            echo $this->Form->input('inicio', ['label'=>['text'=>'Início']]);
            echo $this->Form->input('fim', ['label'=>['text'=>'Fim']]);
            echo $this->Form->input('dia', ['required' => false]);
            echo $this->Form->input('mes', ['required' => false, 'label'=>['text' => 'Mês']]);
        ?>
    </fieldset>
    <?= $this->Form->button('Salvar') ?>
    <?= $this->Form->end() ?>
</div>
