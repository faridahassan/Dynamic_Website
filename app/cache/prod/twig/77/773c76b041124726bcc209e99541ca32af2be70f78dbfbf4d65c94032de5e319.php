<?php

/* ClientBundle:Pages:index.html.twig */
class __TwigTemplate_c61ce13693c959c59d70852883e9ade61cb574e71a8c3a591a069a9ed3bfb5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Pages:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu1' => array($this, 'block_menu1'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "  Home Page";
    }

    // line 3
    public function block_menu1($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t <!--container-->
  <div class=\"content\">
  <div id=\"thm-mart-slideshow\" class=\"thm-mart-slideshow\">
    <div class=\"container\">
      <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
        <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-1.jpg"), "html", null, true);
        echo "'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-1.jpg"), "html", null, true);
        echo "' width=\"1920px\" height=\"900px\" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"slider-image1\" />
              <div class=\"info\">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Fruits</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Simply delicious</span></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Little things make a big difference</div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-2.jpg"), "html", null, true);
        echo "'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-2.jpg"), "html", null, true);
        echo "' width=\"1920px\" height=\"900px\"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"slider-image2\"  />
              <div class=\"info\">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
               
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
             <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-3.jpg"), "html", null, true);
        echo "'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-3.jpg"), "html", null, true);
        echo "' width=\"1920px\" height=\"900px\" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"slider-image2\"  />
              <div class=\"info\">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
               
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
             <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-4.jpg"), "html", null, true);
        echo "'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-4.jpg"), "html", null, true);
        echo "' width=\"1920px\" height=\"900px\"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"slider-image2\"  />
              <div class=\"info\">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
                
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-5.jpg"), "html", null, true);
        echo "'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Slider/Slider-5.jpg"), "html", null, true);
        echo "' width=\"1920px\" height=\"900px\"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"slider-image2\"  />
              <div class=\"info\">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fresh Look</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>100% Refreshing</span></div>
                
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
   <div id=\"top\">
  <div class=\"container\">
  <div class=\"row\">
    <br><br><br><br><br><br><br><br><br><br><br>
    
  </div>
  </div>
  </div>
  
  <!--Category slider Start-->
  
  <!--Category slider Start-->
  <div class=\"top-cate\">
  <div class=\"featured-pro container\">
    <div class=\"row\">
      <div class=\"slider-items-products\">
        <div class=\"new_title\">
          <h2>Fruits of the season</h2>
         
        </div> 
        <div id=\"top-categories\" class=\"product-flexslider hidden-buttons\">
          <div class=\"slider-items slider-width-col4 products-grid\">
             ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemsofMonth"]) ? $context["itemsofMonth"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "            <div class=\"item\">
              <div class=\"pro-img\">
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\" class=\"product-image\">
                  <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">
                </a>
                 <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\" class=\"product-image\">
                <div class=\"pro-info\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</div>
              </a>
              </div>
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!--Category silder End--> 
  

  
  
   <!-- best Pro Slider -->
   ";
        // line 102
        if ( !twig_test_empty((isset($context["bestseller"]) ? $context["bestseller"] : null))) {
            // line 103
            echo "  <section class=\" wow bounceInUp animated\">
    <div class=\"best-pro slider-items-products container\">
      <div class=\"new_title\">
        <h2>Best Seller</h2>
      </div>
      <div class=\"cate-banner-img\"><img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["bestseller"]) ? $context["bestseller"] : null), 0, array(), "array"), "images", array()), 2, array(), "array"), "url", array()), "html", null, true);
            echo "\"  width=\"240px\"height=\"439px\" alt=\"Fruits\"></div>
      <div id=\"best-seller\" class=\"product-flexslider hidden-buttons\">
        <div class=\"slider-items slider-width-col4 products-grid\">
          <div class=\"item\">
            <div class=\"item-inner\">
              <div class=\"item-img\">
                <div class=\"item-img-info\"><a href=\"product-detail.html\" title=\"Retis lapen casen\" class=\"product-image\"><img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/product-img.jpg"), "html", null, true);
            echo "\" alt=\"Retis lapen casen\"></a>
                  <div class=\"new-label new-top-left\">New</div>
                  <div class=\"item-box-hover\">
                    
                  </div>
                </div>
              </div>
              <div class=\"item-info\">
                <div class=\"info-inner\">
                  <div class=\"item-title\"><a href=\"product-detail.html\" title=\"Retis lapen casen\">Retis lapen casen</a> </div>
                  <div class=\"item-content\">
                    <div class=\"rating\">
                      <div class=\"ratings\">
                        <div class=\"rating-box\">
                          <div class=\"rating\" style=\"width:80%\"></div>
                        </div>
                        <p class=\"rating-links\"><a href=\"#\">1 Review(s)</a> <span class=\"separator\">|</span> <a href=\"#\">Add Review</a> </p>
                      </div>
                    </div>
                    <div class=\"item-price\">
                      <div class=\"price-box\"><span class=\"regular-price\" ><span class=\"price\">\$125.00</span> </span> </div>
                    </div>
                    <div class=\"add_cart\">
                        <button class=\"button btn-cart\" type=\"button\"><span>Add to Cart</span></button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bestseller"]) ? $context["bestseller"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 145
                echo "          <!-- Item -->
            <div class=\"item\">
              <div class=\"item-inner\">
                <div class=\"item-img\">
                  <div class=\"item-img-info\"><a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\" class=\"product-image\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Fruits\"></a>
                    ";
                // line 151
                echo "                    <div class=\"item-box-hover\">
                      <div class=\"box-inner\">
                        <div class=\"product-detail-bnt\"><a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\"  class=\"button detail-bnt\"><span>Quick View</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"item-info\">
                  <div class=\"info-inner\">
                    <div class=\"item-title\">
                      <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a> 
                    </div>
                    <div class=\"item-content\">
                       <div class=\"add_cart\">
                          <a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\">
                            <button class=\"button\" type=\"button\"><span>View More</span></button>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "          <!-- End Item --> 
        </div>
      </div>
    </div>
  </section>
  ";
        }
        // line 181
        echo "  
   <!-- Logo Brand Block -->
  <div class=\"brand-logo wow bounceInUp animated\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"logo-brand col-lg-6 col-md-6 col-sm-6 col-xs-12\">
      <div class=\"new_title\">
        <h2>Our Certificates and Events </h2>
      </div>
        <div class=\"slider-items-products\">
          <div id=\"brand-slider\" class=\"product-flexslider hidden-buttons\">
            <div class=\"slider-items slider-width-col6\">
              <!-- Item -->
              <div class=\"item\">
              <div class=\"logo-item\"><a href=\"#\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Certificates/Sedex.png"), "html", null, true);
        echo "\" width=\"180px\" height=\"200px\" alt=\"Sedex\"></a></div>
              
               </div>
              <!-- End Item -->
              <!-- Item -->
               <div class=\"item\">
              <div class=\"logo-item\"><a href=\"#\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Certificates/ISO9001.png"), "html", null, true);
        echo "\" width=\"180px\" height=\"200px\"alt=\"ISO9001\"></a></div>
              
               </div>
              <!-- End Item -->
              <!-- Item -->
             <div class=\"item\">
              <div class=\"logo-item\"><a href=\"#\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Certificates/GlobalGAP.png"), "html", null, true);
        echo "\" width=\"180px\" height=\"200px\" alt=\"GlobalGAP\"></a></div>
              
               </div>
              <!-- End Item -->
              <!-- Item -->
              <div class=\"item\">
              <div class=\"logo-item\"><a href=\"#\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Certificates/BRC.png"), "html", null, true);
        echo "\" width=\"180px\" height=\"200px\" alt=\"BRC\"></a></div>
               
               </div>
              <!-- End Item -->
              
            
              
            </div>
          </div>
        </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 testimonials-section\">
        <div class=\"offer-slider parallax parallax-2\">
      <ul class=\"bxslider\">
        <li>
        <div class=\"avatar\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fruit logistica.png"), "html", null, true);
        echo "\" alt=\"fruit\"></div>
        <div class=\"testimonials\">WAIT FOR US AT FRUIT LOGISTICA FROM Feb 08, 2017 TO Feb 10, 2017</div>
        </li>
        </ul>
       </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  
  <!-- For version 1,2,3,4,6 -->
";
    }

    // line 242
    public function block_javascript($context, array $blocks = array())
    {
        // line 243
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/revslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/revslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

        jQuery(document).ready(function(){

            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:900,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
";
    }

    public function getTemplateName()
    {
        return "ClientBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 245,  409 => 244,  404 => 243,  401 => 242,  383 => 228,  365 => 213,  356 => 207,  347 => 201,  338 => 195,  322 => 181,  314 => 175,  296 => 165,  285 => 161,  274 => 153,  270 => 151,  261 => 149,  255 => 145,  251 => 144,  218 => 114,  208 => 108,  201 => 103,  199 => 102,  185 => 90,  174 => 85,  168 => 84,  160 => 82,  154 => 81,  150 => 79,  146 => 78,  106 => 43,  93 => 35,  80 => 27,  67 => 19,  55 => 12,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClientBundle:Pages:index.html.twig", "C:\\xampp\\htdocs\\testnew\\src\\ClientBundle/Resources/views/Pages/index.html.twig");
    }
}
