<?php

/* base.html.twig */
class __TwigTemplate_c86f746e1d48ebefa51cd702c93a8edd1e73910052fc1ddde4f9e0ca6c04a9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942de8ccaa7b65776090f86402899d9ad7b8c594d0fde0b3725726daeaf39e1f = $this->env->getExtension("native_profiler");
        $__internal_942de8ccaa7b65776090f86402899d9ad7b8c594d0fde0b3725726daeaf39e1f->enter($__internal_942de8ccaa7b65776090f86402899d9ad7b8c594d0fde0b3725726daeaf39e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_942de8ccaa7b65776090f86402899d9ad7b8c594d0fde0b3725726daeaf39e1f->leave($__internal_942de8ccaa7b65776090f86402899d9ad7b8c594d0fde0b3725726daeaf39e1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c951358a48a61a5c77ae2dc7113c2c9a077282c94431916d8008c42fec403c = $this->env->getExtension("native_profiler");
        $__internal_a7c951358a48a61a5c77ae2dc7113c2c9a077282c94431916d8008c42fec403c->enter($__internal_a7c951358a48a61a5c77ae2dc7113c2c9a077282c94431916d8008c42fec403c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7c951358a48a61a5c77ae2dc7113c2c9a077282c94431916d8008c42fec403c->leave($__internal_a7c951358a48a61a5c77ae2dc7113c2c9a077282c94431916d8008c42fec403c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15087be477d53712d94019bcac7dfe97c9b92ec09af6ee56d099da5943181c0e = $this->env->getExtension("native_profiler");
        $__internal_15087be477d53712d94019bcac7dfe97c9b92ec09af6ee56d099da5943181c0e->enter($__internal_15087be477d53712d94019bcac7dfe97c9b92ec09af6ee56d099da5943181c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15087be477d53712d94019bcac7dfe97c9b92ec09af6ee56d099da5943181c0e->leave($__internal_15087be477d53712d94019bcac7dfe97c9b92ec09af6ee56d099da5943181c0e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7333d1ab334b6335c6c6ffb6a01832c1363138cd4fda17aa3d4afa94647a95e = $this->env->getExtension("native_profiler");
        $__internal_d7333d1ab334b6335c6c6ffb6a01832c1363138cd4fda17aa3d4afa94647a95e->enter($__internal_d7333d1ab334b6335c6c6ffb6a01832c1363138cd4fda17aa3d4afa94647a95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7333d1ab334b6335c6c6ffb6a01832c1363138cd4fda17aa3d4afa94647a95e->leave($__internal_d7333d1ab334b6335c6c6ffb6a01832c1363138cd4fda17aa3d4afa94647a95e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccd017d693c8eb08bfe7143ab660079a6816f05a553da376b89bf5bc8d0d8082 = $this->env->getExtension("native_profiler");
        $__internal_ccd017d693c8eb08bfe7143ab660079a6816f05a553da376b89bf5bc8d0d8082->enter($__internal_ccd017d693c8eb08bfe7143ab660079a6816f05a553da376b89bf5bc8d0d8082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccd017d693c8eb08bfe7143ab660079a6816f05a553da376b89bf5bc8d0d8082->leave($__internal_ccd017d693c8eb08bfe7143ab660079a6816f05a553da376b89bf5bc8d0d8082_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 13,  90 => 12,  79 => 6,  67 => 5,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
