<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a4698393f27d2a2524ea277180c719b1d537493b9b2e7638d308b40d74a858b8 extends Twig_Template
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
        $__internal_e89c3f88572a940cc3687cc1c2357f2df24d518b9f548208b735cad2fc0bffdf = $this->env->getExtension("native_profiler");
        $__internal_e89c3f88572a940cc3687cc1c2357f2df24d518b9f548208b735cad2fc0bffdf->enter($__internal_e89c3f88572a940cc3687cc1c2357f2df24d518b9f548208b735cad2fc0bffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e89c3f88572a940cc3687cc1c2357f2df24d518b9f548208b735cad2fc0bffdf->leave($__internal_e89c3f88572a940cc3687cc1c2357f2df24d518b9f548208b735cad2fc0bffdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
