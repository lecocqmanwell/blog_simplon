<?php

/* SRBlogBundle:User:add.html.twig */
class __TwigTemplate_93102acf4d1c3e4d0397f5203133a74e505de3732ad0de30e58be34545bda175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sruser_body' => array($this, 'block_sruser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SRBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70cb8862ae256aa290fb33311d665aec63b1dc59114a9e54ced1db8dd9360728 = $this->env->getExtension("native_profiler");
        $__internal_70cb8862ae256aa290fb33311d665aec63b1dc59114a9e54ced1db8dd9360728->enter($__internal_70cb8862ae256aa290fb33311d665aec63b1dc59114a9e54ced1db8dd9360728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70cb8862ae256aa290fb33311d665aec63b1dc59114a9e54ced1db8dd9360728->leave($__internal_70cb8862ae256aa290fb33311d665aec63b1dc59114a9e54ced1db8dd9360728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c317ec5936b02748e8ea817681e544119036abbadc3cb9b0a52ea7dd365d17d6 = $this->env->getExtension("native_profiler");
        $__internal_c317ec5936b02748e8ea817681e544119036abbadc3cb9b0a52ea7dd365d17d6->enter($__internal_c317ec5936b02748e8ea817681e544119036abbadc3cb9b0a52ea7dd365d17d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c317ec5936b02748e8ea817681e544119036abbadc3cb9b0a52ea7dd365d17d6->leave($__internal_c317ec5936b02748e8ea817681e544119036abbadc3cb9b0a52ea7dd365d17d6_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_d728c61ee73883e37fd4382614a6c7fbc3e291eeb5b847fc3e69d937f0e4baae = $this->env->getExtension("native_profiler");
        $__internal_d728c61ee73883e37fd4382614a6c7fbc3e291eeb5b847fc3e69d937f0e4baae->enter($__internal_d728c61ee73883e37fd4382614a6c7fbc3e291eeb5b847fc3e69d937f0e4baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 8
        echo "
    <h2>Ajouter un user</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:User:form.html.twig");
        echo "

    <p>   Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_d728c61ee73883e37fd4382614a6c7fbc3e291eeb5b847fc3e69d937f0e4baae->leave($__internal_d728c61ee73883e37fd4382614a6c7fbc3e291eeb5b847fc3e69d937f0e4baae_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Ajouter un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sruser_body %}*/
/* */
/*     <h2>Ajouter un user</h2>*/
/* */
/*     {{ include("SRBlogBundle:User:form.html.twig") }}*/
/* */
/*     <p>   Attention : cette annonce sera ajoutée directement*/
/*         sur la page d'accueil après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
