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
        $__internal_e99d65a2a629f2986201a88744d2eb43c98a96940f9bde8a48cc8ba40ff1fdb1 = $this->env->getExtension("native_profiler");
        $__internal_e99d65a2a629f2986201a88744d2eb43c98a96940f9bde8a48cc8ba40ff1fdb1->enter($__internal_e99d65a2a629f2986201a88744d2eb43c98a96940f9bde8a48cc8ba40ff1fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99d65a2a629f2986201a88744d2eb43c98a96940f9bde8a48cc8ba40ff1fdb1->leave($__internal_e99d65a2a629f2986201a88744d2eb43c98a96940f9bde8a48cc8ba40ff1fdb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_999e52cb1c2030088d2d0b6d4c6c5df5a9f19ca9034e247813c987c359ddec67 = $this->env->getExtension("native_profiler");
        $__internal_999e52cb1c2030088d2d0b6d4c6c5df5a9f19ca9034e247813c987c359ddec67->enter($__internal_999e52cb1c2030088d2d0b6d4c6c5df5a9f19ca9034e247813c987c359ddec67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Modifer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_999e52cb1c2030088d2d0b6d4c6c5df5a9f19ca9034e247813c987c359ddec67->leave($__internal_999e52cb1c2030088d2d0b6d4c6c5df5a9f19ca9034e247813c987c359ddec67_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_b0e5d0046bb04aa1ad9c30d8a4d0c298caa7abda52fb041e96101165c3903742 = $this->env->getExtension("native_profiler");
        $__internal_b0e5d0046bb04aa1ad9c30d8a4d0c298caa7abda52fb041e96101165c3903742->enter($__internal_b0e5d0046bb04aa1ad9c30d8a4d0c298caa7abda52fb041e96101165c3903742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

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
        
        $__internal_b0e5d0046bb04aa1ad9c30d8a4d0c298caa7abda52fb041e96101165c3903742->leave($__internal_b0e5d0046bb04aa1ad9c30d8a4d0c298caa7abda52fb041e96101165c3903742_prof);

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
