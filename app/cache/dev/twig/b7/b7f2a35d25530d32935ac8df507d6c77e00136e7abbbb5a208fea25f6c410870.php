<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_cd1c83574e0333236b91e8584358f800b6580501d44923175179f9d7137f23b4 extends Twig_Template
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
        $__internal_3922a87943bb98bee61cf2457258403fd2e9eb9d85c2cc5b8eb313feee22c6ef = $this->env->getExtension("native_profiler");
        $__internal_3922a87943bb98bee61cf2457258403fd2e9eb9d85c2cc5b8eb313feee22c6ef->enter($__internal_3922a87943bb98bee61cf2457258403fd2e9eb9d85c2cc5b8eb313feee22c6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3922a87943bb98bee61cf2457258403fd2e9eb9d85c2cc5b8eb313feee22c6ef->leave($__internal_3922a87943bb98bee61cf2457258403fd2e9eb9d85c2cc5b8eb313feee22c6ef_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37296453d19c2f691706b0eabd4f30cacbd180b417ec78509474ea694bd2019 = $this->env->getExtension("native_profiler");
        $__internal_f37296453d19c2f691706b0eabd4f30cacbd180b417ec78509474ea694bd2019->enter($__internal_f37296453d19c2f691706b0eabd4f30cacbd180b417ec78509474ea694bd2019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_f37296453d19c2f691706b0eabd4f30cacbd180b417ec78509474ea694bd2019->leave($__internal_f37296453d19c2f691706b0eabd4f30cacbd180b417ec78509474ea694bd2019_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_3204d98e4d489f7d839b0eca0ad3f4b278af52ede22198e43c93aa61d337f777 = $this->env->getExtension("native_profiler");
        $__internal_3204d98e4d489f7d839b0eca0ad3f4b278af52ede22198e43c93aa61d337f777->enter($__internal_3204d98e4d489f7d839b0eca0ad3f4b278af52ede22198e43c93aa61d337f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_3204d98e4d489f7d839b0eca0ad3f4b278af52ede22198e43c93aa61d337f777->leave($__internal_3204d98e4d489f7d839b0eca0ad3f4b278af52ede22198e43c93aa61d337f777_prof);

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
