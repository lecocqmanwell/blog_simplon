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
        $__internal_fa0145735e010e623d15c294b394c39025df7e304d552e2ed5166d1821654346 = $this->env->getExtension("native_profiler");
        $__internal_fa0145735e010e623d15c294b394c39025df7e304d552e2ed5166d1821654346->enter($__internal_fa0145735e010e623d15c294b394c39025df7e304d552e2ed5166d1821654346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_fa0145735e010e623d15c294b394c39025df7e304d552e2ed5166d1821654346->leave($__internal_fa0145735e010e623d15c294b394c39025df7e304d552e2ed5166d1821654346_prof);

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
