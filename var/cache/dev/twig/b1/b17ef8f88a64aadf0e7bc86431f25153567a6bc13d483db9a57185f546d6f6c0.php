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
        $__internal_e878facdcdb18dcfbe51f30b529a59eb17eff33a79209ae76d5b6c84fa75c3fc = $this->env->getExtension("native_profiler");
        $__internal_e878facdcdb18dcfbe51f30b529a59eb17eff33a79209ae76d5b6c84fa75c3fc->enter($__internal_e878facdcdb18dcfbe51f30b529a59eb17eff33a79209ae76d5b6c84fa75c3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e878facdcdb18dcfbe51f30b529a59eb17eff33a79209ae76d5b6c84fa75c3fc->leave($__internal_e878facdcdb18dcfbe51f30b529a59eb17eff33a79209ae76d5b6c84fa75c3fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ad6696d937744204efa931856406164efc1dbd889846cb308594b3f7e44c800 = $this->env->getExtension("native_profiler");
        $__internal_6ad6696d937744204efa931856406164efc1dbd889846cb308594b3f7e44c800->enter($__internal_6ad6696d937744204efa931856406164efc1dbd889846cb308594b3f7e44c800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ad6696d937744204efa931856406164efc1dbd889846cb308594b3f7e44c800->leave($__internal_6ad6696d937744204efa931856406164efc1dbd889846cb308594b3f7e44c800_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_d28c133c0fa06a0d7966071b31f294ab217d5369bb553a139cf49de71d417615 = $this->env->getExtension("native_profiler");
        $__internal_d28c133c0fa06a0d7966071b31f294ab217d5369bb553a139cf49de71d417615->enter($__internal_d28c133c0fa06a0d7966071b31f294ab217d5369bb553a139cf49de71d417615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

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
        
        $__internal_d28c133c0fa06a0d7966071b31f294ab217d5369bb553a139cf49de71d417615->leave($__internal_d28c133c0fa06a0d7966071b31f294ab217d5369bb553a139cf49de71d417615_prof);

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
