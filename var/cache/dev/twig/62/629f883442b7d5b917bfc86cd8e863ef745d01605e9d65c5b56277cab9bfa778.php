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
        $__internal_0cf00d77f67e0d03ce55e6ce81287bcd6b2ca989f794d37cba076588f7add380 = $this->env->getExtension("native_profiler");
        $__internal_0cf00d77f67e0d03ce55e6ce81287bcd6b2ca989f794d37cba076588f7add380->enter($__internal_0cf00d77f67e0d03ce55e6ce81287bcd6b2ca989f794d37cba076588f7add380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:base.html.twig"));

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
        
        $__internal_0cf00d77f67e0d03ce55e6ce81287bcd6b2ca989f794d37cba076588f7add380->leave($__internal_0cf00d77f67e0d03ce55e6ce81287bcd6b2ca989f794d37cba076588f7add380_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b7d235361fc5588e98cb5a09b33ac7645007438fd42ee272da850316281aee1 = $this->env->getExtension("native_profiler");
        $__internal_6b7d235361fc5588e98cb5a09b33ac7645007438fd42ee272da850316281aee1->enter($__internal_6b7d235361fc5588e98cb5a09b33ac7645007438fd42ee272da850316281aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b7d235361fc5588e98cb5a09b33ac7645007438fd42ee272da850316281aee1->leave($__internal_6b7d235361fc5588e98cb5a09b33ac7645007438fd42ee272da850316281aee1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25dc8cf0b771493402bd8b9c498e650108e5220187d05a9102d21acb5dfb811b = $this->env->getExtension("native_profiler");
        $__internal_25dc8cf0b771493402bd8b9c498e650108e5220187d05a9102d21acb5dfb811b->enter($__internal_25dc8cf0b771493402bd8b9c498e650108e5220187d05a9102d21acb5dfb811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_25dc8cf0b771493402bd8b9c498e650108e5220187d05a9102d21acb5dfb811b->leave($__internal_25dc8cf0b771493402bd8b9c498e650108e5220187d05a9102d21acb5dfb811b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9249bc0f9e1caf2a7e8f3c482433522aae39c6db6693266532b274e26c91ee11 = $this->env->getExtension("native_profiler");
        $__internal_9249bc0f9e1caf2a7e8f3c482433522aae39c6db6693266532b274e26c91ee11->enter($__internal_9249bc0f9e1caf2a7e8f3c482433522aae39c6db6693266532b274e26c91ee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9249bc0f9e1caf2a7e8f3c482433522aae39c6db6693266532b274e26c91ee11->leave($__internal_9249bc0f9e1caf2a7e8f3c482433522aae39c6db6693266532b274e26c91ee11_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d03d2380280b7886fc6d57dcd576c38ff58621e7c51164ca76f8eb84249f32ff = $this->env->getExtension("native_profiler");
        $__internal_d03d2380280b7886fc6d57dcd576c38ff58621e7c51164ca76f8eb84249f32ff->enter($__internal_d03d2380280b7886fc6d57dcd576c38ff58621e7c51164ca76f8eb84249f32ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d03d2380280b7886fc6d57dcd576c38ff58621e7c51164ca76f8eb84249f32ff->leave($__internal_d03d2380280b7886fc6d57dcd576c38ff58621e7c51164ca76f8eb84249f32ff_prof);

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
