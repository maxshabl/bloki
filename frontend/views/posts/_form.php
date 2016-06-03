<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;



?>

<div class="posts-form">

    <?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'date')->hiddenInput(['value' => date("Y-m-d H:i:s")])?>


    <? echo $form->field($model, 'title')->widget(CKEditor::className(),[
        'editorOptions' =>  ElFinder::ckeditorOptions('elfinder',[
                'language'   => 'ru',
                'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'name'       => 'myinput',
                'value'      => ''
            ])

    ]);?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?php
    echo InputFile::widget([
    'language'   => 'ru',
    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'name'       => 'myinput',
    'value'      => ''
    ]);?>

   <? echo $form->field($model, 'abstract')->widget(CKEditor::className(),[
    'editorOptions' =>  ElFinder::ckeditorOptions('elfinder',[
    'language'   => 'ru',
    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'name'       => 'myinput',
    'value'      => ''
    ])

    ]);?>
    <?// $form->field($model, 'abstract')->textInput(['maxlength' => true]) ?>



    <?echo $form->field($model, 'text')->widget(CKEditor::className(),[
    'editorOptions' =>  ElFinder::ckeditorOptions('elfinder',[
    'language'   => 'ru',
    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'     => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'name'       => 'myinput',
    'value'      => ''
    ])

    ]);?>



    <?= $form->field($model, 'postscol')->dropDownList([
        'Blog'=>'Блог',
        'about' => 'О нас',
        'delivery' => 'Доставка'
         ]);
    ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
