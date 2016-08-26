<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_bdf030fa725921a4591eeab8a155a0be61ab1038c43099849b235b71b506b74f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0bf3940cc5280275291f0c871a2965bbf0dd2816f6ff4203f0de8d8c13a6a0 = $this->env->getExtension("native_profiler");
        $__internal_6d0bf3940cc5280275291f0c871a2965bbf0dd2816f6ff4203f0de8d8c13a6a0->enter($__internal_6d0bf3940cc5280275291f0c871a2965bbf0dd2816f6ff4203f0de8d8c13a6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0bf3940cc5280275291f0c871a2965bbf0dd2816f6ff4203f0de8d8c13a6a0->leave($__internal_6d0bf3940cc5280275291f0c871a2965bbf0dd2816f6ff4203f0de8d8c13a6a0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d31d46aeb2f81842d4852260ea48b67aa3650eb139e8dd4e2f6741f7858f09b5 = $this->env->getExtension("native_profiler");
        $__internal_d31d46aeb2f81842d4852260ea48b67aa3650eb139e8dd4e2f6741f7858f09b5->enter($__internal_d31d46aeb2f81842d4852260ea48b67aa3650eb139e8dd4e2f6741f7858f09b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_d31d46aeb2f81842d4852260ea48b67aa3650eb139e8dd4e2f6741f7858f09b5->leave($__internal_d31d46aeb2f81842d4852260ea48b67aa3650eb139e8dd4e2f6741f7858f09b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field%}*/
/*     {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}*/
/*     {% set valueFormat = field_description.options.format|default('%s') %}*/
/* */
/*     {{valueFormat|format(value)|trans({}, translationDomain)}}*/
/* {% endblock %}*/
/* */
