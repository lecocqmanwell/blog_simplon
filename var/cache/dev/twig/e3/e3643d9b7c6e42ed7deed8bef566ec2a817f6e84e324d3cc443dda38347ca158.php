<?php

/* SRBlogBundle:Security:login.html.twig */
class __TwigTemplate_b7b5facc602a6d9cc6432598f91668761f6084eb401b01bbd3f8755e3a74d6cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SRBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3282ef318f74f89f0a7fb5278d6ce3ab3174ce7f47db8de1efec71331378c29 = $this->env->getExtension("native_profiler");
        $__internal_a3282ef318f74f89f0a7fb5278d6ce3ab3174ce7f47db8de1efec71331378c29->enter($__internal_a3282ef318f74f89f0a7fb5278d6ce3ab3174ce7f47db8de1efec71331378c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3282ef318f74f89f0a7fb5278d6ce3ab3174ce7f47db8de1efec71331378c29->leave($__internal_a3282ef318f74f89f0a7fb5278d6ce3ab3174ce7f47db8de1efec71331378c29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_185dac1bd4582521459eddbff59f74e9cbaa868cd4a8696ebf1cc88ade8e0ba0 = $this->env->getExtension("native_profiler");
        $__internal_185dac1bd4582521459eddbff59f74e9cbaa868cd4a8696ebf1cc88ade8e0ba0->enter($__internal_185dac1bd4582521459eddbff59f74e9cbaa868cd4a8696ebf1cc88ade8e0ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_185dac1bd4582521459eddbff59f74e9cbaa868cd4a8696ebf1cc88ade8e0ba0->leave($__internal_185dac1bd4582521459eddbff59f74e9cbaa868cd4a8696ebf1cc88ade8e0ba0_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Login :</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <br />*/
/*         <input type="submit" value="Connexion" />*/
/*     </form>*/
/* */
/* {% endblock %}*/
