<?php

/* /plugins/simple_form/default.html.twig */
class __TwigTemplate_9d74d35b8fa989e9cf31fb0f9e2dc95bdf8003c4030de74f1a42b9e92f739c45 extends Twig_Template
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
        echo "<form name=\"simple_form\" id=\"simple_form\" action=\"https://getsimpleform.com/messages?form_api_token=";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html_attr");
        echo "\" enctype=\"multipart/form-data\" method=\"post\">

    ";
        // line 4
        echo "    <input type=\"hidden\" name=\"redirect_to\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["redirect_to"]) ? $context["redirect_to"] : null), "html_attr");
        echo "\" />

    ";
        // line 7
        echo "    <label for=\"name\">Name:</label>
    <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"\" required />

    <label for=\"email\">Email:</label>
    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"name@example.com\" required />

    <label for=\"message\">Message:</label>
    <textarea name=\"message\" id=\"message\" placeholder=\"Your message here\" required></textarea>
    ";
        // line 16
        echo "
    <button class=\"button\">Submit</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/plugins/simple_form/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  31 => 7,  25 => 4,  19 => 1,);
    }
}
/* <form name="simple_form" id="simple_form" action="https://getsimpleform.com/messages?form_api_token={{ token | e('html_attr') }}" enctype="multipart/form-data" method="post">*/
/* */
/*     {# Redirect URL after submit #}*/
/*     <input type="hidden" name="redirect_to" value="{{ redirect_to | e('html_attr') }}" />*/
/* */
/*     {# START: input form here #}*/
/*     <label for="name">Name:</label>*/
/*     <input type="text" name="name" id="name" placeholder="" required />*/
/* */
/*     <label for="email">Email:</label>*/
/*     <input type="email" name="email" id="email" placeholder="name@example.com" required />*/
/* */
/*     <label for="message">Message:</label>*/
/*     <textarea name="message" id="message" placeholder="Your message here" required></textarea>*/
/*     {# END: input form here #}*/
/* */
/*     <button class="button">Submit</button>*/
/* </form>*/
/* */
