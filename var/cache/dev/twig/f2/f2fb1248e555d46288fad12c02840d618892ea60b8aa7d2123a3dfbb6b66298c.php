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
        $__internal_8a90e7a77a8abef11dc27392d3071d2385db0102f2d843475097ea93b5d815c1 = $this->env->getExtension("native_profiler");
        $__internal_8a90e7a77a8abef11dc27392d3071d2385db0102f2d843475097ea93b5d815c1->enter($__internal_8a90e7a77a8abef11dc27392d3071d2385db0102f2d843475097ea93b5d815c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_8a90e7a77a8abef11dc27392d3071d2385db0102f2d843475097ea93b5d815c1->leave($__internal_8a90e7a77a8abef11dc27392d3071d2385db0102f2d843475097ea93b5d815c1_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_1a01d644ca81682eab4528ee0ed7fb767d206478064b44eeb962e12e3ca11817 = $this->env->getExtension("native_profiler");
        $__internal_1a01d644ca81682eab4528ee0ed7fb767d206478064b44eeb962e12e3ca11817->enter($__internal_1a01d644ca81682eab4528ee0ed7fb767d206478064b44eeb962e12e3ca11817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_1a01d644ca81682eab4528ee0ed7fb767d206478064b44eeb962e12e3ca11817->leave($__internal_1a01d644ca81682eab4528ee0ed7fb767d206478064b44eeb962e12e3ca11817_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_c3855e331bd827370e4bc0bf3641c2c2f483a1f4f4e555947b769e2d64063e6f = $this->env->getExtension("native_profiler");
        $__internal_c3855e331bd827370e4bc0bf3641c2c2f483a1f4f4e555947b769e2d64063e6f->enter($__internal_c3855e331bd827370e4bc0bf3641c2c2f483a1f4f4e555947b769e2d64063e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_c3855e331bd827370e4bc0bf3641c2c2f483a1f4f4e555947b769e2d64063e6f->leave($__internal_c3855e331bd827370e4bc0bf3641c2c2f483a1f4f4e555947b769e2d64063e6f_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5313898df2036a62e8280d8a21664568f1d54b1d91bfa19cfb94a743d29a7d13 = $this->env->getExtension("native_profiler");
        $__internal_5313898df2036a62e8280d8a21664568f1d54b1d91bfa19cfb94a743d29a7d13->enter($__internal_5313898df2036a62e8280d8a21664568f1d54b1d91bfa19cfb94a743d29a7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_5313898df2036a62e8280d8a21664568f1d54b1d91bfa19cfb94a743d29a7d13->leave($__internal_5313898df2036a62e8280d8a21664568f1d54b1d91bfa19cfb94a743d29a7d13_prof);

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
