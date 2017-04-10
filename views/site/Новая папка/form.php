<?
use yii\widgets\Activeform;
use yii\helpers\Html;
$f=ActiveForm::begin();
echo $f->feiled($form,'name');
echo $f->feiled($form,'email');
echo $f->feiled($form,'pass');
echo Html::submitButton('Отправить');
ActiveForm::end();
?>