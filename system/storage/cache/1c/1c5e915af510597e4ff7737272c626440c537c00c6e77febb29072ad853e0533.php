<?php

/* zBaby/template/extension/module/featured.twig */
class __TwigTemplate_c16a6a27f43ce455759e4ec5775ad0f23c230605f708ef1742b7b509ee05485c extends Twig_Template
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
    <div class=\"product-thumb transition\">
      <div class=\"nd-wrap \">
\t\t<center><a href=\"";
            // line 8
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
          <img src=\"";
            // line 9
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
\t\t\t\t\t
\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 16
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t<span class=\"fa fa-heart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 19
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t<span class=\"fa fa-exchange fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 22
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<h3 class=\"nd-title\"><span><a href=\"";
            // line 24
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">[ <i class=\"fa fa-circle\"></i><i class=\"fa fa-circle\"></i><i class=\"fa fa-circle\"></i> ]</a></span></h3>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>\t\t\t\t
\t\t</div>
\t  </div>
      <div class=\"caption\">
      \t<h4 class=\"product-name\"><a href=\"";
            // line 30
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 31
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 32
                echo "\t\t<div class=\"rating\">
\t\t  ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    echo "\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 35
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    } else {
                        // line 37
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 39
                    echo "\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t</div>
\t\t";
            }
            // line 42
            echo "\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 43
                echo "\t\t<p class=\"price\">
\t\t  ";
                // line 44
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 45
                    echo "\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t  ";
                } else {
                    // line 47
                    echo "\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t  ";
                }
                // line 49
                echo "\t\t  ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 50
                    echo "\t\t  <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t  ";
                }
                // line 52
                echo "\t\t</p>
\t\t";
            }
            // line 54
            echo "      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  
  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 60
            echo "  <div class=\"product-layout-col\">
   <div class=\"product-thumb transition\">
   \t<div class=\"col-sm-4\">
      <div class=\"image\"><a href=\"";
            // line 63
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
            // line 67
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 68
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 69
                echo "\t\t<div class=\"rating\">
\t\t  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 71
                    echo "\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 72
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    } else {
                        // line 74
                        echo "\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 76
                    echo "\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t\t</div>
\t\t";
            }
            // line 79
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 80
                echo "\t\t<p class=\"price\">
\t\t  ";
                // line 81
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 82
                    echo "\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t  ";
                } else {
                    // line 84
                    echo "\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t  ";
                }
                // line 86
                echo "\t\t  ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 87
                    echo "\t\t  <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t  ";
                }
                // line 89
                echo "\t\t</p>
\t\t";
            }
            // line 91
            echo "      </div>
     </div>
   </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "zBaby/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 96,  265 => 91,  261 => 89,  253 => 87,  250 => 86,  242 => 84,  236 => 82,  234 => 81,  231 => 80,  228 => 79,  224 => 77,  218 => 76,  214 => 74,  210 => 72,  207 => 71,  203 => 70,  200 => 69,  198 => 68,  192 => 67,  179 => 63,  174 => 60,  170 => 59,  167 => 58,  158 => 54,  154 => 52,  146 => 50,  143 => 49,  135 => 47,  129 => 45,  127 => 44,  124 => 43,  121 => 42,  117 => 40,  111 => 39,  107 => 37,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  91 => 31,  85 => 30,  76 => 24,  69 => 22,  61 => 19,  53 => 16,  39 => 9,  35 => 8,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* <div class="heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="product-content">*/
/*  <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="nd-wrap ">*/
/* 		<center><a href="{{ product.href }}">*/
/*           <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*         </a></center>*/
/* 		<div class="nd-content">*/
/* 			<div class="nd-content_inner">*/
/* 				<div class="nd-content_inner1">*/
/* 					*/
/* 					<span class="nd-icon">*/
/* 						<span class="fa fa-shopping-cart fa-fw" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"></span>*/
/* 					</span>*/
/* 					<span class="nd-icon">*/
/* 						<span class="fa fa-heart fa-fw" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"></span>*/
/* 					</span>*/
/* 					<span class="nd-icon">*/
/* 						<span class="fa fa-exchange fa-fw" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"></span>*/
/* 					</span>*/
/* 					<h3 class="nd-title"><span><a href="{{ product.href }}">[ <i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i> ]</a></span></h3>*/
/* 				</div>					*/
/* 			</div>				*/
/* 		</div>*/
/* 	  </div>*/
/*       <div class="caption">*/
/*       	<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
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
/* 		{% if product.price %}*/
/* 		<p class="price">*/
/* 		  {% if not product.special %}*/
/* 		  {{ product.price }}*/
/* 		  {% else %}*/
/* 		  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 		  {% endif %}*/
/* 		  {% if product.tax %}*/
/* 		  <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 		  {% endif %}*/
/* 		</p>*/
/* 		{% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
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
/* 		<p class="price">*/
/* 		  {% if not product.special %}*/
/* 		  {{ product.price }}*/
/* 		  {% else %}*/
/* 		  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 		  {% endif %}*/
/* 		  {% if product.tax %}*/
/* 		  <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 		  {% endif %}*/
/* 		</p>*/
/* 		{% endif %}*/
/*       </div>*/
/*      </div>*/
/*    </div>*/
/*   </div>*/
/*   {% endfor %}*/
/*  </div>*/
/* </div>*/
/* */
