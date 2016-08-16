<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5bbc9158e61c5e6d127ec8bee24e10011830a1909eb588ea423d66d9468a2289 extends Twig_Template
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
        $__internal_b12808c88a0ef7152c95729c4af3975a404ba8ac3873551c05f6899c379add6e = $this->env->getExtension("native_profiler");
        $__internal_b12808c88a0ef7152c95729c4af3975a404ba8ac3873551c05f6899c379add6e->enter($__internal_b12808c88a0ef7152c95729c4af3975a404ba8ac3873551c05f6899c379add6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b12808c88a0ef7152c95729c4af3975a404ba8ac3873551c05f6899c379add6e->leave($__internal_b12808c88a0ef7152c95729c4af3975a404ba8ac3873551c05f6899c379add6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
