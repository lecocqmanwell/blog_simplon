<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_045d465b6f580e6cf296cc667eae11a7781b1ac3ad2279c9d2f8372af4c9d982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427932ee035a3259cd10bdecc1b86f753f7bb441d0184b5fd8bc42b23ea8fdab = $this->env->getExtension("native_profiler");
        $__internal_427932ee035a3259cd10bdecc1b86f753f7bb441d0184b5fd8bc42b23ea8fdab->enter($__internal_427932ee035a3259cd10bdecc1b86f753f7bb441d0184b5fd8bc42b23ea8fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_427932ee035a3259cd10bdecc1b86f753f7bb441d0184b5fd8bc42b23ea8fdab->leave($__internal_427932ee035a3259cd10bdecc1b86f753f7bb441d0184b5fd8bc42b23ea8fdab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c06933ea7459eb0846f1fe65ba3e8d1705423ce0b0f74b0150c784035d83d431 = $this->env->getExtension("native_profiler");
        $__internal_c06933ea7459eb0846f1fe65ba3e8d1705423ce0b0f74b0150c784035d83d431->enter($__internal_c06933ea7459eb0846f1fe65ba3e8d1705423ce0b0f74b0150c784035d83d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c06933ea7459eb0846f1fe65ba3e8d1705423ce0b0f74b0150c784035d83d431->leave($__internal_c06933ea7459eb0846f1fe65ba3e8d1705423ce0b0f74b0150c784035d83d431_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
