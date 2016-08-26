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
        $__internal_8be452e28b46ef4a0e430ecee0d07aa70f896c3d9f8c925da7611406d5e06415 = $this->env->getExtension("native_profiler");
        $__internal_8be452e28b46ef4a0e430ecee0d07aa70f896c3d9f8c925da7611406d5e06415->enter($__internal_8be452e28b46ef4a0e430ecee0d07aa70f896c3d9f8c925da7611406d5e06415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be452e28b46ef4a0e430ecee0d07aa70f896c3d9f8c925da7611406d5e06415->leave($__internal_8be452e28b46ef4a0e430ecee0d07aa70f896c3d9f8c925da7611406d5e06415_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b9ae524237aa429df66eaf76bc78c0ede39adb0fb1a79167ba9c8847a7b5c85a = $this->env->getExtension("native_profiler");
        $__internal_b9ae524237aa429df66eaf76bc78c0ede39adb0fb1a79167ba9c8847a7b5c85a->enter($__internal_b9ae524237aa429df66eaf76bc78c0ede39adb0fb1a79167ba9c8847a7b5c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_b9ae524237aa429df66eaf76bc78c0ede39adb0fb1a79167ba9c8847a7b5c85a->leave($__internal_b9ae524237aa429df66eaf76bc78c0ede39adb0fb1a79167ba9c8847a7b5c85a_prof);

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
