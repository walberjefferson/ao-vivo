
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <header>
        <div class="header-title">
            <span>Festa Senhora Sant'Ana</span>
            <span style="float: right; ">
            <?php 
                $nome = $this->request->session()->read('Auth.User.username'); 
                if(!empty($nome)) :
                    echo $this->Html->link('<i class="fa fa-power-off" style="color:#FFF;"></i>', ['controller' => 'users', 'action' => 'logout'], ['escape'=>false]);
                endif;
            ?>
            </span>

            
        </div>
        
    </header>
    <div id="container">
        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
</body>
</html>
