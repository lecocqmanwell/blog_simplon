<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_b130aa5d26059ac0caa89f2061e6e42d42d2b444ceff61e70f7c258f4c1d5da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abd7166dfb7957f7d1c7922e284b18af65c767da1d043c3e4a089cff4f7596d6 = $this->env->getExtension("native_profiler");
        $__internal_abd7166dfb7957f7d1c7922e284b18af65c767da1d043c3e4a089cff4f7596d6->enter($__internal_abd7166dfb7957f7d1c7922e284b18af65c767da1d043c3e4a089cff4f7596d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd7166dfb7957f7d1c7922e284b18af65c767da1d043c3e4a089cff4f7596d6->leave($__internal_abd7166dfb7957f7d1c7922e284b18af65c767da1d043c3e4a089cff4f7596d6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_43ad6a7265911039e979ce2c0078601bdf050343fa3854ea8310c4e9ce0b0e4d = $this->env->getExtension("native_profiler");
        $__internal_43ad6a7265911039e979ce2c0078601bdf050343fa3854ea8310c4e9ce0b0e4d->enter($__internal_43ad6a7265911039e979ce2c0078601bdf050343fa3854ea8310c4e9ce0b0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_43ad6a7265911039e979ce2c0078601bdf050343fa3854ea8310c4e9ce0b0e4d->leave($__internal_43ad6a7265911039e979ce2c0078601bdf050343fa3854ea8310c4e9ce0b0e4d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
