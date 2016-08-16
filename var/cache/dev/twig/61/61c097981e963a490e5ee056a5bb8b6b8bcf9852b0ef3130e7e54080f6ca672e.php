<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0e195428afdf3743292599ce415795ea7421d73051635e971a786e80681885de extends Twig_Template
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
        $__internal_85e90d7b0cc4f59ddaba8e6db2d7be62d1d12b2cc074eda5fdba40c7d213758a = $this->env->getExtension("native_profiler");
        $__internal_85e90d7b0cc4f59ddaba8e6db2d7be62d1d12b2cc074eda5fdba40c7d213758a->enter($__internal_85e90d7b0cc4f59ddaba8e6db2d7be62d1d12b2cc074eda5fdba40c7d213758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_85e90d7b0cc4f59ddaba8e6db2d7be62d1d12b2cc074eda5fdba40c7d213758a->leave($__internal_85e90d7b0cc4f59ddaba8e6db2d7be62d1d12b2cc074eda5fdba40c7d213758a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
