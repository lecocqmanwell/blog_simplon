<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8293e9a0c4b3d31c78c44534b2509017c1b9fe05fe48ac790098b2c68faafcca extends Twig_Template
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
        $__internal_042a70cbc67e1fcead77bfb00053ba8a040eb4392e42df8b15dff4457f83ba19 = $this->env->getExtension("native_profiler");
        $__internal_042a70cbc67e1fcead77bfb00053ba8a040eb4392e42df8b15dff4457f83ba19->enter($__internal_042a70cbc67e1fcead77bfb00053ba8a040eb4392e42df8b15dff4457f83ba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_042a70cbc67e1fcead77bfb00053ba8a040eb4392e42df8b15dff4457f83ba19->leave($__internal_042a70cbc67e1fcead77bfb00053ba8a040eb4392e42df8b15dff4457f83ba19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
