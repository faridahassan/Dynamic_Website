<?php

/* ClientBundle:Pages:product.html.twig */
class __TwigTemplate_cf920b5a0b84496b2f1f51fbe22e12b41e0699272399b90a198e2439a60bac12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Pages:product.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name", array()), "html", null, true);
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/stylesheet/flexslider.css"), "html", null, true);
        echo "\">";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        if ( !twig_test_empty((isset($context["item"]) ? $context["item"] : null))) {
            // line 6
            echo " <div class=\"page-heading\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
            echo "assets/images/Wide/5.jpg);\">
    <div class=\"breadcrumbs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <ul>
              <li class=\"home\"> <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_homepage");
            echo "\" title=\"Go to Home Page\">Home</a> <span>—› </span> </li>
              <li class=\"home\"> <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => 0));
            echo "\" title=\"Go to Home Page\">Products</a> </li>
            </ul>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <div class=\"page-title\">
      <h2>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parentid", array()), "name", array()), "html", null, true);
            echo "</h2>
    </div>
  </div>
  <!-- BEGIN Main Container -->
  <div class=\"main-container col1-layout wow bounceInUp animated\">
    <div class=\"main\">
      <div class=\"col-main\">
        <!-- Endif Next Previous Product -->
        <div class=\"product-view wow bounceInUp animated\" itemscope=\"\" itemtype=\"http://schema.org/Product\" itemid=\"#product_base\">
          <div id=\"messages_product_view\"></div>
          <!--product-next-prev-->
          <div class=\"product-essential container\">
            <div class=\"row\">
              <div class=\"product-next-prev\"> <a class=\"product-next\" title=\"Next\" href=\"#\"><span></span></a> <a class=\"product-prev\" title=\"Previous\" href=\"#\"><span></span></a> </div>
              <form action=\"\" method=\"post\" id=\"product_addtocart_form\">
                <!--End For version 1, 2, 6 -->
                <!-- For version 3 -->
                <div class=\"product-img-box col-sm-6 col-xs-12\">
                  <div class=\"new-label new-top-left\"> New </div>
                  <div class=\"product-image\">
                    <div class=\"large-image\">
                       ";
            // line 44
            if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images", array()))) {
                // line 45
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> 
                              <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\"> 
                            </a>
                       ";
            }
            // line 49
            echo "                      </div>
                    <div class=\"flexslider flexslider-thumb\">
                      <ul class=\"previews-list slides\">
                        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 53
                echo "                        <li>
                          <a href='";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", array()), "html", null, true);
                echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", array()), "html", null, true);
                echo "' \">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", array()), "html", null, true);
                echo "\" alt = \"Thumbnail 1\"/>
                          </a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                      </ul>
                    </div>
                  </div>
                  <!-- end: more-images -->
                </div>
                <!--End For version 1,2,6-->
                <!-- For version 3 -->
                <div class=\"product-shop col-sm-6 col-xs-12\">
                
                  <div class=\"product-name\">
                    <h1 itemprop=\"name\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name", array()), "html", null, true);
            echo "</h1>
                  </div>
                
                  <div class=\"short-description\">
                    <h2>Quick Overview</h2>
                    <p  style=\"text-align:justify;\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "Description", array()), "html", null, true);
            echo "</p>
                    <b>Cultivating Months:</b>
                    <p>";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "months", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "name", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["loop"], "index", array()) < twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "months", array())))) {
                    echo "- ";
                }
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                  </div>
                  <div class=\"table-responsive\">
                  <table class=\"data-table table-striped\" id=\"my-orders-table\">
                    
                    <thead>
                      <tr class=\"first last\">
                        ";
            // line 82
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "weights", array()), 0, array(), "array"), "countpercartoon", array())) > twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "weights", array()), 1, array(), "array"), "countpercartoon", array())))) {
                // line 83
                echo "                        <th colspan =\"";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "weights", array()), 0, array(), "array"), "countpercartoon", array())) + 1), "html", null, true);
                echo "\">Count per Cartoon </th>
                      ";
            } else {
                // line 85
                echo "                        <th colspan =\"";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "weights", array()), 1, array(), "array"), "countpercartoon", array())) + 1), "html", null, true);
                echo "\">Count per Cartoon </th>
                      ";
            }
            // line 87
            echo "                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "weights", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
                // line 91
                echo "                        ";
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                    // line 92
                    echo "                        <tr class=\"first odd\">
                          <td><span class=\"price\">";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["weight"], "name", array()), "html", null, true);
                    echo "</span></td>
                          ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["weight"], "countpercartoon", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                        // line 95
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                        echo "</td>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                         </tr>
                       ";
                } else {
                    // line 99
                    echo "                        <tr class=\"even\">
                          <td><span class=\"price\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["weight"], "name", array()), "html", null, true);
                    echo "</span></td>
                          ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["weight"], "countpercartoon", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                        // line 102
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                        echo "</td>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "                        </tr>
                        ";
                }
                // line 106
                echo "                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                      
                    </tbody>
                  </table>
                </div>
                <!--table-responsive--> 
                </div>
                <!--product-shop-->
                <!--Detail page static block for version 3-->
              </form>
            </div>
          </div>
        ";
            // line 118
            if (( !twig_test_empty((isset($context["relateditems"]) ? $context["relateditems"] : null)) && (twig_length_filter($this->env, (isset($context["relateditems"]) ? $context["relateditems"] : null)) != 1))) {
                // line 119
                echo "          <div class=\"box-additional\">
            <!-- BEGIN RELATED PRODUCTS -->
            <div class=\"related-pro container\">
              <div class=\"slider-items-products\">
                <div class=\"new_title center\">
                  <h2>Related Products</h2>
                </div>
                <div id=\"related-slider\" class=\"product-flexslider hidden-buttons\">
                  <div class=\"slider-items slider-width-col4 products-grid\">
                    ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["relateditems"]) ? $context["relateditems"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ite"]) {
                    // line 129
                    echo "                      ";
                    if (($this->getAttribute($context["ite"], "id", array()) != $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))) {
                        // line 130
                        echo "                        <div class=\"item\">
                            <div class=\"item-inner\">
                              <div class=\"item-img\">
                                <div class=\"item-img-info\"><a href=\"";
                        // line 133
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["ite"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ite"], "name", array()), "html", null, true);
                        echo "\" class=\"product-image\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/"), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ite"], "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ite"], "name", array()), "html", null, true);
                        echo "\"></a>
                                  ";
                        // line 135
                        echo "                                  <div class=\"item-box-hover\">
                                    <div class=\"box-inner\">
                                      <div class=\"product-detail-bnt\"><a href=\"";
                        // line 137
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["ite"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ite"], "name", array()), "html", null, true);
                        echo "\"  class=\"button detail-bnt\" type=\"button\">
                                        <span>Quick View</span></a></div>
                                   </div>
                                  </div>
                                </div>
                              </div>
                              <div class=\"item-info\">
                                <div class=\"info-inner\">
                                  <div class=\"item-title\"><a href=\"product-detail.html\" title=\"Retis lapen casen\">";
                        // line 145
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ite"], "name", array()), "html", null, true);
                        echo "</a> </div>
                                  <div class=\"item-content\">
                                    <div class=\"rating\">
                                    
                                    </div>
                                 
                                    <div class=\"add_cart\">
                                        <a href=\"";
                        // line 152
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_products", array("categoryid" => $this->getAttribute($context["ite"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ite"], "name", array()), "html", null, true);
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
                    // line 162
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ite'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                     <!-- End Item --> 
                  </div>
                </div>
              </div>
            </div>
            <!-- end related product -->
            <br>
          </div>
        ";
            }
            // line 172
            echo "          <!-- end related product -->
        </div>
        <!--box-additional-->
        <!--product-view-->
      </div>
    </div>
    <!--col-main-->
  </div>
  <!--main-container-->
</div>
<!--col1-layout-->
";
        } else {
            // line 184
            echo "  No Product Available
";
        }
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cloud-zoom.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClientBundle:Pages:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 189,  445 => 188,  442 => 187,  436 => 184,  422 => 172,  411 => 163,  405 => 162,  390 => 152,  380 => 145,  367 => 137,  363 => 135,  352 => 133,  347 => 130,  344 => 129,  340 => 128,  329 => 119,  327 => 118,  314 => 107,  300 => 106,  296 => 104,  287 => 102,  283 => 101,  279 => 100,  276 => 99,  272 => 97,  263 => 95,  259 => 94,  255 => 93,  252 => 92,  249 => 91,  232 => 90,  227 => 87,  221 => 85,  215 => 83,  213 => 82,  169 => 75,  164 => 73,  156 => 68,  144 => 58,  127 => 54,  124 => 53,  120 => 52,  115 => 49,  108 => 46,  103 => 45,  101 => 44,  77 => 23,  64 => 13,  60 => 12,  50 => 6,  48 => 5,  45 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClientBundle:Pages:product.html.twig", "C:\\xampp\\htdocs\\testnew\\src\\ClientBundle/Resources/views/Pages/product.html.twig");
    }
}
