<?php

/* SRBlogBundle:User:edit.html.twig */
class __TwigTemplate_3f94724a430fbde069814aeed93ef8f03aaedefc372496da9fe87144c2668aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:edit.html.twig", 1);
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
        $__internal_e3325c92e100288107d0883ddb46a95ddd9ab878b907b3ea19489b67c7716d1e = $this->env->getExtension("native_profiler");
        $__internal_e3325c92e100288107d0883ddb46a95ddd9ab878b907b3ea19489b67c7716d1e->enter($__internal_e3325c92e100288107d0883ddb46a95ddd9ab878b907b3ea19489b67c7716d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3325c92e100288107d0883ddb46a95ddd9ab878b907b3ea19489b67c7716d1e->leave($__internal_e3325c92e100288107d0883ddb46a95ddd9ab878b907b3ea19489b67c7716d1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a47a78dbb746868551396648d9c83d6b65e788fd1c233f89da99cfe0f7131d = $this->env->getExtension("native_profiler");
        $__internal_39a47a78dbb746868551396648d9c83d6b65e788fd1c233f89da99cfe0f7131d->enter($__internal_39a47a78dbb746868551396648d9c83d6b65e788fd1c233f89da99cfe0f7131d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Modifer un utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39a47a78dbb746868551396648d9c83d6b65e788fd1c233f89da99cfe0f7131d->leave($__internal_39a47a78dbb746868551396648d9c83d6b65e788fd1c233f89da99cfe0f7131d_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_b9d2993ddeee8d2ca45d2a2d77c00da15ad77dfa52a5c52993e329280aa7a512 = $this->env->getExtension("native_profiler");
        $__internal_b9d2993ddeee8d2ca45d2a2d77c00da15ad77dfa52a5c52993e329280aa7a512->enter($__internal_b9d2993ddeee8d2ca45d2a2d77c00da15ad77dfa52a5c52993e329280aa7a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 8
        echo "
    <h2>Modifier un article</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:User:form.html.twig");
        echo "

    <p>   Attention : cette annonce sera modifié directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_b9d2993ddeee8d2ca45d2a2d77c00da15ad77dfa52a5c52993e329280aa7a512->leave($__internal_b9d2993ddeee8d2ca45d2a2d77c00da15ad77dfa52a5c52993e329280aa7a512_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:edit.html.twig";
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
/*    Modifer un utilisateur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sruser_body %}*/
/* */
/*     <h2>Modifier un article</h2>*/
/* */
/*     {{ include("SRBlogBundle:User:form.html.twig") }}*/
/* */
/*     <p>   Attention : cette annonce sera modifié directement*/
/*         sur la page d'accueil après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
