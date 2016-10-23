<?php

/* modular/form.html.twig */
class __TwigTemplate_c738a392c1c7652e5fd859efe09c971c675d4fedaeb4f510d806aaaeb245ba45 extends Twig_Template
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
        echo "<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
       ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
     </div>
   </div>
   <div class=\"row\">
\t";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
  </div>
</section>
";
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
        return array (  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <section id="contact">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-lg-12 text-center">*/
/*        {{ content }}*/
/*      </div>*/
/*    </div>*/
/*    <div class="row">*/
/* 	{% include "forms/form.html.twig" %}*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
