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
        $__internal_fd2d3b5a1bead883f72fad48557e78474a642a32a916a04a03f214e2205001f2 = $this->env->getExtension("native_profiler");
        $__internal_fd2d3b5a1bead883f72fad48557e78474a642a32a916a04a03f214e2205001f2->enter($__internal_fd2d3b5a1bead883f72fad48557e78474a642a32a916a04a03f214e2205001f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fd2d3b5a1bead883f72fad48557e78474a642a32a916a04a03f214e2205001f2->leave($__internal_fd2d3b5a1bead883f72fad48557e78474a642a32a916a04a03f214e2205001f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dffca73db44b3f58d373705654810038273faf7b2f9a508241bd962a967aa727 = $this->env->getExtension("native_profiler");
        $__internal_dffca73db44b3f58d373705654810038273faf7b2f9a508241bd962a967aa727->enter($__internal_dffca73db44b3f58d373705654810038273faf7b2f9a508241bd962a967aa727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dffca73db44b3f58d373705654810038273faf7b2f9a508241bd962a967aa727->leave($__internal_dffca73db44b3f58d373705654810038273faf7b2f9a508241bd962a967aa727_prof);

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
