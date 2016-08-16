<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_1236581489599b4ce19131e99ca02b44e0f276bfe37856014a09f313dd7afe71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab829d328e3125627196a2d4ac2acf7a1bc319c90609692e328023c24cfa6f29 = $this->env->getExtension("native_profiler");
        $__internal_ab829d328e3125627196a2d4ac2acf7a1bc319c90609692e328023c24cfa6f29->enter($__internal_ab829d328e3125627196a2d4ac2acf7a1bc319c90609692e328023c24cfa6f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab829d328e3125627196a2d4ac2acf7a1bc319c90609692e328023c24cfa6f29->leave($__internal_ab829d328e3125627196a2d4ac2acf7a1bc319c90609692e328023c24cfa6f29_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
