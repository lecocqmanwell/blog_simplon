<?php

/* SRBlogBundle:User:delete.html.twig */
class __TwigTemplate_5538b877370a3677291e77b01876c8b14bebef4facf3be4c20627d82e625bfc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:delete.html.twig", 2);
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
        $__internal_f8b5512da394ceae7fb991326d960d35361e1e5615d2dadf62f70a696e8f4dbc = $this->env->getExtension("native_profiler");
        $__internal_f8b5512da394ceae7fb991326d960d35361e1e5615d2dadf62f70a696e8f4dbc->enter($__internal_f8b5512da394ceae7fb991326d960d35361e1e5615d2dadf62f70a696e8f4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b5512da394ceae7fb991326d960d35361e1e5615d2dadf62f70a696e8f4dbc->leave($__internal_f8b5512da394ceae7fb991326d960d35361e1e5615d2dadf62f70a696e8f4dbc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7bb3c9d0abf2b46c4de36448963aec17478f2aee7f539fcabfa8d8ded73740a = $this->env->getExtension("native_profiler");
        $__internal_a7bb3c9d0abf2b46c4de36448963aec17478f2aee7f539fcabfa8d8ded73740a->enter($__internal_a7bb3c9d0abf2b46c4de36448963aec17478f2aee7f539fcabfa8d8ded73740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Supprimer une utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7bb3c9d0abf2b46c4de36448963aec17478f2aee7f539fcabfa8d8ded73740a->leave($__internal_a7bb3c9d0abf2b46c4de36448963aec17478f2aee7f539fcabfa8d8ded73740a_prof);

    }

    // line 8
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_faea1d0005a6b5160ad1f007d3fc91e5b0d8d48e2225e0655c693c1ef54325af = $this->env->getExtension("native_profiler");
        $__internal_faea1d0005a6b5160ad1f007d3fc91e5b0d8d48e2225e0655c693c1ef54325af->enter($__internal_faea1d0005a6b5160ad1f007d3fc91e5b0d8d48e2225e0655c693c1ef54325af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 9
        echo "
    <h2>Supprimer un utilisateur</h2>

    <p>
        Etes-vous certain de vouloir supprimer \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 17
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_view", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste des utilisateurs
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
        
        $__internal_faea1d0005a6b5160ad1f007d3fc91e5b0d8d48e2225e0655c693c1ef54325af->leave($__internal_faea1d0005a6b5160ad1f007d3fc91e5b0d8d48e2225e0655c693c1ef54325af_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:delete.html.twig";
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
/*     Supprimer une utilisateur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sruser_body %}*/
/* */
/*     <h2>Supprimer un utilisateur</h2>*/
/* */
/*     <p>*/
/*         Etes-vous certain de vouloir supprimer "{{ user.name }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id du user dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('sr_user_delete', {'id': user.id}) }}" method="post">*/
/*         <a href="{{ path('sr_user_view', {'id': user.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste des utilisateurs*/
/*         </a>*/
/*         {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*         {# Ceci va générer le champ CSRF #}*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* */
/* {% endblock %}*/
