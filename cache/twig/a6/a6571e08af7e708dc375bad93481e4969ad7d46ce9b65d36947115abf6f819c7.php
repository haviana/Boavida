<?php

/* modular/form.html.twig */
class __TwigTemplate_2bb7bee1d7b001b325db66dbc2ce46a6b4e700f056b95e3bc1086ccf4a4ee9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 3
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block content %}*/
/*     {{ content }}*/
/*     {% include "forms/form.html.twig" %}*/
/* {% endblock %}*/
