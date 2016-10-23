<?php

/* @Page:/home/hviana/Boavida/user/pages/01.home */
class __TwigTemplate_627da261d6824cf677965e6b1486a9dc328d7f3c53c59f61f88bd087cdb8a2f2 extends Twig_Template
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
        echo "<h1>Error: Invalid Frontmatter</h1>
<p>Path: <code>/home/hviana/Boavida/user/pages/01.home/modular.md</code></p>
<p><strong>Indentation problem at line 63 (near \"  to:\").</strong></p>
<pre><code>---
title: Boavida
menu: Home
onpage_menu: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _header
            - _services
            - _pecados
            - _boasvidas
            - _team
            - _contact
form:
    name: contact
    action: /home
    fields:
        - name: name
          label: Name
          classes: form-control
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          position: left
          validate:
            required: true

        - name: email
          label: Email
          classes: form-control
          placeholder: Enter your email address
          type: email
          position: left
          validate:
            required: true

        - name: message
          label: Message
          placeholder: Enter your message
          type: textarea
          classes: form-control
          position: right
          validate:
            required: true

    buttons:
        - type: submit
          classes: \"btn btn-primary btn-lg\"
          value: Submit

    process:
        - email:
             from: \"";
        // line 60
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "email", array()), "from", array());
        echo "\"
            to:
              - \"";
        // line 62
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "email", array()), "from", array());
        echo "\"
              - \"";
        // line 63
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "email", array());
        echo "\"
            subject: \"[Feedback] ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
        echo "\"
            body: \"";
        // line 65
        $this->loadTemplate("forms/data.html.twig", "@Page:/home/hviana/Boavida/user/pages/01.home", 65)->display($context);
        echo "\"    
        - message: Thank you for getting in touch!
---
</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/hviana/Boavida/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 65,  93 => 64,  89 => 63,  85 => 62,  80 => 60,  19 => 1,);
    }
}
/* <h1>Error: Invalid Frontmatter</h1>*/
/* <p>Path: <code>/home/hviana/Boavida/user/pages/01.home/modular.md</code></p>*/
/* <p><strong>Indentation problem at line 63 (near "  to:").</strong></p>*/
/* <pre><code>---*/
/* title: Boavida*/
/* menu: Home*/
/* onpage_menu: true*/
/* content:*/
/*     items: @self.modular*/
/*     order:*/
/*         by: default*/
/*         dir: asc*/
/*         custom:*/
/*             - _header*/
/*             - _services*/
/*             - _pecados*/
/*             - _boasvidas*/
/*             - _team*/
/*             - _contact*/
/* form:*/
/*     name: contact*/
/*     action: /home*/
/*     fields:*/
/*         - name: name*/
/*           label: Name*/
/*           classes: form-control*/
/*           placeholder: Enter your name*/
/*           autofocus: on*/
/*           autocomplete: on*/
/*           type: text*/
/*           position: left*/
/*           validate:*/
/*             required: true*/
/* */
/*         - name: email*/
/*           label: Email*/
/*           classes: form-control*/
/*           placeholder: Enter your email address*/
/*           type: email*/
/*           position: left*/
/*           validate:*/
/*             required: true*/
/* */
/*         - name: message*/
/*           label: Message*/
/*           placeholder: Enter your message*/
/*           type: textarea*/
/*           classes: form-control*/
/*           position: right*/
/*           validate:*/
/*             required: true*/
/* */
/*     buttons:*/
/*         - type: submit*/
/*           classes: "btn btn-primary btn-lg"*/
/*           value: Submit*/
/* */
/*     process:*/
/*         - email:*/
/*              from: "{{ config.plugins.email.from }}"*/
/*             to:*/
/*               - "{{ config.plugins.email.from }}"*/
/*               - "{{ form.value.email }}"*/
/*             subject: "[Feedback] {{ form.value.name|e }}"*/
/*             body: "{% include 'forms/data.html.twig' %}"    */
/*         - message: Thank you for getting in touch!*/
/* ---*/
/* </code></pre>*/
