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
        $__internal_4a678b711ce1346c445c273a910bb4f6e370869cad9b0fdae7f218814e250c0f = $this->env->getExtension("native_profiler");
        $__internal_4a678b711ce1346c445c273a910bb4f6e370869cad9b0fdae7f218814e250c0f->enter($__internal_4a678b711ce1346c445c273a910bb4f6e370869cad9b0fdae7f218814e250c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4a678b711ce1346c445c273a910bb4f6e370869cad9b0fdae7f218814e250c0f->leave($__internal_4a678b711ce1346c445c273a910bb4f6e370869cad9b0fdae7f218814e250c0f_prof);

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
