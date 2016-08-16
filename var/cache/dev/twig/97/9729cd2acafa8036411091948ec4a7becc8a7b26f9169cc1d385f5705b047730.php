<?php

/* SRBlogBundle:Article:view.html.twig */
class __TwigTemplate_42fde2126326979d2b0b5c675cf8f887bff50a4a758b8fd764ea612363f7ead9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Article:view.html.twig", 1);
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
        $__internal_6edc53b232bae78aa4e825e54d15e0dc06b2a48b178d857c4fbbb8c2e08aa89f = $this->env->getExtension("native_profiler");
        $__internal_6edc53b232bae78aa4e825e54d15e0dc06b2a48b178d857c4fbbb8c2e08aa89f->enter($__internal_6edc53b232bae78aa4e825e54d15e0dc06b2a48b178d857c4fbbb8c2e08aa89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6edc53b232bae78aa4e825e54d15e0dc06b2a48b178d857c4fbbb8c2e08aa89f->leave($__internal_6edc53b232bae78aa4e825e54d15e0dc06b2a48b178d857c4fbbb8c2e08aa89f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b2c16d42b094738e5c1998a6eb36a8e8ad404d8176f409f2a4283ef309001d = $this->env->getExtension("native_profiler");
        $__internal_e0b2c16d42b094738e5c1998a6eb36a8e8ad404d8176f409f2a4283ef309001d->enter($__internal_e0b2c16d42b094738e5c1998a6eb36a8e8ad404d8176f409f2a4283ef309001d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0b2c16d42b094738e5c1998a6eb36a8e8ad404d8176f409f2a4283ef309001d->leave($__internal_e0b2c16d42b094738e5c1998a6eb36a8e8ad404d8176f409f2a4283ef309001d_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_4c4de0a43aba5d9df78d7e9fdf335a3f892637876296497072a6844be25c552a = $this->env->getExtension("native_profiler");
        $__internal_4c4de0a43aba5d9df78d7e9fdf335a3f892637876296497072a6844be25c552a->enter($__internal_4c4de0a43aba5d9df78d7e9fdf335a3f892637876296497072a6844be25c552a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    ";
        // line 11
        echo "
    <i>le ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    ";
        // line 15
        echo "
        ";
        // line 17
        echo "
    ";
        // line 19
        echo "
    <div class=\"well\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
    </div>



    <h3>Commentaires</h3>

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 29
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong> said : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "<br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        No comments yet.
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "published", array()) != 1)) {
            // line 35
            echo "article encore au brouillon
    ";
        } else {
            // line 37
            echo "
    ";
            // line 38
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") ||  !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
                // line 39
                echo "
        <div class=\"well\">
            ";
                // line 41
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
                echo "


            ";
                // line 45
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "

            ";
                // line 47
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "commentaire"));
                echo "

            ";
                // line 49
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
                echo "



    ";
                // line 54
                echo "            <div class=\"col-sm-10\">
                ";
                // line 56
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "
            </div>

                ";
                // line 60
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
                echo "

                ";
                // line 65
                echo "
                ";
                // line 66
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                echo "

                ";
                // line 69
                echo "                ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
        </div>

    ";
            }
            // line 73
            echo "



        ";
            // line 78
            echo "        ";
            // line 79
            echo "        ";
            // line 80
            echo "        ";
            // line 81
            echo "        ";
            // line 82
            echo "        ";
            // line 83
            echo "        ";
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            // line 86
            echo "        ";
            // line 87
            echo "        ";
            // line 88
            echo "        ";
            // line 89
            echo "        ";
            // line 90
            echo "    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "user", array()), "id", array()))))) {
                // line 91
                echo "


        <p>
        <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'article
        </a>

    ";
            }
            // line 105
            echo "
    ";
            // line 106
            if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 107
                echo "

        pour ajouter un commentaire veuillez vous logger!!
    ";
            }
            // line 111
            echo "
        <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("sr_article_homepage");
            echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
    </p>

    ";
        }
        // line 119
        echo "
