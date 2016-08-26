<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_8dc6df48892f93f4e1259573ff5127cffd91df7bc908ea7042a69be8f65e902a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68e39bae0b434c127a12d06a915f96ecc6aa7f5f070e79bce3b8a1fabb433486 = $this->env->getExtension("native_profiler");
        $__internal_68e39bae0b434c127a12d06a915f96ecc6aa7f5f070e79bce3b8a1fabb433486->enter($__internal_68e39bae0b434c127a12d06a915f96ecc6aa7f5f070e79bce3b8a1fabb433486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e39bae0b434c127a12d06a915f96ecc6aa7f5f070e79bce3b8a1fabb433486->leave($__internal_68e39bae0b434c127a12d06a915f96ecc6aa7f5f070e79bce3b8a1fabb433486_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c04b558d9aad2008d97563a6386378aed60dc8b0233be9962c93a994261d0ce5 = $this->env->getExtension("native_profiler");
        $__internal_c04b558d9aad2008d97563a6386378aed60dc8b0233be9962c93a994261d0ce5->enter($__internal_c04b558d9aad2008d97563a6386378aed60dc8b0233be9962c93a994261d0ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c04b558d9aad2008d97563a6386378aed60dc8b0233be9962c93a994261d0ce5->leave($__internal_c04b558d9aad2008d97563a6386378aed60dc8b0233be9962c93a994261d0ce5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
