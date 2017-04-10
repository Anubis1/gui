<?
use yii\widgets\Activeform;
use yii\helpers\Html;
$f=ActiveForm::begin();
echo $f->feiled( $re,'name');
echo $f->feiled( $re,'log');
echo $f->feiled( $re,'pass');
echo Html::submitButton('Отправить');

ActiveForm::end();
?>