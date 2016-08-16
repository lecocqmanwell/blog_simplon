<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_2761578adb8604753eceabb8e81151241e35eba18080b67e4f528975aac4c966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e499770848c7437cd1ef7556e8022a0d7f33e4c9d4406e43802dab45aed4fb17 = $this->env->getExtension("native_profiler");
        $__internal_e499770848c7437cd1ef7556e8022a0d7f33e4c9d4406e43802dab45aed4fb17->enter($__internal_e499770848c7437cd1ef7556e8022a0d7f33e4c9d4406e43802dab45aed4fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e499770848c7437cd1ef7556e8022a0d7f33e4c9d4406e43802dab45aed4fb17->leave($__internal_e499770848c7437cd1ef7556e8022a0d7f33e4c9d4406e43802dab45aed4fb17_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8eb133a56f7593b884a3dcb9c8337413b32a89ed095253e3e4e4a52942ee6904 = $this->env->getExtension("native_profiler");
        $__internal_8eb133a56f7593b884a3dcb9c8337413b32a89ed095253e3e4e4a52942ee6904->enter($__internal_8eb133a56f7593b884a3dcb9c8337413b32a89ed095253e3e4e4a52942ee6904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_8eb133a56f7593b884a3dcb9c8337413b32a89ed095253e3e4e4a52942ee6904->leave($__internal_8eb133a56f7593b884a3dcb9c8337413b32a89ed095253e3e4e4a52942ee6904_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
