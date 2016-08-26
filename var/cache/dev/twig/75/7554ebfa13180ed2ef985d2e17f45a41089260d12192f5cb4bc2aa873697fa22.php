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
        $__internal_964d7174e97a85afeef8eb1db81e270dccc936f10f9ece919b6331b84deadbd2 = $this->env->getExtension("native_profiler");
        $__internal_964d7174e97a85afeef8eb1db81e270dccc936f10f9ece919b6331b84deadbd2->enter($__internal_964d7174e97a85afeef8eb1db81e270dccc936f10f9ece919b6331b84deadbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964d7174e97a85afeef8eb1db81e270dccc936f10f9ece919b6331b84deadbd2->leave($__internal_964d7174e97a85afeef8eb1db81e270dccc936f10f9ece919b6331b84deadbd2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a3bd72b8d11d95970b698ec688357d1e69078ff5ea23800dcd18a1dd249644 = $this->env->getExtension("native_profiler");
        $__internal_37a3bd72b8d11d95970b698ec688357d1e69078ff5ea23800dcd18a1dd249644->enter($__internal_37a3bd72b8d11d95970b698ec688357d1e69078ff5ea23800dcd18a1dd249644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Supprimer une utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37a3bd72b8d11d95970b698ec688357d1e69078ff5ea23800dcd18a1dd249644->leave($__internal_37a3bd72b8d11d95970b698ec688357d1e69078ff5ea23800dcd18a1dd249644_prof);

    }

    // line 8
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_8479fd330c24e820f3874cc30d6bc2e5091ade191b90c1b910416bfbd6204353 = $this->env->getExtension("native_profiler");
        $__internal_8479fd330c24e820f3874cc30d6bc2e5091ade191b90c1b910416bfbd6204353->enter($__internal_8479fd330c24e820f3874cc30d6bc2e5091ade191b90c1b910416bfbd6204353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

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
        <ul class=\"actions fit\">
            <li>

        ";
        // line 22
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

                </li>
            </ul>
        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

";
        
        $__internal_8479fd330c24e820f3874cc30d6bc2e5091ade191b90c1b910416bfbd6204353->leave($__internal_8479fd330c24e820f3874cc30d6bc2e5091ade191b90c1b910416bfbd6204353_prof);

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
        return array (  83 => 27,  77 => 22,  69 => 17,  63 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/*         <ul class="actions fit">*/
/*             <li>*/
/* */
/*         {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/* */
/*                 </li>*/
/*             </ul>*/
/*         {# Ceci va générer le champ CSRF #}*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* */
/* {% endblock %}*/
