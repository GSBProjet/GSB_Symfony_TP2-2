<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c53555c683593ab7dd85b54f4437bffdf9e0e0f3e6aade58ba9f6ae2a80ef7ad extends Twig_Template
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
        $__internal_f7f8460244bab75376a36e6933ade38f6cbe7e98aa0aa8d31ff5b2c49d158de3 = $this->env->getExtension("native_profiler");
        $__internal_f7f8460244bab75376a36e6933ade38f6cbe7e98aa0aa8d31ff5b2c49d158de3->enter($__internal_f7f8460244bab75376a36e6933ade38f6cbe7e98aa0aa8d31ff5b2c49d158de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f7f8460244bab75376a36e6933ade38f6cbe7e98aa0aa8d31ff5b2c49d158de3->leave($__internal_f7f8460244bab75376a36e6933ade38f6cbe7e98aa0aa8d31ff5b2c49d158de3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
