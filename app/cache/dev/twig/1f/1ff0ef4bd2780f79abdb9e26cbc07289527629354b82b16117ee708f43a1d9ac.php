<?php

/* PgGsbFraisBundle:Home:utilisateurTablette.html.twig */
class __TwigTemplate_d796074541f31e80afa4fbdfb3fe5f136d45e5731572999c664ac01529cf3890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:Home:utilisateurTablette.html.twig", 1);
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
        $__internal_08ffa7def38e01aebb639e1e6f758b01185f9dd1c4fa65cb2c948fc062120d55 = $this->env->getExtension("native_profiler");
        $__internal_08ffa7def38e01aebb639e1e6f758b01185f9dd1c4fa65cb2c948fc062120d55->enter($__internal_08ffa7def38e01aebb639e1e6f758b01185f9dd1c4fa65cb2c948fc062120d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:utilisateurTablette.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ffa7def38e01aebb639e1e6f758b01185f9dd1c4fa65cb2c948fc062120d55->leave($__internal_08ffa7def38e01aebb639e1e6f758b01185f9dd1c4fa65cb2c948fc062120d55_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69bc29a504616363bf099515a92b58faf0b82aa59c4531bbcc364882d4a36f97 = $this->env->getExtension("native_profiler");
        $__internal_69bc29a504616363bf099515a92b58faf0b82aa59c4531bbcc364882d4a36f97->enter($__internal_69bc29a504616363bf099515a92b58faf0b82aa59c4531bbcc364882d4a36f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
      

      
  

     
    
       <td style=\"border: 1px solid black;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "visiteur", array()), "html", null, true);
            echo "</td>
       


</h2>


";
        }
        // line 25
        echo "

       
       
     </div> 

";
        
        $__internal_69bc29a504616363bf099515a92b58faf0b82aa59c4531bbcc364882d4a36f97->leave($__internal_69bc29a504616363bf099515a92b58faf0b82aa59c4531bbcc364882d4a36f97_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:utilisateurTablette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  62 => 17,  52 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
/*       */
/* */
/*       */
/*   */
/* */
/*      */
/*     */
/*        <td style="border: 1px solid black;">{{prenom.visiteur}}</td>*/
/*        */
/* */
/* */
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
