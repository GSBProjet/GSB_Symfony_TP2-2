<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_7bcb7d1973106e76be5d0f8f6acb9847487a7f7a9aac6722f14f7fa346f621d0 extends Twig_Template
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
        $__internal_78c58d6d9e12b64fcf20179d67f0da736b2b6ac15aa2877173fda9fcb5b2f257 = $this->env->getExtension("native_profiler");
        $__internal_78c58d6d9e12b64fcf20179d67f0da736b2b6ac15aa2877173fda9fcb5b2f257->enter($__internal_78c58d6d9e12b64fcf20179d67f0da736b2b6ac15aa2877173fda9fcb5b2f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c58d6d9e12b64fcf20179d67f0da736b2b6ac15aa2877173fda9fcb5b2f257->leave($__internal_78c58d6d9e12b64fcf20179d67f0da736b2b6ac15aa2877173fda9fcb5b2f257_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eef174e31cc1fade8f1ee988c5430e4671cf36f471b81c5bb048b982d46db48 = $this->env->getExtension("native_profiler");
        $__internal_2eef174e31cc1fade8f1ee988c5430e4671cf36f471b81c5bb048b982d46db48->enter($__internal_2eef174e31cc1fade8f1ee988c5430e4671cf36f471b81c5bb048b982d46db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_2eef174e31cc1fade8f1ee988c5430e4671cf36f471b81c5bb048b982d46db48->leave($__internal_2eef174e31cc1fade8f1ee988c5430e4671cf36f471b81c5bb048b982d46db48_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_c7f473ad4f961711048368b7290d0f3e16c236af60e681c1b66007f07bc1c959 = $this->env->getExtension("native_profiler");
        $__internal_c7f473ad4f961711048368b7290d0f3e16c236af60e681c1b66007f07bc1c959->enter($__internal_c7f473ad4f961711048368b7290d0f3e16c236af60e681c1b66007f07bc1c959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_c7f473ad4f961711048368b7290d0f3e16c236af60e681c1b66007f07bc1c959->leave($__internal_c7f473ad4f961711048368b7290d0f3e16c236af60e681c1b66007f07bc1c959_prof);

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
