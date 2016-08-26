<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_f885280361f0b027ca09c0d36b4c1f89490c65a69d1f4d9d83be46a96c548d8d extends Twig_Template
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
        $__internal_e702276ccd3bca10fbb520058af725668eca5792fede255c65f74660b1d7eada = $this->env->getExtension("native_profiler");
        $__internal_e702276ccd3bca10fbb520058af725668eca5792fede255c65f74660b1d7eada->enter($__internal_e702276ccd3bca10fbb520058af725668eca5792fede255c65f74660b1d7eada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e702276ccd3bca10fbb520058af725668eca5792fede255c65f74660b1d7eada->leave($__internal_e702276ccd3bca10fbb520058af725668eca5792fede255c65f74660b1d7eada_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
