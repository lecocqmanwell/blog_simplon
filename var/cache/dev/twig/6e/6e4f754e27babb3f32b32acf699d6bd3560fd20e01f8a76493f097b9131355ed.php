<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_13fe53f97cdcb6091c0631c0366a0e9358d98c419de58c23778a12453f935420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_1926ca8e0e99226e71e7e486122ab8bfb76d1e94a404e274f8672f75dbf67bb2 = $this->env->getExtension("native_profiler");
        $__internal_1926ca8e0e99226e71e7e486122ab8bfb76d1e94a404e274f8672f75dbf67bb2->enter($__internal_1926ca8e0e99226e71e7e486122ab8bfb76d1e94a404e274f8672f75dbf67bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1926ca8e0e99226e71e7e486122ab8bfb76d1e94a404e274f8672f75dbf67bb2->leave($__internal_1926ca8e0e99226e71e7e486122ab8bfb76d1e94a404e274f8672f75dbf67bb2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f02154915d24effa9209af962caa2ca7f97bd891c2c41e4eee0e4d52e33d60f = $this->env->getExtension("native_profiler");
        $__internal_3f02154915d24effa9209af962caa2ca7f97bd891c2c41e4eee0e4d52e33d60f->enter($__internal_3f02154915d24effa9209af962caa2ca7f97bd891c2c41e4eee0e4d52e33d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_3f02154915d24effa9209af962caa2ca7f97bd891c2c41e4eee0e4d52e33d60f->leave($__internal_3f02154915d24effa9209af962caa2ca7f97bd891c2c41e4eee0e4d52e33d60f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
