<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_261dbb8539733d9391fcbee90a2606faebd277f77ce42d8185fc9af9f1007829 extends Twig_Template
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
        $__internal_11398adb01a5ed8d288631957f931540aaad036b0e098cebd24062d8d3d372e1 = $this->env->getExtension("native_profiler");
        $__internal_11398adb01a5ed8d288631957f931540aaad036b0e098cebd24062d8d3d372e1->enter($__internal_11398adb01a5ed8d288631957f931540aaad036b0e098cebd24062d8d3d372e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11398adb01a5ed8d288631957f931540aaad036b0e098cebd24062d8d3d372e1->leave($__internal_11398adb01a5ed8d288631957f931540aaad036b0e098cebd24062d8d3d372e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fa2939641d1b244e74edf7f815b93cae8062ddc8106ad8f3aa9ffe140d16b1f = $this->env->getExtension("native_profiler");
        $__internal_0fa2939641d1b244e74edf7f815b93cae8062ddc8106ad8f3aa9ffe140d16b1f->enter($__internal_0fa2939641d1b244e74edf7f815b93cae8062ddc8106ad8f3aa9ffe140d16b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0fa2939641d1b244e74edf7f815b93cae8062ddc8106ad8f3aa9ffe140d16b1f->leave($__internal_0fa2939641d1b244e74edf7f815b93cae8062ddc8106ad8f3aa9ffe140d16b1f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f6eeb3d0b12ef663c77aacf3e05f222ce58aa0074307c2c6d14aa9451fa0d6 = $this->env->getExtension("native_profiler");
        $__internal_95f6eeb3d0b12ef663c77aacf3e05f222ce58aa0074307c2c6d14aa9451fa0d6->enter($__internal_95f6eeb3d0b12ef663c77aacf3e05f222ce58aa0074307c2c6d14aa9451fa0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95f6eeb3d0b12ef663c77aacf3e05f222ce58aa0074307c2c6d14aa9451fa0d6->leave($__internal_95f6eeb3d0b12ef663c77aacf3e05f222ce58aa0074307c2c6d14aa9451fa0d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b3921bb0786a335963493e368ff20665242d7d238023649cb567bb36a14fe18 = $this->env->getExtension("native_profiler");
        $__internal_3b3921bb0786a335963493e368ff20665242d7d238023649cb567bb36a14fe18->enter($__internal_3b3921bb0786a335963493e368ff20665242d7d238023649cb567bb36a14fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3b3921bb0786a335963493e368ff20665242d7d238023649cb567bb36a14fe18->leave($__internal_3b3921bb0786a335963493e368ff20665242d7d238023649cb567bb36a14fe18_prof);

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
