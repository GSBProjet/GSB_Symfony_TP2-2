<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b8c2a2e794c0ea80b72ff137bd62baf751a549ed0de27af30e609b07544b3fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_294c19500c517bad99673ce44637439b109f0fdfd6d9fcf5f1b6480216c7083f = $this->env->getExtension("native_profiler");
        $__internal_294c19500c517bad99673ce44637439b109f0fdfd6d9fcf5f1b6480216c7083f->enter($__internal_294c19500c517bad99673ce44637439b109f0fdfd6d9fcf5f1b6480216c7083f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294c19500c517bad99673ce44637439b109f0fdfd6d9fcf5f1b6480216c7083f->leave($__internal_294c19500c517bad99673ce44637439b109f0fdfd6d9fcf5f1b6480216c7083f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a969dc0bd1e861763e0a5743e9c18a5de7a3969a3f98a70b8b29d29691b26479 = $this->env->getExtension("native_profiler");
        $__internal_a969dc0bd1e861763e0a5743e9c18a5de7a3969a3f98a70b8b29d29691b26479->enter($__internal_a969dc0bd1e861763e0a5743e9c18a5de7a3969a3f98a70b8b29d29691b26479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a969dc0bd1e861763e0a5743e9c18a5de7a3969a3f98a70b8b29d29691b26479->leave($__internal_a969dc0bd1e861763e0a5743e9c18a5de7a3969a3f98a70b8b29d29691b26479_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8b135331d8d0f3d13668b228be736c02d1837b9d1b237f64e2e78dfc55c2c98 = $this->env->getExtension("native_profiler");
        $__internal_e8b135331d8d0f3d13668b228be736c02d1837b9d1b237f64e2e78dfc55c2c98->enter($__internal_e8b135331d8d0f3d13668b228be736c02d1837b9d1b237f64e2e78dfc55c2c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8b135331d8d0f3d13668b228be736c02d1837b9d1b237f64e2e78dfc55c2c98->leave($__internal_e8b135331d8d0f3d13668b228be736c02d1837b9d1b237f64e2e78dfc55c2c98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bf20d0f3a74d0db750fcbab67733c36ef5103fe5ef4246a0a3f01a36b14b4aa = $this->env->getExtension("native_profiler");
        $__internal_2bf20d0f3a74d0db750fcbab67733c36ef5103fe5ef4246a0a3f01a36b14b4aa->enter($__internal_2bf20d0f3a74d0db750fcbab67733c36ef5103fe5ef4246a0a3f01a36b14b4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2bf20d0f3a74d0db750fcbab67733c36ef5103fe5ef4246a0a3f01a36b14b4aa->leave($__internal_2bf20d0f3a74d0db750fcbab67733c36ef5103fe5ef4246a0a3f01a36b14b4aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
