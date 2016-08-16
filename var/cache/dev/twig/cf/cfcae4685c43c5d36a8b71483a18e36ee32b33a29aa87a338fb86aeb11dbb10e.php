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
        $__internal_ca073596b066911ee2edefc7dd3c98c09bc35a72c7369a3824c0d6b34b504182 = $this->env->getExtension("native_profiler");
        $__internal_ca073596b066911ee2edefc7dd3c98c09bc35a72c7369a3824c0d6b34b504182->enter($__internal_ca073596b066911ee2edefc7dd3c98c09bc35a72c7369a3824c0d6b34b504182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca073596b066911ee2edefc7dd3c98c09bc35a72c7369a3824c0d6b34b504182->leave($__internal_ca073596b066911ee2edefc7dd3c98c09bc35a72c7369a3824c0d6b34b504182_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77cc2f62df561b994a7f5873e3c626de21addb7be1238ca81ea43a9237b98943 = $this->env->getExtension("native_profiler");
        $__internal_77cc2f62df561b994a7f5873e3c626de21addb7be1238ca81ea43a9237b98943->enter($__internal_77cc2f62df561b994a7f5873e3c626de21addb7be1238ca81ea43a9237b98943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77cc2f62df561b994a7f5873e3c626de21addb7be1238ca81ea43a9237b98943->leave($__internal_77cc2f62df561b994a7f5873e3c626de21addb7be1238ca81ea43a9237b98943_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_3012e7508e0c4940da2621f377a8c970651b5f03b0c0ffd5fa2891aaca03758d = $this->env->getExtension("native_profiler");
        $__internal_3012e7508e0c4940da2621f377a8c970651b5f03b0c0ffd5fa2891aaca03758d->enter($__internal_3012e7508e0c4940da2621f377a8c970651b5f03b0c0ffd5fa2891aaca03758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
    <h2>Ajouter un article</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:Article:form.html.twig");
        echo "

    <p>   Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_3012e7508e0c4940da2621f377a8c970651b5f03b0c0ffd5fa2891aaca03758d->leave($__internal_3012e7508e0c4940da2621f377a8c970651b5f03b0c0ffd5fa2891aaca03758d_prof);

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
/*     <p>   Attention : cette annonce sera ajoutée directement*/
/*         sur la page d'accueil après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
