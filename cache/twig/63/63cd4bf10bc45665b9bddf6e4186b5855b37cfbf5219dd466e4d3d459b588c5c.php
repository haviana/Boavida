<?php

/* @Page:/home/hviana/Boavida/user/pages/01.home/_header */
class __TwigTemplate_a8e50d067a7ff48837ffc2d383da64c6be35846ee269259c58d884c2cd46d15b extends Twig_Template
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
        echo "<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            
                    </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/hviana/Boavida/user/pages/01.home/_header";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            
                    </div>
    </div>
</header>", "@Page:/home/hviana/Boavida/user/pages/01.home/_header", "");
    }
}
