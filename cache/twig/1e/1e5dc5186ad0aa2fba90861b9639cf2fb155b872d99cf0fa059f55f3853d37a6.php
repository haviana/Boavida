<?php

/* @Var:[Feedback] {{ form.value.name }} */
class __TwigTemplate_d5877b2d2d4454c79f2e8abe7b23752a7da3b896808f1191564186ae2cdcf6eb extends Twig_Template
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
        echo "[Feedback] ";
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array());
    }

    public function getTemplateName()
    {
        return "@Var:[Feedback] {{ form.value.name }}";
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
/* [Feedback] {{ form.value.name }}*/
