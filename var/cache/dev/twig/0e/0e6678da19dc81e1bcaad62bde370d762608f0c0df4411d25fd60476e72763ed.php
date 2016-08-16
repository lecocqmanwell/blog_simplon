<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4bdba298de71ee8283feecd2fe604d277be32451c8272e12c7edb9d0256d065d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4cfe83ee299a308891a0f88c4c219320a5cf0750fce4bff74abb2bf067a398e = $this->env->getExtension("native_profiler");
        $__internal_b4cfe83ee299a308891a0f88c4c219320a5cf0750fce4bff74abb2bf067a398e->enter($__internal_b4cfe83ee299a308891a0f88c4c219320a5cf0750fce4bff74abb2bf067a398e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4cfe83ee299a308891a0f88c4c219320a5cf0750fce4bff74abb2bf067a398e->leave($__internal_b4cfe83ee299a308891a0f88c4c219320a5cf0750fce4bff74abb2bf067a398e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ff883161a14a20e9f4fa5330f7535fb8dfa578d4eb435ec50ffbc6a25d77785 = $this->env->getExtension("native_profiler");
        $__internal_9ff883161a14a20e9f4fa5330f7535fb8dfa578d4eb435ec50ffbc6a25d77785->enter($__internal_9ff883161a14a20e9f4fa5330f7535fb8dfa578d4eb435ec50ffbc6a25d77785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9ff883161a14a20e9f4fa5330f7535fb8dfa578d4eb435ec50ffbc6a25d77785->leave($__internal_9ff883161a14a20e9f4fa5330f7535fb8dfa578d4eb435ec50ffbc6a25d77785_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
