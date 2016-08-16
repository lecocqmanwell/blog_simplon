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
        $__internal_e695bab42b6e1eeab9588b35f80ba207198754df4c910b6ca8dd2df3c1b8e195 = $this->env->getExtension("native_profiler");
        $__internal_e695bab42b6e1eeab9588b35f80ba207198754df4c910b6ca8dd2df3c1b8e195->enter($__internal_e695bab42b6e1eeab9588b35f80ba207198754df4c910b6ca8dd2df3c1b8e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e695bab42b6e1eeab9588b35f80ba207198754df4c910b6ca8dd2df3c1b8e195->leave($__internal_e695bab42b6e1eeab9588b35f80ba207198754df4c910b6ca8dd2df3c1b8e195_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c5ff8aa44a727d30190f0cbb7fa6bc38923c0078e6eb298c1677698519102036 = $this->env->getExtension("native_profiler");
        $__internal_c5ff8aa44a727d30190f0cbb7fa6bc38923c0078e6eb298c1677698519102036->enter($__internal_c5ff8aa44a727d30190f0cbb7fa6bc38923c0078e6eb298c1677698519102036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_c5ff8aa44a727d30190f0cbb7fa6bc38923c0078e6eb298c1677698519102036->leave($__internal_c5ff8aa44a727d30190f0cbb7fa6bc38923c0078e6eb298c1677698519102036_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_f40e7cd059b45787dfec4c301a33239d9cf41e13d90b214f1f9446f37c8a9119 = $this->env->getExtension("native_profiler");
        $__internal_f40e7cd059b45787dfec4c301a33239d9cf41e13d90b214f1f9446f37c8a9119->enter($__internal_f40e7cd059b45787dfec4c301a33239d9cf41e13d90b214f1f9446f37c8a9119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_f40e7cd059b45787dfec4c301a33239d9cf41e13d90b214f1f9446f37c8a9119->leave($__internal_f40e7cd059b45787dfec4c301a33239d9cf41e13d90b214f1f9446f37c8a9119_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_ce9dff1ac0732b140fe00baf5214b60503815ca0d1fb26d506da88467aec4b3b = $this->env->getExtension("native_profiler");
        $__internal_ce9dff1ac0732b140fe00baf5214b60503815ca0d1fb26d506da88467aec4b3b->enter($__internal_ce9dff1ac0732b140fe00baf5214b60503815ca0d1fb26d506da88467aec4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ce9dff1ac0732b140fe00baf5214b60503815ca0d1fb26d506da88467aec4b3b->leave($__internal_ce9dff1ac0732b140fe00baf5214b60503815ca0d1fb26d506da88467aec4b3b_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3750b0d5fdf38f974fc1d4a4ef749a0310cef3988a2660b27466d506a5d8bc50 = $this->env->getExtension("native_profiler");
        $__internal_3750b0d5fdf38f974fc1d4a4ef749a0310cef3988a2660b27466d506a5d8bc50->enter($__internal_3750b0d5fdf38f974fc1d4a4ef749a0310cef3988a2660b27466d506a5d8bc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3750b0d5fdf38f974fc1d4a4ef749a0310cef3988a2660b27466d506a5d8bc50->leave($__internal_3750b0d5fdf38f974fc1d4a4ef749a0310cef3988a2660b27466d506a5d8bc50_prof);

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
