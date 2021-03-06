<?php

/* partials/base.html.twig */
class __TwigTemplate_2c707d677e1303be03996d4d5cc136f0013eaa739812bc32afb1dab5c25ba06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "</head>
<body id=\"page-top\" class=\"index\">

  ";
        // line 27
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 30
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
  ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 46
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
  ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/global.css", 1 => 100), "method");
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 14
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 15
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  ";
    }

    // line 27
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 28)->display($context);
        // line 29
        echo "  ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "  ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 35)->display($context);
        // line 36
        echo "  ";
    }

    // line 38
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 41
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.easing.min.js"), "method");
        // line 42
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/classie.js"), "method");
        // line 43
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/cbpAnimatedHeader.js"), "method");
        // line 44
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/agency.js"), "method");
        // line 45
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 45,  171 => 44,  168 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  149 => 36,  146 => 35,  143 => 34,  138 => 31,  134 => 32,  131 => 31,  128 => 30,  124 => 29,  121 => 28,  118 => 27,  109 => 15,  106 => 14,  103 => 13,  100 => 12,  97 => 11,  89 => 21,  87 => 11,  82 => 9,  79 => 8,  77 => 7,  69 => 6,  66 => 5,  63 => 4,  53 => 46,  51 => 38,  48 => 37,  46 => 34,  43 => 33,  40 => 30,  38 => 27,  33 => 24,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   {% block head %}*/
/*   <meta charset="utf-8" />*/
/*   <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*   {% include 'partials/metadata.html.twig' %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://img/favicon.png') }}" />*/
/* */
/*   {% block stylesheets %}*/
/*     {% do assets.addCss('theme://css-compiled/global.css',100) %}*/
/*     {% do assets.addCss('theme://css/custom.css',100) %}*/
/*     {% do assets.addCss('theme://css/font-awesome/css/font-awesome.min.css',100) %}*/
/*     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>*/
/*   {% endblock %}*/
/*   {{ assets.css() }}*/
/* */
/*   {% endblock head%}*/
/* </head>*/
/* <body id="page-top" class="index">*/
/* */
/*   {% block header_navigation %}*/
/*     {% include 'partials/navigation.html.twig' %}*/
/*   {% endblock %}*/
/*   {% block body %}*/
/*     {% block content %}{% endblock %}*/
/*   {% endblock %}*/
/* */
/*   {% block footer %}*/
/*     {% include 'partials/footer.html.twig' %}*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts_bottom %}*/
/*     {% do assets.add('jquery',101) %}*/
/*     {% do assets.addJs('theme://js/bootstrap.min.js',100) %}*/
/*     {% do assets.addJs('theme://js/jquery.easing.min.js') %}*/
/*     {% do assets.addJs('theme://js/classie.js') %}*/
/*     {% do assets.addJs('theme://js/cbpAnimatedHeader.js') %}*/
/*     {% do assets.addJs('theme://js/agency.js') %}*/
/*   {% endblock %}*/
/*   {{ assets.js() }}*/
/* */
/* </body>*/
/* </html>*/
/* */
