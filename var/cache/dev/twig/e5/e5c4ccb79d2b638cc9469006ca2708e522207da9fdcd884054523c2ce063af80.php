<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_16c346476e5225f811c66085255bf30142b8d1831f4235123ab39336d4428ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_182d29c7653b4c9ed50f07569699cfa08f5800b94f618c24b189e2890ae13b94 = $this->env->getExtension("native_profiler");
        $__internal_182d29c7653b4c9ed50f07569699cfa08f5800b94f618c24b189e2890ae13b94->enter($__internal_182d29c7653b4c9ed50f07569699cfa08f5800b94f618c24b189e2890ae13b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182d29c7653b4c9ed50f07569699cfa08f5800b94f618c24b189e2890ae13b94->leave($__internal_182d29c7653b4c9ed50f07569699cfa08f5800b94f618c24b189e2890ae13b94_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
