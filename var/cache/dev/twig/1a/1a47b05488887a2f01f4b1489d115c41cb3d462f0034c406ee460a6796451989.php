<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b2cf8b56fae838441c8ac4799c4f902eacdeec956407bfa4ddfebd81d3a97e08 extends Twig_Template
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
        $__internal_d0ff2f4eca644816ff7fb1206d46e2c0624caa3c06213d7ed150b7f87dec5221 = $this->env->getExtension("native_profiler");
        $__internal_d0ff2f4eca644816ff7fb1206d46e2c0624caa3c06213d7ed150b7f87dec5221->enter($__internal_d0ff2f4eca644816ff7fb1206d46e2c0624caa3c06213d7ed150b7f87dec5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d0ff2f4eca644816ff7fb1206d46e2c0624caa3c06213d7ed150b7f87dec5221->leave($__internal_d0ff2f4eca644816ff7fb1206d46e2c0624caa3c06213d7ed150b7f87dec5221_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
