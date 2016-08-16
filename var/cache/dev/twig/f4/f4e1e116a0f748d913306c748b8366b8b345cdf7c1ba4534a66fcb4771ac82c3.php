<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_981fec5fed8acc26b95c984be612a37ebb566f851d886086f70ef2d282de9f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_442d44214bea75573eac07a3832625fe11d283ae708be1beddd1cab380333143 = $this->env->getExtension("native_profiler");
        $__internal_442d44214bea75573eac07a3832625fe11d283ae708be1beddd1cab380333143->enter($__internal_442d44214bea75573eac07a3832625fe11d283ae708be1beddd1cab380333143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442d44214bea75573eac07a3832625fe11d283ae708be1beddd1cab380333143->leave($__internal_442d44214bea75573eac07a3832625fe11d283ae708be1beddd1cab380333143_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9be9d1761a104a345b90b363b87edb21e16bcae6e03b5b038401421c2f587038 = $this->env->getExtension("native_profiler");
        $__internal_9be9d1761a104a345b90b363b87edb21e16bcae6e03b5b038401421c2f587038->enter($__internal_9be9d1761a104a345b90b363b87edb21e16bcae6e03b5b038401421c2f587038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9be9d1761a104a345b90b363b87edb21e16bcae6e03b5b038401421c2f587038->leave($__internal_9be9d1761a104a345b90b363b87edb21e16bcae6e03b5b038401421c2f587038_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
