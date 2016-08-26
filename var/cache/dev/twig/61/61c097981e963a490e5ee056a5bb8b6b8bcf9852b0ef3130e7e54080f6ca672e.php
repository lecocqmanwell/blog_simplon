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
        $__internal_e7b259bbd73908d7c6e8148fc80fe791e0adacc58cd2994ff8c7497c4b880ba5 = $this->env->getExtension("native_profiler");
        $__internal_e7b259bbd73908d7c6e8148fc80fe791e0adacc58cd2994ff8c7497c4b880ba5->enter($__internal_e7b259bbd73908d7c6e8148fc80fe791e0adacc58cd2994ff8c7497c4b880ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e7b259bbd73908d7c6e8148fc80fe791e0adacc58cd2994ff8c7497c4b880ba5->leave($__internal_e7b259bbd73908d7c6e8148fc80fe791e0adacc58cd2994ff8c7497c4b880ba5_prof);

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
