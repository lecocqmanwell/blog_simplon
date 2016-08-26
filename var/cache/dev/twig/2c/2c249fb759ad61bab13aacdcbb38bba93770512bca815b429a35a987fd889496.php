<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_045d465b6f580e6cf296cc667eae11a7781b1ac3ad2279c9d2f8372af4c9d982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edd92e02286010e74245371a94d93134ba66e14242ab4851d408442398d3bb0d = $this->env->getExtension("native_profiler");
        $__internal_edd92e02286010e74245371a94d93134ba66e14242ab4851d408442398d3bb0d->enter($__internal_edd92e02286010e74245371a94d93134ba66e14242ab4851d408442398d3bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_edd92e02286010e74245371a94d93134ba66e14242ab4851d408442398d3bb0d->leave($__internal_edd92e02286010e74245371a94d93134ba66e14242ab4851d408442398d3bb0d_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_b5988df86725fe4e222f330ee57f6b5988350828a832a8c49595d14c01e1a1d6 = $this->env->getExtension("native_profiler");
        $__internal_b5988df86725fe4e222f330ee57f6b5988350828a832a8c49595d14c01e1a1d6->enter($__internal_b5988df86725fe4e222f330ee57f6b5988350828a832a8c49595d14c01e1a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_b5988df86725fe4e222f330ee57f6b5988350828a832a8c49595d14c01e1a1d6->leave($__internal_b5988df86725fe4e222f330ee57f6b5988350828a832a8c49595d14c01e1a1d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
