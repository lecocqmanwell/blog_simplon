<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_c82fafbb291a7cce19eab76465a23def4b46f197e9e304c5150c2f63786c0ad1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_820b6875cbc6e383da9958eb3736b6b3eae13ffb7ee0225ea6f3e575da887071 = $this->env->getExtension("native_profiler");
        $__internal_820b6875cbc6e383da9958eb3736b6b3eae13ffb7ee0225ea6f3e575da887071->enter($__internal_820b6875cbc6e383da9958eb3736b6b3eae13ffb7ee0225ea6f3e575da887071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_820b6875cbc6e383da9958eb3736b6b3eae13ffb7ee0225ea6f3e575da887071->leave($__internal_820b6875cbc6e383da9958eb3736b6b3eae13ffb7ee0225ea6f3e575da887071_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8bd45f87314ea339eac6724a1a837f2d34c0fae96660ae730e5ef32654947c2b = $this->env->getExtension("native_profiler");
        $__internal_8bd45f87314ea339eac6724a1a837f2d34c0fae96660ae730e5ef32654947c2b->enter($__internal_8bd45f87314ea339eac6724a1a837f2d34c0fae96660ae730e5ef32654947c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8bd45f87314ea339eac6724a1a837f2d34c0fae96660ae730e5ef32654947c2b->leave($__internal_8bd45f87314ea339eac6724a1a837f2d34c0fae96660ae730e5ef32654947c2b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
