<?php

/* partials/vimeo.html.twig */
class __TwigTemplate_937c88466016d9069cf1527e033a299db9587c7740c7edf8b36e942e811360a8 extends Twig_Template
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
        echo $this->env->getExtension('Grav\Plugin\Vimeo\Twig\VimeoTwigExtension')->embedVideo((isset($context["video_id"]) ? $context["video_id"] : null), (isset($context["player_parameters"]) ? $context["player_parameters"] : null));
    }

    public function getTemplateName()
    {
        return "partials/vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{- vimeo_embed_video(video_id, player_parameters) -}}
", "partials/vimeo.html.twig", "/home/hviana/Boavida/user/plugins/vimeo/templates/partials/vimeo.html.twig");
    }
}
