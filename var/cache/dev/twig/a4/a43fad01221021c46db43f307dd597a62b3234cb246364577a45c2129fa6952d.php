<?php

/* SRBlogBundle:Article:homepage.html.twig */
class __TwigTemplate_01222921ef64f504c3343109e0f07f819d116fa27eaca9fa92075a5144a1e709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Article:homepage.html.twig", 1);
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
        $__internal_6424fe294d9cec8d97f54a0a9ca46df6d2c1826fac4a5f82ee398270c524b089 = $this->env->getExtension("native_profiler");
        $__internal_6424fe294d9cec8d97f54a0a9ca46df6d2c1826fac4a5f82ee398270c524b089->enter($__internal_6424fe294d9cec8d97f54a0a9ca46df6d2c1826fac4a5f82ee398270c524b089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6424fe294d9cec8d97f54a0a9ca46df6d2c1826fac4a5f82ee398270c524b089->leave($__internal_6424fe294d9cec8d97f54a0a9ca46df6d2c1826fac4a5f82ee398270c524b089_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8d7a88ce7b946d728108e2ba92669f44f0ca8ff0728f4c9b5708e26fbd339fa = $this->env->getExtension("native_profiler");
        $__internal_f8d7a88ce7b946d728108e2ba92669f44f0ca8ff0728f4c9b5708e26fbd339fa->enter($__internal_f8d7a88ce7b946d728108e2ba92669f44f0ca8ff0728f4c9b5708e26fbd339fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f8d7a88ce7b946d728108e2ba92669f44f0ca8ff0728f4c9b5708e26fbd339fa->leave($__internal_f8d7a88ce7b946d728108e2ba92669f44f0ca8ff0728f4c9b5708e26fbd339fa_prof);

    }

    // line 9
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_9efb54cd4f63429613d871a43495f8aa3e0c381f8d9e723b54f17a00f057ee53 = $this->env->getExtension("native_profiler");
        $__internal_9efb54cd4f63429613d871a43495f8aa3e0c381f8d9e723b54f17a00f057ee53->enter($__internal_9efb54cd4f63429613d871a43495f8aa3e0c381f8d9e723b54f17a00f057ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 10
        echo "
    <div class=\"row\">
        <div class=\"6u 12u\$(medium)\">
            <h3>Liste des articles publiés</h3>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "                    ";
            if (($this->getAttribute($context["article"], "published", array()) == 1)) {
                // line 16
                echo "                        <ul  class=\"alt\">
                            <li>
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "
                                </a>
                                par ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
                echo ",
                                le ";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                                ";
                // line 23
                if (($this->getAttribute($this->getAttribute($context["article"], "user", array()), "isActive", array()) == 0)) {
                    // line 24
                    echo "                                    </br>Profil supprimé
                                ";
                }
                // line 26
                echo "                            </li>

                        </ul>
                    ";
            }
            // line 30
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>


    ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            echo "            <h3>Mes articles non publiés</h3>
                <div class=\"row\">
                    <div class=\"6u 12u\$(medium)\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 40
                echo "                            ";
                if (($this->getAttribute($context["article"], "published", array()) != 1)) {
                    // line 41
                    echo "                                ";
                    if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["article"], "user", array()), "id", array())))) {
                        // line 42
                        echo "                                <ul class=\"alt\">
                                <li>
                                    <a href=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                        echo "\">
                                        ";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "
                                    </a>
                                    par ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
                        echo ",
                                    le ";
                        // line 48
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                        echo "
                                </li>
                                </ul>
                                ";
                    }
                    // line 52
                    echo "                            ";
                }
                // line 53
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </div>
                </div>

        ";
        }
        // line 58
        echo "

        ";
        // line 60
        if (((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")) == null)) {
            // line 61
            echo "            <ul class=\"alt\">
                <li>Pas (encore !) d'articles</li>
            </ul>
        ";
        }
        // line 65
        echo "


";
        
        $__internal_9efb54cd4f63429613d871a43495f8aa3e0c381f8d9e723b54f17a00f057ee53->leave($__internal_9efb54cd4f63429613d871a43495f8aa3e0c381f8d9e723b54f17a00f057ee53_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  177 => 61,  175 => 60,  171 => 58,  165 => 54,  159 => 53,  156 => 52,  149 => 48,  145 => 47,  140 => 45,  136 => 44,  132 => 42,  129 => 41,  126 => 40,  122 => 39,  117 => 36,  115 => 35,  109 => 31,  103 => 30,  97 => 26,  93 => 24,  91 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 18,  70 => 16,  67 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block srarticle_body %}*/
/* */
/*     <div class="row">*/
/*         <div class="6u 12u$(medium)">*/
/*             <h3>Liste des articles publiés</h3>*/
/*                 {% for article in listArticles %}*/
/*                     {% if article.published == 1 %}*/
/*                         <ul  class="alt">*/
/*                             <li>*/
/*                                 <a href="{{ path('sr_article_view', {'id': article.id}) }}">*/
/*                                     {{ article.title }}*/
/*                                 </a>*/
/*                                 par {{ article.user.username }},*/
/*                                 le {{ article.date|date('d/m/Y') }}*/
/*                                 {% if article.user.isActive == 0 %}*/
/*                                     </br>Profil supprimé*/
/*                                 {% endif %}*/
/*                             </li>*/
/* */
/*                         </ul>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {% if is_granted('ROLE_USER')  %}*/
/*             <h3>Mes articles non publiés</h3>*/
/*                 <div class="row">*/
/*                     <div class="6u 12u$(medium)">*/
/*                         {% for article in listArticles %}*/
/*                             {% if article.published != 1 %}*/
/*                                 {% if  is_granted('ROLE_ADMIN') or app.user.id == article.user.id %}*/
/*                                 <ul class="alt">*/
/*                                 <li>*/
/*                                     <a href="{{ path('sr_article_view', {'id': article.id}) }}">*/
/*                                         {{ article.title }}*/
/*                                     </a>*/
/*                                     par {{ article.user.username }},*/
/*                                     le {{ article.date|date('d/m/Y') }}*/
/*                                 </li>*/
/*                                 </ul>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         {% if listArticles == null %}*/
/*             <ul class="alt">*/
/*                 <li>Pas (encore !) d'articles</li>*/
/*             </ul>*/
/*         {% endif %}*/
/* */
/* */
/* */
/* {% endblock %}*/
