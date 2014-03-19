<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php echo $this->Html->meta('favicon.ico','/img/favicon.ico',array('type' => 'icon'));?>
<title>Development Planning & Financing Group Inc</title>
<!-- CSS FILES -->
<!--Template file default template.css-->

<?php print $html->charset('UTF-8') ?>
<?php echo $html->css(array("template","none","menus","style","responsive","style-rtl-off")); ?>
<!--<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
<?php echo $javascript->link(array('jquery-1.6.2.min','functions','common','listing','responsive','uniform','script')); ?>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!-- Slideshow background param -->

<script type="text/javascript">

var base_url = "<?php echo BASE_URL; ?>";
var slideshowSpeed = 5000;
var slideEffect = "fade";
jQuery(document).ready(function($) {$('headerimgs').bgimgSlideshow({photos : [{ 
			"firstline" : "ACCURACY YOU CAN COUNT ON",
			"secondline" : "",	
			"url" :  "",
			"image" : base_url+"images/slide/3.jpg",
			"link" : "<div class=\"pictured\"><a href='"+base_url+"orders/add_order'>ORDER NOW</a><div>"
		},]});});
		

</script>
</head>
<?php  $user = $session->read("SESSION_USER");
  $class="no-sidebars";
  if($this->params['controller']=='pages'&&$this->params['action']=='contact'){
  $class="one-sidebar sidebar-first page-contac";
   }  
  ?>
<body class="<?php echo $class; ?>">
<!-- Background slideshow divs-->
<div id="headerimgs">
  <div id="headerimg1" style="z-index:-1" class="headerimg"></div>
  <div id="headerimg2" style="z-index:1" class="headerimg"></div>
</div>

<!-- Slideshow controls -->
<!--<div class="fade">
  <div id="control" class="btn"></div>
</div>
<div id="back" class="btn-back"></div>
<div id="next" class="btn-next"></div>
<div id="fullscreen" class="btnf"></div>-->

<!-- end .Slideshow controls -->

