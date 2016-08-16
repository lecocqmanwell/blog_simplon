<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_823b6ea66eaa64e43758feb5654a143c55a6c34dba73b4680490c184fe38cc62 extends Twig_Template
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
        $__internal_ece91c3f0b36bd42d4256ca01d825b8cdc5e5b73757d460d8302f6961f2cf675 = $this->env->getExtension("native_profiler");
        $__internal_ece91c3f0b36bd42d4256ca01d825b8cdc5e5b73757d460d8302f6961f2cf675->enter($__internal_ece91c3f0b36bd42d4256ca01d825b8cdc5e5b73757d460d8302f6961f2cf675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ece91c3f0b36bd42d4256ca01d825b8cdc5e5b73757d460d8302f6961f2cf675->leave($__internal_ece91c3f0b36bd42d4256ca01d825b8cdc5e5b73757d460d8302f6961f2cf675_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
