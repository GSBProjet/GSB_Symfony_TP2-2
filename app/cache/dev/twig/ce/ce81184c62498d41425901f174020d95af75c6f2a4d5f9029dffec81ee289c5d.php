<?php

/* PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig */
class __TwigTemplate_f0414eaef0b0b68aaa0ecee97f889d86b517e1be66195ac73541bb13d9e38169 extends Twig_Template
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
        $__internal_d169cae6a9742c3af87afe94fec4287fc5ce7205b2bf8fea7415d58b9d5e4a07 = $this->env->getExtension("native_profiler");
        $__internal_d169cae6a9742c3af87afe94fec4287fc5ce7205b2bf8fea7415d58b9d5e4a07->enter($__internal_d169cae6a9742c3af87afe94fec4287fc5ce7205b2bf8fea7415d58b9d5e4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig"));

        // line 1
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo " : 
    </h3>
    <div class=\"encadre\">
    <p>
        Etat : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")), "html", null, true);
        echo " <br> Montant validé : ";
        echo twig_escape_filter($this->env, (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), "html", null, true);
        echo "
   </p>
  \t<table class=\"listeLegere\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 11
            echo "          ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 12
            echo "\t\t<th> ";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
\t</tr>
        <tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 17
            echo "\t  ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 18
            echo "\t       <td class=\"qteForfait\">";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo " </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  
\t</tr>
    </table>
   </div>
 
";
        
        $__internal_d169cae6a9742c3af87afe94fec4287fc5ce7205b2bf8fea7415d58b9d5e4a07->leave($__internal_d169cae6a9742c3af87afe94fec4287fc5ce7205b2bf8fea7415d58b9d5e4a07_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  72 => 18,  69 => 17,  65 => 16,  60 => 13,  51 => 12,  48 => 11,  44 => 10,  32 => 5,  22 => 1,);
    }
}
/* <h3>Fiche de frais du mois {{nummois}}-{{numannee}} : */
/*     </h3>*/
/*     <div class="encadre">*/
/*     <p>*/
/*         Etat : {{libetat}} depuis le {{datemodif}} <br> Montant validé : {{montantvalide}}*/
/*    </p>*/
/*   	<table class="listeLegere">*/
/*   	   <caption>Eléments forfaitisés </caption>*/
/*         <tr>*/
/*     {% for unfrais in  lesfraisforfait %}*/
/*           {%   set libelle = unfrais.libelle %}*/
/* 		<th> {{libelle}}</th>*/
/*     {% endfor %}  */
/* 	</tr>*/
/*         <tr>*/
/*     {% for unfrais in  lesfraisforfait %}*/
/* 	  {%   set quantite = unfrais.quantite %}*/
/* 	       <td class="qteForfait">{{quantite}} </td>*/
/*     {% endfor %}  */
/* 	</tr>*/
/*     </table>*/
/*    </div>*/
/*  */
/* */