<div id="wrap" class="clearfix">
  <div id="header-wrap">
    <div id="pre-header" class="clearfix">
      <div id="logo" class="logo"> 
        
        <!-- logo & slogan --> 
        <a href="<?php echo BASE_URL; ?>" title="Home"><img  src="<?php echo BASE_URL."images/dpfg_logo.png"?>" alt="Home" style="height:86px"/></a> 
        <!-- end. logo & slogan --> 
        
      </div>
      <div class="features_top_div"> 
        <!-- features top -->
        <!--<div class="social_icons">
          <ul>
            <li><a href="http://www.facebook.com/facebook" target="_blank" rel="me"><img src="<?php echo BASE_URL."images/facebook.png"?>" alt="Facebook"/></a></li>
            <li><a href="http://www.twitter.com/twitter" target="_blank" rel="me"><img src="<?php echo BASE_URL."images/twitter.png"?>" alt="Twitter"/></a></li>
            <li><a href="https://plus.google.com/googleplus" target="_blank" rel="me"><img src="<?php echo BASE_URL."images/googleplus.png"?>" alt="Twitter"/></a></li>
          </ul>
        </div>-->
        <!-- end .features top -->
        
     
        <!-- /.region --> 
      </div>
    </div>
    <div class="top_line_tb"></div>
    <header id="header" class="clearfix">
      <nav id="navigation" role="navigation">
        <div id="main-menu">
          <ul class="menu">
            <li class="first leaf"><a href="<?php echo BASE_URL;?>" title="Home" class="<?php echo $this->params['controller']=='users'?'active':''; ?>">Home</a></li>
           <!-- <li class="leaf"><a class="<?php // echo $this->params['controller']=='pages'&&$this->params['action']=='about'?'active':''; ?>" href="<?php //echo BASE_URL.'pages/about';?>">About us</a></li>-->
            
               <li class="leaf"><a class="<?php echo $this->params['controller']=='pages'&&($this->params['action']=='rptd'||$this->params['action']=='nst'||$this->params['action']=='mptd'||$this->params['action']=='cd'||$this->params['action']=='about')?'active':''; ?>" href="<?php echo BASE_URL.'pages/about';?>">Disclosure Services</a>
              <ul class="menu">
                <li class="first leaf active-trail"><a class="active-trail active" href="<?php echo BASE_URL.'pages/rptd';?>">Residential Property Tax Disclosure (RPTD)</a></li>
                <li class="first leaf active-trail"><a class="active-trail active" href="<?php echo BASE_URL.'pages/nst';?>">Notice of Special Tax (NST)</a></li>
                <li class="first leaf active-trail"><a class="active-trail active" href="<?php echo BASE_URL.'pages/mptd';?>">Master Property Tax Disclosure (MPTD) & RE624C form</a></li>
                <li class="first leaf active-trail"><a class="active-trail active" href="<?php echo BASE_URL.'pages/cd';?>">Continuing Disclosure Report (CD)</a></li>

              </ul>
            </li>
            <li class="leaf"><a class="<?php echo $this->params['controller']=='pages'&&$this->params['action']=='dgpf'?'active':''; ?>" href="<?php echo BASE_URL.'pages/dgpf';?>" title="News &amp; Events">DPFG-DS Difference</a></li>
            <li class="last leaf"><a class="<?php echo $this->params['controller']=='pages'&&$this->params['action']=='contact'?'active':''; ?>"href="<?php echo BASE_URL.'pages/contact';?>" title="Contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div id="header-right">
        <div id="block-views-latest-news-block">
          <div class="content">
            <div class="view view-latest-news view-id-latest_news view-display-id-block">
              <div class="view-content"> 
			                  
			  <?php  if($this->params['action']!='dashboard' && !empty($user)){ ?>
				<a href="<?php echo BASE_URL.'users/dashboard';?>"><div class="pictured-1" style="margin-left:47px;">My Account</div></a> 
				<?php  }else { ?>
				<a href="<?php echo BASE_URL.'orders/add_order';?>"><div class="pictured-1">ORDER NOW</div></a>  
				<?php } ?>
				<?php  if(empty($user)){ ?>
               <a href="<?php echo BASE_URL.'users/login';?>"><div class="pictured-2">LOGIN</div></a> 
			   <?php }else{ ?>
			    <a href="<?php echo BASE_URL.'users/logout';?>"><div class="pictured-2">LOGOUT</div></a> 
			    <?php } ?>
              </div>
            </div>
          </div>
          <!-- /.block --> 
        </div>
        <!-- /.region --> 
      </div>
    </header>
  </div>
  <?php echo $content_for_layout; ?>
  
  <footer id="footer-bottom" style="position:relative;">
		<div class="main-box">
			<div class="bottom-box">
				<p><a href="<?php echo BASE_URL.'pages/rptd';?>" style="color:#fff; text-decoration:none;">RESIDENTIAL PROPERTY TAX DISCLOSURE</a></p>
			</div>
			<a href="<?php echo BASE_URL."images/pdf/RPTD SAMPLE - RANCHO MISSION VIEJO (FY 2012-2013).pdf"?>"><div class="bottom-sub-box"></div></a>
		</div>
		
		<div class="main-box">
			<div class="bottom-box">
				<p><a href="<?php echo BASE_URL.'pages/mptd';?>" style="color:#fff; text-decoration:none;">MASTER PROPERTY TAX DISCLOSURE REPORT</a></p>
			</div>
			<a href="<?php echo BASE_URL."images/pdf/MPTD (FY 2012-2013)_SAMPLE.pdf"?>"><div class="bottom-sub-box"></div></a>
		</div>
		
		<div class="main-box">
			<div class="bottom-box">
				<p><a href="<?php echo BASE_URL.'pages/mptd';?>" style="color:#fff;text-decoration:none;">DRE 624C FORM</a></p>
			</div>
			<a href="<?php echo BASE_URL."images/pdf/re624c.pdf"?>"><div class="bottom-sub-box"></div></a>
		</div>
		
		<div class="main-box">
			<div class="bottom-box">
				<p><a href="<?php echo BASE_URL.'pages/nst';?>" style="color:#fff;text-decoration:none;">NOTICE OF SPECIAL TAX/NOTICE OF ASSESSMENT</a></p>
			</div>
			<a href="<?php echo BASE_URL."images/pdf/NOTICE OF SPECIAL TAX - MVUSD CFD No. 2006-1, I.A. A (SAMPLE) (1).pdf"?>"><div class="bottom-sub-box"></div></a>
		</div>
		
		<div class="main-box">
			<div class="bottom-box">
				<p><a href="<?php echo BASE_URL.'pages/cd';?>" style="color:#fff;text-decoration:none;">CONTINUING DISCLOSURE REPORT</a></p>
			</div>
			<a href="<?php echo BASE_URL."images/pdf/NOTICE OF SPECIAL TAX - MVUSD CFD No. 2006-1, I.A. A (SAMPLE) (1).pdf"?>"><div class="bottom-sub-box"></div></a>
		</div>
  </footer>
</div>
    </body>
</html>

<?php echo $this->element("sql_dump"); ?>