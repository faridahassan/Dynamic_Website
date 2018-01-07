<?php

/* ::base.html.twig */
class __TwigTemplate_9a0a57b56dadbadbfbeaa1dcafe28aa220dbb00873d5f10b0d383fbcdec04179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu1' => array($this, 'block_menu1'),
            'menu2' => array($this, 'block_menu2'),
            'menu3' => array($this, 'block_menu3'),
            'menu4' => array($this, 'block_menu4'),
            'menu5' => array($this, 'block_menu5'),
            'menu6' => array($this, 'block_menu6'),
            'menu7' => array($this, 'block_menu7'),
            'menu8' => array($this, 'block_menu8'),
            'menu9' => array($this, 'block_menu9'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title> El Saad | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no\">
<meta name=\"description\" content=\"Default Description\">
<meta name=\"keywords\" content=\"fashion, store, E-commerce\">
<meta name=\"robots\" content=\"*\">
<link rel=\"icon\" href=\"#\" type=\"image/x-icon\">
<link rel=\"shortcut icon\" href=\"#\" type=\"image/x-icon\">




<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/font-awesome.css"), "html", null, true);
        echo "\" media=\"all\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/revslider.css"), "html", null, true);
        echo "\" >
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/owl.theme.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/flexslider.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/jquery.bxslider.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/jquery.mobile-menu.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/style.css"), "html", null, true);
        echo "\" media=\"all\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/responsive.css"), "html", null, true);
        echo "\" media=\"all\">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<meta name=\"viewport\" content=\"initial-scale=1.0, width=device-width\">
