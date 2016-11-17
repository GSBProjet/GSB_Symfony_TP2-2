<?php

/* base.html.twig */
class __TwigTemplate_b3a55075ffa1272750128718ca4ff18a83fde0751c812c34522822b8662b8d1b extends Twig_Template
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
        $__internal_776d54d96c132016b3dfd856d17ccb290409a051f1a584f2498b5e11eb9754a9 = $this->env->getExtension("native_profiler");
        $__internal_776d54d96c132016b3dfd856d17ccb290409a051f1a584f2498b5e11eb9754a9->enter($__internal_776d54d96c132016b3dfd856d17ccb290409a051f1a584f2498b5e11eb9754a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_776d54d96c132016b3dfd856d17ccb290409a051f1a584f2498b5e11eb9754a9->leave($__internal_776d54d96c132016b3dfd856d17ccb290409a051f1a584f2498b5e11eb9754a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61e4882b86d743f8a9c41f8770b9aea6312e49ac37742efc55dff027bc9841b3 = $this->env->getExtension("native_profiler");
        $__internal_61e4882b86d743f8a9c41f8770b9aea6312e49ac37742efc55dff027bc9841b3->enter($__internal_61e4882b86d743f8a9c41f8770b9aea6312e49ac37742efc55dff027bc9841b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61e4882b86d743f8a9c41f8770b9aea6312e49ac37742efc55dff027bc9841b3->leave($__internal_61e4882b86d743f8a9c41f8770b9aea6312e49ac37742efc55dff027bc9841b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12ccd47ca019feecc86a0c444840594f861315128482709a3406891a81443f4 = $this->env->getExtension("native_profiler");
        $__internal_d12ccd47ca019feecc86a0c444840594f861315128482709a3406891a81443f4->enter($__internal_d12ccd47ca019feecc86a0c444840594f861315128482709a3406891a81443f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d12ccd47ca019feecc86a0c444840594f861315128482709a3406891a81443f4->leave($__internal_d12ccd47ca019feecc86a0c444840594f861315128482709a3406891a81443f4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9774abc6ca254a55fcedb7ecdbb293a0b92775e911849402ea20c904ed08f384 = $this->env->getExtension("native_profiler");
        $__internal_9774abc6ca254a55fcedb7ecdbb293a0b92775e911849402ea20c904ed08f384->enter($__internal_9774abc6ca254a55fcedb7ecdbb293a0b92775e911849402ea20c904ed08f384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9774abc6ca254a55fcedb7ecdbb293a0b92775e911849402ea20c904ed08f384->leave($__internal_9774abc6ca254a55fcedb7ecdbb293a0b92775e911849402ea20c904ed08f384_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ef6ba365b6a23573030bdfb830959e65e6d9fb00f38959a860674067aaf2d85 = $this->env->getExtension("native_profiler");
        $__internal_8ef6ba365b6a23573030bdfb830959e65e6d9fb00f38959a860674067aaf2d85->enter($__internal_8ef6ba365b6a23573030bdfb830959e65e6d9fb00f38959a860674067aaf2d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ef6ba365b6a23573030bdfb830959e65e6d9fb00f38959a860674067aaf2d85->leave($__internal_8ef6ba365b6a23573030bdfb830959e65e6d9fb00f38959a860674067aaf2d85_prof);

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
