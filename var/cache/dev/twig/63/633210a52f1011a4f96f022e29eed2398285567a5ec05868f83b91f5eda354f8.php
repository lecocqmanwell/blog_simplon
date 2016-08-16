<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_f699a5e02d64030674a6ca449624564f00b4814d33144877026e97ee551cdeff extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09765f1e5dd9c3cd9c3597896171778fb5f7fb373acfc5b48f7e037bf7d1ad20 = $this->env->getExtension("native_profiler");
        $__internal_09765f1e5dd9c3cd9c3597896171778fb5f7fb373acfc5b48f7e037bf7d1ad20->enter($__internal_09765f1e5dd9c3cd9c3597896171778fb5f7fb373acfc5b48f7e037bf7d1ad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09765f1e5dd9c3cd9c3597896171778fb5f7fb373acfc5b48f7e037bf7d1ad20->leave($__internal_09765f1e5dd9c3cd9c3597896171778fb5f7fb373acfc5b48f7e037bf7d1ad20_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b10c58fff8368d47139d257c37dc03d9ebc3107a9b93809158392c358ffab2e3 = $this->env->getExtension("native_profiler");
        $__internal_b10c58fff8368d47139d257c37dc03d9ebc3107a9b93809158392c358ffab2e3->enter($__internal_b10c58fff8368d47139d257c37dc03d9ebc3107a9b93809158392c358ffab2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_b10c58fff8368d47139d257c37dc03d9ebc3107a9b93809158392c358ffab2e3->leave($__internal_b10c58fff8368d47139d257c37dc03d9ebc3107a9b93809158392c358ffab2e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
