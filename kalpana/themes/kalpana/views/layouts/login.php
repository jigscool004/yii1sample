<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 2/27/17
 * Time: 9:32 PM
 */
?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <?php #Yii::app()->bootstrap->register(); ?>

    <head>
        <?php
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery.ui');
        $cs->registerCssFile($baseUrl . '/themes/kalpana/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl . '/themes/kalpana/css/AdminLTE.css');
        $cs->registerCssFile($baseUrl . '/themes/kalpana/css/font-awesome.min.css');
        $cs->registerCssFile($baseUrl . '/themes/kalpana/css/skins/skin-blue.min.css');
        $cs->registerCssFile($baseUrl . '/themes/kalpana/css/custom-style.css');


        //  $cs->registerScriptFile($baseUrl . '/themes/kalpana/js/jquery-2.2.3.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/kalpana/js/bootstrap.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/kalpana/js/app.min.js');


        //$cs->registerCssFile($baseUrl.'/css/yourcss.css');
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <style type="text/css">

        </style>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="hold-transition login-page">


        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="msgWelcome">
                        <span>Wel Come to</span> <!--Kalpana-->  <label>The In-House Management Application For Hotel's</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content Start Here -->
        <div class="container">
            <div class="row">
                <div class="col-xs-4">


                    <div class="login-box">

                        <!-- /.login-logo -->
                        <div class="login-box-body">
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

