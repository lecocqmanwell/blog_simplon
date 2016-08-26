<?php

/* SRBlogBundle:Article:delete.html.twig */
class __TwigTemplate_2d6fd554010cd4bb27da0197751f8a6ad0e1f2401b609041a887b13b94de0a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Article:delete.html.twig", 2);
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
        $__internal_40942ad530912c82f40f58efdd18ce8c16d5ef8508d983847ceb12d12c7d80b2 = $this->env->getExtension("native_profiler");
        $__internal_40942ad530912c82f40f58efdd18ce8c16d5ef8508d983847ceb12d12c7d80b2->enter($__internal_40942ad530912c82f40f58efdd18ce8c16d5ef8508d983847ceb12d12c7d80b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40942ad530912c82f40f58efdd18ce8c16d5ef8508d983847ceb12d12c7d80b2->leave($__internal_40942ad530912c82f40f58efdd18ce8c16d5ef8508d983847ceb12d12c7d80b2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2136c8588b280a95468049fcc0fa328e3a33704639f7b65db91a9f64e40ef0a7 = $this->env->getExtension("native_profiler");
        $__internal_2136c8588b280a95468049fcc0fa328e3a33704639f7b65db91a9f64e40ef0a7->enter($__internal_2136c8588b280a95468049fcc0fa328e3a33704639f7b65db91a9f64e40ef0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2136c8588b280a95468049fcc0fa328e3a33704639f7b65db91a9f64e40ef0a7->leave($__internal_2136c8588b280a95468049fcc0fa328e3a33704639f7b65db91a9f64e40ef0a7_prof);

    }

    // line 8
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_cf222972ce39f3817888ed4398bee2341f4f3e19bf367b8f36c9f224ff6b3d4a = $this->env->getExtension("native_profiler");
        $__internal_cf222972ce39f3817888ed4398bee2341f4f3e19bf367b8f36c9f224ff6b3d4a->enter($__internal_cf222972ce39f3817888ed4398bee2341f4f3e19bf367b8f36c9f224ff6b3d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 9
        echo "
    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 17
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        ";
        // line 23
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

";
        
        $__internal_cf222972ce39f3817888ed4398bee2341f4f3e19bf367b8f36c9f224ff6b3d4a->leave($__internal_cf222972ce39f3817888ed4398bee2341f4f3e19bf367b8f36c9f224ff6b3d4a_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  81 => 23,  74 => 18,  69 => 17,  63 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block srarticle_body %}*/
/* */
/*     <h2>Supprimer une annonce</h2>*/
/* */
/*     <p>*/
/*         Etes-vous certain de vouloir supprimer l'annonce "{{ article.title }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('sr_article_delete', {'id': article.id}) }}" method="post">*/
/*         <a href="{{ path('sr_article_view', {'id': article.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à l'annonce*/
/*         </a>*/
/*         {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*         {# Ceci va générer le champ CSRF #}*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* */
/* {% endblock %}*/
