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
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time"><?php echo date("D-M-Y") ?></span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time"><?php echo date("D-M-Y") ?></span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="subject">
                           <span class="from">Nama Anda</span>
                           <span class="time"><?php echo date("D-M-Y") ?></span>
                           </span>
                           <span class="message">
                           Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time"><?php echo date("D-M-Y") ?></span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor 40% nibh congue nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time"><?php echo date("D-M-Y") ?></span>
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