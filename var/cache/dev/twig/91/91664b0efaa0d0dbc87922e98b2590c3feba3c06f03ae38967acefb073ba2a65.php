<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_07633adf5ae2dd175090fcea80bf4b648d7bd1bd1713bf398c96906e36bda35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_686e9ee7a184f6e74c7f0d080c1ade194edb86fdf01ab463766c5532390fdfe2 = $this->env->getExtension("native_profiler");
        $__internal_686e9ee7a184f6e74c7f0d080c1ade194edb86fdf01ab463766c5532390fdfe2->enter($__internal_686e9ee7a184f6e74c7f0d080c1ade194edb86fdf01ab463766c5532390fdfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686e9ee7a184f6e74c7f0d080c1ade194edb86fdf01ab463766c5532390fdfe2->leave($__internal_686e9ee7a184f6e74c7f0d080c1ade194edb86fdf01ab463766c5532390fdfe2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
