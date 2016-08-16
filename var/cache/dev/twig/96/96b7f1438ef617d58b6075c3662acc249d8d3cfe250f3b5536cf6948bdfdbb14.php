<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f212883e7a509f557eab12b5a9db39bcbbd69cb0254a3a8f6090e08f9476e033 extends Twig_Template
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
        $__internal_18c8e52690dc8cf3193a05afcbd48cef57baab08402395ad48dde970bc6624b0 = $this->env->getExtension("native_profiler");
        $__internal_18c8e52690dc8cf3193a05afcbd48cef57baab08402395ad48dde970bc6624b0->enter($__internal_18c8e52690dc8cf3193a05afcbd48cef57baab08402395ad48dde970bc6624b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18c8e52690dc8cf3193a05afcbd48cef57baab08402395ad48dde970bc6624b0->leave($__internal_18c8e52690dc8cf3193a05afcbd48cef57baab08402395ad48dde970bc6624b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
