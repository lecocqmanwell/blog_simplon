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
        $__internal_e887abacbd3410ed8ce06ae3260185f0483766bc87e29e065a36ff55711d49a4 = $this->env->getExtension("native_profiler");
        $__internal_e887abacbd3410ed8ce06ae3260185f0483766bc87e29e065a36ff55711d49a4->enter($__internal_e887abacbd3410ed8ce06ae3260185f0483766bc87e29e065a36ff55711d49a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 16
        echo "</head>

<body>
    <div id=\"wrapper\">
        <!-- Header -->
        <header id=\"header\">
            <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("sr_article_home");
        echo "\">Manwell</a></h1>
            <nav class=\"links\">
                <ul>
                    <li class=\"desk\">
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sr_article_add");
        echo " \">Ajouter un article</a>
                    </li>
                    <li class=\"add\">
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sr_article_add");
        echo "\" class=\"mobil\"></a>
                    </li>
                    <li class=\"desk\">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sr_article_homepage");
        echo "\" >Voir tous les articles</a>
                    </li>
                    <li class=\"list\">
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("sr_article_homepage");
        echo "\" class=\"mobil\"></a>
                    </li>
                </ul>
            </nav>

            <nav class=\"main\">
                <ul>
                    <li class=\"menu\">
                        <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                    </li>
                </ul>
            </nav>
        </header>
    <!-- Menu -->
        <section id=\"menu\">
            <!-- Links -->
            <section>
                <ul class=\"actions vertical\">
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"button big fit\">Log In</a></li>
                </ul>
                <ul class=\"actions vertical\">
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("sr_user_add");
        echo "\" class=\"button big fit\">Sign up</a></li>
                </ul>

                    ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 60
            echo "                <ul class=\"actions vertical\">
                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"button big fit\">Log Out</a></li>
                </ul>
                <ul class=\"actions vertical\">
                    <li><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"button big fit\">Modifier mon Profil</a></li>
                </ul>


                    ";
        }
        // line 69
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                <ul class=\"actions vertical\">
                    <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\" class=\"button big fit\">Back-Office</a></li>
                </ul>
                ";
        }
        // line 74
        echo "            </section>
            <!-- Actions -->
        </section>



            <div id=\"main\">
                ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "            </div>



    ";
        // line 87
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SRBlogBundle:Article:menu", array("limit" => 3)));
        echo "


    ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "
    </div>
