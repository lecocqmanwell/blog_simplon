<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_5ecde3c08f698237034667be33bc9bcb5c8db414bb7154cd58fd29a5b9d0e512 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a1d40aa11d7d59e3bc27d74c0ea441713dd2ab1b85f8870bdcfabe36c94501d = $this->env->getExtension("native_profiler");
        $__internal_6a1d40aa11d7d59e3bc27d74c0ea441713dd2ab1b85f8870bdcfabe36c94501d->enter($__internal_6a1d40aa11d7d59e3bc27d74c0ea441713dd2ab1b85f8870bdcfabe36c94501d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1d40aa11d7d59e3bc27d74c0ea441713dd2ab1b85f8870bdcfabe36c94501d->leave($__internal_6a1d40aa11d7d59e3bc27d74c0ea441713dd2ab1b85f8870bdcfabe36c94501d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3580a19f8c35a31545df2e46f87b54e85d2de5dd6197ac705c1cf6cb691cc596 = $this->env->getExtension("native_profiler");
        $__internal_3580a19f8c35a31545df2e46f87b54e85d2de5dd6197ac705c1cf6cb691cc596->enter($__internal_3580a19f8c35a31545df2e46f87b54e85d2de5dd6197ac705c1cf6cb691cc596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3580a19f8c35a31545df2e46f87b54e85d2de5dd6197ac705c1cf6cb691cc596->leave($__internal_3580a19f8c35a31545df2e46f87b54e85d2de5dd6197ac705c1cf6cb691cc596_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
