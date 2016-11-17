<?php

/* PgGsbFraisBundle:Home:ajouterTablette.html.twig */
class __TwigTemplate_d42bdad0e5a2174e4105a7a3f4793a1dd37d70ad9ba6b59d80ccabc15290fa2c extends Twig_Template
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
        $__internal_0b5009dc15b62006927ae64285e832b7671bc170c78ecf86ca30febcc6b1db6f = $this->env->getExtension("native_profiler");
        $__internal_0b5009dc15b62006927ae64285e832b7671bc170c78ecf86ca30febcc6b1db6f->enter($__internal_0b5009dc15b62006927ae64285e832b7671bc170c78ecf86ca30febcc6b1db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:ajouterTablette.html.twig"));

        // line 1
        echo "
                <td>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["idTablette"]) ? $context["idTablette"] : $this->getContext($context, "idTablette")), "html", null, true);
        echo "</td>
             
              ";
        
        $__internal_0b5009dc15b62006927ae64285e832b7671bc170c78ecf86ca30febcc6b1db6f->leave($__internal_0b5009dc15b62006927ae64285e832b7671bc170c78ecf86ca30febcc6b1db6f_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:ajouterTablette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* */
/*                 <td>{{idTablette}}</td>*/
/*              */
/*               */
