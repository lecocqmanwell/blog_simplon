<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_5fc4c62beec3796df9b98ce8ff3907bbe043ac88e159b47538379113b2176dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a48d49f15c8a4a120b493a5e278febf4e213d9aa335cbd444e1795c639943911 = $this->env->getExtension("native_profiler");
        $__internal_a48d49f15c8a4a120b493a5e278febf4e213d9aa335cbd444e1795c639943911->enter($__internal_a48d49f15c8a4a120b493a5e278febf4e213d9aa335cbd444e1795c639943911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48d49f15c8a4a120b493a5e278febf4e213d9aa335cbd444e1795c639943911->leave($__internal_a48d49f15c8a4a120b493a5e278febf4e213d9aa335cbd444e1795c639943911_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5b6001f2328096e42915ae3ecbc7230f9a492e060286944965ec2a2baed2f3bb = $this->env->getExtension("native_profiler");
        $__internal_5b6001f2328096e42915ae3ecbc7230f9a492e060286944965ec2a2baed2f3bb->enter($__internal_5b6001f2328096e42915ae3ecbc7230f9a492e060286944965ec2a2baed2f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_5b6001f2328096e42915ae3ecbc7230f9a492e060286944965ec2a2baed2f3bb->leave($__internal_5b6001f2328096e42915ae3ecbc7230f9a492e060286944965ec2a2baed2f3bb_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_453461357567da50d1f6ee5782dd130e7736acaf931dac567e4328909c7b1403 = $this->env->getExtension("native_profiler");
        $__internal_453461357567da50d1f6ee5782dd130e7736acaf931dac567e4328909c7b1403->enter($__internal_453461357567da50d1f6ee5782dd130e7736acaf931dac567e4328909c7b1403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_453461357567da50d1f6ee5782dd130e7736acaf931dac567e4328909c7b1403->leave($__internal_453461357567da50d1f6ee5782dd130e7736acaf931dac567e4328909c7b1403_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9478bef2346d56d9db93ec77bc88cf8f90e892a6cf10ec0c05c6b596d126b60 = $this->env->getExtension("native_profiler");
        $__internal_a9478bef2346d56d9db93ec77bc88cf8f90e892a6cf10ec0c05c6b596d126b60->enter($__internal_a9478bef2346d56d9db93ec77bc88cf8f90e892a6cf10ec0c05c6b596d126b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_a9478bef2346d56d9db93ec77bc88cf8f90e892a6cf10ec0c05c6b596d126b60->leave($__internal_a9478bef2346d56d9db93ec77bc88cf8f90e892a6cf10ec0c05c6b596d126b60_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
