<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_68e0e36ae0c3ad7e363dbdd55b64d31602709bfe030a115d686be4427058785b extends Twig_Template
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
        $__internal_d80e61d31808603a890e22aec420847ec90c190f25430efa084daa1ade820d97 = $this->env->getExtension("native_profiler");
        $__internal_d80e61d31808603a890e22aec420847ec90c190f25430efa084daa1ade820d97->enter($__internal_d80e61d31808603a890e22aec420847ec90c190f25430efa084daa1ade820d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d80e61d31808603a890e22aec420847ec90c190f25430efa084daa1ade820d97->leave($__internal_d80e61d31808603a890e22aec420847ec90c190f25430efa084daa1ade820d97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
