<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_5b9d099759f1c98da66d28e9ccb1d65faee48c87bab0b730ceea67a7af4c34ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c5647e6e8ed7ae9200f600c88688cd90d644aa96e508f4b2be26db815ee1078 = $this->env->getExtension("native_profiler");
        $__internal_2c5647e6e8ed7ae9200f600c88688cd90d644aa96e508f4b2be26db815ee1078->enter($__internal_2c5647e6e8ed7ae9200f600c88688cd90d644aa96e508f4b2be26db815ee1078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5647e6e8ed7ae9200f600c88688cd90d644aa96e508f4b2be26db815ee1078->leave($__internal_2c5647e6e8ed7ae9200f600c88688cd90d644aa96e508f4b2be26db815ee1078_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
