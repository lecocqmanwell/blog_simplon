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
        $__internal_3f1c4b1233282292c5731077b6ea2d5920bfc79fb6ff642d4b2d91d6ace2b711 = $this->env->getExtension("native_profiler");
        $__internal_3f1c4b1233282292c5731077b6ea2d5920bfc79fb6ff642d4b2d91d6ace2b711->enter($__internal_3f1c4b1233282292c5731077b6ea2d5920bfc79fb6ff642d4b2d91d6ace2b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1c4b1233282292c5731077b6ea2d5920bfc79fb6ff642d4b2d91d6ace2b711->leave($__internal_3f1c4b1233282292c5731077b6ea2d5920bfc79fb6ff642d4b2d91d6ace2b711_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_236ea56e4477bafaa81c596ebaf6bae7fbffb8b35546cab2d730686d5d5da6d8 = $this->env->getExtension("native_profiler");
        $__internal_236ea56e4477bafaa81c596ebaf6bae7fbffb8b35546cab2d730686d5d5da6d8->enter($__internal_236ea56e4477bafaa81c596ebaf6bae7fbffb8b35546cab2d730686d5d5da6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_236ea56e4477bafaa81c596ebaf6bae7fbffb8b35546cab2d730686d5d5da6d8->leave($__internal_236ea56e4477bafaa81c596ebaf6bae7fbffb8b35546cab2d730686d5d5da6d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_46fe54d15aba5b6ae24213e9f45b535c9c3c2c33a96e5bc5c1549ebf3627503e = $this->env->getExtension("native_profiler");
        $__internal_46fe54d15aba5b6ae24213e9f45b535c9c3c2c33a96e5bc5c1549ebf3627503e->enter($__internal_46fe54d15aba5b6ae24213e9f45b535c9c3c2c33a96e5bc5c1549ebf3627503e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "



    ";
        // line 15
        echo "    ";
        $this->displayBlock('srarticle_body', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('sruser_body', $context, $blocks);
        
        $__internal_46fe54d15aba5b6ae24213e9f45b535c9c3c2c33a96e5bc5c1549ebf3627503e->leave($__internal_46fe54d15aba5b6ae24213e9f45b535c9c3c2c33a96e5bc5c1549ebf3627503e_prof);

    }

    // line 15
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_c80b9f492203ab20b6e0bca23b4e173ceb8cefab3383ee0dc78615b5cfbaa3de = $this->env->getExtension("native_profiler");
        $__internal_c80b9f492203ab20b6e0bca23b4e173ceb8cefab3383ee0dc78615b5cfbaa3de->enter($__internal_c80b9f492203ab20b6e0bca23b4e173ceb8cefab3383ee0dc78615b5cfbaa3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 16
        echo "    ";
        
        $__internal_c80b9f492203ab20b6e0bca23b4e173ceb8cefab3383ee0dc78615b5cfbaa3de->leave($__internal_c80b9f492203ab20b6e0bca23b4e173ceb8cefab3383ee0dc78615b5cfbaa3de_prof);

    }

    // line 17
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_ea4c43862f56d8767df4b4a497b1acc1f9c28efcd7170375f5e7be2b536bc8fc = $this->env->getExtension("native_profiler");
        $__internal_ea4c43862f56d8767df4b4a497b1acc1f9c28efcd7170375f5e7be2b536bc8fc->enter($__internal_ea4c43862f56d8767df4b4a497b1acc1f9c28efcd7170375f5e7be2b536bc8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 18
        echo "    ";
        
        $__internal_ea4c43862f56d8767df4b4a497b1acc1f9c28efcd7170375f5e7be2b536bc8fc->leave($__internal_ea4c43862f56d8767df4b4a497b1acc1f9c28efcd7170375f5e7be2b536bc8fc_prof);

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
/*     Article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/* */
/* */
/* */
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block srarticle_body %}*/
/*     {% endblock %}*/
/*     {% block sruser_body %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
