<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Festa de Senhora Santana</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $hora = date('H:i');
            $dia = date('d');
            $mes = date('m');
            
            #echo $dia . '<br>' . $mes;
            
            if($hora >= '19:00' and $hora < '22:30') :
                #echo 'Mostra novena';
            else :
                #echo 'Mostra mensagem';
            endif;
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Festa da Padroeira Senhora Sant'Ana</h1>
                    
                </div>
            </div>
        </div>
    </body>
</html>
