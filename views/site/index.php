<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'To Do App by yii2';
// リンクURL生成
$url = Url::toRoute(['task/index']);
?>
<div class="site-index">



    <div class="body-content">

        <h1>To Do App</h1>
        <br>
        <?= Html::a('To Do Appを起動', $url) ?>

    </div>
</div>
