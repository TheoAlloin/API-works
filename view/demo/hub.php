<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>BootMetro Demo - Hub</title>

   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <link rel="publisher" href="https://plus.google.com/117689250782136016574">

   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="../view/assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="../view/assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="../view/assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="../view/assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="../view/assets/css/datepicker.css">

   <!--  these two css are to use only for documentation
   <link rel="stylesheet" type="text/css" href="../assets/css/demo.css">

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="../view/assets/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body>
   <!--[if lt IE 7]>
   <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
   <![endif]-->

   <div id="wrap">
   
      <!-- Header================================================== -->
      <div id="nav-bar" class="">
         <div class="pull-left">
          </div>
         <div class="pull-right">
            <div id="top-info" class="pull-right">
            <a id="settings" href="#" class="win-command pull-right">
               <span class="win-commandicon win-commandring icon-cog-3"></span>
            </a>
            <a id="logged-user" href="#" class="win-command pull-right">
               <span class="win-commandicon win-commandring icon-user"></span>
            </a>
            <div class="pull-left">
               <h3>FirstName</h3>
               <h4>LastName</h4>
            </div>
         </div>
      </div>
      </div>
      </div>
   
      <!--<div id="metro-container" class="-container">-->
         <!--<div class="row">-->
            <!--<div id="hub" class="metro">-->
               <div class="metro panorama">
                  <div class="panorama-sections">
   
                     <div class="panorama-section">
   
                        <h2>Météo</h2>
   
                        <div class="tile-column-span-2">
                           <a class="tile wide imagetext wideimage bg-color-purple meteo-container" href="#">
                              <div class="meteo image-wrapper">
	                              <img src="<?php echo $today['condition_img']; ?>">
                              </div>
                              <div class="text-header">Aujourd'hui</div>
	                          <div class="meteo-wrapper">
	                              <div class="text"><?php echo $today['condition_title']; ?></div>
	                              <div class="meteo-wrapper">
		                              <div class="text">Température moy : <?php echo $today['temperature_moy']; ?>°C</div>
		                              <div class="text">Température min : <?php echo $today['temperature_min']; ?>°C</div>
		                              <div class="text">Température max : <?php echo $today['temperature_max']; ?>°C</div>
	                       		  </div>
	                       		</div>
	                       </a>
                           <a class="tile wide imagetext wideimage bg-color-green meteo-container" href="#">
                              <div class="meteo image-wrapper">
	                              <img src="<?php echo $later[1]['condition_img']; ?>">
                              </div>
                              <div class="text-header">Demain</div>
	                          <div class="meteo-wrapper">
	                              <div class="text"><?php echo $later[1]['condition_title']; ?></div>
	                              <div class="meteo-wrapper">
		                              <div class="text">Température moy : <?php echo $later[1]['temperature_moy']; ?>°C</div>
		                              <div class="text">Température min : <?php echo $later[1]['temperature_min']; ?>°C</div>
		                              <div class="text">Température max : <?php echo $later[1]['temperature_max']; ?>°C</div>
	                       		  </div>
	                       		</div>
	                       </a>
   
                         <a class="tile square image bg-color-red" href="#">
                         	<div class="meteo-snippet">
                         	  <div class="meteo-date"><?php echo $later[2]['date']; ?></div>
                              <img src="<?php echo $later[2]['condition_img']; ?>" alt=""/>
                              <div class="temp_moy">Temp. moy : <?php echo $later[1]['temperature_moy']; ?>°C</div>
                         	</div>
                         </a>	
   
                         <a class="tile square image bg-color-blue" href="#">
                         	<div class="meteo-snippet">
                         	  <div class="meteo-date"><?php echo $later[3]['date']; ?></div>
                              <img src="<?php echo $later[3]['condition_img']; ?>" alt=""/>
                              <div class="temp_moy">Temp. moy : <?php echo $later[3]['temperature_moy']; ?>°C</div>
                         	</div>
                         </a>	
   
                        </div>
                     </div>
                     
                     <div class="panorama-section">
   
                        <h2>Actualités à la une</h2>
                        <div class='tile-column-span-2'>
                        <?php for ($i = 0; $i < 4; $i++) {
                                
                            if($i == 2){
                                    echo '</div>';
                                    echo"<div class='tile-column-span-2'>";
                            }?>
                            
                                   <a class="tile widepeek" href="<?php echo $dataLaUneRSS[$i]['link']; ?>">
                                      <div class="tile wide image">
                                         <img src="<?php echo $dataLaUneRSS[$i]['image']['url']; ?>" alt="" />
                                      </div>
                                      <div class="tile wide text">
                                         <div class="text-header"><?php echo $dataLaUneRSS[$i]['title']; ?></div>
                                         <div class="text4"><?php echo $dataLaUneRSS[$i]['description']; ?></div>
                                      </div>
                                   </a>
                       <?php if($i == 4){
                           echo '</div>';
                       } ?>
                       <?php } ?>

                     </div>
                   </div>
                   <div class="panorama-section tile-span-4">
   
                        <h2>Featured articles</h2>
   
                        <a class="tile app bg-color-orange" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-mail"></span>
                           </div>
                           <div class="app-label">Mail</div>
                           <div class="app-count">12</div>
                        </a>
   
                        <a class="tile app bg-color-blue" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-map"></span>
                           </div>
                           <div class="app-label">Map</div>
                        </a>
   
                        <a class="tile wide imagetext bg-color-greenDark" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-chat-2"></span>
                           </div>
                           <div class="column-text">
                              <div class="text4">Chat with your friends</div>
                           </div>
                           <div class="app-label">145 friends online</div>
                        </a>
   
                        <a class="tile app bg-color-purple" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-weather"></span>
                           </div>
                           <div class="app-label">Weather</div>
                        </a>
   
                        <a class="tile app bg-color-green" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-linkedin"></span>
                           </div>
                           <div class="app-label">LinkedIn</div>
                        </a>
   
                     </div>
                     
                     <div class="panorama-section tile-span-4">
   
                        <h2>Group two</h2>
   
                        <a class="tile wide imagetext bg-color-blue" href="#">
                           <div class="image-wrapper">
                              <span class="icon icon-music-3"></span>
                           </div>
                           <div class="column-text">
                              <div class="text">Top 10</div>
                              <div class="text">Favorites</div>
                              <div class="text">Best choices</div>
                           </div>
                           <span class="app-label">MUSIC</span>
                        </a>
   
                        <a class="tile wide imagetext bg-color-blueDark" href="../base-css.html">
                           <div class="image-wrapper">
                              <img src="assets/img/Coding app.png" />
                           </div>
                           <div class="column-text">
                              <div class="text">Typography</div>
                              <div class="text">Tables</div>
                              <div class="text">Forms</div>
                              <div class="text">Buttons</div>
                           </div>
                           <span class="app-label">BASE CSS</span>
                        </a>
   
                        <a class="tile app bg-color-orange" href="#">
                           <div class="image-wrapper">
                              <img src="assets/img/RegEdit.png" alt="" />
                           </div>
                           <span class="app-label">COMPONENTS</span>
                        </a>
   
                        <a class="tile app bg-color-red" href="../javascript.html">
                           <div class="image-wrapper">
                              <img src="assets/img/Devices.png" alt="" />
                           </div>
                           <span class="app-label">JAVASCRIPT</span>
                        </a>
   
                     </div>
   
                  </div>
               </div>
               <a id="panorama-scroll-prev" href="#"></a>
               <a id="panorama-scroll-next" href="#"></a>
               <div id="panorama-scroll-prev-bkg"></div>
               <div id="panorama-scroll-next-bkg"></div>
            <!--</div>-->
         <!--</div>-->
      <!--</div>-->
   
   </div>
   <div id="charms" class="win-ui-dark slide">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
         </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>
   
            </div>
         </div>
      </div>
   
   </div>

   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
   <script>window.jQuery || document.write("<script src='../view/assets/js/jquery-1.10.0.min.js'>\x3C/script>")</script>

   <!--[if IE 7]>
   <script type="text/javascript" src="scripts/bootmetro-icons-ie7.js">
   <![endif]-->

   <script type="text/javascript" src="../view/assets/js/min/bootstrap.min.js"></script>
   <script type="text/javascript" src="../view/assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="../view/assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="../view/assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="../view/assets/js/bootstrap-datepicker.js"></script>

   <script type="text/javascript" src="../view/assets/js/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="../view/assets/js/jquery.touchSwipe.min.js"></script>

   <script type="text/javascript" src="../view/assets/js/holder.js"></script>
   <!--<script type="text/javascript" src="./assets/js/perfect-scrollbar.with-mousewheel.min.js"></script>-->
   <script type="text/javascript" src="../view/assets/js/demo.js"></script>


   <script type="text/javascript">

      $('.panorama').panorama({
         //nicescroll: false,
         showscrollbuttons: true,
         keyboard: true,
         parallax: true
      });

//      $(".panorama").perfectScrollbar();

      $('#pivot').pivot();

   </script>
</body>
</html>
