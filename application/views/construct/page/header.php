<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Weekly execution planner</title>

    <link href="<?php echo site_url(CSS); ?>/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url(CSS); ?>/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url(CSS); ?>/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url(CSS); ?>/fonts.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url(CSS); ?>/getorgchart.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url(CSS); ?>/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="wrap">

        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="<?php echo site_url('/finance'); ?>" class="logo"><?php echo $_site_config['text']; ?></a>
                                <span>|</span>
                                <a href="<?php echo site_url('/finance'); ?>" class="logo"><?php $title = (array_key_exists($this->uri->segment(1), $_site_config['can_see_navigation'])) ? $_site_config['can_see_navigation'][$this->uri->segment(1)] : $_site_config['standard_navigation'][$this->uri->segment(1)]; echo strtoupper($title); ?></a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><span>Welcome, </span><a href="<?php echo site_url('profile'); ?>">User!</a></li>
                                <li class="splitter"><span>|</span></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div><!-- /.container -->
            </nav>

        </header>

        <?php echo (isset($navigation)) ? $navigation : ''; ?>