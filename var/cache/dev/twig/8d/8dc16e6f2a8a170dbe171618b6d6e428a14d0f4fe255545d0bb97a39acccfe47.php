<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_8c5790fb4ffd16272bf91b33317c9774530fa282adeabbe2a30ac2e067d35f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c091105ab9267bb353f85d380736a78c8bede90818342385375f915ccf0c68 = $this->env->getExtension("native_profiler");
        $__internal_49c091105ab9267bb353f85d380736a78c8bede90818342385375f915ccf0c68->enter($__internal_49c091105ab9267bb353f85d380736a78c8bede90818342385375f915ccf0c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c091105ab9267bb353f85d380736a78c8bede90818342385375f915ccf0c68->leave($__internal_49c091105ab9267bb353f85d380736a78c8bede90818342385375f915ccf0c68_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
