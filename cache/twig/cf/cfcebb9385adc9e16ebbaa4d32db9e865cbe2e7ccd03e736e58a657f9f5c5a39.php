<?php

/* modular/store.html.twig */
class __TwigTemplate_4cada5ddad3a219cdff343d8dacfebda5b9ffa404145177f3567110ad61c0402 extends Twig_Template
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
        echo "<section id=\"store\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "stores", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stores"]) {
            // line 10
            echo "            <div class=\"col-md-6\">
                ";
            // line 11
            if ($this->getAttribute($context["stores"], "header", array())) {
                // line 12
                echo "                    <h4 class=\"stores-heading\">";
                echo $this->getAttribute($context["stores"], "header", array());
                echo "</h4>
                ";
            }
            // line 14
            echo "                ";
            if ($this->getAttribute($context["stores"], "text", array())) {
                // line 15
                echo "                    ";
                $context["bar"] = twig_split_filter($this->env, $this->getAttribute($context["stores"], "text", array()), ",");
                // line 16
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["bar"]) ? $context["bar"] : null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "                        <p> ";
                    echo $this->getAttribute((isset($context["bar"]) ? $context["bar"] : null), $context["i"], array(), "array");
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                ";
            }
            // line 20
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stores'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  70 => 20,  67 => 19,  58 => 17,  53 => 16,  50 => 15,  47 => 14,  41 => 12,  39 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"store\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row text-center\">
        {% for stores in page.header.stores %}
            <div class=\"col-md-6\">
                {% if stores.header %}
                    <h4 class=\"stores-heading\">{{ stores.header }}</h4>
                {% endif %}
                {% if stores.text %}
                    {% set bar = stores.text|split(',') %}
                    {% for i in 0.. bar|length  %}
                        <p> {{ bar[i] }}</p>
                    {% endfor %}
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
</section>
", "modular/store.html.twig", "/home/hviana/Boavida/user/themes/agency/templates/modular/store.html.twig");
    }
}
