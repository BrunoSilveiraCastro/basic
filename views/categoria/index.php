<?php
use yii\helpers\Html;
use yii\widgets\linkPager;
?>
<h1 class="page-header">Categoria</h1>

<ul class="list-group">
    <?php foreach ($categories as $category) : ?>

    <li class="list-group-item">
        <a href=""> <?=$category-> nome; ?> </a>
    </li>

<? php endforeach; ?>
</ul>

<?= LinkPager::widget([ 'pagination' => $pagination]); ?>
