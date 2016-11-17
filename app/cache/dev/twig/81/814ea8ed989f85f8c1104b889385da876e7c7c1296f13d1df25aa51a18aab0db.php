<?php

/* PgGsbFraisBundle:Home:daf.html.twig */
class __TwigTemplate_49d3deff2c935f1cbae6c6e90e1df1319a67ff6f2bfded57f6aa658011e18e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:Home:daf.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e9df6be6954bd073080044e2d95b31ea53b7a33620888409dc0b500573cf579 = $this->env->getExtension("native_profiler");
        $__internal_8e9df6be6954bd073080044e2d95b31ea53b7a33620888409dc0b500573cf579->enter($__internal_8e9df6be6954bd073080044e2d95b31ea53b7a33620888409dc0b500573cf579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:daf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e9df6be6954bd073080044e2d95b31ea53b7a33620888409dc0b500573cf579->leave($__internal_8e9df6be6954bd073080044e2d95b31ea53b7a33620888409dc0b500573cf579_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba227de0e6ddac0ed62cbedbf814a582f44c9d79846a2754ade9a56bd88bd864 = $this->env->getExtension("native_profiler");
        $__internal_ba227de0e6ddac0ed62cbedbf814a582f44c9d79846a2754ade9a56bd88bd864->enter($__internal_ba227de0e6ddac0ed62cbedbf814a582f44c9d79846a2754ade9a56bd88bd864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "


";
        // line 6
        $this->displayParentBlock("menu", $context, $blocks);
        echo "

     ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "EstDaf"), "method") == true)) {
            // line 9
            echo "      <h2 style=\"text-align: center;\">     
      <h2> Liste des affectations des tablettes :</h2>

      
      <table style=\"border-collapse: collapse;\">
        <tr style=\"{border: 1px solid black;}\">
       <th style=\"border: 1px solid black;\" >Numéro Tablette </th>
       <th style=\"border: 1px solid black;\" >Nom de l'utilisateur</th>
       <th style=\"border: 1px solid black;\">Type de Tablette </th>
       <th style=\"border: 1px solid black;\"> Mémoire Interne</th>
       <th style=\"border: 1px solid black;\"> Mémoire Externe</th>
       <th style=\"border: 1px solid black;\"> Date Affectation</th>
       </tr>

       ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tablette"]) ? $context["tablette"] : $this->getContext($context, "tablette")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                echo " 
       <tr style=\"border: 1px solid black;\">
       <td style=\"border: 1px solid black;\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
                echo "</td>
              <td style=\"border: 1px solid black;\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "prenom", array()), "html", null, true);
                echo "</td> 
       <td style=\"border: 1px solid black;\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "typeTablette", array()), "html", null, true);
                echo "</td>
       <td style=\"border: 1px solid black;\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "memoireInt", array()), "html", null, true);
                echo " </td>
       <td style=\"border: 1px solid black;\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "memoireExt", array()), "html", null, true);
                echo "</td>
       <td style=\"border: 1px solid black;\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateAffectation", array()), "html", null, true);
                echo "</td>


       </br>
   </tr>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</table>
</h2>


";
        }
        // line 41
        echo "

       
       
     </div> 

";
        
        $__internal_ba227de0e6ddac0ed62cbedbf814a582f44c9d79846a2754ade9a56bd88bd864->leave($__internal_ba227de0e6ddac0ed62cbedbf814a582f44c9d79846a2754ade9a56bd88bd864_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:daf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  109 => 36,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  79 => 26,  75 => 25,  68 => 23,  52 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block menu %}*/
/* */
/* */
/* */
/* {{parent()}}*/
/* */
/*      {% if app.session.get('EstDaf') == true %}*/
/*       <h2 style="text-align: center;">     */
/*       <h2> Liste des affectations des tablettes :</h2>*/
/* */
/*       */
/*       <table style="border-collapse: collapse;">*/
/*         <tr style="{border: 1px solid black;}">*/
/*        <th style="border: 1px solid black;" >Numéro Tablette </th>*/
/*        <th style="border: 1px solid black;" >Nom de l'utilisateur</th>*/
/*        <th style="border: 1px solid black;">Type de Tablette </th>*/
/*        <th style="border: 1px solid black;"> Mémoire Interne</th>*/
/*        <th style="border: 1px solid black;"> Mémoire Externe</th>*/
/*        <th style="border: 1px solid black;"> Date Affectation</th>*/
/*        </tr>*/
/* */
/*        {%for t in tablette%} */
/*        <tr style="border: 1px solid black;">*/
/*        <td style="border: 1px solid black;">{{t.id}}</td>*/
/*               <td style="border: 1px solid black;">{{t.nom}} {{t.prenom}}</td> */
/*        <td style="border: 1px solid black;">{{t.typeTablette}}</td>*/
/*        <td style="border: 1px solid black;">{{t.memoireInt}} </td>*/
/*        <td style="border: 1px solid black;">{{t.memoireExt}}</td>*/
/*        <td style="border: 1px solid black;">{{t.dateAffectation}}</td>*/
/* */
/* */
/*        </br>*/
/*    </tr>*/
/*    {% endfor %}*/
/* </table>*/
/* </h2>*/
/* */
/* */
/* {%endif%}*/
/* */
/* */
/*        */
/*        */
/*      </div> */
/* */
/* {% endblock %}*/
/* */
/* */
