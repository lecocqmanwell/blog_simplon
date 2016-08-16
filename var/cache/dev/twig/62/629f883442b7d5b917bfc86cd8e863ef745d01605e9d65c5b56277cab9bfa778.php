<?php

/* :default:base.html.twig */
class __TwigTemplate_355866caed05fb55c2ba8dc8fec46bc487859810de7102305650a0e416affe2b extends Twig_Template
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
        $__internal_717d8aa5258c23a4f1cc32a5729ca6a48f52b4ceb15b7e1b6d3978c610fc126b = $this->env->getExtension("native_profiler");
        $__internal_717d8aa5258c23a4f1cc32a5729ca6a48f52b4ceb15b7e1b6d3978c610fc126b->enter($__internal_717d8aa5258c23a4f1cc32a5729ca6a48f52b4ceb15b7e1b6d3978c610fc126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:base.html.twig"));

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
        
        $__internal_717d8aa5258c23a4f1cc32a5729ca6a48f52b4ceb15b7e1b6d3978c610fc126b->leave($__internal_717d8aa5258c23a4f1cc32a5729ca6a48f52b4ceb15b7e1b6d3978c610fc126b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d57e3375b2514badcaf8dd8f1ed3031663f225ce15146e1e23fe23e456e09946 = $this->env->getExtension("native_profiler");
        $__internal_d57e3375b2514badcaf8dd8f1ed3031663f225ce15146e1e23fe23e456e09946->enter($__internal_d57e3375b2514badcaf8dd8f1ed3031663f225ce15146e1e23fe23e456e09946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d57e3375b2514badcaf8dd8f1ed3031663f225ce15146e1e23fe23e456e09946->leave($__internal_d57e3375b2514badcaf8dd8f1ed3031663f225ce15146e1e23fe23e456e09946_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6443174cadeeaea10daac5a1e45614b19bbdc7405d93f71744f0cf36c88689ae = $this->env->getExtension("native_profiler");
        $__internal_6443174cadeeaea10daac5a1e45614b19bbdc7405d93f71744f0cf36c88689ae->enter($__internal_6443174cadeeaea10daac5a1e45614b19bbdc7405d93f71744f0cf36c88689ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6443174cadeeaea10daac5a1e45614b19bbdc7405d93f71744f0cf36c88689ae->leave($__internal_6443174cadeeaea10daac5a1e45614b19bbdc7405d93f71744f0cf36c88689ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7efc2fa5bf54afebf573208610d10f90ecadbde1162d63a2d4c792f0e66793 = $this->env->getExtension("native_profiler");
        $__internal_8b7efc2fa5bf54afebf573208610d10f90ecadbde1162d63a2d4c792f0e66793->enter($__internal_8b7efc2fa5bf54afebf573208610d10f90ecadbde1162d63a2d4c792f0e66793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b7efc2fa5bf54afebf573208610d10f90ecadbde1162d63a2d4c792f0e66793->leave($__internal_8b7efc2fa5bf54afebf573208610d10f90ecadbde1162d63a2d4c792f0e66793_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7903f9ab99dc3d39d923d6052b97aecf7202ed9239a5c850a925d62fa079613 = $this->env->getExtension("native_profiler");
        $__internal_b7903f9ab99dc3d39d923d6052b97aecf7202ed9239a5c850a925d62fa079613->enter($__internal_b7903f9ab99dc3d39d923d6052b97aecf7202ed9239a5c850a925d62fa079613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7903f9ab99dc3d39d923d6052b97aecf7202ed9239a5c850a925d62fa079613->leave($__internal_b7903f9ab99dc3d39d923d6052b97aecf7202ed9239a5c850a925d62fa079613_prof);

    }

    public function getTemplateName()
    {
        return ":default:base.html.twig";
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
