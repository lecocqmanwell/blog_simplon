<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3cfffd5405080c6e37de45df2c8ca6f9c6012e676bce5aee7b0b7995e6217b22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_629243928d304af953b2f296817a0d986f3bcebcd6df492511d0cb98f2fa34c9 = $this->env->getExtension("native_profiler");
        $__internal_629243928d304af953b2f296817a0d986f3bcebcd6df492511d0cb98f2fa34c9->enter($__internal_629243928d304af953b2f296817a0d986f3bcebcd6df492511d0cb98f2fa34c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_629243928d304af953b2f296817a0d986f3bcebcd6df492511d0cb98f2fa34c9->leave($__internal_629243928d304af953b2f296817a0d986f3bcebcd6df492511d0cb98f2fa34c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0c59fea2ff2bc14b796e302ec747e4ecaa3f53b6dcf7847e825ed54b7f00811 = $this->env->getExtension("native_profiler");
        $__internal_d0c59fea2ff2bc14b796e302ec747e4ecaa3f53b6dcf7847e825ed54b7f00811->enter($__internal_d0c59fea2ff2bc14b796e302ec747e4ecaa3f53b6dcf7847e825ed54b7f00811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0c59fea2ff2bc14b796e302ec747e4ecaa3f53b6dcf7847e825ed54b7f00811->leave($__internal_d0c59fea2ff2bc14b796e302ec747e4ecaa3f53b6dcf7847e825ed54b7f00811_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b9c8c1ba4e9aaea5859409c38852d8fad2b2f59aae26a288bb44646a6630e2 = $this->env->getExtension("native_profiler");
        $__internal_57b9c8c1ba4e9aaea5859409c38852d8fad2b2f59aae26a288bb44646a6630e2->enter($__internal_57b9c8c1ba4e9aaea5859409c38852d8fad2b2f59aae26a288bb44646a6630e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57b9c8c1ba4e9aaea5859409c38852d8fad2b2f59aae26a288bb44646a6630e2->leave($__internal_57b9c8c1ba4e9aaea5859409c38852d8fad2b2f59aae26a288bb44646a6630e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_efe9da67950d37948107d9bbf98f8ff7028e181cd876601facaa49833434f3af = $this->env->getExtension("native_profiler");
        $__internal_efe9da67950d37948107d9bbf98f8ff7028e181cd876601facaa49833434f3af->enter($__internal_efe9da67950d37948107d9bbf98f8ff7028e181cd876601facaa49833434f3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_efe9da67950d37948107d9bbf98f8ff7028e181cd876601facaa49833434f3af->leave($__internal_efe9da67950d37948107d9bbf98f8ff7028e181cd876601facaa49833434f3af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
