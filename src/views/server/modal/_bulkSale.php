<?php

use hipanel\modules\server\widgets\SellForm;
use yii\helpers\Url;

?>

<?= SellForm::widget([
    'models' => $models,
    'actionUrl' => Url::toRoute('@server/bulk-sale'),
    'validationUrl' => Url::toRoute(['validate-form', 'scenario' => 'sale']),
]) ?>
