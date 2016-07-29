<?php

/* /plugins/simple_form/simple_form.html.twig */
class __TwigTemplate_63890e1671e6880591f0a6d5463c73833346ac7bb68ce8c4a2c418c96ed160fb extends Twig_Template
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
        echo "    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" required class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"name@example.com\" required class=\"form-control\" />
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <textarea name=\"message\" rows=\"8\" id=\"message\" placeholder=\"Your message here\" required class=\"form-control\"></textarea>
            ";
        // line 19
        echo "        </div>
    </div>
    <div class=\"col-lg-12 text-center\">
        <div class=\"form-group\">
            <button class=\"btn btn-primary btn-lg\">Submit</button>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "/plugins/simple_form/simple_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 19,  31 => 7,  25 => 4,  19 => 1,);
    }
}
/* <form name="simple_form" id="simple_form" action="https://getsimpleform.com/messages?form_api_token={{ token | e('html_attr') }}" enctype="multipart/form-data" method="post">*/
/* */
/*     {# Redirect URL after submit #}*/
/*     <input type="hidden" name="redirect_to" value="{{ redirect_to | e('html_attr') }}" />*/
/* */
/*     {# START: input form here #}*/
/*     <div class="col-md-6">*/
/*         <div class="form-group">*/
/*             <input type="text" name="name" id="name" placeholder="Name" required class="form-control" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input type="email" name="email" id="email" placeholder="name@example.com" required class="form-control" />*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*         <div class="form-group">*/
/*             <textarea name="message" rows="8" id="message" placeholder="Your message here" required class="form-control"></textarea>*/
/*             {# END: input form here #}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-12 text-center">*/
/*         <div class="form-group">*/
/*             <button class="btn btn-primary btn-lg">Submit</button>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */
