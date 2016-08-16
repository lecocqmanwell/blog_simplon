<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_451deaccc20a3a0e9f33acd440c5238005b636fd73a241ab289187a3d42bbf7b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc5f152255a58112d77b696a8914d6b049b4fd515c06026556201f1382fef5ff = $this->env->getExtension("native_profiler");
        $__internal_dc5f152255a58112d77b696a8914d6b049b4fd515c06026556201f1382fef5ff->enter($__internal_dc5f152255a58112d77b696a8914d6b049b4fd515c06026556201f1382fef5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5f152255a58112d77b696a8914d6b049b4fd515c06026556201f1382fef5ff->leave($__internal_dc5f152255a58112d77b696a8914d6b049b4fd515c06026556201f1382fef5ff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fa445e1fb3810b37604377ebd095a058be6272968140e18daa6a6ef320eb9a1 = $this->env->getExtension("native_profiler");
        $__internal_9fa445e1fb3810b37604377ebd095a058be6272968140e18daa6a6ef320eb9a1->enter($__internal_9fa445e1fb3810b37604377ebd095a058be6272968140e18daa6a6ef320eb9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9fa445e1fb3810b37604377ebd095a058be6272968140e18daa6a6ef320eb9a1->leave($__internal_9fa445e1fb3810b37604377ebd095a058be6272968140e18daa6a6ef320eb9a1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
