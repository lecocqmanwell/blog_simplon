<?php

/* SRBlogBundle:Article:edit.html.twig */
class __TwigTemplate_a8a9d331827387455ead2cd12800e3e2a31a150a21207f0f78c00c738a160ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Article:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'srarticle_body' => array($this, 'block_srarticle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SRBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_857312dff7f7288bf365ccc97b2239bba0a8ae6d67f2eb8600b81faa68ee2dba = $this->env->getExtension("native_profiler");
        $__internal_857312dff7f7288bf365ccc97b2239bba0a8ae6d67f2eb8600b81faa68ee2dba->enter($__internal_857312dff7f7288bf365ccc97b2239bba0a8ae6d67f2eb8600b81faa68ee2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857312dff7f7288bf365ccc97b2239bba0a8ae6d67f2eb8600b81faa68ee2dba->leave($__internal_857312dff7f7288bf365ccc97b2239bba0a8ae6d67f2eb8600b81faa68ee2dba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd406c6162a12c25b795188e25e24c46d9dbcef73b64cb4e2d57ee02a93879cb = $this->env->getExtension("native_profiler");
        $__internal_bd406c6162a12c25b795188e25e24c46d9dbcef73b64cb4e2d57ee02a93879cb->enter($__internal_bd406c6162a12c25b795188e25e24c46d9dbcef73b64cb4e2d57ee02a93879cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Modifer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd406c6162a12c25b795188e25e24c46d9dbcef73b64cb4e2d57ee02a93879cb->leave($__internal_bd406c6162a12c25b795188e25e24c46d9dbcef73b64cb4e2d57ee02a93879cb_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_27fe11052fff02434e14fd6728732c8e7d4ee8b86483c3790aaa7b09226f0a88 = $this->env->getExtension("native_profiler");
        $__internal_27fe11052fff02434e14fd6728732c8e7d4ee8b86483c3790aaa7b09226f0a88->enter($__internal_27fe11052fff02434e14fd6728732c8e7d4ee8b86483c3790aaa7b09226f0a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
    <h2>Modifier un article</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:Article:form.html.twig");
        echo "

    <p>   Attention : cette annonce sera modifié directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_27fe11052fff02434e14fd6728732c8e7d4ee8b86483c3790aaa7b09226f0a88->leave($__internal_27fe11052fff02434e14fd6728732c8e7d4ee8b86483c3790aaa7b09226f0a88_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:edit.html.twig";
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
/*    Modifer un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block srarticle_body %}*/
/* */
/*     <h2>Modifier un article</h2>*/
/* */
/*     {{ include("SRBlogBundle:Article:form.html.twig") }}*/
/* */
/*     <p>   Attention : cette annonce sera modifié directement*/
/*         sur la page d'accueil après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
