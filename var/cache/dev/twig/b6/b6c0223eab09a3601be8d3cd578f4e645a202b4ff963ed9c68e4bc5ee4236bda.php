<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_061320b85facd091ea3cc694d218cd47758b6a74810cd2c483f8da967c672dc4 extends Twig_Template
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
        $__internal_3acea88d0364192256edd8960b6de19843c6675c95219a849fba4be4ccde9c4f = $this->env->getExtension("native_profiler");
        $__internal_3acea88d0364192256edd8960b6de19843c6675c95219a849fba4be4ccde9c4f->enter($__internal_3acea88d0364192256edd8960b6de19843c6675c95219a849fba4be4ccde9c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3acea88d0364192256edd8960b6de19843c6675c95219a849fba4be4ccde9c4f->leave($__internal_3acea88d0364192256edd8960b6de19843c6675c95219a849fba4be4ccde9c4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
