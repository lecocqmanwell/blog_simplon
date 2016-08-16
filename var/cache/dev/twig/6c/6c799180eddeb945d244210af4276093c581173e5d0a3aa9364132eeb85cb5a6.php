<?php

/* SRBlogBundle:User:view.html.twig */
class __TwigTemplate_57494b3e1a6e29ce2bc8f8fa684a15f65600573d1e39dc04b0f271b688499677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:view.html.twig", 1);
        $this->blocks = array(
            'sruser_body' => array($this, 'block_sruser_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SRBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4bfe3a7d3d9a9ec28b6472fc5ccd59b8853ad50106dbae56749f3f2e27938c6 = $this->env->getExtension("native_profiler");
        $__internal_d4bfe3a7d3d9a9ec28b6472fc5ccd59b8853ad50106dbae56749f3f2e27938c6->enter($__internal_d4bfe3a7d3d9a9ec28b6472fc5ccd59b8853ad50106dbae56749f3f2e27938c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4bfe3a7d3d9a9ec28b6472fc5ccd59b8853ad50106dbae56749f3f2e27938c6->leave($__internal_d4bfe3a7d3d9a9ec28b6472fc5ccd59b8853ad50106dbae56749f3f2e27938c6_prof);

    }

    // line 3
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_e9830080b9280f77837003d000a4c60da3710c2bfba62ef95818d33a015488ad = $this->env->getExtension("native_profiler");
        $__internal_e9830080b9280f77837003d000a4c60da3710c2bfba62ef95818d33a015488ad->enter($__internal_e9830080b9280f77837003d000a4c60da3710c2bfba62ef95818d33a015488ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 4
        echo "

<h1>view du user</h1>



    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 11
            echo "        <ul>
            <li>
                <p>le nom du User est :  ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</p>
            </li>
        <li>
            <p>le prénom du User est :  ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</p>
        </li>
        <li>
            <p>le mail du User est :  ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
            echo "</p>
        </li>
        <li>
            <p>l'avatar du User est :  ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatar", array()), "html", null, true);
            echo "</p>
        </li>

        </ul>
        ";
            // line 26
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array())))) {
                // line 27
                echo "            <ul>
                <li>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                    edit utilisateur
                    </a>
                </li>

                <li>
                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                        supprimer utilisateur
                    </a>
                </li>
            </ul>
        ";
            }
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("sr_user_homepage");
        echo "\">
            Liste des utilisateurs
        </a>



";
        
        $__internal_e9830080b9280f77837003d000a4c60da3710c2bfba62ef95818d33a015488ad->leave($__internal_e9830080b9280f77837003d000a4c60da3710c2bfba62ef95818d33a015488ad_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  111 => 42,  105 => 41,  96 => 35,  87 => 29,  83 => 27,  81 => 26,  74 => 22,  68 => 19,  62 => 16,  56 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block sruser_body %}*/
/* */
/* */
/* <h1>view du user</h1>*/
/* */
/* */
/* */
/*     {% for key, user in user %}*/
/*         <ul>*/
/*             <li>*/
/*                 <p>le nom du User est :  {{ user.name }}</p>*/
/*             </li>*/
/*         <li>*/
/*             <p>le prénom du User est :  {{ user.firstname }}</p>*/
/*         </li>*/
/*         <li>*/
/*             <p>le mail du User est :  {{ user.mail }}</p>*/
/*         </li>*/
/*         <li>*/
/*             <p>l'avatar du User est :  {{ user.avatar }}</p>*/
/*         </li>*/
/* */
/*         </ul>*/
/*         {% if is_granted('ROLE_ADMIN') or app.user.id == user.id %}*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('sr_user_edit', {'id': user.id}) }}">*/
/*                     edit utilisateur*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li>*/
/*                     <a href="{{ path('sr_user_delete', {'id': user.id}) }}">*/
/*                         supprimer utilisateur*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* */
/*         <a href="{{ path('sr_user_homepage') }}">*/
/*             Liste des utilisateurs*/
/*         </a>*/
/* */
/* */
/* */
/* {% endblock %}*/
