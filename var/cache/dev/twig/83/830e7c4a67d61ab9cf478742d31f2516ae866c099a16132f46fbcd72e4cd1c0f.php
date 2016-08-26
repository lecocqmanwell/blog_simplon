<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_90fdf572ff5eb9eaf84c544250bd37f2fdc27ba4827c827a86cdf5ebea3cd494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edfcc6ffc847b03afe9a32ad5ef4b5549ef7f276fbd0c0cc22c36c23c05e692d = $this->env->getExtension("native_profiler");
        $__internal_edfcc6ffc847b03afe9a32ad5ef4b5549ef7f276fbd0c0cc22c36c23c05e692d->enter($__internal_edfcc6ffc847b03afe9a32ad5ef4b5549ef7f276fbd0c0cc22c36c23c05e692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfcc6ffc847b03afe9a32ad5ef4b5549ef7f276fbd0c0cc22c36c23c05e692d->leave($__internal_edfcc6ffc847b03afe9a32ad5ef4b5549ef7f276fbd0c0cc22c36c23c05e692d_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_d4e835d1ab4a33674f12b57415e4db78d9e4ab0d1a16bc9bdfc71cae7110709f = $this->env->getExtension("native_profiler");
        $__internal_d4e835d1ab4a33674f12b57415e4db78d9e4ab0d1a16bc9bdfc71cae7110709f->enter($__internal_d4e835d1ab4a33674f12b57415e4db78d9e4ab0d1a16bc9bdfc71cae7110709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_d4e835d1ab4a33674f12b57415e4db78d9e4ab0d1a16bc9bdfc71cae7110709f->leave($__internal_d4e835d1ab4a33674f12b57415e4db78d9e4ab0d1a16bc9bdfc71cae7110709f_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_7df15ef17351ed895f31c1475a366f43148329da21d54675528de4162ba1989a = $this->env->getExtension("native_profiler");
        $__internal_7df15ef17351ed895f31c1475a366f43148329da21d54675528de4162ba1989a->enter($__internal_7df15ef17351ed895f31c1475a366f43148329da21d54675528de4162ba1989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_7df15ef17351ed895f31c1475a366f43148329da21d54675528de4162ba1989a->leave($__internal_7df15ef17351ed895f31c1475a366f43148329da21d54675528de4162ba1989a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
