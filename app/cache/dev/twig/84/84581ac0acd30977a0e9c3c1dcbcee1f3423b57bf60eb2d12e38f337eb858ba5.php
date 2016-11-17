<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8de795b598e1404ffd90621cb8c66c33b6a79ad7e022366bd7e83d3fc2ee08ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7cd9ad6ac6fb80bcd8b3e8a9982ad5d40045105f32faacd980a1a515d4a28d = $this->env->getExtension("native_profiler");
        $__internal_bf7cd9ad6ac6fb80bcd8b3e8a9982ad5d40045105f32faacd980a1a515d4a28d->enter($__internal_bf7cd9ad6ac6fb80bcd8b3e8a9982ad5d40045105f32faacd980a1a515d4a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7cd9ad6ac6fb80bcd8b3e8a9982ad5d40045105f32faacd980a1a515d4a28d->leave($__internal_bf7cd9ad6ac6fb80bcd8b3e8a9982ad5d40045105f32faacd980a1a515d4a28d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64b052183b0af853facf8592ce61bb25f42012caf71a97bff40953e604ef48ee = $this->env->getExtension("native_profiler");
        $__internal_64b052183b0af853facf8592ce61bb25f42012caf71a97bff40953e604ef48ee->enter($__internal_64b052183b0af853facf8592ce61bb25f42012caf71a97bff40953e604ef48ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64b052183b0af853facf8592ce61bb25f42012caf71a97bff40953e604ef48ee->leave($__internal_64b052183b0af853facf8592ce61bb25f42012caf71a97bff40953e604ef48ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03f00fa5e16b7babde3cd45571d7b22a33754e982b870d4f200e4574718caf9e = $this->env->getExtension("native_profiler");
        $__internal_03f00fa5e16b7babde3cd45571d7b22a33754e982b870d4f200e4574718caf9e->enter($__internal_03f00fa5e16b7babde3cd45571d7b22a33754e982b870d4f200e4574718caf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03f00fa5e16b7babde3cd45571d7b22a33754e982b870d4f200e4574718caf9e->leave($__internal_03f00fa5e16b7babde3cd45571d7b22a33754e982b870d4f200e4574718caf9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57203a0a11d146b7764f929dd8d9a53539322f26d8ab5c8e82eb0c6fc61c4d29 = $this->env->getExtension("native_profiler");
        $__internal_57203a0a11d146b7764f929dd8d9a53539322f26d8ab5c8e82eb0c6fc61c4d29->enter($__internal_57203a0a11d146b7764f929dd8d9a53539322f26d8ab5c8e82eb0c6fc61c4d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_57203a0a11d146b7764f929dd8d9a53539322f26d8ab5c8e82eb0c6fc61c4d29->leave($__internal_57203a0a11d146b7764f929dd8d9a53539322f26d8ab5c8e82eb0c6fc61c4d29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
