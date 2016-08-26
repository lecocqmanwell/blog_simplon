<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_da470754c7a73fbd19357cf769f7caad7fc1e80fd089bfb7ddb1365f093316e4 extends Twig_Template
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
        $__internal_ef431c04d4d68e4ee99bacbcb2fd2a5bbf6f79b3a13ed5f33dd0cd659cc2ba79 = $this->env->getExtension("native_profiler");
        $__internal_ef431c04d4d68e4ee99bacbcb2fd2a5bbf6f79b3a13ed5f33dd0cd659cc2ba79->enter($__internal_ef431c04d4d68e4ee99bacbcb2fd2a5bbf6f79b3a13ed5f33dd0cd659cc2ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ef431c04d4d68e4ee99bacbcb2fd2a5bbf6f79b3a13ed5f33dd0cd659cc2ba79->leave($__internal_ef431c04d4d68e4ee99bacbcb2fd2a5bbf6f79b3a13ed5f33dd0cd659cc2ba79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
