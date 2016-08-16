<?php

/* SRBlogBundle:Article:form.html.twig */
class __TwigTemplate_cc5e76ac992dc4e2a1440d9cf7308ea9bbab8b304f3264845826d7e12656663b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a93295ce6dbd6ef6ffb950f1e809c289ca5c6de7e85f7df219548dfd51a32b61 = $this->env->getExtension("native_profiler");
        $__internal_a93295ce6dbd6ef6ffb950f1e809c289ca5c6de7e85f7df219548dfd51a32b61->enter($__internal_a93295ce6dbd6ef6ffb950f1e809c289ca5c6de7e85f7df219548dfd51a32b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:Article:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'article</h3>

<div class=\"well\">
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "

    ";
        // line 13
        echo "    <div class=\"form-group\">
        ";
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'article"));
        echo "

        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 22
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 27
        echo "    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'article"));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>


    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "

    ";
        // line 39
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 44
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 47
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_a93295ce6dbd6ef6ffb950f1e809c289ca5c6de7e85f7df219548dfd51a32b61->leave($__internal_a93295ce6dbd6ef6ffb950f1e809c289ca5c6de7e85f7df219548dfd51a32b61_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:Article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  99 => 44,  93 => 39,  88 => 36,  80 => 31,  75 => 29,  71 => 28,  68 => 27,  60 => 22,  53 => 18,  47 => 15,  44 => 13,  38 => 10,  32 => 7,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire d'article</h3>*/
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {# Génération du label + error + widget pour un champ. #}*/
/*     {{ form_row(form.date)  }}*/
/* */
/*     {# Génération manuelle et éclatée : #}*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.title, "Titre de l'article", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-sm-10">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*         {{ form_label(form.content, "Contenu de l'article", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.title) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {{ form_row(form.published) }}*/
/* */
/*     {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*     {# Génération automatique des champs pas encore écrits.*/
/*        Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*        et tous les champs cachés (type « hidden »). #}*/
/*     {{ form_rest(form) }}*/
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/*     {{ form_end(form) }}*/
/* </div>*/
