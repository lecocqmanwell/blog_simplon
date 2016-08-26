<?php

/* SRBlogBundle:User:homepage.html.twig */
class __TwigTemplate_80f29fc83eed93a4d0e78dacc3ce523014f76e26217146dfc04ce6d30d1dfb15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:homepage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sruser_body' => array($this, 'block_sruser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SRBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445ebf9818bfa82dc7e9654067020b416393096fcf71fb139e3da9b55ddc4150 = $this->env->getExtension("native_profiler");
        $__internal_445ebf9818bfa82dc7e9654067020b416393096fcf71fb139e3da9b55ddc4150->enter($__internal_445ebf9818bfa82dc7e9654067020b416393096fcf71fb139e3da9b55ddc4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445ebf9818bfa82dc7e9654067020b416393096fcf71fb139e3da9b55ddc4150->leave($__internal_445ebf9818bfa82dc7e9654067020b416393096fcf71fb139e3da9b55ddc4150_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_933739af2f075a11ebec964e09b3816b22132801085e95efa1c480388db3205f = $this->env->getExtension("native_profiler");
        $__internal_933739af2f075a11ebec964e09b3816b22132801085e95efa1c480388db3205f->enter($__internal_933739af2f075a11ebec964e09b3816b22132801085e95efa1c480388db3205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_933739af2f075a11ebec964e09b3816b22132801085e95efa1c480388db3205f->leave($__internal_933739af2f075a11ebec964e09b3816b22132801085e95efa1c480388db3205f_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_7cfa8fe1832732d4935cebd33470c9170576f01c5258a9c976aad006d90c1b70 = $this->env->getExtension("native_profiler");
        $__internal_7cfa8fe1832732d4935cebd33470c9170576f01c5258a9c976aad006d90c1b70->enter($__internal_7cfa8fe1832732d4935cebd33470c9170576f01c5258a9c976aad006d90c1b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 8
        echo "
    <h2>Liste des utilisateurs</h2>

    <ul>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "            <li>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
                </a>

                ";
            // line 19
            echo "                ";
            // line 20
            echo "            </li>


        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "
            <li>Pas (encore !) d'utilisateur</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>



";
        
        $__internal_7cfa8fe1832732d4935cebd33470c9170576f01c5258a9c976aad006d90c1b70->leave($__internal_7cfa8fe1832732d4935cebd33470c9170576f01c5258a9c976aad006d90c1b70_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  91 => 24,  83 => 20,  81 => 19,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sruser_body %}*/
/* */
/*     <h2>Liste des utilisateurs</h2>*/
/* */
/*     <ul>*/
/*         {% for user in listUsers %}*/
/*             <li>*/
/*                 <a href="{{ path('sr_user_view', {'id': user.id}) }}">*/
/*                     {{ user.name }}*/
/*                 </a>*/
/* */
/*                 {#par {{ article.author }},#}*/
/*                 {#le {{ article.date|date('d/m/Y') }}#}*/
/*             </li>*/
/* */
/* */
/*         {% else %}*/
/* */
/*             <li>Pas (encore !) d'utilisateur</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/
