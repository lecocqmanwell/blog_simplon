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
        $__internal_4400554bd62cbaf861beb52bea5e576f15f51e1cceeed69268be294243932bf3 = $this->env->getExtension("native_profiler");
        $__internal_4400554bd62cbaf861beb52bea5e576f15f51e1cceeed69268be294243932bf3->enter($__internal_4400554bd62cbaf861beb52bea5e576f15f51e1cceeed69268be294243932bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4400554bd62cbaf861beb52bea5e576f15f51e1cceeed69268be294243932bf3->leave($__internal_4400554bd62cbaf861beb52bea5e576f15f51e1cceeed69268be294243932bf3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9187a1c1732cb1bf5376213adbb83b19e7f5007052b80205a94e2ca5cab97207 = $this->env->getExtension("native_profiler");
        $__internal_9187a1c1732cb1bf5376213adbb83b19e7f5007052b80205a94e2ca5cab97207->enter($__internal_9187a1c1732cb1bf5376213adbb83b19e7f5007052b80205a94e2ca5cab97207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9187a1c1732cb1bf5376213adbb83b19e7f5007052b80205a94e2ca5cab97207->leave($__internal_9187a1c1732cb1bf5376213adbb83b19e7f5007052b80205a94e2ca5cab97207_prof);

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
