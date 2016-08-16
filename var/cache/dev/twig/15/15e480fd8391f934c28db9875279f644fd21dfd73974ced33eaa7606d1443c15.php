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
        $__internal_8564f2730520950bb6c3e5f6a49f379abf7cea557972015d3f2879e8d15428ad = $this->env->getExtension("native_profiler");
        $__internal_8564f2730520950bb6c3e5f6a49f379abf7cea557972015d3f2879e8d15428ad->enter($__internal_8564f2730520950bb6c3e5f6a49f379abf7cea557972015d3f2879e8d15428ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8564f2730520950bb6c3e5f6a49f379abf7cea557972015d3f2879e8d15428ad->leave($__internal_8564f2730520950bb6c3e5f6a49f379abf7cea557972015d3f2879e8d15428ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_241e5375e3202715783e745e14e18ce9031ca6808e155d4661d859e96097d3d0 = $this->env->getExtension("native_profiler");
        $__internal_241e5375e3202715783e745e14e18ce9031ca6808e155d4661d859e96097d3d0->enter($__internal_241e5375e3202715783e745e14e18ce9031ca6808e155d4661d859e96097d3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_241e5375e3202715783e745e14e18ce9031ca6808e155d4661d859e96097d3d0->leave($__internal_241e5375e3202715783e745e14e18ce9031ca6808e155d4661d859e96097d3d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41640ab01d8d989069a1c5c0b78917de5cd39f49983eb0d78c3dc5e1d0bd9afb = $this->env->getExtension("native_profiler");
        $__internal_41640ab01d8d989069a1c5c0b78917de5cd39f49983eb0d78c3dc5e1d0bd9afb->enter($__internal_41640ab01d8d989069a1c5c0b78917de5cd39f49983eb0d78c3dc5e1d0bd9afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41640ab01d8d989069a1c5c0b78917de5cd39f49983eb0d78c3dc5e1d0bd9afb->leave($__internal_41640ab01d8d989069a1c5c0b78917de5cd39f49983eb0d78c3dc5e1d0bd9afb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1d1a5f76e8d6117ef2ae5f5282f2dd5214373caa772dc509a3c667faa507f89 = $this->env->getExtension("native_profiler");
        $__internal_d1d1a5f76e8d6117ef2ae5f5282f2dd5214373caa772dc509a3c667faa507f89->enter($__internal_d1d1a5f76e8d6117ef2ae5f5282f2dd5214373caa772dc509a3c667faa507f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1d1a5f76e8d6117ef2ae5f5282f2dd5214373caa772dc509a3c667faa507f89->leave($__internal_d1d1a5f76e8d6117ef2ae5f5282f2dd5214373caa772dc509a3c667faa507f89_prof);

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
