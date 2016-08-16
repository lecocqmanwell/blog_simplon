<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_594b890838d1b2980952f6d0c56a5e077935294389830beb16e194469e7b9a5a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c8eb0dc6033c0630e8e36496b6fdce7cadf3ff341f4d8404a15833f5a7f818 = $this->env->getExtension("native_profiler");
        $__internal_91c8eb0dc6033c0630e8e36496b6fdce7cadf3ff341f4d8404a15833f5a7f818->enter($__internal_91c8eb0dc6033c0630e8e36496b6fdce7cadf3ff341f4d8404a15833f5a7f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c8eb0dc6033c0630e8e36496b6fdce7cadf3ff341f4d8404a15833f5a7f818->leave($__internal_91c8eb0dc6033c0630e8e36496b6fdce7cadf3ff341f4d8404a15833f5a7f818_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9a1bd044a17f461dee75ad27a9a3a087fd67ebff63eb2c95582ca85ca1ab847d = $this->env->getExtension("native_profiler");
        $__internal_9a1bd044a17f461dee75ad27a9a3a087fd67ebff63eb2c95582ca85ca1ab847d->enter($__internal_9a1bd044a17f461dee75ad27a9a3a087fd67ebff63eb2c95582ca85ca1ab847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_9a1bd044a17f461dee75ad27a9a3a087fd67ebff63eb2c95582ca85ca1ab847d->leave($__internal_9a1bd044a17f461dee75ad27a9a3a087fd67ebff63eb2c95582ca85ca1ab847d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
