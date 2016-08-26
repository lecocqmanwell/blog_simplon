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
        $__internal_ad5cb9ca2ea86b3ee98749927b1bc57530d2824d0a7dc42b77205431bcfd555c = $this->env->getExtension("native_profiler");
        $__internal_ad5cb9ca2ea86b3ee98749927b1bc57530d2824d0a7dc42b77205431bcfd555c->enter($__internal_ad5cb9ca2ea86b3ee98749927b1bc57530d2824d0a7dc42b77205431bcfd555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5cb9ca2ea86b3ee98749927b1bc57530d2824d0a7dc42b77205431bcfd555c->leave($__internal_ad5cb9ca2ea86b3ee98749927b1bc57530d2824d0a7dc42b77205431bcfd555c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_827a6523f18cd1bcb6b7dad1164affe93927bdf515ea6e8d7e2dfe6522c6a65a = $this->env->getExtension("native_profiler");
        $__internal_827a6523f18cd1bcb6b7dad1164affe93927bdf515ea6e8d7e2dfe6522c6a65a->enter($__internal_827a6523f18cd1bcb6b7dad1164affe93927bdf515ea6e8d7e2dfe6522c6a65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_827a6523f18cd1bcb6b7dad1164affe93927bdf515ea6e8d7e2dfe6522c6a65a->leave($__internal_827a6523f18cd1bcb6b7dad1164affe93927bdf515ea6e8d7e2dfe6522c6a65a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_aca5b410d7bfc306514eb0d933eae381524ab22e0487d7a98e309dbaad72b0d9 = $this->env->getExtension("native_profiler");
        $__internal_aca5b410d7bfc306514eb0d933eae381524ab22e0487d7a98e309dbaad72b0d9->enter($__internal_aca5b410d7bfc306514eb0d933eae381524ab22e0487d7a98e309dbaad72b0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_aca5b410d7bfc306514eb0d933eae381524ab22e0487d7a98e309dbaad72b0d9->leave($__internal_aca5b410d7bfc306514eb0d933eae381524ab22e0487d7a98e309dbaad72b0d9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_7fb61357650c520a8419849b8d6addd0e63058ef1777b7fae9ad4e909e157a18 = $this->env->getExtension("native_profiler");
        $__internal_7fb61357650c520a8419849b8d6addd0e63058ef1777b7fae9ad4e909e157a18->enter($__internal_7fb61357650c520a8419849b8d6addd0e63058ef1777b7fae9ad4e909e157a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_7fb61357650c520a8419849b8d6addd0e63058ef1777b7fae9ad4e909e157a18->leave($__internal_7fb61357650c520a8419849b8d6addd0e63058ef1777b7fae9ad4e909e157a18_prof);

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
