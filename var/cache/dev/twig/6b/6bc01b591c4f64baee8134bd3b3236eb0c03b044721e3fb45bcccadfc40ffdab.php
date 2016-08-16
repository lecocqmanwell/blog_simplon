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
        $__internal_3a01b8a4c020526e904490b009e97b6e38161efbcc439089e883a3800bd850ce = $this->env->getExtension("native_profiler");
        $__internal_3a01b8a4c020526e904490b009e97b6e38161efbcc439089e883a3800bd850ce->enter($__internal_3a01b8a4c020526e904490b009e97b6e38161efbcc439089e883a3800bd850ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a01b8a4c020526e904490b009e97b6e38161efbcc439089e883a3800bd850ce->leave($__internal_3a01b8a4c020526e904490b009e97b6e38161efbcc439089e883a3800bd850ce_prof);

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
