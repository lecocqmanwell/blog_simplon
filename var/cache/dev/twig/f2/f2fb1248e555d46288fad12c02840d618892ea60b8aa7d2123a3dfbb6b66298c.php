<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_6bfcef5611f17df8756d4ffc940a38cb1418458e8e08fab6525de08aec211f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccb54efe3c5351115d18eb8e7cd849a1fec73cc829506baa5349a94e60b1fbbe = $this->env->getExtension("native_profiler");
        $__internal_ccb54efe3c5351115d18eb8e7cd849a1fec73cc829506baa5349a94e60b1fbbe->enter($__internal_ccb54efe3c5351115d18eb8e7cd849a1fec73cc829506baa5349a94e60b1fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_ccb54efe3c5351115d18eb8e7cd849a1fec73cc829506baa5349a94e60b1fbbe->leave($__internal_ccb54efe3c5351115d18eb8e7cd849a1fec73cc829506baa5349a94e60b1fbbe_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_d0d35a7bc69b4316620326350aa46d71839b6051dda536aa39bf2afae3b7601a = $this->env->getExtension("native_profiler");
        $__internal_d0d35a7bc69b4316620326350aa46d71839b6051dda536aa39bf2afae3b7601a->enter($__internal_d0d35a7bc69b4316620326350aa46d71839b6051dda536aa39bf2afae3b7601a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_d0d35a7bc69b4316620326350aa46d71839b6051dda536aa39bf2afae3b7601a->leave($__internal_d0d35a7bc69b4316620326350aa46d71839b6051dda536aa39bf2afae3b7601a_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_8505566d48f38d08c5291d134860173383a3c856b74bd696daeb41d9249e5c53 = $this->env->getExtension("native_profiler");
        $__internal_8505566d48f38d08c5291d134860173383a3c856b74bd696daeb41d9249e5c53->enter($__internal_8505566d48f38d08c5291d134860173383a3c856b74bd696daeb41d9249e5c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_8505566d48f38d08c5291d134860173383a3c856b74bd696daeb41d9249e5c53->leave($__internal_8505566d48f38d08c5291d134860173383a3c856b74bd696daeb41d9249e5c53_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_77016117944769d6e801e2d32fb6f570fd3b1ca810d9a67f31d91344ff480342 = $this->env->getExtension("native_profiler");
        $__internal_77016117944769d6e801e2d32fb6f570fd3b1ca810d9a67f31d91344ff480342->enter($__internal_77016117944769d6e801e2d32fb6f570fd3b1ca810d9a67f31d91344ff480342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_77016117944769d6e801e2d32fb6f570fd3b1ca810d9a67f31d91344ff480342->leave($__internal_77016117944769d6e801e2d32fb6f570fd3b1ca810d9a67f31d91344ff480342_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
