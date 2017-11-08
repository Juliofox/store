<?php

/* zFashion/template/extension/module/featured.twig */
class __TwigTemplate_b584cbfb83d04a1e0ea7c11a49d18dfea35ccd5992fea7395c0cb4124b1c7d96 extends Twig_Template
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
        echo "<div class=\"heading\"><h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
  <div class=\"product-content\">
  <div class=\"row\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
   
\t";
            // line 7
            if ($this->getAttribute($context["product"], "special", array())) {
                // line 8
                echo "    \t<span class=\"ribbon\">HOT<b></b></span>
\t";
            }
            // line 10
            echo "   
    <div class=\"product-thumb transition\">
      <div class=\" nd-wrap nd-style-1\">
\t\t<center><a href=\"";
            // line 13
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
          <img src=\"";
            // line 14
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" />
        </a></center>
\t\t<div class=\"nd-content\">
\t\t\t<div class=\"nd-content_inner\">
\t\t\t\t<div class=\"nd-content_inner1\">
\t\t\t\t\t<p class=\"nd-title\" style=\"color: #fff;\">";
            // line 19
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>\t\t\t\t
\t\t</div>
\t  </div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 25
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        
        ";
            // line 27
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 28
                echo "\t\t<div class=\"rating\">
\t\t  ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 30
                    echo "\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 31
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    } else {
                        // line 33
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 35
                    echo "\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t</div>
\t\t";
            }
            // line 38
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 39
                echo "        <p class=\"price\">
          ";
                // line 40
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 41
                    echo "\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t";
                } else {
                    // line 43
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 45
                echo "        </p>
        ";
            }
            // line 47
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 49
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 50
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 51
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "   </div>
  
  ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "  <div class=\"product-layout-col\">
   <div class=\"product-thumb transition\">
   \t<div class=\"col-sm-4\">
      <div class=\"image\"><a href=\"";
            // line 62
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
            // line 66
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 67
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 68
                echo "\t\t<div class=\"rating\">
\t\t  ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    echo "\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 71
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    } else {
                        // line 73
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 75
                    echo "\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t</div>
\t\t";
            }
            // line 78
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 79
                echo "        <p class=\"price\">
          ";
                // line 80
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 81
                    echo "\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t";
                } else {
                    // line 83
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 85
                echo "        </p>
        ";
            }
            // line 87
            echo "      </div>
     </div>
   </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "  </div>
 
";
    }

    public function getTemplateName()
    {
        return "zFashion/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 92,  250 => 87,  246 => 85,  238 => 83,  232 => 81,  230 => 80,  227 => 79,  224 => 78,  220 => 76,  214 => 75,  210 => 73,  206 => 71,  203 => 70,  199 => 69,  196 => 68,  194 => 67,  188 => 66,  175 => 62,  170 => 59,  166 => 58,  162 => 56,  149 => 51,  143 => 50,  137 => 49,  133 => 47,  129 => 45,  121 => 43,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  103 => 36,  97 => 35,  93 => 33,  89 => 31,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  70 => 25,  61 => 19,  49 => 14,  45 => 13,  40 => 10,  36 => 8,  34 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* <div class="heading"><h3>{{ heading_title }}</h3></div>*/
/*   <div class="product-content">*/
/*   <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*    */
/* 	{% if product.special %}*/
/*     	<span class="ribbon">HOT<b></b></span>*/
/* 	{% endif %}*/
/*    */
/*     <div class="product-thumb transition">*/
/*       <div class=" nd-wrap nd-style-1">*/
/* 		<center><a href="{{ product.href }}">*/
/*           <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*         </a></center>*/
/* 		<div class="nd-content">*/
/* 			<div class="nd-content_inner">*/
/* 				<div class="nd-content_inner1">*/
/* 					<p class="nd-title" style="color: #fff;">{{ product.description }}</p>*/
/* 				</div>					*/
/* 			</div>				*/
/* 		</div>*/
/* 	  </div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         */
/*         {% if product.rating %}*/
/* 		<div class="rating">*/
/* 		  {% for i in 5 %}*/
/* 		  {% if product.rating < i %}*/
/* 		  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 		  {% else %}*/
/* 		  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 		  {% endif %}*/
/* 		  {% endfor %}*/
/* 		</div>*/
/* 		{% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/* 			{{ product.price }}*/
/* 			{% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/*    </div>*/
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
/* 		<div class="rating">*/
/* 		  {% for i in 5 %}*/
/* 		  {% if product.rating < i %}*/
/* 		  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 		  {% else %}*/
/* 		  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 		  {% endif %}*/
/* 		  {% endfor %}*/
/* 		</div>*/
/* 		{% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/* 			{{ product.price }}*/
/* 			{% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*      </div>*/
/*    </div>*/
/*   </div>*/
/*   {% endfor %}*/
/*   </div>*/
/*  */
/* */
