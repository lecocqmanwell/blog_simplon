<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_62518c72959efdc9fa466725cc94a53f3a0427b274f59bed97dcd7f6aae6413d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_720e5ba27a03fcb6571398ef6367fd87c8676f669bb202b791c78937aaaf7b35 = $this->env->getExtension("native_profiler");
        $__internal_720e5ba27a03fcb6571398ef6367fd87c8676f669bb202b791c78937aaaf7b35->enter($__internal_720e5ba27a03fcb6571398ef6367fd87c8676f669bb202b791c78937aaaf7b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720e5ba27a03fcb6571398ef6367fd87c8676f669bb202b791c78937aaaf7b35->leave($__internal_720e5ba27a03fcb6571398ef6367fd87c8676f669bb202b791c78937aaaf7b35_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_506cc3b96f3f84f05848bf6a44cf342dd59af6290c80efe0c05bc929831ade26 = $this->env->getExtension("native_profiler");
        $__internal_506cc3b96f3f84f05848bf6a44cf342dd59af6290c80efe0c05bc929831ade26->enter($__internal_506cc3b96f3f84f05848bf6a44cf342dd59af6290c80efe0c05bc929831ade26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_506cc3b96f3f84f05848bf6a44cf342dd59af6290c80efe0c05bc929831ade26->leave($__internal_506cc3b96f3f84f05848bf6a44cf342dd59af6290c80efe0c05bc929831ade26_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
