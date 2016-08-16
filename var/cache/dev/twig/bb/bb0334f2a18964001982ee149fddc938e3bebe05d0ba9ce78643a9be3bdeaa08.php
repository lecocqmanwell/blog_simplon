<?php

/* ::base.html.twig */
class __TwigTemplate_1c362334d2d10f7a1c8b81cef4f1264eb42b93fcc8254195402a5a9e4c882f15 extends Twig_Template
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
        $__internal_f3b6f544a1e3d64f1a0fdd8228a84b78499a98151eaf528ef64c2178dfc08105 = $this->env->getExtension("native_profiler");
        $__internal_f3b6f544a1e3d64f1a0fdd8228a84b78499a98151eaf528ef64c2178dfc08105->enter($__internal_f3b6f544a1e3d64f1a0fdd8228a84b78499a98151eaf528ef64c2178dfc08105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f3b6f544a1e3d64f1a0fdd8228a84b78499a98151eaf528ef64c2178dfc08105->leave($__internal_f3b6f544a1e3d64f1a0fdd8228a84b78499a98151eaf528ef64c2178dfc08105_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9307f49b8fa24db0d13cad94064713d2649bf0154238c0da1eb9d21684e006cb = $this->env->getExtension("native_profiler");
        $__internal_9307f49b8fa24db0d13cad94064713d2649bf0154238c0da1eb9d21684e006cb->enter($__internal_9307f49b8fa24db0d13cad94064713d2649bf0154238c0da1eb9d21684e006cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9307f49b8fa24db0d13cad94064713d2649bf0154238c0da1eb9d21684e006cb->leave($__internal_9307f49b8fa24db0d13cad94064713d2649bf0154238c0da1eb9d21684e006cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce14c249e199bcabddc490a649cafe24f70d6723f9d78507d1a4528cb6bc629a = $this->env->getExtension("native_profiler");
        $__internal_ce14c249e199bcabddc490a649cafe24f70d6723f9d78507d1a4528cb6bc629a->enter($__internal_ce14c249e199bcabddc490a649cafe24f70d6723f9d78507d1a4528cb6bc629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce14c249e199bcabddc490a649cafe24f70d6723f9d78507d1a4528cb6bc629a->leave($__internal_ce14c249e199bcabddc490a649cafe24f70d6723f9d78507d1a4528cb6bc629a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11d05b5adfac3342542bb481ae3cd1f8394a21061c85465aeb883c55244519c = $this->env->getExtension("native_profiler");
        $__internal_a11d05b5adfac3342542bb481ae3cd1f8394a21061c85465aeb883c55244519c->enter($__internal_a11d05b5adfac3342542bb481ae3cd1f8394a21061c85465aeb883c55244519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a11d05b5adfac3342542bb481ae3cd1f8394a21061c85465aeb883c55244519c->leave($__internal_a11d05b5adfac3342542bb481ae3cd1f8394a21061c85465aeb883c55244519c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df7afa1bdcedb422e7c80d9ee8c5881a4995e615a9da1ecac856c6dd09ed7ba5 = $this->env->getExtension("native_profiler");
        $__internal_df7afa1bdcedb422e7c80d9ee8c5881a4995e615a9da1ecac856c6dd09ed7ba5->enter($__internal_df7afa1bdcedb422e7c80d9ee8c5881a4995e615a9da1ecac856c6dd09ed7ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df7afa1bdcedb422e7c80d9ee8c5881a4995e615a9da1ecac856c6dd09ed7ba5->leave($__internal_df7afa1bdcedb422e7c80d9ee8c5881a4995e615a9da1ecac856c6dd09ed7ba5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
