<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_344f39cc4033b524010c39ee37034c63f9c64d34b7ef35b9f63551545223e57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed6ea465a234c4dac28becbb8ae24c53ef794bc9d74e43e574f34ca22833af8 = $this->env->getExtension("native_profiler");
        $__internal_bed6ea465a234c4dac28becbb8ae24c53ef794bc9d74e43e574f34ca22833af8->enter($__internal_bed6ea465a234c4dac28becbb8ae24c53ef794bc9d74e43e574f34ca22833af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed6ea465a234c4dac28becbb8ae24c53ef794bc9d74e43e574f34ca22833af8->leave($__internal_bed6ea465a234c4dac28becbb8ae24c53ef794bc9d74e43e574f34ca22833af8_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f52fc92bd976430adbfc15912aae2eee410662f40ed719ea4845e352aeeae203 = $this->env->getExtension("native_profiler");
        $__internal_f52fc92bd976430adbfc15912aae2eee410662f40ed719ea4845e352aeeae203->enter($__internal_f52fc92bd976430adbfc15912aae2eee410662f40ed719ea4845e352aeeae203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "EstDaf"), "method") == true)) {
            // line 14
            echo "          <li class=\"smenu\">
              <a href=\"index.php?uc=validerFrais&action=voirFrais\" title=\"valider les frais\">Valider les frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"daf\" title=\"valider les frais\">Affectation tablettes</a>
           </li>
           
           ";
        } else {
            // line 22
            echo "              <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
            echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
            echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           ";
        }
        // line 28
        echo "           <li class=\"smenu\">
              <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_f52fc92bd976430adbfc15912aae2eee410662f40ed719ea4845e352aeeae203->leave($__internal_f52fc92bd976430adbfc15912aae2eee410662f40ed719ea4845e352aeeae203_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 28,  78 => 25,  71 => 22,  61 => 14,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*          <h3>*/
/*             {%if(app.session.get('nom') is defined )%}*/
/*                            Visiteur: bonjour {{app.session.get('nom')}}<br>   */
/*             {%endif%}*/
/*         </h3>*/
/*      </div>  */
/*         <ul id="menuList">*/
/* 	   <li class="smenu">*/
/*               {% if app.session.get('EstDaf') == true %}*/
/*           <li class="smenu">*/
/*               <a href="index.php?uc=validerFrais&action=voirFrais" title="valider les frais">Valider les frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="daf" title="valider les frais">Affectation tablettes</a>*/
/*            </li>*/
/*            */
/*            {% else %}*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>	*/
/*            {% endif %}*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/*          </ul>*/
/*      </div> */
/* {% endblock%}*/
/* */
/* */
/* {#*/
/*  <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/* #}*/
