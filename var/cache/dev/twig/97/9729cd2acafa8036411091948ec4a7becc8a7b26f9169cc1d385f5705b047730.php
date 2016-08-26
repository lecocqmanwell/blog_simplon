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
        $__internal_26760f90380f216a4f0d22e56d0a4f33040d557ab120456feb4494037a30a741 = $this->env->getExtension("native_profiler");
        $__internal_26760f90380f216a4f0d22e56d0a4f33040d557ab120456feb4494037a30a741->enter($__internal_26760f90380f216a4f0d22e56d0a4f33040d557ab120456feb4494037a30a741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26760f90380f216a4f0d22e56d0a4f33040d557ab120456feb4494037a30a741->leave($__internal_26760f90380f216a4f0d22e56d0a4f33040d557ab120456feb4494037a30a741_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bc7db3cca768a7c63e9c5ab2db0103c1d931ce8a7ebc92a90db255efc4c6558 = $this->env->getExtension("native_profiler");
        $__internal_1bc7db3cca768a7c63e9c5ab2db0103c1d931ce8a7ebc92a90db255efc4c6558->enter($__internal_1bc7db3cca768a7c63e9c5ab2db0103c1d931ce8a7ebc92a90db255efc4c6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1bc7db3cca768a7c63e9c5ab2db0103c1d931ce8a7ebc92a90db255efc4c6558->leave($__internal_1bc7db3cca768a7c63e9c5ab2db0103c1d931ce8a7ebc92a90db255efc4c6558_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_d865278311cdcb0bf05b68064a9b35369a049c07ff6c404c98d0f8c1e070ec5f = $this->env->getExtension("native_profiler");
        $__internal_d865278311cdcb0bf05b68064a9b35369a049c07ff6c404c98d0f8c1e070ec5f->enter($__internal_d865278311cdcb0bf05b68064a9b35369a049c07ff6c404c98d0f8c1e070ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
<article class=\"post\" xmlns=\"http://www.w3.org/1999/html\" xmlns=\"http://www.w3.org/1999/html\">
        <header>
            <div class=\"title\">
                <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"meta\">
                <span class=\"name\">Ecrit par <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "user", array()), "username", array()), "html", null, true);
        echo "</strong></span>
                    <time class=\"published\"> le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</time>
            </div>
        </header>
            <p>
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
            </p>



        ";
        // line 25
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "user", array()), "id", array()))))) {
            // line 26
            echo "            <ul class=\"actions fit\">
                <li>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"button fit\">
                        <i class=\"glyphicon glyphicon-edit\"></i>
                        Modifier votre article
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"button fit delete\">
                        <i class=\"glyphicon glyphicon-trash\"></i>
                        Supprimer votre article
                    </a>
                </li>
            </ul>
        ";
        }
        // line 41
        echo "
    <h3>Commentaires</h3>

    <div class=\"table-wrapper\">
         <table>
            <thead>
            <tr>
                <th>Auteur</th>
                <th>Commentaire</th>
            </tr>

    </thead>
    <tbody></tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 55
            echo "            <tr>
                <td>
                    <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
            echo "</strong>:
                </td>
                <td>
                     ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <tr>
             <td>
                    Aucun commentaires pour le moment! Soyez le premier à en écrire un!
             </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 74
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "published", array()) != 1)) {
            // line 75
            echo "        article encore au brouillon
    ";
        } else {
            // line 77
            echo "
    ";
            // line 78
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") ||  !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
                // line 79
                echo "
            ";
                // line 80
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
                echo "

            ";
                // line 83
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "

            ";
                // line 85
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Ajouter votre commentaire"));
                echo "

            ";
                // line 87
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
                echo "

           <div>
                ";
                // line 91
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "
           </div>

                ";
                // line 95
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
                echo "

                ";
                // line 100
                echo "
                ";
                // line 101
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                echo "

                ";
                // line 104
                echo "                ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "


    ";
            }
            // line 108
            echo "




        ";
            // line 114
            echo "        ";
            // line 115
            echo "        ";
            // line 116
            echo "        ";
            // line 117
            echo "        ";
            // line 118
            echo "        ";
            // line 119
            echo "        ";
            // line 120
            echo "        ";
            // line 121
            echo "        ";
            // line 122
            echo "        ";
            // line 123
            echo "        ";
            // line 124
            echo "        ";
            // line 125
            echo "        ";
            // line 126
            echo "

    ";
            // line 128
            if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 129
                echo "

        <div class=\"well panel panel-default\">
            <div class=\"panel panel-heading\">
                  pour ajouter un commentaire veuillez vous logger!!
            </div>
        </div>
    ";
            }
            // line 137
            echo "    ";
        }
        // line 138
        echo "
