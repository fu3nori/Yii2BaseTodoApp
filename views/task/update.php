<?php

use yii\helpers\Html;
use yii\web\View;
/** @var yii\web\View $this */
/** @var app\models\Task $model */

$this->title = 'Update Task: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('calendar') ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$this->registerJs(<<<JS
    document.getElementById('task-task_title').setAttribute('rows', '1');
JS
    , View::POS_READY);
?>