<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_c8f3f6b235b49b6ce5c2847bacddb32024d6ef494859cef2a5723411ad8539e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f198e541432aba3c8578e0ee05b866f67dec12da2ccf897ac01d8d1f04c55553 = $this->env->getExtension("native_profiler");
        $__internal_f198e541432aba3c8578e0ee05b866f67dec12da2ccf897ac01d8d1f04c55553->enter($__internal_f198e541432aba3c8578e0ee05b866f67dec12da2ccf897ac01d8d1f04c55553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_f198e541432aba3c8578e0ee05b866f67dec12da2ccf897ac01d8d1f04c55553->leave($__internal_f198e541432aba3c8578e0ee05b866f67dec12da2ccf897ac01d8d1f04c55553_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9f3c0cf8f7cecb3adcc9564a3ecb4a4ebebaf024e7b0b4be3ade8d3b1e6f99c = $this->env->getExtension("native_profiler");
        $__internal_a9f3c0cf8f7cecb3adcc9564a3ecb4a4ebebaf024e7b0b4be3ade8d3b1e6f99c->enter($__internal_a9f3c0cf8f7cecb3adcc9564a3ecb4a4ebebaf024e7b0b4be3ade8d3b1e6f99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_a9f3c0cf8f7cecb3adcc9564a3ecb4a4ebebaf024e7b0b4be3ade8d3b1e6f99c->leave($__internal_a9f3c0cf8f7cecb3adcc9564a3ecb4a4ebebaf024e7b0b4be3ade8d3b1e6f99c_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1e6354f2e4b6bd8981fbdd5902c85e8657a759fb3301687e0a5e86e5d2255d = $this->env->getExtension("native_profiler");
        $__internal_4e1e6354f2e4b6bd8981fbdd5902c85e8657a759fb3301687e0a5e86e5d2255d->enter($__internal_4e1e6354f2e4b6bd8981fbdd5902c85e8657a759fb3301687e0a5e86e5d2255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_4e1e6354f2e4b6bd8981fbdd5902c85e8657a759fb3301687e0a5e86e5d2255d->leave($__internal_4e1e6354f2e4b6bd8981fbdd5902c85e8657a759fb3301687e0a5e86e5d2255d_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_d955669a5a8caa47636ef03b32a2cf186a15212260ccd67893f42c90b5e54f24 = $this->env->getExtension("native_profiler");
        $__internal_d955669a5a8caa47636ef03b32a2cf186a15212260ccd67893f42c90b5e54f24->enter($__internal_d955669a5a8caa47636ef03b32a2cf186a15212260ccd67893f42c90b5e54f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_d955669a5a8caa47636ef03b32a2cf186a15212260ccd67893f42c90b5e54f24->leave($__internal_d955669a5a8caa47636ef03b32a2cf186a15212260ccd67893f42c90b5e54f24_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/framework/css/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/framework/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
