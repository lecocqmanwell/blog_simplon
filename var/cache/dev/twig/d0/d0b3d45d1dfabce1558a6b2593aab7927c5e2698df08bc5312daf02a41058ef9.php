<?php

/* SRBlogBundle:User:form.html.twig */
class __TwigTemplate_dd55286e9d28fec124003ac1d8ce4fb17756e6fb4455db65f32907089f642d29 extends Twig_Template
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
        $__internal_2f7a576f1554e2d538de9965875f893344e9a9ece1eeed1b6a3b75997ae280e4 = $this->env->getExtension("native_profiler");
        $__internal_2f7a576f1554e2d538de9965875f893344e9a9ece1eeed1b6a3b75997ae280e4->enter($__internal_2f7a576f1554e2d538de9965875f893344e9a9ece1eeed1b6a3b75997ae280e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRBlogBundle:User:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'enregistrement des utilisateurs</h3>
<div class=\"well\">
        ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"form-group\">
                ";
        // line 7
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "username"));
        echo "

                ";
        // line 10
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "

                <div class=\"col-sm-10\">
                        ";
        // line 14
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
        </div>


        <div class=\"form-group\">
        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "

        ";
        // line 24
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
                ";
        // line 28
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
</div>

<div class=\"form-group\">
        ";
        // line 34
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prénom"));
        echo "

        ";
        // line 37
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
</div>

<div class=\"form-group\">
        ";
        // line 47
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "E-Mail"));
        echo "

        ";
        // line 50
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
                ";
        // line 54
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
</div>

<div class=\"form-group\">
        ";
        // line 60
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Mots de Passe"));
        echo "

        ";
        // line 63
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
                ";
        // line 67
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
</div>

        ";
        // line 72
        echo "                ";
        // line 73
        echo "                ";
        // line 74
        echo "
                ";
        // line 76
        echo "                ";
        // line 77
        echo "                ";
        // line 78
        echo "                        ";
        // line 79
        echo "                        ";
        // line 80
        echo "                ";
        // line 81
        echo "        ";
        // line 82
        echo "

";
        // line 85
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 90
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 93
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_2f7a576f1554e2d538de9965875f893344e9a9ece1eeed1b6a3b75997ae280e4->leave($__internal_2f7a576f1554e2d538de9965875f893344e9a9ece1eeed1b6a3b75997ae280e4_prof);

    }

    public function getTemplateName()
    {
        return "SRBlogBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 93,  171 => 90,  165 => 85,  161 => 82,  159 => 81,  157 => 80,  155 => 79,  153 => 78,  151 => 77,  149 => 76,  146 => 74,  144 => 73,  142 => 72,  134 => 67,  127 => 63,  121 => 60,  112 => 54,  105 => 50,  99 => 47,  90 => 41,  83 => 37,  77 => 34,  68 => 28,  61 => 24,  55 => 21,  45 => 14,  38 => 10,  32 => 7,  26 => 3,  22 => 1,);
    }
}
/* <h3>Formulaire d'enregistrement des utilisateurs</h3>*/
/* <div class="well">*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         <div class="form-group">*/
/*                 {# Génération du label. #}*/
/*                 {{ form_label(form.username, "username", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*                 {# Affichage des erreurs pour ce champ précis. #}*/
/*                 {{ form_errors(form.username) }}*/
/* */
/*                 <div class="col-sm-10">*/
/*                         {# Génération de l'input. #}*/
/*                         {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.name, "Nom", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.name) }}*/
/* */
/*         <div class="col-sm-10">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.firstname, "Prénom", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.firstname) }}*/
/* */
/*         <div class="col-sm-10">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.mail, "E-Mail", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.mail) }}*/
/* */
/*         <div class="col-sm-10">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.mail, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.password, "Mots de Passe", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.password) }}*/
/* */
/*         <div class="col-sm-10">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* </div>*/
/* */
/*         {#<div class="form-group">#}*/
/*                 {# Génération du label. #}*/
/*                 {#{{ form_label(form.avatar, "Avatar", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}*/
/* */
/*                 {# Affichage des erreurs pour ce champ précis. #}*/
/*                 {#{{ form_errors(form.avatar) }}#}*/
/*                 {#<div class="col-sm-10">#}*/
/*                         {# Génération de l'input. #}*/
/*                         {#{{ form_widget(form.avatar, {'attr': {'class': 'form-control'}}) }}#}*/
/*                 {#</div>#}*/
/*         {#</div>#}*/
/* */
/* */
/* {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
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
/* */
