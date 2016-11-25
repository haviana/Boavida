<?php

/* partials/navigation.html.twig */
class __TwigTemplate_d8e6e40e62e6f7f25ff5d3d3cb14f21f7c0e86ccca56c17f94efe9abd2d68d45 extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\" ><img src=\"/Boavida/images/canecas.png\" style=\"margin: -114px;
    padding-top: 0px;
    padding-left: 78px;\" alt=\"\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 24
            echo "                    ";
            if ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                // line 25
                echo "                        ";
                $context["domain"] = "";
                // line 26
                echo "                            ";
            } elseif ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "#")) {
                // line 27
                echo "                            ";
                $context["domain"] = "";
                // line 28
                echo "                                ";
            } else {
                // line 29
                echo "                                ";
                $context["domain"] = (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
                // line 30
                echo "                                ";
            }
            // line 31
            echo "                                <li><a class=\"page-scroll\" href=\"";
            echo (isset($context["domain"]) ? $context["domain"] : null);
            echo $this->getAttribute($context["link"], "url", array());
            echo "\" ";
            if ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  53 => 26,  50 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }
}
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header page-scroll">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand page-scroll" href="#page-top" ><img src="/Boavida/images/canecas.png" style="margin: -114px;*/
/*     padding-top: 0px;*/
/*     padding-left: 78px;" alt=""></a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="hidden">*/
/*                     <a href="#page-top"></a>*/
/*                 </li>*/
/*                 {% for link in site.links %}*/
/*                     {% if link.url | contains('http') %}*/
/*                         {% set domain = '' %}*/
/*                             {% elseif link.url | contains('#') %}*/
/*                             {% set domain = '' %}*/
/*                                 {% else %}*/
/*                                 {% set domain = base_url_absolute %}*/
/*                                 {% endif %}*/
/*                                 <li><a class="page-scroll" href="{{ domain }}{{ link.url }}" {% if link.url | contains('http') %}target="_blank"{% endif %}>{{ link.title }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.navbar-collapse -->*/
/*                 </div>*/
/*                 <!-- /.container-fluid -->*/
/*             </nav>*/
/* */
