<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_43994b53c666a568f68a6e290c56fd5b8e62ec60a0b8f17dd675f8f77bba1748 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c890fc2fb73f699b4d719000fce42d372b280a772817a69027e6a018ee7371 = $this->env->getExtension("native_profiler");
        $__internal_82c890fc2fb73f699b4d719000fce42d372b280a772817a69027e6a018ee7371->enter($__internal_82c890fc2fb73f699b4d719000fce42d372b280a772817a69027e6a018ee7371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c890fc2fb73f699b4d719000fce42d372b280a772817a69027e6a018ee7371->leave($__internal_82c890fc2fb73f699b4d719000fce42d372b280a772817a69027e6a018ee7371_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f74c366cc2899ed24f3f4cd3a8acbdca494ed9d5a2c7a8e689f6eba598da8cbf = $this->env->getExtension("native_profiler");
        $__internal_f74c366cc2899ed24f3f4cd3a8acbdca494ed9d5a2c7a8e689f6eba598da8cbf->enter($__internal_f74c366cc2899ed24f3f4cd3a8acbdca494ed9d5a2c7a8e689f6eba598da8cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_f74c366cc2899ed24f3f4cd3a8acbdca494ed9d5a2c7a8e689f6eba598da8cbf->leave($__internal_f74c366cc2899ed24f3f4cd3a8acbdca494ed9d5a2c7a8e689f6eba598da8cbf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
