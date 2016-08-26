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
        $__internal_95117b1680c3297303dd0eaefbf2c71bb8fd9e26e2a7a6d6cc1cbbfb613764d1 = $this->env->getExtension("native_profiler");
        $__internal_95117b1680c3297303dd0eaefbf2c71bb8fd9e26e2a7a6d6cc1cbbfb613764d1->enter($__internal_95117b1680c3297303dd0eaefbf2c71bb8fd9e26e2a7a6d6cc1cbbfb613764d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_95117b1680c3297303dd0eaefbf2c71bb8fd9e26e2a7a6d6cc1cbbfb613764d1->leave($__internal_95117b1680c3297303dd0eaefbf2c71bb8fd9e26e2a7a6d6cc1cbbfb613764d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86eb578cc9ee045e29de6032ab16fb6c10eb66e969a3ecd9063e1efc86156d22 = $this->env->getExtension("native_profiler");
        $__internal_86eb578cc9ee045e29de6032ab16fb6c10eb66e969a3ecd9063e1efc86156d22->enter($__internal_86eb578cc9ee045e29de6032ab16fb6c10eb66e969a3ecd9063e1efc86156d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86eb578cc9ee045e29de6032ab16fb6c10eb66e969a3ecd9063e1efc86156d22->leave($__internal_86eb578cc9ee045e29de6032ab16fb6c10eb66e969a3ecd9063e1efc86156d22_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f020b65ddaa95f4b9fd552b9d36c116e1dea13b1368813b1dc51ca4d939f35d = $this->env->getExtension("native_profiler");
        $__internal_4f020b65ddaa95f4b9fd552b9d36c116e1dea13b1368813b1dc51ca4d939f35d->enter($__internal_4f020b65ddaa95f4b9fd552b9d36c116e1dea13b1368813b1dc51ca4d939f35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f020b65ddaa95f4b9fd552b9d36c116e1dea13b1368813b1dc51ca4d939f35d->leave($__internal_4f020b65ddaa95f4b9fd552b9d36c116e1dea13b1368813b1dc51ca4d939f35d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98066d5f6ba06e9df8f31005bee2219adb469f665b0d61a1d86a201f0039660a = $this->env->getExtension("native_profiler");
        $__internal_98066d5f6ba06e9df8f31005bee2219adb469f665b0d61a1d86a201f0039660a->enter($__internal_98066d5f6ba06e9df8f31005bee2219adb469f665b0d61a1d86a201f0039660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98066d5f6ba06e9df8f31005bee2219adb469f665b0d61a1d86a201f0039660a->leave($__internal_98066d5f6ba06e9df8f31005bee2219adb469f665b0d61a1d86a201f0039660a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e75d58b74ec55e57a021ff3cd982e909116efc84a1e78df04b11850a9b0e5542 = $this->env->getExtension("native_profiler");
        $__internal_e75d58b74ec55e57a021ff3cd982e909116efc84a1e78df04b11850a9b0e5542->enter($__internal_e75d58b74ec55e57a021ff3cd982e909116efc84a1e78df04b11850a9b0e5542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e75d58b74ec55e57a021ff3cd982e909116efc84a1e78df04b11850a9b0e5542->leave($__internal_e75d58b74ec55e57a021ff3cd982e909116efc84a1e78df04b11850a9b0e5542_prof);

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
