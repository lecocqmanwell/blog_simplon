<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c75ed8d2dddcd92e8749e49d8294832e0d76b0821fbfc2e40ceff40088800cd2 extends Twig_Template
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
        $__internal_f9dcbfe7217e06b734f7aa027b3fb7795dadb17a070ec65e5b18f8f6e90f6742 = $this->env->getExtension("native_profiler");
        $__internal_f9dcbfe7217e06b734f7aa027b3fb7795dadb17a070ec65e5b18f8f6e90f6742->enter($__internal_f9dcbfe7217e06b734f7aa027b3fb7795dadb17a070ec65e5b18f8f6e90f6742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9dcbfe7217e06b734f7aa027b3fb7795dadb17a070ec65e5b18f8f6e90f6742->leave($__internal_f9dcbfe7217e06b734f7aa027b3fb7795dadb17a070ec65e5b18f8f6e90f6742_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91f621a4f32f11a8ce943f6eb1d40116ebf028c580096f2c90fb0b71f72b5240 = $this->env->getExtension("native_profiler");
        $__internal_91f621a4f32f11a8ce943f6eb1d40116ebf028c580096f2c90fb0b71f72b5240->enter($__internal_91f621a4f32f11a8ce943f6eb1d40116ebf028c580096f2c90fb0b71f72b5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91f621a4f32f11a8ce943f6eb1d40116ebf028c580096f2c90fb0b71f72b5240->leave($__internal_91f621a4f32f11a8ce943f6eb1d40116ebf028c580096f2c90fb0b71f72b5240_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90cc336fd9a9143d46ab1fa2c9793b365abee5cb3a7834cb1ccb1fe9abf5a8f9 = $this->env->getExtension("native_profiler");
        $__internal_90cc336fd9a9143d46ab1fa2c9793b365abee5cb3a7834cb1ccb1fe9abf5a8f9->enter($__internal_90cc336fd9a9143d46ab1fa2c9793b365abee5cb3a7834cb1ccb1fe9abf5a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_90cc336fd9a9143d46ab1fa2c9793b365abee5cb3a7834cb1ccb1fe9abf5a8f9->leave($__internal_90cc336fd9a9143d46ab1fa2c9793b365abee5cb3a7834cb1ccb1fe9abf5a8f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a9c224d742f72e934d49b0afccc2c50d5816713cb1ad9234ad06776dbfc2aa6 = $this->env->getExtension("native_profiler");
        $__internal_1a9c224d742f72e934d49b0afccc2c50d5816713cb1ad9234ad06776dbfc2aa6->enter($__internal_1a9c224d742f72e934d49b0afccc2c50d5816713cb1ad9234ad06776dbfc2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a9c224d742f72e934d49b0afccc2c50d5816713cb1ad9234ad06776dbfc2aa6->leave($__internal_1a9c224d742f72e934d49b0afccc2c50d5816713cb1ad9234ad06776dbfc2aa6_prof);

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
