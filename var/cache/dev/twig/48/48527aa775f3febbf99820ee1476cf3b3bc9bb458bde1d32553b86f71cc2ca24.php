<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_915a36ef045b0e9f7c87b3b88b22364c2d0951c4a3d8bf265b905109ac79494f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e53a6d8f0d67079c1dcd315bff34f32a6da629f78bbfa780ce1815531238b5c = $this->env->getExtension("native_profiler");
        $__internal_8e53a6d8f0d67079c1dcd315bff34f32a6da629f78bbfa780ce1815531238b5c->enter($__internal_8e53a6d8f0d67079c1dcd315bff34f32a6da629f78bbfa780ce1815531238b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e53a6d8f0d67079c1dcd315bff34f32a6da629f78bbfa780ce1815531238b5c->leave($__internal_8e53a6d8f0d67079c1dcd315bff34f32a6da629f78bbfa780ce1815531238b5c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4782e9ef0a1604f8f36821489f415de407950d8b3c4fa9d5c0ea54544fa93b69 = $this->env->getExtension("native_profiler");
        $__internal_4782e9ef0a1604f8f36821489f415de407950d8b3c4fa9d5c0ea54544fa93b69->enter($__internal_4782e9ef0a1604f8f36821489f415de407950d8b3c4fa9d5c0ea54544fa93b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_4782e9ef0a1604f8f36821489f415de407950d8b3c4fa9d5c0ea54544fa93b69->leave($__internal_4782e9ef0a1604f8f36821489f415de407950d8b3c4fa9d5c0ea54544fa93b69_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
