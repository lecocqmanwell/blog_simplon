<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_5bc201d3274430e98a1734216cb360a5c777fb886eed806afdfd56663471118c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99136aab1b937e63d1c5f1b6c9ce9cfca110e4764446aeb3156c5a64bced39ee = $this->env->getExtension("native_profiler");
        $__internal_99136aab1b937e63d1c5f1b6c9ce9cfca110e4764446aeb3156c5a64bced39ee->enter($__internal_99136aab1b937e63d1c5f1b6c9ce9cfca110e4764446aeb3156c5a64bced39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99136aab1b937e63d1c5f1b6c9ce9cfca110e4764446aeb3156c5a64bced39ee->leave($__internal_99136aab1b937e63d1c5f1b6c9ce9cfca110e4764446aeb3156c5a64bced39ee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb5b771e595a9decc6ad7293b2931196d449a9b9afab5bc2ad380ac6b953b2f3 = $this->env->getExtension("native_profiler");
        $__internal_eb5b771e595a9decc6ad7293b2931196d449a9b9afab5bc2ad380ac6b953b2f3->enter($__internal_eb5b771e595a9decc6ad7293b2931196d449a9b9afab5bc2ad380ac6b953b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_eb5b771e595a9decc6ad7293b2931196d449a9b9afab5bc2ad380ac6b953b2f3->leave($__internal_eb5b771e595a9decc6ad7293b2931196d449a9b9afab5bc2ad380ac6b953b2f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
