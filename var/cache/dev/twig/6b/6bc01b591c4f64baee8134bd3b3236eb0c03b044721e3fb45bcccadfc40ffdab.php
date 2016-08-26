<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6ac97ef1635980bd8c02b2f7e02ba52368c85a11b80b8ccf8adc3944820e6cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90315e568845ef7977f998f49d429002f2352dd1beb51851d01b19991610d3a8 = $this->env->getExtension("native_profiler");
        $__internal_90315e568845ef7977f998f49d429002f2352dd1beb51851d01b19991610d3a8->enter($__internal_90315e568845ef7977f998f49d429002f2352dd1beb51851d01b19991610d3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_90315e568845ef7977f998f49d429002f2352dd1beb51851d01b19991610d3a8->leave($__internal_90315e568845ef7977f998f49d429002f2352dd1beb51851d01b19991610d3a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
