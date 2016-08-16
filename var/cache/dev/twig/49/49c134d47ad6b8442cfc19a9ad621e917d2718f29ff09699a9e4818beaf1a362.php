<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_5bc201d3274430e98a1734216cb360a5c777fb886eed806afdfd56663471118c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb97ab57278fec59b6713a18e7d3ce509fd42cf30b7bea4861b0f361234c65c1 = $this->env->getExtension("native_profiler");
        $__internal_bb97ab57278fec59b6713a18e7d3ce509fd42cf30b7bea4861b0f361234c65c1->enter($__internal_bb97ab57278fec59b6713a18e7d3ce509fd42cf30b7bea4861b0f361234c65c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb97ab57278fec59b6713a18e7d3ce509fd42cf30b7bea4861b0f361234c65c1->leave($__internal_bb97ab57278fec59b6713a18e7d3ce509fd42cf30b7bea4861b0f361234c65c1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f4e313d01a85ac8ba99d129043a44aa426650725858caad3b551b404b1c56a6a = $this->env->getExtension("native_profiler");
        $__internal_f4e313d01a85ac8ba99d129043a44aa426650725858caad3b551b404b1c56a6a->enter($__internal_f4e313d01a85ac8ba99d129043a44aa426650725858caad3b551b404b1c56a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f4e313d01a85ac8ba99d129043a44aa426650725858caad3b551b404b1c56a6a->leave($__internal_f4e313d01a85ac8ba99d129043a44aa426650725858caad3b551b404b1c56a6a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
