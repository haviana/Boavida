<?php

/* forms/fields/formname/formname.html.twig */
class __TwigTemplate_1194bcb0f3318ad2c612b50c8ee3dd14f59717a89d2ef66747a29a3e26596c46 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__form-name__\" value=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/formname/formname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input type="hidden" name="__form-name__" value="{{ form.name }}" />*/