";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "</head>
<body>
<div id=\"page\">
  <header>
      <div class=\"header-banner\">
        <div class=\"assetBlock\">
          <div style=\"height: 20px; overflow: hidden;\" id=\"slideshow\">
            <p style=\"display: block;\"> GET READY FOR OUR FRESH <span>FRUITS </span> AND <span> VEGTABLES !</span> </p>
            <p style=\"display: none;\"> HURRY UP AND TRY OUR FRESH <span>FRUITS</span> AND <span> VEGTABLES</span> OF THE SEASON ! </p>
          </div>
         </div>
      </div>
      <div id=\"header\">
        <div class=\"header-container container\">
         <div class=\"row\">
          <div class=\"logo\"> <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_homepage");
        echo "\" title=\"El Saad\">
            <div><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Flavours Store\"></div>
            </a> </div>
          <div class=\"fl-nav-menu\">
           
              <nav>
                <div class=\"mm-toggle-wrap\">
                  <div class=\"mm-toggle\"><i class=\"icon-align-justify\"></i><span class=\"mm-label\">Menu</span> </div>
                </div>
                <div class=\"nav-inner\">
                  <!-- BEGIN NAV -->
                  <ul id=\"nav\" class=\"hidden-xs\">
                    <li id=\"nav-home\" class=\"mega-menu\">
                      <a id=\"home\" class=\"level-top ";
        // line 60
        $this->displayBlock('menu1', $context, $blocks);
        echo "\" onclick=\"activeButton()\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_homepage");
        echo "\"><span>Home</span></a>
                    </li>
                    <li class=\"mega-menu\"> 
                      <a class=\"level-top ";
        // line 63
        $this->displayBlock('menu2', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_about");
        echo "\"><span>About Us</span></a>
                    </li>

                    <li class=\"mega-menu\"> <a class=\"level-top ";
        // line 66
        $this->displayBlock('menu3', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => 0));
        echo "\"><span>Products</span></a> 
                    </li>
                     
                    <li class=\"mega-menu\"> 
                      <a class=\"level-top ";
        // line 70
        $this->displayBlock('menu4', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_boxes");
        echo "\"><span>Brands</span></a>
                    </li>

                    <li class=\"mega-menu\">
                     <a class=\"level-top ";
        // line 74
        $this->displayBlock('menu5', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_events");
        echo "\"><span>Events</span></a>
                    </li>
                    <li class=\"mega-menu\"> <a class=\"level-top ";
        // line 76
        $this->displayBlock('menu6', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_certificates");
        echo "\"><span>Certificates</span></a>
                    </li>

                    <li class=\"mega-menu\">
                     <a class=\"level-top ";
        // line 80
        $this->displayBlock('menu7', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_farms");
        echo "\"><span>El Saad Farms</span></a>
                    </li>

                    <li class=\"mega-menu\">
                     <a class=\"level-top ";
        // line 84
        $this->displayBlock('menu8', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_season");
        echo "\"><span>Fruits & Seasons</span></a>
                    </li> 

                    <li class=\"mega-menu\"> 
                      <a class=\"level-top ";
        // line 88
        $this->displayBlock('menu9', $context, $blocks);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_contact");
        echo "\"><span>Contact Us</span></a> 
                    </li>

                  </ul>
                  <!--nav-->
                  </div>
                  </nav>
            </div>
            <!--row-->
          </div>
        
        </div>
        </div>  
  </header>
 ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "  
  <footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class=\"footer-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-4 col-xs-12 col-lg-4\">
          <div class=\"co-info\">
              ";
        // line 112
        echo "              <address>
              <div> <span> <em class=\"icon-location-arrow\"></em> KILO 58 CAIRO-ALEXANDRIA DESERT ROAD FRONT OF THE EUROPEAN COUNTRY SIDE - GIZA – EGYPT</span></div>
              <div> <span> <em class=\"icon-mobile-phone\"></em> Phone: +2 38921298  Fax: +2 38921291 </span></div>
              <div> <em class=\"icon-envelope\"></em><span>Email : info@ELSAADEST.COM</span></div>
              </address>
              <div class=\"social\">
                <ul class=\"link\">
                  <li class=\"fb pull-left\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Facebook\"></a></li>
                 
                </ul>
              </div>
            </div>
            </div>
            
             <div class=\"col-sm-8 col-xs-12 col-lg-8\">
                <div class=\"footer-column\">
                    <h4>Information</h4>
                    <ul class=\"links\">
                     
                      <li><a title=\"About Us\" href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_about");
        echo "\">About Us</a></li>
                      <li><a title=\"Contact Us\" href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_contact");
        echo "\">Contact Us</a></li>
                      <li><a title=\"Our Products\" href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => 0));
        echo "\">Products</a></li>
                    </ul>
                </div>
             </div>
         
          <!--col-sm-12 col-xs-12 col-lg-8-->
          <!--col-xs-12 col-lg-4-->
        </div>
        <!--row-->
        
      </div>
      
      <!--container-->
    </div>
    <!--footer-inner-->
    
    <div class=\"footer-middle\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"row\"> </div>
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--footer-middle-->
    <div class=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 col-xs-12 coppyright\">© 2017 El SAAD For Exporting Fruits and Vegtables. All Rights Reserved.</div>
         
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--footer-bottom-->
    <!-- BEGIN SIMPLE FOOTER -->
  </footer>
  <!-- End For version 1,2,3,4,6 -->
  
</div>
<!--page-->
<!-- Mobile Menu-->
<div id=\"mobile-menu\">
  <ul>
    <li><div class=\"home\"><a href=\"";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_homepage");
        echo "\"><i class=\"icon-home\"></i>Home</a> </div></li>
    <li><a href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_about");
        echo "\">About Us</a></li>
    <li><a href=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => 0));
        echo "\">Products</a></li>
    <li><a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_boxes");
        echo "\">Boxes</a> </li>
    <li><a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_contact");
        echo "\">Contact Us</a></li>   
   
  </ul>
</div>

<!-- JavaScript -->


<!-- JavaScript -->



<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/common.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cloud-zoom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/parallax.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.mobile-menu.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 205
        $this->displayBlock('javascript', $context, $blocks);
        // line 206
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 60
    public function block_menu1($context, array $blocks = array())
    {
    }

    // line 63
    public function block_menu2($context, array $blocks = array())
    {
    }

    // line 66
    public function block_menu3($context, array $blocks = array())
    {
    }

    // line 70
    public function block_menu4($context, array $blocks = array())
    {
    }

    // line 74
    public function block_menu5($context, array $blocks = array())
    {
    }

    // line 76
    public function block_menu6($context, array $blocks = array())
    {
    }

    // line 80
    public function block_menu7($context, array $blocks = array())
    {
    }

    // line 84
    public function block_menu8($context, array $blocks = array())
    {
    }

    // line 88
    public function block_menu9($context, array $blocks = array())
    {
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
    }

    // line 205
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 205,  441 => 102,  436 => 88,  431 => 84,  426 => 80,  421 => 76,  416 => 74,  411 => 70,  406 => 66,  401 => 63,  396 => 60,  391 => 31,  386 => 5,  379 => 206,  377 => 205,  371 => 202,  367 => 201,  363 => 200,  359 => 199,  355 => 198,  351 => 197,  347 => 196,  343 => 195,  328 => 183,  324 => 182,  320 => 181,  316 => 180,  312 => 179,  263 => 133,  259 => 132,  255 => 131,  234 => 112,  224 => 103,  222 => 102,  203 => 88,  194 => 84,  185 => 80,  176 => 76,  169 => 74,  160 => 70,  151 => 66,  143 => 63,  135 => 60,  120 => 48,  116 => 47,  99 => 32,  97 => 31,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\xampp\\htdocs\\testnew\\app/Resources\\views/base.html.twig");
    }
}
