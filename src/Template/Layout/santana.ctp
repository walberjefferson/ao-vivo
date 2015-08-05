
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festa Senhora Sant'Ana</title>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') ?>
    <?= $this->Html->css('estilo.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Festa Senhora Sant'Ana</h1>
                </div>
            </div>     
        </div>   
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?= $this->Flash->render() ?>
            </div>

            <?= $this->fetch('content') ?>
        </div>
    </main>

    <footer class="hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
