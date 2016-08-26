<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_451deaccc20a3a0e9f33acd440c5238005b636fd73a241ab289187a3d42bbf7b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c90fef26c9f456fcd686af8a5fed75df7358414496363898e7169cbecd1d4f9 = $this->env->getExtension("native_profiler");
        $__internal_7c90fef26c9f456fcd686af8a5fed75df7358414496363898e7169cbecd1d4f9->enter($__internal_7c90fef26c9f456fcd686af8a5fed75df7358414496363898e7169cbecd1d4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c90fef26c9f456fcd686af8a5fed75df7358414496363898e7169cbecd1d4f9->leave($__internal_7c90fef26c9f456fcd686af8a5fed75df7358414496363898e7169cbecd1d4f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_62c2f6a93da28acab1eb06e99ed4c0ccd0910d26fb72eba910fc946935112c6a = $this->env->getExtension("native_profiler");
        $__internal_62c2f6a93da28acab1eb06e99ed4c0ccd0910d26fb72eba910fc946935112c6a->enter($__internal_62c2f6a93da28acab1eb06e99ed4c0ccd0910d26fb72eba910fc946935112c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_62c2f6a93da28acab1eb06e99ed4c0ccd0910d26fb72eba910fc946935112c6a->leave($__internal_62c2f6a93da28acab1eb06e99ed4c0ccd0910d26fb72eba910fc946935112c6a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
