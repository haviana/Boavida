<?php

/* forms/default/data.html.twig */
class __TwigTemplate_c3760d20430507f76f3b4c9196cc0fcab9ac6650b6fe84bc93c028d74666bb2b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "    <div><strong>";
            echo $this->getAttribute($context["field"], "label", array());
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method"));
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% for field in form.fields %}*/
/*     <div><strong>{{ field.label }}</strong>: {{ form.value(field.name)|e }}</div>*/
/* {% endfor %}*/
/* */
