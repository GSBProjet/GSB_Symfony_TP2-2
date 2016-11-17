<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_3cd399a1fb8d105ff246fd0adb3dc3c523ac5c93b9e39cb917974967e1f526a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85754e811373b2438712252048ade58530648d55cd6e41d8fb023c4617143b78 = $this->env->getExtension("native_profiler");
        $__internal_85754e811373b2438712252048ade58530648d55cd6e41d8fb023c4617143b78->enter($__internal_85754e811373b2438712252048ade58530648d55cd6e41d8fb023c4617143b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85754e811373b2438712252048ade58530648d55cd6e41d8fb023c4617143b78->leave($__internal_85754e811373b2438712252048ade58530648d55cd6e41d8fb023c4617143b78_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e36af5e8f029dd9e0df7418ae9c675a84885ab74d042c5fd983a37c0bd885d = $this->env->getExtension("native_profiler");
        $__internal_84e36af5e8f029dd9e0df7418ae9c675a84885ab74d042c5fd983a37c0bd885d->enter($__internal_84e36af5e8f029dd9e0df7418ae9c675a84885ab74d042c5fd983a37c0bd885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_84e36af5e8f029dd9e0df7418ae9c675a84885ab74d042c5fd983a37c0bd885d->leave($__internal_84e36af5e8f029dd9e0df7418ae9c675a84885ab74d042c5fd983a37c0bd885d_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_3f03be5442c18ddfde592a804ec3d4bdd60bfffff6d8d8d750916d18c74b7098 = $this->env->getExtension("native_profiler");
        $__internal_3f03be5442c18ddfde592a804ec3d4bdd60bfffff6d8d8d750916d18c74b7098->enter($__internal_3f03be5442c18ddfde592a804ec3d4bdd60bfffff6d8d8d750916d18c74b7098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_3f03be5442c18ddfde592a804ec3d4bdd60bfffff6d8d8d750916d18c74b7098->leave($__internal_3f03be5442c18ddfde592a804ec3d4bdd60bfffff6d8d8d750916d18c74b7098_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %} */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined )%}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}*/
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*         <p>*/
/*           <label for="nom">Login*</label>*/
/*            <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*         </p>*/
/* 	<p>*/
/*             <label for="mdp">Mot de passe*</label>*/
/*             <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*         </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* </div>*/
/*     {% endblock %}    */
/*     {% endblock%}*/
/*      */
