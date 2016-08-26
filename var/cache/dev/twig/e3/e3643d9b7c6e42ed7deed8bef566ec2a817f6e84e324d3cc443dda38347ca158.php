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
        $__internal_d71a0228a2a9146fda928609e914a5f5d9d824dee38cc9fe04b11e377869ac1b = $this->env->getExtension("native_profiler");
        $__internal_d71a0228a2a9146fda928609e914a5f5d9d824dee38cc9fe04b11e377869ac1b->enter($__internal_d71a0228a2a9146fda928609e914a5f5d9d824dee38cc9fe04b11e377869ac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71a0228a2a9146fda928609e914a5f5d9d824dee38cc9fe04b11e377869ac1b->leave($__internal_d71a0228a2a9146fda928609e914a5f5d9d824dee38cc9fe04b11e377869ac1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e7ac1a2a29dec3c61835b6b5cbe65c3f620857bcb72bf19e851b1ddc22a554 = $this->env->getExtension("native_profiler");
        $__internal_c4e7ac1a2a29dec3c61835b6b5cbe65c3f620857bcb72bf19e851b1ddc22a554->enter($__internal_c4e7ac1a2a29dec3c61835b6b5cbe65c3f620857bcb72bf19e851b1ddc22a554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
           N'oubliez pas, pour pouvoir ajouter un blog, je dois tout d'abord vous connaître!! Merci!!
        </div>
    </div>
    ";
        // line 17
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_c4e7ac1a2a29dec3c61835b6b5cbe65c3f620857bcb72bf19e851b1ddc22a554->leave($__internal_c4e7ac1a2a29dec3c61835b6b5cbe65c3f620857bcb72bf19e851b1ddc22a554_prof);

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
        return array (  67 => 19,  61 => 17,  52 => 9,  46 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*            N'oubliez pas, pour pouvoir ajouter un blog, je dois tout d'abord vous connaître!! Merci!!*/
/*         </div>*/
/*     </div>*/
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Username</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <br />*/
/*         <input type="submit" value="Connexion" />*/
/*     </form>*/
/* */
/* {% endblock %}*/
