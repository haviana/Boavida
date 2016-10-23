<?php

/* @Var:[Site Contact Form] {{ form.value.name|e }} */
class __TwigTemplate_d4b976d5a1d2b5af79a715e291199085c47f7e82877e5282f4700951549872af extends Twig_Template
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
        echo "[Site Contact Form] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[Site Contact Form] {{ form.value.name|e }}";
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
/* [Site Contact Form] {{ form.value.name|e }}*/
