<?php

/* @var $this yii\web\View */

$this->title = 'Programação para todos';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><span style='color:darkred;'>Bem-vindo!</span></h1>

        <p class="lead">Aqui você poderá encontrar os mais diversos cursos para aumentar o seu conhecimento,
            assim como também vai ter a possibilidade de criar um curso próprio caso queira.</p>

        <p><a class="btn btn-lg btn-primary" href="index.php?r=curso">Explorar</a>
            <a class="btn btn-lg btn-success" href="index.php?r=curso/create">Criar um curso</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2><span style='color:green;'>Todos os cursos</span></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip.</p>

                <p><a class="btn btn-default" href="index.php?r=curso">Explorar&raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><span style='color:green;'>Criar um curso</span></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Criar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2><span style='color:green;'>Faça parte você também</span></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip.</p>

                <p><a class="btn btn-default" href="/usuario/cadastro">Cadastrar &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
