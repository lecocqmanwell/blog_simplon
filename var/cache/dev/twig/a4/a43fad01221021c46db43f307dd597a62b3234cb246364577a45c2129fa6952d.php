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
        $__internal_dd8de48b77fbaab653fa0de25a938ae785760609ae20c48200075fa353549278 = $this->env->getExtension("native_profiler");
        $__internal_dd8de48b77fbaab653fa0de25a938ae785760609ae20c48200075fa353549278->enter($__internal_dd8de48b77fbaab653fa0de25a938ae785760609ae20c48200075fa353549278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd8de48b77fbaab653fa0de25a938ae785760609ae20c48200075fa353549278->leave($__internal_dd8de48b77fbaab653fa0de25a938ae785760609ae20c48200075fa353549278_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41f368de17a4a033250948308a5a9c4137cf57b4fd0581b446379da9e0d020ff = $this->env->getExtension("native_profiler");
        $__internal_41f368de17a4a033250948308a5a9c4137cf57b4fd0581b446379da9e0d020ff->enter($__internal_41f368de17a4a033250948308a5a9c4137cf57b4fd0581b446379da9e0d020ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_41f368de17a4a033250948308a5a9c4137cf57b4fd0581b446379da9e0d020ff->leave($__internal_41f368de17a4a033250948308a5a9c4137cf57b4fd0581b446379da9e0d020ff_prof);

    }

    // line 7
    public function block_srarticle_body($context, array $blocks = array())
    {
        $__internal_c8b77e0446e8caa2e663d24231afe967b7efdc722215f07160378ba34559c49c = $this->env->getExtension("native_profiler");
        $__internal_c8b77e0446e8caa2e663d24231afe967b7efdc722215f07160378ba34559c49c->enter($__internal_c8b77e0446e8caa2e663d24231afe967b7efdc722215f07160378ba34559c49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "srarticle_body"));

        // line 8
        echo "
    <h2>Liste des articles publiés</h2>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        <ul>
            ";
            // line 13
            if (($this->getAttribute($context["article"], "published", array()) == 1)) {
                // line 14
                echo "                <li>
                    <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">
                           ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
                echo ",
                    le ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                </li>

            ";
            }
            // line 23
            echo "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

    ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 28
            echo "            <h2>Article non publiés</h2>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 30
                echo "                    ";
                if (($this->getAttribute($context["article"], "published", array()) == 0)) {
                    // line 31
                    echo "                        ";
                    if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["article"], "user", array()), "id", array())))) {
                        // line 32
                        echo "                        <ul>
                        <li>
                            <a href=\"";
                        // line 34
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                        echo "\">
                                ";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "
                            </a>
                            par ";
                        // line 37
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
                        echo ",
                            le ";
                        // line 38
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                        echo "
                        </li>
                        </ul>
                        ";
                    }
                    // line 42
                    echo "                    ";
                }
                // line 43
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        // line 45
        echo "







        ";
        // line 54
        echo "            ";
        // line 55
        echo "        ";
        // line 56
        echo "


";
        
        $__internal_c8b77e0446e8caa2e663d24231afe967b7efdc722215f07160378ba34559c49c->leave($__internal_c8b77e0446e8caa2e663d24231afe967b7efdc722215f07160378ba34559c49c_prof);

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
        return array (  170 => 56,  168 => 55,  166 => 54,  156 => 45,  153 => 44,  147 => 43,  144 => 42,  137 => 38,  133 => 37,  128 => 35,  124 => 34,  120 => 32,  117 => 31,  114 => 30,  110 => 29,  107 => 28,  105 => 27,  101 => 25,  94 => 23,  87 => 19,  83 => 18,  78 => 16,  74 => 15,  71 => 14,  69 => 13,  66 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block srarticle_body %}*/
/* */
/*     <h2>Liste des articles publiés</h2>*/
/* */
/*     {% for article in listArticles %}*/
/*         <ul>*/
/*             {% if article.published == 1 %}*/
/*                 <li>*/
/*                     <a href="{{ path('sr_article_view', {'id': article.id}) }}">*/
/*                            {{ article.title }}*/
/*                     </a>*/
/*                     par {{ article.user.username }},*/
/*                     le {{ article.date|date('d/m/Y') }}*/
/*                 </li>*/
/* */
/*             {% endif %}*/
/*         </ul>*/
/*     {% endfor %}*/
/* */
/* */
/*     {% if is_granted('ROLE_USER')  %}*/
/*             <h2>Article non publiés</h2>*/
/*                 {% for article in listArticles %}*/
/*                     {% if article.published == 0 %}*/
/*                         {% if  is_granted('ROLE_ADMIN') or app.user.id == article.user.id %}*/
/*                         <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('sr_article_view', {'id': article.id}) }}">*/
/*                                 {{ article.title }}*/
/*                             </a>*/
/*                             par {{ article.user.username }},*/
/*                             le {{ article.date|date('d/m/Y') }}*/
/*                         </li>*/
/*                         </ul>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {#{% if article == null %}#}*/
/*             {#<li>Pas (encore !) d'articles</li>#}*/
/*         {#{% endif %}#}*/
/* */
/* */
/* */
/* {% endblock %}*/
