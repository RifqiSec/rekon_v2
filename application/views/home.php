<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <title><?php echo isset($title) ? $title : "Home"; ?> | Rekon</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <?php $this->load->view('css/default'); ?>
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="page-header-fixed">
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <div class="header-inner">
         <a class="navbar-brand" href="index.html">
         <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo" class="img-responsive" />
         </a>
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo base_url() ?>assets/img/menu-toggler.png" alt="" />
         </a> 
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="page-container">
      <div class="page-sidebar navbar-collapse collapse">
         <ul class="page-sidebar-menu">
            <li>
               <div class="sidebar-toggler hidden-xs"></div>
            </li>
            <li class="start">
               <a class="ajaxify start" href="<?php echo site_url('dashboardController') ?>">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a class="ajaxify " href="<?php echo site_url('siswa') ?>">
               <i class="icon-shopping-cart"></i> 
               <span class="title">Purchase Order</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a class="ajaxify " href="<?php echo site_url('kelas') ?>">
               <i class="icon-sitemap"></i> 
               <span class="title">Review Purchase Order</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a class="ajaxify " href="<?php echo site_url('jurusan') ?>">
               <i class="icon-tasks"></i> 
               <span class="title">Manage Jurusan</span>
               <span class="selected"></span>
               </a>
            </li>
            <li >
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Pengaturan</span>
               <span class="selected"></span>
               <span class="arrow open"></span>
               </a>
               <ul class="sub-menu">
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_2.html">
                     Ajax Link Sample 1                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_3.html">
                     Ajax Link Sample 2                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_2.html">
                     Ajax Link Sample 3                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_3.html">
                     Ajax Link Sample 4                    
                     </a>
                  </li>
               </ul>
            </li>
            <li class="last">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">Report</span>
               <span class="selected"></span>
               <span class="arrow"></span>
               </a>
               <ul class="sub-menu">
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_2.html">
                     Ajax Link Sample 1                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_3.html">
                     Ajax Link Sample 2                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_2.html">
                     Ajax Link Sample 3                    
                     </a>
                  </li>
                  <li>
                     <a class="ajaxify" href="layout_ajax_content_3.html">
                     Ajax Link Sample 4                    
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      <div class="page-content">
         <div class="page-content-body">
         </div>
      </div>
   </div>
   <div class="footer">
      <div class="footer-inner">
         2013 &copy; Metronic by keenthemes.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <?php $this->load->view('js/default'); ?>
</body>
</html>