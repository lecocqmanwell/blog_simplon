<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_5be2049bd78f35bf4f1d6111a1bd14e362dc0e830d316d54cbe5e2bcc54b67c1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172b47eede41ccfee6c7dc0e3cb02380aa9051f5c4ecc23af318236956f28491 = $this->env->getExtension("native_profiler");
        $__internal_172b47eede41ccfee6c7dc0e3cb02380aa9051f5c4ecc23af318236956f28491->enter($__internal_172b47eede41ccfee6c7dc0e3cb02380aa9051f5c4ecc23af318236956f28491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172b47eede41ccfee6c7dc0e3cb02380aa9051f5c4ecc23af318236956f28491->leave($__internal_172b47eede41ccfee6c7dc0e3cb02380aa9051f5c4ecc23af318236956f28491_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4e5af6c4f3c4df099215992345763b6f1e3a51fbcc411ae6ef24ecc5148682b4 = $this->env->getExtension("native_profiler");
        $__internal_4e5af6c4f3c4df099215992345763b6f1e3a51fbcc411ae6ef24ecc5148682b4->enter($__internal_4e5af6c4f3c4df099215992345763b6f1e3a51fbcc411ae6ef24ecc5148682b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4e5af6c4f3c4df099215992345763b6f1e3a51fbcc411ae6ef24ecc5148682b4->leave($__internal_4e5af6c4f3c4df099215992345763b6f1e3a51fbcc411ae6ef24ecc5148682b4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