";
        
        $__internal_d865278311cdcb0bf05b68064a9b35369a049c07ff6c404c98d0f8c1e070ec5f->leave($__internal_d865278311cdcb0bf05b68064a9b35369a049c07ff6c404c98d0f8c1e070ec5f_prof);

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
        return array (  284 => 138,  281 => 137,  271 => 129,  269 => 128,  265 => 126,  263 => 125,  261 => 124,  259 => 123,  257 => 122,  255 => 121,  253 => 120,  251 => 119,  249 => 118,  247 => 117,  245 => 116,  243 => 115,  241 => 114,  234 => 108,  226 => 104,  221 => 101,  218 => 100,  212 => 95,  205 => 91,  199 => 87,  194 => 85,  188 => 83,  183 => 80,  180 => 79,  178 => 78,  175 => 77,  171 => 75,  169 => 74,  163 => 70,  152 => 64,  143 => 60,  137 => 57,  133 => 55,  128 => 54,  113 => 41,  103 => 34,  94 => 28,  90 => 26,  88 => 25,  80 => 20,  73 => 16,  69 => 15,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/* <article class="post" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">*/
/*         <header>*/
/*             <div class="title">*/
/*                 <h3>{{ article.title }}</h3>*/
/*             </div>*/
/*             <div class="meta">*/
/*                 <span class="name">Ecrit par <strong>{{ article.user.username }}</strong></span>*/
/*                     <time class="published"> le {{ article.date|date('d/m/Y') }}</time>*/
/*             </div>*/
/*         </header>*/
/*             <p>*/
/*                 {{ article.content }}*/
/*             </p>*/
/* */
/* */
/* */
/*         {% if is_granted('ROLE_ADMIN') or (app.user is not null and app.user.id == article.user.id) %}*/
/*             <ul class="actions fit">*/
/*                 <li>*/
/*                     <a href="{{ path('sr_article_edit', {'id': article.id}) }}" class="button fit">*/
/*                         <i class="glyphicon glyphicon-edit"></i>*/
/*                         Modifier votre article*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('sr_article_delete', {'id': article.id}) }}" class="button fit delete">*/
/*                         <i class="glyphicon glyphicon-trash"></i>*/
/*                         Supprimer votre article*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         {% endif %}*/
/* */
/*     <h3>Commentaires</h3>*/
/* */
/*     <div class="table-wrapper">*/
/*          <table>*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Auteur</th>*/
/*                 <th>Commentaire</th>*/
/*             </tr>*/
/* */
/*     </thead>*/
/*     <tbody></tbody>*/
/*         {% for comment in article.comments %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <strong>{{ comment.user.username }}</strong>:*/
/*                 </td>*/
/*                 <td>*/
/*                      {{ comment.content }}*/
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*              <td>*/
/*                     Aucun commentaires pour le moment! Soyez le premier à en écrire un!*/
/*              </td>*/
/*             </tr>*/
/*     {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* */
/*     {% if article.published != 1 %}*/
/*         article encore au brouillon*/
/*     {% else %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') or (app.user is not null )%}*/
/* */
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*             {# Les erreurs générales du formulaire. #}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {{ form_label(form.content, "Ajouter votre commentaire", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*             {{ form_errors(form.content) }}*/
/* */
/*            <div>*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*            </div>*/
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
/* */
/* */
/*     {% endif %}*/
/* */
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
/* */
/* */
/*     {% if app.user is null %}*/
/* */
/* */
/*         <div class="well panel panel-default">*/
/*             <div class="panel panel-heading">*/
/*                   pour ajouter un commentaire veuillez vous logger!!*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
