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
        $__internal_1ebb48bd0b5d2639fb922e810e5c0be6a47a2a69512fbf2004ead28fde8fa789 = $this->env->getExtension("native_profiler");
        $__internal_1ebb48bd0b5d2639fb922e810e5c0be6a47a2a69512fbf2004ead28fde8fa789->enter($__internal_1ebb48bd0b5d2639fb922e810e5c0be6a47a2a69512fbf2004ead28fde8fa789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ebb48bd0b5d2639fb922e810e5c0be6a47a2a69512fbf2004ead28fde8fa789->leave($__internal_1ebb48bd0b5d2639fb922e810e5c0be6a47a2a69512fbf2004ead28fde8fa789_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d4281b33f2deceb7cb18e60fc07cb509b7bb1acb49c473cf3d50291e4146d2c6 = $this->env->getExtension("native_profiler");
        $__internal_d4281b33f2deceb7cb18e60fc07cb509b7bb1acb49c473cf3d50291e4146d2c6->enter($__internal_d4281b33f2deceb7cb18e60fc07cb509b7bb1acb49c473cf3d50291e4146d2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_d4281b33f2deceb7cb18e60fc07cb509b7bb1acb49c473cf3d50291e4146d2c6->leave($__internal_d4281b33f2deceb7cb18e60fc07cb509b7bb1acb49c473cf3d50291e4146d2c6_prof);

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
