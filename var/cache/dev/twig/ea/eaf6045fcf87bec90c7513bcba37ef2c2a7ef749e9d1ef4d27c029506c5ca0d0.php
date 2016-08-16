<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_1b736b075e428773a67b0e56b26b557c5c79efef87d35005d3b0f15c70598990 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59a5ddb046555e68e6ce80a9bf8f3c396e0e05b7b1d0b9f243573b30ca7f6d4f = $this->env->getExtension("native_profiler");
        $__internal_59a5ddb046555e68e6ce80a9bf8f3c396e0e05b7b1d0b9f243573b30ca7f6d4f->enter($__internal_59a5ddb046555e68e6ce80a9bf8f3c396e0e05b7b1d0b9f243573b30ca7f6d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59a5ddb046555e68e6ce80a9bf8f3c396e0e05b7b1d0b9f243573b30ca7f6d4f->leave($__internal_59a5ddb046555e68e6ce80a9bf8f3c396e0e05b7b1d0b9f243573b30ca7f6d4f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_289101d7990eb878722188121e3860236fbba97d8bebecf7d272e99c47f5ed5d = $this->env->getExtension("native_profiler");
        $__internal_289101d7990eb878722188121e3860236fbba97d8bebecf7d272e99c47f5ed5d->enter($__internal_289101d7990eb878722188121e3860236fbba97d8bebecf7d272e99c47f5ed5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_289101d7990eb878722188121e3860236fbba97d8bebecf7d272e99c47f5ed5d->leave($__internal_289101d7990eb878722188121e3860236fbba97d8bebecf7d272e99c47f5ed5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
