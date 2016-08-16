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
        $__internal_a2a63ea5a1bb5fb205bfc947e2f731ef3265d7f6873907cc50afe5cadf6a9708 = $this->env->getExtension("native_profiler");
        $__internal_a2a63ea5a1bb5fb205bfc947e2f731ef3265d7f6873907cc50afe5cadf6a9708->enter($__internal_a2a63ea5a1bb5fb205bfc947e2f731ef3265d7f6873907cc50afe5cadf6a9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a63ea5a1bb5fb205bfc947e2f731ef3265d7f6873907cc50afe5cadf6a9708->leave($__internal_a2a63ea5a1bb5fb205bfc947e2f731ef3265d7f6873907cc50afe5cadf6a9708_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce55d1f65e3a2e686fd21520940deb1e30158368ffd8c03651d7aade85951d64 = $this->env->getExtension("native_profiler");
        $__internal_ce55d1f65e3a2e686fd21520940deb1e30158368ffd8c03651d7aade85951d64->enter($__internal_ce55d1f65e3a2e686fd21520940deb1e30158368ffd8c03651d7aade85951d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_ce55d1f65e3a2e686fd21520940deb1e30158368ffd8c03651d7aade85951d64->leave($__internal_ce55d1f65e3a2e686fd21520940deb1e30158368ffd8c03651d7aade85951d64_prof);

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
