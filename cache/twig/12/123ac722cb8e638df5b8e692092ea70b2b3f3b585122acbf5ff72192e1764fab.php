<?php

/* @Page:/home/hviana/Boavida/user/pages/01.home/_contact */
class __TwigTemplate_826de222e8ae1b8bd7c120346d6e6f772b290caa754e4115f97cb5b9708c9b68 extends Twig_Template
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
        echo "<section class=\"section-signup bg-faded\">
  <div class=\"container\">
    <h3 class=\"text-center m-b-lg\">Contact us</h3>
<h1>Contact Form</h1>
";
        // line 5
        $this->loadTemplate("forms/form.html.twig", "@Page:/home/hviana/Boavida/user/pages/01.home/_contact", 5)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact-form")))));
        // line 6
        echo "    <div class=\"row\">
        
            


<form name=\"my-nice-form\"
      action=\"/Boavida/home\"
      method=\"POST\"
      id=\"my-nice-form\"                  >

  
              
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"sr-only\">
                                                        Name
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-group has-icon-left form-control-data[name] \">
                            <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                        class=\"form-control form-control-lg\"                                     id=\"name\"                                                                                                             placeholder=\"Enter your name\"                                                                                                                                                autocomplete=\"on\"                                    required=\"required\"                                                                                                        
                                />
                        </div>
                    
                            </div>
            </div>
              
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"sr-only\">
                                                        Email
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"email\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-group has-icon-left form-control-data[email] \">
                            <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\"form-control form-control-lg\"                                     id=\"email\"                                                                                                             placeholder=\"Enter your email address\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
              
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"sr-only\">
                                                        Message
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-group long\">
        <textarea class=\"form-control form-control-lg\" name=\"data[message]\"
                        name=\"data[message]\"
                                        class=\"form-control form-control-lg\"                                                                 placeholder=\"Enter your message\"                                                                                required=\"required\"                                                        style=\"height: 200px;\"></textarea>
    </div>
                            </div>
            </div>
  
  <input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\" />
  
    <div class=\"buttons\">
  
        <button
                        class=\"btn btn-primary btn-lg\"
                        type=\"submit\"
        >
            Submit
        </button>
  
    </div>
  
  <input type=\"hidden\" id=\"form-nonce\" name=\"form-nonce\" value=\"f2e4aeb88b3850380a44e63cb1f0afbc\" />
</form>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/home/hviana/Boavida/user/pages/01.home/_contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="section-signup bg-faded">*/
/*   <div class="container">*/
/*     <h3 class="text-center m-b-lg">Contact us</h3>*/
/* <h1>Contact Form</h1>*/
/* {% include "forms/form.html.twig" with {form: forms('contact-form')} %}*/
/*     <div class="row">*/
/*         */
/*             */
/* */
/* */
/* <form name="my-nice-form"*/
/*       action="/Boavida/home"*/
/*       method="POST"*/
/*       id="my-nice-form"                  >*/
/* */
/*   */
/*               */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="sr-only">*/
/*                                                         Name*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-group has-icon-left form-control-data[name] ">*/
/*                             <input*/
/*                                                                 name="data[name]"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                         class="form-control form-control-lg"                                     id="name"                                                                                                             placeholder="Enter your name"                                                                                                                                                autocomplete="on"                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                     */
/*                             </div>*/
/*             </div>*/
/*               */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="sr-only">*/
/*                                                         Email*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="email"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-group has-icon-left form-control-data[email] ">*/
/*                             <input*/
/*                                                                 name="data[email]"*/
/*                                 value=""*/
/*                                                                     type="email"*/
/*                                             class="form-control form-control-lg"                                     id="email"                                                                                                             placeholder="Enter your email address"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*               */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="sr-only">*/
/*                                                         Message*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="textarea"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                         <div class="form-group long">*/
/*         <textarea class="form-control form-control-lg" name="data[message]"*/
/*                         name="data[message]"*/
/*                                         class="form-control form-control-lg"                                                                 placeholder="Enter your message"                                                                                required="required"                                                        style="height: 200px;"></textarea>*/
/*     </div>*/
/*                             </div>*/
/*             </div>*/
/*   */
/*   <input type="hidden" name="__form-name__" value="my-nice-form" />*/
/*   */
/*     <div class="buttons">*/
/*   */
/*         <button*/
/*                         class="btn btn-primary btn-lg"*/
/*                         type="submit"*/
/*         >*/
/*             Submit*/
/*         </button>*/
/*   */
/*     </div>*/
/*   */
/*   <input type="hidden" id="form-nonce" name="form-nonce" value="f2e4aeb88b3850380a44e63cb1f0afbc" />*/
/* </form>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
