<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_eabd3f8cd60a20562eb5cc061dff2eb63b377ad6a5f3cd7ff0f176d915c275c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b2ccdca1889eb38d06b6b9cd4b214bd6f49087d36d94280325eb7c48532afb = $this->env->getExtension("native_profiler");
        $__internal_27b2ccdca1889eb38d06b6b9cd4b214bd6f49087d36d94280325eb7c48532afb->enter($__internal_27b2ccdca1889eb38d06b6b9cd4b214bd6f49087d36d94280325eb7c48532afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b2ccdca1889eb38d06b6b9cd4b214bd6f49087d36d94280325eb7c48532afb->leave($__internal_27b2ccdca1889eb38d06b6b9cd4b214bd6f49087d36d94280325eb7c48532afb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
