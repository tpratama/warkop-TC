<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->helper('url'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Warkop-TC | Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animations.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/forum/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/forum/css/allforum.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/forum/css/subforum.css">
    <script src="<?php echo base_url(); ?>assets/forum/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/forum/js/jquery-1.9.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/forum/js/jquery.cycle.all.js"></script>
    <script type="text/javascript">
        $('#slider').cycle();
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="body">
<div class="row">
    <nav class="navbar navbar-forum navbar-fixed-top"  role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url();?>Forum/alpha">
                  <span class="light">Warkop</span> <mark>TC</mark>
                </a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                    <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                          <ul class="dropdown-menu" style="background-color:#2E363A; color:#000; ">
                            <li class="navbar-nav col-md-6">
                                <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group jarak-10">
                                        <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="jarak-20"></div>
                                        <button type="submit" class="btn btn-default">Login</button>
                                        <button type="submit" class="btn btn-default">Sign Up</button>
                                </form> 
                            </li>
                          </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="/warkop-TC/Portal">Portal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>Forum/forum_kuliah">Forum Kuliah</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>Forum/forum_bebas">Forum Bebas</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
