<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
   <title><?php echo $title ?> PT.Reka Mulia Konstruksi</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="PT.Reka Mulia Konstruksi" name="description" />
   <meta content="Rifqi Maulana, Rekon, Rifqisec" name="author" />
   <meta name="MobileOptimized" content="320">
   <?php echo $css ?>  
   <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-header-fixed">
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <div class="header-inner">
         <a class="navbar-brand" href="index.html">
         <!-- <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo" class="img-responsive" /> -->
         <sub>ReKoN</sub>
         </a>
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo base_url() ?>assets/img/menu-toggler.png" alt="" />
         </a> 
         <ul class="nav navbar-nav pull-right">
            <li class="dropdown" id="header_inbox_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-envelope"></i>
               <span class="badge">5</span>
               </a>
               <ul class="dropdown-menu extended inbox">
                  <li>
                     <p>You have 12 new messages</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="<?php echo base_url() ?>assets/img/avatar2.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">Just Now</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="<?php echo base_url() ?>assets/img/avatar3.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">16 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="<?php echo base_url() ?>assets/img/avatar1.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Nama Anda</span>
                           <span class="time">2 hrs</span>
                           </span>
                           <span class="message">
                           Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="<?php echo base_url() ?>assets/img/avatar2.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">40 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor 40% nibh congue nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="<?php echo base_url() ?>assets/img/avatar3.jpg" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">46 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="<?php echo base_url() ?>assets/img/avatar1_small.jpg"/>
               <span class="username">Nama Anda</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li>
                     <a href="login.html"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
   <?php echo $this->load->view('side') ?>
   <?php echo $this->load->view('body') ?>
   <?php echo $this->load->view('js/default') ?>
