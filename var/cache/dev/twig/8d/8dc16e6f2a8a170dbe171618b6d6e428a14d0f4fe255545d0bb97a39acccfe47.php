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
        $__internal_0b11fda49e6157934d94ed19d8e6e7531e73f21530d471b580f23e6947c72ecd = $this->env->getExtension("native_profiler");
        $__internal_0b11fda49e6157934d94ed19d8e6e7531e73f21530d471b580f23e6947c72ecd->enter($__internal_0b11fda49e6157934d94ed19d8e6e7531e73f21530d471b580f23e6947c72ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b11fda49e6157934d94ed19d8e6e7531e73f21530d471b580f23e6947c72ecd->leave($__internal_0b11fda49e6157934d94ed19d8e6e7531e73f21530d471b580f23e6947c72ecd_prof);

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
