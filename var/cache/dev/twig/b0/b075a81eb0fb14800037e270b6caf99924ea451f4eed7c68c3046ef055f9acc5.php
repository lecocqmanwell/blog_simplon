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
        $__internal_313550c93a389555389f73d7657e69e77d598ff24097d75e936fe01956be8efc = $this->env->getExtension("native_profiler");
        $__internal_313550c93a389555389f73d7657e69e77d598ff24097d75e936fe01956be8efc->enter($__internal_313550c93a389555389f73d7657e69e77d598ff24097d75e936fe01956be8efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313550c93a389555389f73d7657e69e77d598ff24097d75e936fe01956be8efc->leave($__internal_313550c93a389555389f73d7657e69e77d598ff24097d75e936fe01956be8efc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02385b79d77dbacb2a914251aef4996e328709f6137d4ac06a57782d7e937445 = $this->env->getExtension("native_profiler");
        $__internal_02385b79d77dbacb2a914251aef4996e328709f6137d4ac06a57782d7e937445->enter($__internal_02385b79d77dbacb2a914251aef4996e328709f6137d4ac06a57782d7e937445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_02385b79d77dbacb2a914251aef4996e328709f6137d4ac06a57782d7e937445->leave($__internal_02385b79d77dbacb2a914251aef4996e328709f6137d4ac06a57782d7e937445_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c54b6e24346b09ef74471c3a10f88d034f3c9df940acf1665455728c621eaba8 = $this->env->getExtension("native_profiler");
        $__internal_c54b6e24346b09ef74471c3a10f88d034f3c9df940acf1665455728c621eaba8->enter($__internal_c54b6e24346b09ef74471c3a10f88d034f3c9df940acf1665455728c621eaba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c54b6e24346b09ef74471c3a10f88d034f3c9df940acf1665455728c621eaba8->leave($__internal_c54b6e24346b09ef74471c3a10f88d034f3c9df940acf1665455728c621eaba8_prof);

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
