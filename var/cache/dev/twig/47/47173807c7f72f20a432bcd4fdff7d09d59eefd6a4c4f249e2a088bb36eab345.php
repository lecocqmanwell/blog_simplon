<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_c876d55bca4a107221beb6e7966402b72ae4c45ffc5cd3935b843279b2c8c1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af5308ac1cb0013666a1832b6b052e9783df2ecc326b076ef9957bb596d4e7b = $this->env->getExtension("native_profiler");
        $__internal_1af5308ac1cb0013666a1832b6b052e9783df2ecc326b076ef9957bb596d4e7b->enter($__internal_1af5308ac1cb0013666a1832b6b052e9783df2ecc326b076ef9957bb596d4e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_1af5308ac1cb0013666a1832b6b052e9783df2ecc326b076ef9957bb596d4e7b->leave($__internal_1af5308ac1cb0013666a1832b6b052e9783df2ecc326b076ef9957bb596d4e7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
