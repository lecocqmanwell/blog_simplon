<?php

/* ::layout.html.twig */
class __TwigTemplate_a830d1ec38c79ac37ba0e11bb64c32dcb6bf19814ad009b25bf6f12c10810c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c148d65c6a08b3ad36f4c3a76ea87e3067455223d3359a18be7c3e4ce3ff192 = $this->env->getExtension("native_profiler");
        $__internal_0c148d65c6a08b3ad36f4c3a76ea87e3067455223d3359a18be7c3e4ce3ff192->enter($__internal_0c148d65c6a08b3ad36f4c3a76ea87e3067455223d3359a18be7c3e4ce3ff192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
            Login
        </a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
            Logout
        </a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sr_user_add");
        echo "\">
            Sign up
        </a>

        <h1>Ma plateforme de Blog</h1>


    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les articles</h3>
            <ul class=\"nav nav-pills nav-stacked\">

                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("sr_article_homepage");
        echo "\">Accueil</a></li>
                ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 40
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sr_article_add");
            echo "\">Ajouter un article</a></li>
                ";
        }
        // line 42
        echo "
                ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sr_user_homepage");
            echo "\">Liste des utilisateurs</a></li>
                ";
        }
        // line 46
        echo "            </ul>


        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond. By Manwell</p>
    </footer>
</div>

";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
</body>
</html>";
        
        $__internal_0c148d65c6a08b3ad36f4c3a76ea87e3067455223d3359a18be7c3e4ce3ff192->leave($__internal_0c148d65c6a08b3ad36f4c3a76ea87e3067455223d3359a18be7c3e4ce3ff192_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d7374fca40bcb35ee6b64309d67c96bb30c2fe547d5d378db6e025691a1d2c9 = $this->env->getExtension("native_profiler");
        $__internal_6d7374fca40bcb35ee6b64309d67c96bb30c2fe547d5d378db6e025691a1d2c9->enter($__internal_6d7374fca40bcb35ee6b64309d67c96bb30c2fe547d5d378db6e025691a1d2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SR Blog";
        
        $__internal_6d7374fca40bcb35ee6b64309d67c96bb30c2fe547d5d378db6e025691a1d2c9->leave($__internal_6d7374fca40bcb35ee6b64309d67c96bb30c2fe547d5d378db6e025691a1d2c9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a76110930f1901ba538076c3ba2379e75529e6593a734d0986fe5ffdd96b157 = $this->env->getExtension("native_profiler");
        $__internal_8a76110930f1901ba538076c3ba2379e75529e6593a734d0986fe5ffdd96b157->enter($__internal_8a76110930f1901ba538076c3ba2379e75529e6593a734d0986fe5ffdd96b157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_8a76110930f1901ba538076c3ba2379e75529e6593a734d0986fe5ffdd96b157->leave($__internal_8a76110930f1901ba538076c3ba2379e75529e6593a734d0986fe5ffdd96b157_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_96511350f87c5a4bd21f7bd37c3e5e792b0eb3ff1167b24eb63fb8640fdb2bd1 = $this->env->getExtension("native_profiler");
        $__internal_96511350f87c5a4bd21f7bd37c3e5e792b0eb3ff1167b24eb63fb8640fdb2bd1->enter($__internal_96511350f87c5a4bd21f7bd37c3e5e792b0eb3ff1167b24eb63fb8640fdb2bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "            ";
        
        $__internal_96511350f87c5a4bd21f7bd37c3e5e792b0eb3ff1167b24eb63fb8640fdb2bd1->leave($__internal_96511350f87c5a4bd21f7bd37c3e5e792b0eb3ff1167b24eb63fb8640fdb2bd1_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7173e542cebe4cf206c9bf9938d667e9acc664432e13e5f152efc380effc2cd3 = $this->env->getExtension("native_profiler");
        $__internal_7173e542cebe4cf206c9bf9938d667e9acc664432e13e5f152efc380effc2cd3->enter($__internal_7173e542cebe4cf206c9bf9938d667e9acc664432e13e5f152efc380effc2cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        // line 65
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_7173e542cebe4cf206c9bf9938d667e9acc664432e13e5f152efc380effc2cd3->leave($__internal_7173e542cebe4cf206c9bf9938d667e9acc664432e13e5f152efc380effc2cd3_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  182 => 64,  176 => 63,  169 => 52,  163 => 51,  155 => 11,  153 => 10,  147 => 9,  135 => 7,  126 => 68,  124 => 63,  117 => 59,  109 => 53,  107 => 51,  100 => 46,  94 => 44,  92 => 43,  89 => 42,  83 => 40,  81 => 39,  77 => 38,  60 => 24,  54 => 21,  48 => 18,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}SR Blog{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         {# On charge le CSS de bootstrap depuis le site directement #}*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*         <a class="btn btn-primary btn-lg" href="{{ path('login') }}">*/
/*             Login*/
/*         </a>*/
/*         <a class="btn btn-primary btn-lg" href="{{ path('logout') }}">*/
/*             Logout*/
/*         </a>*/
/*         <a class="btn btn-primary btn-lg" href="{{ path('sr_user_add') }}">*/
/*             Sign up*/
/*         </a>*/
/* */
/*         <h1>Ma plateforme de Blog</h1>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div id="menu" class="col-md-3">*/
/*             <h3>Les articles</h3>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/* */
/*                     <li><a href="{{ path('sr_article_homepage') }}">Accueil</a></li>*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                     <li><a href="{{ path('sr_article_add') }}">Ajouter un article</a></li>*/
/*                 {% endif %}*/
/* */
/*                 {% if is_granted('ROLE_ADMIN')  %}*/
/*                     <li><a href="{{ path('sr_user_homepage') }}">Liste des utilisateurs</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/* */
/* */
/*         </div>*/
/*         <div id="content" class="col-md-9">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*         <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond. By Manwell</p>*/
/*     </footer>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
