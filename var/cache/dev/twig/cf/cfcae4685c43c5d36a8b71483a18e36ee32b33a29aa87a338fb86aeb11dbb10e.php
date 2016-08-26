<?php

/* SRBlogBundle:Article:add.html.twig */
class __TwigTemplate_17dbcf94f6d66c1a0c90082bdf638042813e8f9279defbeabcf83d310e88ea07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Article:add.html.twig", 1);
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
        $__internal_bd9b6b88774976e9e6229b3847f30cdea7053172c1c51272b652c05abd0aa1ae = $this->env->getExtension("native_profiler");
        $__internal_bd9b6b88774976e9e6229b3847f30cdea7053172c1c51272b652c05abd0aa1ae->enter($__internal_bd9b6b88774976e9e6229b3847f30cdea7053172c1c51272b652c05abd0aa1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd9b6b88774976e9e6229b3847f30cdea7053172c1c51272b652c05abd0aa1ae->leave($__internal_bd9b6b88774976e9e6229b3847f30cdea7053172c1c51272b652c05abd0aa1ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd121dd839829e95b38c6eed64000eb67647b19148591501e13279f3f441ca7 = $this->env->getExtension("native_profiler");
        $__internal_1cd121dd839829e95b38c6eed64000eb67647b19148591501e13279f3f441ca7->enter($__internal_1cd121dd839829e95b38c6eed64000eb67647b19148591501e13279f3f441ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1cd121dd839829e95b38c6eed64000eb67647b19148591501e13279f3f441ca7->leave($__internal_1cd121dd839829e95b38c6eed64000eb67647b19148591501e13279f3f441ca7_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_74cd2206c0c761dcac4a78b47fbbdf428ec562c9864a99c21198ecd61a6afc5c = $this->env->getExtension("native_profiler");
        $__internal_74cd2206c0c761dcac4a78b47fbbdf428ec562c9864a99c21198ecd61a6afc5c->enter($__internal_74cd2206c0c761dcac4a78b47fbbdf428ec562c9864a99c21198ecd61a6afc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
    <h2>Ajouter un article</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:Article:form.html.twig");
        echo "

    <p>   Attention : cette article sera ajoutée directement
        sur la page d'accueil après validation du formulaire, sauf si bien-sur vous ne cochez pas la case published...

    </p>
    <p> Si vous ne cochez pas la case Published, il sera enregistré en brouillon (et donc non -publié).</p>

";
        
        $__internal_74cd2206c0c761dcac4a78b47fbbdf428ec562c9864a99c21198ecd61a6afc5c->leave($__internal_74cd2206c0c761dcac4a78b47fbbdf428ec562c9864a99c21198ecd61a6afc5c_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:add.html.twig";
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
/* {% block srarticle_body %}*/
/* */
/*     <h2>Ajouter un article</h2>*/
/* */
/*     {{ include("SRBlogBundle:Article:form.html.twig") }}*/
/* */
/*     <p>   Attention : cette article sera ajoutée directement*/
/*         sur la page d'accueil après validation du formulaire, sauf si bien-sur vous ne cochez pas la case published...*/
/* */
/*     </p>*/
/*     <p> Si vous ne cochez pas la case Published, il sera enregistré en brouillon (et donc non -publié).</p>*/
/* */
/* {% endblock %}*/
