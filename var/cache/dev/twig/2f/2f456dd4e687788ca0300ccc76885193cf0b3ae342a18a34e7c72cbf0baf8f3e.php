<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_680450eed9dc9b1828538e0618aa37f6f43b1a15aa0d2d71bf0c135ad5a71fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0714b15825865399233a5413efd9f395bd4592d78a20f746a075cca48c5a7741 = $this->env->getExtension("native_profiler");
        $__internal_0714b15825865399233a5413efd9f395bd4592d78a20f746a075cca48c5a7741->enter($__internal_0714b15825865399233a5413efd9f395bd4592d78a20f746a075cca48c5a7741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0714b15825865399233a5413efd9f395bd4592d78a20f746a075cca48c5a7741->leave($__internal_0714b15825865399233a5413efd9f395bd4592d78a20f746a075cca48c5a7741_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f183415feccff8b4fd8840bb833c0b27e2a3203c69c50311ab1bebe29f7b5a36 = $this->env->getExtension("native_profiler");
        $__internal_f183415feccff8b4fd8840bb833c0b27e2a3203c69c50311ab1bebe29f7b5a36->enter($__internal_f183415feccff8b4fd8840bb833c0b27e2a3203c69c50311ab1bebe29f7b5a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_f183415feccff8b4fd8840bb833c0b27e2a3203c69c50311ab1bebe29f7b5a36->leave($__internal_f183415feccff8b4fd8840bb833c0b27e2a3203c69c50311ab1bebe29f7b5a36_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_04b7bcee0becda8a5ce6d3f0b781149a9e63f4e3a935d614a70e5409a0bc2a10 = $this->env->getExtension("native_profiler");
        $__internal_04b7bcee0becda8a5ce6d3f0b781149a9e63f4e3a935d614a70e5409a0bc2a10->enter($__internal_04b7bcee0becda8a5ce6d3f0b781149a9e63f4e3a935d614a70e5409a0bc2a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_04b7bcee0becda8a5ce6d3f0b781149a9e63f4e3a935d614a70e5409a0bc2a10->leave($__internal_04b7bcee0becda8a5ce6d3f0b781149a9e63f4e3a935d614a70e5409a0bc2a10_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_1103835503fe4b0ce47b91d42e7ca9a13beaeef664f3ce572bc16f5d9f9fa012 = $this->env->getExtension("native_profiler");
        $__internal_1103835503fe4b0ce47b91d42e7ca9a13beaeef664f3ce572bc16f5d9f9fa012->enter($__internal_1103835503fe4b0ce47b91d42e7ca9a13beaeef664f3ce572bc16f5d9f9fa012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_1103835503fe4b0ce47b91d42e7ca9a13beaeef664f3ce572bc16f5d9f9fa012->leave($__internal_1103835503fe4b0ce47b91d42e7ca9a13beaeef664f3ce572bc16f5d9f9fa012_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_c97b78d80d9ad392467073a01ffd9d372dfb9e52f09fd609cfedeeba72909bfc = $this->env->getExtension("native_profiler");
        $__internal_c97b78d80d9ad392467073a01ffd9d372dfb9e52f09fd609cfedeeba72909bfc->enter($__internal_c97b78d80d9ad392467073a01ffd9d372dfb9e52f09fd609cfedeeba72909bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c97b78d80d9ad392467073a01ffd9d372dfb9e52f09fd609cfedeeba72909bfc->leave($__internal_c97b78d80d9ad392467073a01ffd9d372dfb9e52f09fd609cfedeeba72909bfc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