";
        
        $__internal_4c4de0a43aba5d9df78d7e9fdf335a3f892637876296497072a6844be25c552a->leave($__internal_4c4de0a43aba5d9df78d7e9fdf335a3f892637876296497072a6844be25c552a_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 119,  257 => 112,  254 => 111,  248 => 107,  246 => 106,  243 => 105,  234 => 99,  227 => 95,  221 => 91,  218 => 90,  216 => 89,  214 => 88,  212 => 87,  210 => 86,  208 => 85,  206 => 84,  204 => 83,  202 => 82,  200 => 81,  198 => 80,  196 => 79,  194 => 78,  188 => 73,  180 => 69,  175 => 66,  172 => 65,  166 => 60,  159 => 56,  156 => 54,  149 => 49,  144 => 47,  138 => 45,  132 => 41,  128 => 39,  126 => 38,  123 => 37,  119 => 35,  117 => 34,  114 => 33,  107 => 31,  97 => 29,  92 => 28,  82 => 21,  78 => 19,  75 => 17,  72 => 15,  67 => 12,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Lecture d'un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block srarticle_body %}*/
/* */
/*     <h2>{{ article.title }}</h2>*/
/*     {#<i>Par {{ article.author }}, #}*/
/* */
/*     <i>le {{ article.date|date('d/m/Y') }}</i>*/
/* */
/*     {#{% if article.image is not null %}#}*/
/* */
/*         {#<img src="{{ post.image.url }}" alt="{{ post.image.alt }}">#}*/
/* */
/*     {#{% endif %}#}*/
/* */
/*     <div class="well">*/
/*         {{ article.content }}*/
/*     </div>*/
/* */
/* */
/* */
/*     <h3>Commentaires</h3>*/
/* */
/*     {% for comment in article.comments %}*/
/*         <strong>{{ comment.user.username }}</strong> said : {{ comment.content }}<br>*/
/*     {% else %}*/
/*         No comments yet.*/
/*     {% endfor %}*/
/* */
/*     {% if article.published != 1 %}*/
/* article encore au brouillon*/
/*     {% else %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') or (app.user is not null )%}*/
/* */
/*         <div class="well">*/
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* */
/*             {# Les erreurs générales du formulaire. #}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {{ form_label(form.content, "commentaire", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*             {{ form_errors(form.content) }}*/
/* */
/* */
/* */
/*     {#and app.user.id == article.user.id) %}#}*/
/*             <div class="col-sm-10">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/* */
/*                 {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*                 {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*                 {# Génération automatique des champs pas encore écrits.*/
/*                    Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*                    et tous les champs cachés (type « hidden »). #}*/
/* */
/*                 {{ form_rest(form) }}*/
/* */
/*                 {# Fermeture de la balise <form> du formulaire HTML #}*/
/*                 {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/*         {#{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}#}*/
/*         {#<div class="form-group">#}*/
/*         {#{{ form_errors(commentForm.content) }}#}*/
/*         {#{{ form_widget(commentForm.content, { 'attr':  {#}*/
/*         {#'rows': '4',#}*/
/*         {#'class': 'form-control',#}*/
/*         {#'placeholder': 'Enter your comment'#}*/
/*         {#}}) }}#}*/
/*         {#</div>#}*/
/*         {#<div class="form-group">#}*/
/*         {#<input type="submit" class="btn btn-primary" value="Publish comment" />#}*/
/*         {#</div>#}*/
/*         {#{{ form_end(form, {'attr': {'class': 'form-horizontal'}}) }}#}*/
/*     {% if is_granted('ROLE_ADMIN') or (app.user is not null and app.user.id == article.user.id) %}*/
/* */
/* */
/* */
/*         <p>*/
/*         <a href="{{ path('sr_article_edit', {'id': article.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier l'article*/
/*         </a>*/
/*         <a href="{{ path('sr_article_delete', {'id': article.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer l'article*/
/*         </a>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if app.user is null %}*/
/* */
/* */
/*         pour ajouter un commentaire veuillez vous logger!!*/
/*     {% endif %}*/
/* */
/*         <a href="{{ path('sr_article_homepage') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*     </p>*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
