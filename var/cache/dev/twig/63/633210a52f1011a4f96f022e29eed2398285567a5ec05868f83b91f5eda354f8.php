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
        $__internal_598585d1277ea8320c18c8f3e85861028fa521aa88fb32ee98eafedf7bd7e0ea = $this->env->getExtension("native_profiler");
        $__internal_598585d1277ea8320c18c8f3e85861028fa521aa88fb32ee98eafedf7bd7e0ea->enter($__internal_598585d1277ea8320c18c8f3e85861028fa521aa88fb32ee98eafedf7bd7e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598585d1277ea8320c18c8f3e85861028fa521aa88fb32ee98eafedf7bd7e0ea->leave($__internal_598585d1277ea8320c18c8f3e85861028fa521aa88fb32ee98eafedf7bd7e0ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_573e94303cc71adecf51e504426a53a13183cb4dc7d9cb76a9ceab32d5e13519 = $this->env->getExtension("native_profiler");
        $__internal_573e94303cc71adecf51e504426a53a13183cb4dc7d9cb76a9ceab32d5e13519->enter($__internal_573e94303cc71adecf51e504426a53a13183cb4dc7d9cb76a9ceab32d5e13519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_573e94303cc71adecf51e504426a53a13183cb4dc7d9cb76a9ceab32d5e13519->leave($__internal_573e94303cc71adecf51e504426a53a13183cb4dc7d9cb76a9ceab32d5e13519_prof);

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