</body>
</html>";
        
        $__internal_e887abacbd3410ed8ce06ae3260185f0483766bc87e29e065a36ff55711d49a4->leave($__internal_e887abacbd3410ed8ce06ae3260185f0483766bc87e29e065a36ff55711d49a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0117e343fd6affec66a7873080251ac1c1d6409598b36f92551d9d5e2bd5cfad = $this->env->getExtension("native_profiler");
        $__internal_0117e343fd6affec66a7873080251ac1c1d6409598b36f92551d9d5e2bd5cfad->enter($__internal_0117e343fd6affec66a7873080251ac1c1d6409598b36f92551d9d5e2bd5cfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Manwell Blog";
        
        $__internal_0117e343fd6affec66a7873080251ac1c1d6409598b36f92551d9d5e2bd5cfad->leave($__internal_0117e343fd6affec66a7873080251ac1c1d6409598b36f92551d9d5e2bd5cfad_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fc23b993833031d1a3945e2f705356d91e6f2fcbdd467850914ecbc36522898 = $this->env->getExtension("native_profiler");
        $__internal_9fc23b993833031d1a3945e2f705356d91e6f2fcbdd467850914ecbc36522898->enter($__internal_9fc23b993833031d1a3945e2f705356d91e6f2fcbdd467850914ecbc36522898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/css/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/css/integration.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_9fc23b993833031d1a3945e2f705356d91e6f2fcbdd467850914ecbc36522898->leave($__internal_9fc23b993833031d1a3945e2f705356d91e6f2fcbdd467850914ecbc36522898_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_061a347158a4a4686fed06c9c3148adfa8b190b3d925cb31bbc326a2365c6125 = $this->env->getExtension("native_profiler");
        $__internal_061a347158a4a4686fed06c9c3148adfa8b190b3d925cb31bbc326a2365c6125->enter($__internal_061a347158a4a4686fed06c9c3148adfa8b190b3d925cb31bbc326a2365c6125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "                ";
        
        $__internal_061a347158a4a4686fed06c9c3148adfa8b190b3d925cb31bbc326a2365c6125->leave($__internal_061a347158a4a4686fed06c9c3148adfa8b190b3d925cb31bbc326a2365c6125_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7c480d91bbbd8ca2d70772af00189f8e0eabee93ed525db2ca87b49308cbbe0 = $this->env->getExtension("native_profiler");
        $__internal_e7c480d91bbbd8ca2d70772af00189f8e0eabee93ed525db2ca87b49308cbbe0->enter($__internal_e7c480d91bbbd8ca2d70772af00189f8e0eabee93ed525db2ca87b49308cbbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "        ";
        // line 92
        echo "        ";
        // line 93
        echo "        ";
        // line 94
        echo "        <!-- Scripts -->
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/js/skel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/js/util.js"), "html", null, true);
        echo "\"></script>
        <!--[if lte IE 8]><script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/js/ie/respond.min.js"), "html", null, true);
        echo "></script><![endif]-->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/srblog/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_e7c480d91bbbd8ca2d70772af00189f8e0eabee93ed525db2ca87b49308cbbe0->leave($__internal_e7c480d91bbbd8ca2d70772af00189f8e0eabee93ed525db2ca87b49308cbbe0_prof);

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
        return array (  254 => 99,  250 => 98,  246 => 97,  242 => 96,  238 => 95,  235 => 94,  233 => 93,  231 => 92,  229 => 91,  223 => 90,  216 => 82,  210 => 81,  200 => 13,  195 => 12,  193 => 11,  191 => 10,  185 => 9,  173 => 7,  163 => 102,  161 => 90,  155 => 87,  149 => 83,  147 => 81,  138 => 74,  132 => 71,  129 => 70,  126 => 69,  118 => 64,  112 => 61,  109 => 60,  107 => 59,  101 => 56,  95 => 53,  74 => 35,  68 => 32,  62 => 29,  56 => 26,  49 => 22,  41 => 16,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}Manwell Blog{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         {# On charge le CSS de bootstrap depuis le site directement #}*/
/*         {#<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">#}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/srblog/css/main.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/srblog/css/integration.css') }}" />*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*     <div id="wrapper">*/
/*         <!-- Header -->*/
/*         <header id="header">*/
/*             <h1><a href="{{ path('sr_article_home') }}">Manwell</a></h1>*/
/*             <nav class="links">*/
/*                 <ul>*/
/*                     <li class="desk">*/
/*                         <a href="{{ path('sr_article_add') }} ">Ajouter un article</a>*/
/*                     </li>*/
/*                     <li class="add">*/
/*                         <a href="{{ path('sr_article_add') }}" class="mobil"></a>*/
/*                     </li>*/
/*                     <li class="desk">*/
/*                         <a href="{{ path('sr_article_homepage') }}" >Voir tous les articles</a>*/
/*                     </li>*/
/*                     <li class="list">*/
/*                         <a href="{{ path('sr_article_homepage') }}" class="mobil"></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </nav>*/
/* */
/*             <nav class="main">*/
/*                 <ul>*/
/*                     <li class="menu">*/
/*                         <a class="fa-bars" href="#menu">Menu</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </nav>*/
/*         </header>*/
/*     <!-- Menu -->*/
/*         <section id="menu">*/
/*             <!-- Links -->*/
/*             <section>*/
/*                 <ul class="actions vertical">*/
/*                     <li><a href="{{ path('login') }}" class="button big fit">Log In</a></li>*/
/*                 </ul>*/
/*                 <ul class="actions vertical">*/
/*                     <li><a href="{{ path('sr_user_add') }}" class="button big fit">Sign up</a></li>*/
/*                 </ul>*/
/* */
/*                     {% if is_granted('ROLE_USER') %}*/
/*                 <ul class="actions vertical">*/
/*                     <li><a href="{{ path('logout') }}" class="button big fit">Log Out</a></li>*/
/*                 </ul>*/
/*                 <ul class="actions vertical">*/
/*                     <li><a href="{{ path('sr_user_edit', {'id': app.user.id})  }}" class="button big fit">Modifier mon Profil</a></li>*/
/*                 </ul>*/
/* */
/* */
/*                     {% endif %}*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                 <ul class="actions vertical">*/
/*                     <li><a href="{{ path('sonata_admin_dashboard') }}" class="button big fit">Back-Office</a></li>*/
/*                 </ul>*/
/*                 {% endif %}*/
/*             </section>*/
/*             <!-- Actions -->*/
/*         </section>*/
/* */
/* */
/* */
/*             <div id="main">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/* */
/* */
/*     {{ render(controller('SRBlogBundle:Article:menu', {'limit':3})) }}*/
/* */
/* */
/*     {% block javascripts %}*/
/*         {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*         {#<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>#}*/
/*         {#<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>#}*/
/*         <!-- Scripts -->*/
/*         <script src="{{ asset('bundles/srblog/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/srblog/js/skel.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/srblog/js/util.js') }}"></script>*/
/*         <!--[if lte IE 8]><script src="{{ asset('bundles/srblog/js/ie/respond.min.js') }}></script><![endif]-->*/
/*         <script src="{{ asset('bundles/srblog/js/main.js') }}"></script>*/
/* */
/*     {% endblock %}*/
/* */
/*     </div>*/
/* </body>*/
/* </html>*/
