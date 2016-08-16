<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_f4b6b350766a40e7ee545474aefce0f389dcfbcd0ba0f6cb51d296916e1a48d2 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a92e7acddf35d5c9fed11c3dcd6bff56e7803c02187ba8831cd9a25f78c41360 = $this->env->getExtension("native_profiler");
        $__internal_a92e7acddf35d5c9fed11c3dcd6bff56e7803c02187ba8831cd9a25f78c41360->enter($__internal_a92e7acddf35d5c9fed11c3dcd6bff56e7803c02187ba8831cd9a25f78c41360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92e7acddf35d5c9fed11c3dcd6bff56e7803c02187ba8831cd9a25f78c41360->leave($__internal_a92e7acddf35d5c9fed11c3dcd6bff56e7803c02187ba8831cd9a25f78c41360_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
