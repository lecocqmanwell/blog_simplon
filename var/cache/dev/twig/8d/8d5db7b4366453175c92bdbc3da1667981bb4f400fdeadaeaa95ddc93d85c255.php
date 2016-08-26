<?php

/* SRBlogBundle:User:edit.html.twig */
class __TwigTemplate_3f94724a430fbde069814aeed93ef8f03aaedefc372496da9fe87144c2668aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SRBlogBundle::layout.html.twig", "SRBlogBundle:User:edit.html.twig", 1);
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
        $__internal_87f4d926e2904e0699f864e446ed207915b79db1f5fd217d80da0af28b1af294 = $this->env->getExtension("native_profiler");
        $__internal_87f4d926e2904e0699f864e446ed207915b79db1f5fd217d80da0af28b1af294->enter($__internal_87f4d926e2904e0699f864e446ed207915b79db1f5fd217d80da0af28b1af294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f4d926e2904e0699f864e446ed207915b79db1f5fd217d80da0af28b1af294->leave($__internal_87f4d926e2904e0699f864e446ed207915b79db1f5fd217d80da0af28b1af294_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebf62a375a8f0ed973096a4780c0b8619c2c02f8f34b376da6fd1794a1911472 = $this->env->getExtension("native_profiler");
        $__internal_ebf62a375a8f0ed973096a4780c0b8619c2c02f8f34b376da6fd1794a1911472->enter($__internal_ebf62a375a8f0ed973096a4780c0b8619c2c02f8f34b376da6fd1794a1911472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Modifer un utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ebf62a375a8f0ed973096a4780c0b8619c2c02f8f34b376da6fd1794a1911472->leave($__internal_ebf62a375a8f0ed973096a4780c0b8619c2c02f8f34b376da6fd1794a1911472_prof);

    }

    // line 7
    public function block_sruser_body($context, array $blocks = array())
    {
        $__internal_c6def0d9ec344ef519b9624bb617241805291e363d48f80ad1d1d1219c0a934c = $this->env->getExtension("native_profiler");
        $__internal_c6def0d9ec344ef519b9624bb617241805291e363d48f80ad1d1d1219c0a934c->enter($__internal_c6def0d9ec344ef519b9624bb617241805291e363d48f80ad1d1d1219c0a934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sruser_body"));

        // line 8
        echo "
    <h2>Modifier votre compte</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "SRBlogBundle:User:form.html.twig");
        echo "

    <ul class=\"actions fit\">
       <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sr_user_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"button fit\">
                supprimer votre compte
            </a>
        </li>
    </ul>

";
        
        $__internal_c6def0d9ec344ef519b9624bb617241805291e363d48f80ad1d1d1219c0a934c->leave($__internal_c6def0d9ec344ef519b9624bb617241805291e363d48f80ad1d1d1219c0a934c_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SRBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*    Modifer un utilisateur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sruser_body %}*/
/* */
/*     <h2>Modifier votre compte</h2>*/
/* */
/*     {{ include("SRBlogBundle:User:form.html.twig") }}*/
/* */
/*     <ul class="actions fit">*/
/*        <li>*/
/*             <a href="{{ path('sr_user_delete', {'id': app.user.id}) }}" class="button fit">*/
/*                 supprimer votre compte*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
