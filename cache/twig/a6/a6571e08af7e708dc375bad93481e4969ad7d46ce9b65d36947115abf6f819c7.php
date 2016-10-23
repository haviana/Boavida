<?php

/* modular/form.html.twig */
class __TwigTemplate_2bb7bee1d7b001b325db66dbc2ce46a6b4e700f056b95e3bc1086ccf4a4ee9a4 extends Twig_Template
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
        echo "<div class=\"modular-row form ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 3
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 3)->display($context);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="modular-row form {{ page.header.class }}">*/
/*     {{ content|raw }}*/
/*     {% include "forms/form.html.twig" %}*/
/* </div>*/
