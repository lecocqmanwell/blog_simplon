<?php

/* SRBlogBundle::layout.html.twig */
class __TwigTemplate_07c4f6c5361f107181a9b86cd15b73b11a2c23043f8f251fea7de12c3050b586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SRBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'srarticle_body' => array($this, 'block_srarticle_body'),
            'sruser_body' => array($this, 'block_sruser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb05aa33abce3d2c28ca111a4c2ccdd648d94913fb37f070e6cdd5e9f740048a = $this->env->getExtension("native_profiler");
        $__internal_fb05aa33abce3d2c28ca111a4c2ccdd648d94913fb37f070e6cdd5e9f740048a->enter($__internal_fb05aa33abce3d2c28ca111a4c2ccdd648d94913fb37f070e6cdd5e9f740048a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb05aa33abce3d2c28ca111a4c2ccdd648d94913fb37f070e6cdd5e9f740048a->leave($__internal_fb05aa33abce3d2c28ca111a4c2ccdd648d94913fb37f070e6cdd5e9f740048a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a388eca06618a755e9fb9b3e6a4fd4d16c40e03829a081929955a6e13b80930 = $this->env->getExtension("native_profiler");
        $__internal_7a388eca06618a755e9fb9b3e6a4fd4d16c40e03829a081929955a6e13b80930->enter($__internal_7a388eca06618a755e9fb9b3e6a4fd4d16c40e03829a081929955a6e13b80930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a388eca06618a755e9fb9b3e6a4fd4d16c40e03829a081929955a6e13b80930->leave($__internal_7a388eca06618a755e9fb9b3e6a4fd4d16c40e03829a081929955a6e13b80930_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_10951c2321fc88fd7d7a7635a2602d8ca9126f6a856f6a4382afa5590e6a16cf = $this->env->getExtension("native_profiler");
        $__internal_10951c2321fc88fd7d7a7635a2602d8ca9126f6a856f6a4382afa5590e6a16cf->enter($__internal_10951c2321fc88fd7d7a7635a2602d8ca9126f6a856f6a4382afa5590e6a16cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Articles</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('srarticle_body', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('sruser_body', $context, $blocks);
        
        $__internal_10951c2321fc88fd7d7a7635a2602d8ca9126f6a856f6a4382afa5590e6a16cf->leave($__internal_10951c2321fc88fd7d7a7635a2602d8ca9126f6a856f6a4382afa5590e6a16cf_prof);

    }

    // line 15
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_5e170e0217e59b9631043bcd2cfcfc5e94e42d0a66efe4ddab9d5ef71aa825b0 = $this->env->getExtension("native_profiler");
        $__internal_5e170e0217e59b9631043bcd2cfcfc5e94e42d0a66efe4ddab9d5ef71aa825b0->enter($__internal_5e170e0217e59b9631043bcd2cfcfc5e94e42d0a66efe4ddab9d5ef71aa825b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 16
        echo "    ";
        
        $__internal_5e170e0217e59b9631043bcd2cfcfc5e94e42d0a66efe4ddab9d5ef71aa825b0->leave($__internal_5e170e0217e59b9631043bcd2cfcfc5e94e42d0a66efe4ddab9d5ef71aa825b0_prof);

    }

    // line 17
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_525c4362825e765c47f91d8f2adba9765ceb4b5eaec99fae618d3798b0b3dd24 = $this->env->getExtension("native_profiler");
        $__internal_525c4362825e765c47f91d8f2adba9765ceb4b5eaec99fae618d3798b0b3dd24->enter($__internal_525c4362825e765c47f91d8f2adba9765ceb4b5eaec99fae618d3798b0b3dd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 18
        echo "    ";
        
        $__internal_525c4362825e765c47f91d8f2adba9765ceb4b5eaec99fae618d3798b0b3dd24->leave($__internal_525c4362825e765c47f91d8f2adba9765ceb4b5eaec99fae618d3798b0b3dd24_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  92 => 17,  85 => 16,  79 => 15,  71 => 17,  68 => 15,  62 => 10,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Articles</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block srarticle_body %}*/
/*     {% endblock %}*/
/*     {% block sruser_body %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
