<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_68204e024d71e406c15c3b31b13628fb515f99734d318ab63e1852f5c9a2bea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b59db1832a05d22d54f30dbb600109e0fa4c11af7adbd1bd0f1accdecee3fadf = $this->env->getExtension("native_profiler");
        $__internal_b59db1832a05d22d54f30dbb600109e0fa4c11af7adbd1bd0f1accdecee3fadf->enter($__internal_b59db1832a05d22d54f30dbb600109e0fa4c11af7adbd1bd0f1accdecee3fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59db1832a05d22d54f30dbb600109e0fa4c11af7adbd1bd0f1accdecee3fadf->leave($__internal_b59db1832a05d22d54f30dbb600109e0fa4c11af7adbd1bd0f1accdecee3fadf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
