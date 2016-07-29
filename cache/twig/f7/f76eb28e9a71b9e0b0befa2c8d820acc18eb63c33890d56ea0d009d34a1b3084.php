<?php

/* modular/contact.html.twig */
class __TwigTemplate_670d52843bc4494f6e70ea6dfada7c9c94b0131414c0d0d7571bb6738cfac769 extends Twig_Template
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
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simple_form", array()), "enabled", array())) {
            // line 10
            echo "        ";
            $context["simple_form_config"] = (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "simple_form", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "simple_form", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "agency", array()), "simple_form", array())));
            // line 11
            echo "        ";
            echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), array((isset($context["simple_form_config"]) ? $context["simple_form_config"] : null)));
            echo "
    ";
        }
        // line 13
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  37 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
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
/*     {% if config.plugins.simple_form.enabled %}*/
/*         {% set simple_form_config = page.header.simple_form ?: config.themes.agency.simple_form %}*/
/*         {{ simple_form(simple_form_config) }}*/
/*     {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
