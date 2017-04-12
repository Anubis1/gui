<?php
use yii\helpers\Html;
$class=["class"=>"new_add_class","id"=>"475357"];
echo Html::tag('h1',Html::decode($new),$class);
use yii\widgets\ActiveForm;

if(!isset($success)){
?>
<br><br>
<?php

?>
 
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
 
    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'file/*.mp3']) ?>
	<?=Html::tag('input','name',['type'=>'text','name'=>'new_neme','placeholder'=>'Название музыки.','max-length'=>'100']);?>
<?=Html::tag('input','name',['type'=>'text','name'=>'new_neme_avtor','placeholder'=>'Автор','max-length'=>'100','style'=>['margin-left'=>'50px;']]);?>
<br><br>
<?=Html::tag('textarea','',['type'=>'text','name'=>'new_neme_info','placeholder'=>'Описание','max-length'=>'1500','style'=>['width'=>'400px;','max-width'=>'400px;','height'=>'200px;','max-height'=>'200px;']]);?>
<br><br>
<?=Html::tag('input','name',['type'=>'submit','name'=>'new_submite']);?>
 
    <button>Submit</button>
 
<?php ActiveForm::end() ?>



<?}
else {?>

<br><br>
<?

$class=["class"=>"new_add_class","id"=>"475357"];
echo Html::tag('h3','Загруженные файлы...',$class);

?><hr>


<?

//$success[strlen($success)-1]="";
echo $success;
$success=preg_replace('/[^A-Za-z1-9\<\\>\'\"\s]/ms', '', $success);
$files_put=explode("|",$success);

foreach($files_put as $urles){
	
	
echo '
 <audio controls style="width: 100%;">
    <source src="music/'.$urles.'.mp3" type="audio/mpeg">
  </audio><br>
  ';
	
	
}




}?>