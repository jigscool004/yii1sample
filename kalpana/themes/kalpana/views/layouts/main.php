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
    <body class="hold-transition skin-blue sidebar-mini">

        <!-- Our Page header -->
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>KS</b> </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Kalpana</b> Software</span>
                </a>

                <!-- Header Navbar -->

                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">My Account</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="hotel-view.php" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header> 
            <aside class="main-sidebar"> 
                <section class="sidebar"> 
                    <?php 
                    $this->widget('zii.widgets.CMenu', array(
                        'id' => 'menu-id',
                        'encodeLabel' => false,
                        'items' => array(
                            array('label' => '<i class="fa fa-dashboard"></i>  Dashboard ', 'url' => array('')),
                            array('label' => '<i class="fa fa-users"></i> Guest Details', 'url' => array('guest/checkin'),
                                'submenuOptions' => array('class' => 'treeview-menu', 'id' => 'submenu-dd'),
                                'itemOptions' => array('class' => 'treeview'),
                                'items' => array(
                                    array('label' => '<i class="fa fa-fw fa-dot-circle-o"></i> Guest Check In ', 'url' => array('guest/checkin')),
                                    array('label' => '<i class="fa fa-fw fa-dot-circle-o"></i> Guest Check Out', 'url' => array('guest/checkout')),
                                ),
                            ),
                            array('label' => '<i class="fa fa-user-secret"></i> Settings', 'url' => array('user/index'),
                                'submenuOptions' => array('class' => 'treeview-menu', 'id' => 'submenu-dd'),
                                'itemOptions' => array('class' => 'treeview', 'id' => 'submenu-dd'),
                                'items' => array(
                                    array('label' => '<i class="fa fa-fw fa-dot-circle-o"></i> User', 'url' => array('user/index')),
                                    array('label' => '<i class="fa fa-fw fa-dot-circle-o"></i> Role', 'url' => array('role/index')),
                                ),
                            ),
                        ),
                        'htmlOptions' => array('class' => 'sidebar-menu')
                    ));
                    ?>
                    <!-- /.sidebar-menu --> 
                </section>
                <!-- /.sidebar --> 
            </aside>

            <!-- content-wrapper Start -->
            <div class="content-wrapper" style="min-height: 355px;">
                <section class="content-header">
                    <h1><?php echo $this->pageTitle; ?></h1>
                    <?php 
                            $this->widget('zii.widgets.CBreadcrumbs',array(
                                        'links' => $this->breadcrumbs,
                                         'tagName' => 'ol',
                                         'htmlOptions' => array('class' => 'breadcrumb') ,
                                          'homeLink' => CHtml::link('<i class="fa fa-dashboard"></i> Dashboard', array('/site/index')),
                            ));
                    ?>
                    
                </section>

                <!-- Content Start -->
                <section class="content"> 
                    <div class="box box-info">
                          <?php echo $content; ?>
                    </div>
                </section>
            </div>
            <!-- content-wrapper END --> 

            <!-- Our Page footer Start here -->
            <!-- Main Footer -->
            <footer class="main-footer">    
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Kalpana</a>.</strong><br>
                Kalpana | The In-House Management Application For Hotel's
            </footer>
        </div>


    </body>
</html>