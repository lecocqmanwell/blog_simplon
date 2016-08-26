<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0ef186400a182529db21c6ad04da24cde0420e8caff8e2ae45100ff6f6170126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ef22ebe7a6a45cdda1427e80d0dcf4aa2ca9c65c8d6ebe3d7cebf55a8c5104f7 = $this->env->getExtension("native_profiler");
        $__internal_ef22ebe7a6a45cdda1427e80d0dcf4aa2ca9c65c8d6ebe3d7cebf55a8c5104f7->enter($__internal_ef22ebe7a6a45cdda1427e80d0dcf4aa2ca9c65c8d6ebe3d7cebf55a8c5104f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef22ebe7a6a45cdda1427e80d0dcf4aa2ca9c65c8d6ebe3d7cebf55a8c5104f7->leave($__internal_ef22ebe7a6a45cdda1427e80d0dcf4aa2ca9c65c8d6ebe3d7cebf55a8c5104f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1dd3ccdf62d1ee4e13408576b52c17a1b828ed4ac25fd74dade1605271eca51 = $this->env->getExtension("native_profiler");
        $__internal_b1dd3ccdf62d1ee4e13408576b52c17a1b828ed4ac25fd74dade1605271eca51->enter($__internal_b1dd3ccdf62d1ee4e13408576b52c17a1b828ed4ac25fd74dade1605271eca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b1dd3ccdf62d1ee4e13408576b52c17a1b828ed4ac25fd74dade1605271eca51->leave($__internal_b1dd3ccdf62d1ee4e13408576b52c17a1b828ed4ac25fd74dade1605271eca51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a426624967a8e96d6f9083486041b097b19028fd4a40ca16f99094b669269b6 = $this->env->getExtension("native_profiler");
        $__internal_6a426624967a8e96d6f9083486041b097b19028fd4a40ca16f99094b669269b6->enter($__internal_6a426624967a8e96d6f9083486041b097b19028fd4a40ca16f99094b669269b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6a426624967a8e96d6f9083486041b097b19028fd4a40ca16f99094b669269b6->leave($__internal_6a426624967a8e96d6f9083486041b097b19028fd4a40ca16f99094b669269b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
