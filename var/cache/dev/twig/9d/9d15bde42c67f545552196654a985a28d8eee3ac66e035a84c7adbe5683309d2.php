<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_5be2049bd78f35bf4f1d6111a1bd14e362dc0e830d316d54cbe5e2bcc54b67c1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56abba1dc847c1b34713947e3ff8e2499d6a986a17c13c1b590d25628aa854d = $this->env->getExtension("native_profiler");
        $__internal_c56abba1dc847c1b34713947e3ff8e2499d6a986a17c13c1b590d25628aa854d->enter($__internal_c56abba1dc847c1b34713947e3ff8e2499d6a986a17c13c1b590d25628aa854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56abba1dc847c1b34713947e3ff8e2499d6a986a17c13c1b590d25628aa854d->leave($__internal_c56abba1dc847c1b34713947e3ff8e2499d6a986a17c13c1b590d25628aa854d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_03182a58c5de392806d97aa84aca1f73bff04f307cab08903776ad302ef15304 = $this->env->getExtension("native_profiler");
        $__internal_03182a58c5de392806d97aa84aca1f73bff04f307cab08903776ad302ef15304->enter($__internal_03182a58c5de392806d97aa84aca1f73bff04f307cab08903776ad302ef15304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_03182a58c5de392806d97aa84aca1f73bff04f307cab08903776ad302ef15304->leave($__internal_03182a58c5de392806d97aa84aca1f73bff04f307cab08903776ad302ef15304_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
