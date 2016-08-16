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
        $__internal_a22a552a91a82a59e9742ef22fabcd3322e3279418f6bcce42b0ce7358f9bc68 = $this->env->getExtension("native_profiler");
        $__internal_a22a552a91a82a59e9742ef22fabcd3322e3279418f6bcce42b0ce7358f9bc68->enter($__internal_a22a552a91a82a59e9742ef22fabcd3322e3279418f6bcce42b0ce7358f9bc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22a552a91a82a59e9742ef22fabcd3322e3279418f6bcce42b0ce7358f9bc68->leave($__internal_a22a552a91a82a59e9742ef22fabcd3322e3279418f6bcce42b0ce7358f9bc68_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_de3da2f05a595f64c359ca467bb24d3962c3af73898206b6561d0016be7ddc07 = $this->env->getExtension("native_profiler");
        $__internal_de3da2f05a595f64c359ca467bb24d3962c3af73898206b6561d0016be7ddc07->enter($__internal_de3da2f05a595f64c359ca467bb24d3962c3af73898206b6561d0016be7ddc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_de3da2f05a595f64c359ca467bb24d3962c3af73898206b6561d0016be7ddc07->leave($__internal_de3da2f05a595f64c359ca467bb24d3962c3af73898206b6561d0016be7ddc07_prof);

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
