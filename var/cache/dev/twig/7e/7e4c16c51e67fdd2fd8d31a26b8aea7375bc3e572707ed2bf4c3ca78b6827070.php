<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c91a90f62774bf77b8f2c6081e991a3454b5649e0363b227b6b3a2dab34e8e6d extends Twig_Template
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
        $__internal_05e17f45f453ecd461711295aceee9f9a45c2bb8fa50fa6338b6abea804e212d = $this->env->getExtension("native_profiler");
        $__internal_05e17f45f453ecd461711295aceee9f9a45c2bb8fa50fa6338b6abea804e212d->enter($__internal_05e17f45f453ecd461711295aceee9f9a45c2bb8fa50fa6338b6abea804e212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_05e17f45f453ecd461711295aceee9f9a45c2bb8fa50fa6338b6abea804e212d->leave($__internal_05e17f45f453ecd461711295aceee9f9a45c2bb8fa50fa6338b6abea804e212d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
