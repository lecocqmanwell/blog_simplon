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
        $__internal_9ac11922a27508fb17791a88d32dd48b5d4bb8f5e48364851e168d0e32fb23a6 = $this->env->getExtension("native_profiler");
        $__internal_9ac11922a27508fb17791a88d32dd48b5d4bb8f5e48364851e168d0e32fb23a6->enter($__internal_9ac11922a27508fb17791a88d32dd48b5d4bb8f5e48364851e168d0e32fb23a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac11922a27508fb17791a88d32dd48b5d4bb8f5e48364851e168d0e32fb23a6->leave($__internal_9ac11922a27508fb17791a88d32dd48b5d4bb8f5e48364851e168d0e32fb23a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c52718382a6e887c2a13c2a191788d0dfee358e86cfe45b1c9912595778c4d6 = $this->env->getExtension("native_profiler");
        $__internal_8c52718382a6e887c2a13c2a191788d0dfee358e86cfe45b1c9912595778c4d6->enter($__internal_8c52718382a6e887c2a13c2a191788d0dfee358e86cfe45b1c9912595778c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c52718382a6e887c2a13c2a191788d0dfee358e86cfe45b1c9912595778c4d6->leave($__internal_8c52718382a6e887c2a13c2a191788d0dfee358e86cfe45b1c9912595778c4d6_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_c898dfc8000b4d0ff3b08f1b36b8782591d357246ce0b4da81f21c9647d0576c = $this->env->getExtension("native_profiler");
        $__internal_c898dfc8000b4d0ff3b08f1b36b8782591d357246ce0b4da81f21c9647d0576c->enter($__internal_c898dfc8000b4d0ff3b08f1b36b8782591d357246ce0b4da81f21c9647d0576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 8
        echo "
    <h2>Créer votre compte</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:User:form.html.twig");
        echo "



";
        
        $__internal_c898dfc8000b4d0ff3b08f1b36b8782591d357246ce0b4da81f21c9647d0576c->leave($__internal_c898dfc8000b4d0ff3b08f1b36b8782591d357246ce0b4da81f21c9647d0576c_prof);

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
/*     <h2>Créer votre compte</h2>*/
/* */
/*     {{ include("SRBlogBundle:User:form.html.twig") }}*/
/* */
/* */
/* */
/* {% endblock %}*/
