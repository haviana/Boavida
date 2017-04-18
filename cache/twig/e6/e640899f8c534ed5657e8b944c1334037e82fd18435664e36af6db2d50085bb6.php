<?php

/* modular/form.html.twig */
class __TwigTemplate_6829da6f3c151132bd4ad9178131494fee4fc537b327d836dca580e90ae7ebab extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
       {{ content }}
     </div>
   </div>
   <div class=\"row\">
\t{% include \"forms/form.html.twig\" %}
    </div>
  </div>
</section>
", "modular/form.html.twig", "/home/hviana/Boavida/user/themes/agency/templates/modular/form.html.twig");
    }
}
