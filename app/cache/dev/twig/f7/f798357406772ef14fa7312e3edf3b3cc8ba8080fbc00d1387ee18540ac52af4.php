<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_1162b96bbae2778a3013b2ad9d9eb47c8562521851f82f96ead3d1c0c8b34185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e87e0c9e7b95043a41c348d3259fade390d8fb3e7e63f909bc1a6d1b0435dbf7 = $this->env->getExtension("native_profiler");
        $__internal_e87e0c9e7b95043a41c348d3259fade390d8fb3e7e63f909bc1a6d1b0435dbf7->enter($__internal_e87e0c9e7b95043a41c348d3259fade390d8fb3e7e63f909bc1a6d1b0435dbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87e0c9e7b95043a41c348d3259fade390d8fb3e7e63f909bc1a6d1b0435dbf7->leave($__internal_e87e0c9e7b95043a41c348d3259fade390d8fb3e7e63f909bc1a6d1b0435dbf7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4964b93fd616bd04fe145d02463095a9bda5b87f98609457ec0c026db53e43c6 = $this->env->getExtension("native_profiler");
        $__internal_4964b93fd616bd04fe145d02463095a9bda5b87f98609457ec0c026db53e43c6->enter($__internal_4964b93fd616bd04fe145d02463095a9bda5b87f98609457ec0c026db53e43c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_4964b93fd616bd04fe145d02463095a9bda5b87f98609457ec0c026db53e43c6->leave($__internal_4964b93fd616bd04fe145d02463095a9bda5b87f98609457ec0c026db53e43c6_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_014570c3a7569654ec403c420f169669d0924c53b879ae7fb8b146f31a87ef1f = $this->env->getExtension("native_profiler");
        $__internal_014570c3a7569654ec403c420f169669d0924c53b879ae7fb8b146f31a87ef1f->enter($__internal_014570c3a7569654ec403c420f169669d0924c53b879ae7fb8b146f31a87ef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" =>         // line 6
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_014570c3a7569654ec403c420f169669d0924c53b879ae7fb8b146f31a87ef1f->leave($__internal_014570c3a7569654ec403c420f169669d0924c53b879ae7fb8b146f31a87ef1f_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*  {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,*/
/* 'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
