<?php

/* zSport/template/common/search.twig */
class __TwigTemplate_e6aad58b861a70551349f04cc5fde6322791aceef3634a438b42e59050f228f2 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<div id=\"search-inner\">
\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 3
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
\t\t<span class=\"input-group-btn\">
\t\t\t<button type=\"button\" class=\"button-search\"><i class=\"fa fa-search\"></i></button>
\t\t</span>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "zSport/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/* 	<div id="search-inner">*/
/* 		<input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/* 		<span class="input-group-btn">*/
/* 			<button type="button" class="button-search"><i class="fa fa-search"></i></button>*/
/* 		</span>*/
/* 	</div>*/
/* </div>*/
