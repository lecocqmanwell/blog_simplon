<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_3893063314512166e839b23be897e8a4ee12fb1934b0ed831e61adff9340c118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a244190a734f77f9dc2731d535ccff4b340a833ebb770b96a5fe9496e10a67c3 = $this->env->getExtension("native_profiler");
        $__internal_a244190a734f77f9dc2731d535ccff4b340a833ebb770b96a5fe9496e10a67c3->enter($__internal_a244190a734f77f9dc2731d535ccff4b340a833ebb770b96a5fe9496e10a67c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a244190a734f77f9dc2731d535ccff4b340a833ebb770b96a5fe9496e10a67c3->leave($__internal_a244190a734f77f9dc2731d535ccff4b340a833ebb770b96a5fe9496e10a67c3_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_901fa45e43a6742648f07387b97a1725daf345f88d8558c2becc74e9bbb4dfd8 = $this->env->getExtension("native_profiler");
        $__internal_901fa45e43a6742648f07387b97a1725daf345f88d8558c2becc74e9bbb4dfd8->enter($__internal_901fa45e43a6742648f07387b97a1725daf345f88d8558c2becc74e9bbb4dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_901fa45e43a6742648f07387b97a1725daf345f88d8558c2becc74e9bbb4dfd8->leave($__internal_901fa45e43a6742648f07387b97a1725daf345f88d8558c2becc74e9bbb4dfd8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
