<?php

/* zSport/template/extension/module/featured.twig */
class __TwigTemplate_0e5fb25ae2f7b13fd61577b04da2c49640370eb965a4590faa65ceaeeb2d0902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"heading\">
\t<h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
</div>
<div class=\"row\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
  <div class=\"item_product\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
     
      <div class=\"caption\">
        <h4 class=\"product-name\"><a href=\"";
            // line 12
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 13
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 14
                echo "        <div class=\"rating\">
          ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 16
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 17
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 19
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 21
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        </div>
        ";
            }
            // line 24
            echo "       ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 25
                echo "        <p class=\"price\">
\t\t  ";
                // line 26
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 27
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 29
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          <div class=\"sale\">
\t      \t<span>HOT</span>
\t      </div>
          ";
                }
                // line 34
                echo "        </p>
        ";
            }
            // line 36
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 38
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"button-cart\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
      </div>
      <div class=\"actionswc\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 42
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
        </div>
    </div>
    </div>
  </div>
   
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  
  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "  <div class=\"product-layout-col\">
   <div class=\"product-thumb transition\">
   \t<div class=\"col-sm-4\">
      <div class=\"image\"><a href=\"";
            // line 54
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
    </div>
    <div class=\"col-sm-8\">
      <div class=\"caption\">
        <h4><a href=\"";
            // line 58
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 59
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 60
                echo "        <div class=\"rating\">
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 63
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 65
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 67
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        </div>
        ";
            }
            // line 70
            echo "       ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 71
                echo "        <p class=\"price\">
          ";
                // line 72
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 73
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 75
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          <div class=\"sale\">
\t      \t<span>HOT</span>
\t      </div>
          ";
                }
                // line 80
                echo "        </p>
        ";
            }
            // line 82
            echo "      </div>
     </div>
   </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "zSport/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 87,  237 => 82,  233 => 80,  222 => 75,  216 => 73,  214 => 72,  211 => 71,  208 => 70,  204 => 68,  198 => 67,  194 => 65,  190 => 63,  187 => 62,  183 => 61,  180 => 60,  178 => 59,  172 => 58,  159 => 54,  154 => 51,  150 => 50,  147 => 49,  132 => 42,  126 => 41,  118 => 38,  114 => 36,  110 => 34,  99 => 29,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  81 => 22,  75 => 21,  71 => 19,  67 => 17,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  49 => 12,  37 => 9,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="heading">*/
/* 	<h3>{{ heading_title }}</h3>*/
/* </div>*/
/* <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*   <div class="item_product">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*      */
/*       <div class="caption">*/
/*         <h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*        {% if product.price %}*/
/*         <p class="price">*/
/* 		  {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           <div class="sale">*/
/* 	      	<span>HOT</span>*/
/* 	      </div>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');" class="button-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*       </div>*/
/*       <div class="actionswc">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/*    */
/*   {% endfor %}*/
/*   */
/*   {% for product in products %}*/
/*   <div class="product-layout-col">*/
/*    <div class="product-thumb transition">*/
/*    	<div class="col-sm-4">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*     </div>*/
/*     <div class="col-sm-8">*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*        {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           <div class="sale">*/
/* 	      	<span>HOT</span>*/
/* 	      </div>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*      </div>*/
/*    </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* */
