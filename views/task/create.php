<?php

use yii\helpers\Html;
use yii\web\View;
/** @var yii\web\View $this */
/** @var app\models\Task $model */

$this->title = 'Create Task';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>




<div class="task-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('calendar') ?>
    <?= $this->render('_form', [
        'model' => $model,
        'class' => 'date_set',
    ]) ?>

</div>
<?php
$this->registerJs(<<<JS
    document.getElementById('task-task_title').setAttribute('rows', '1');
JS
    , View::POS_READY);
?>