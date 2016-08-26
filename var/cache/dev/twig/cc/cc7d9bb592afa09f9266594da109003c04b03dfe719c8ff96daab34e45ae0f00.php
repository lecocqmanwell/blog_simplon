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
        $__internal_42d00191b66a94eaa0ab6e58eeda7cfac55bad7a208e4594c98d72769cdd94ba = $this->env->getExtension("native_profiler");
        $__internal_42d00191b66a94eaa0ab6e58eeda7cfac55bad7a208e4594c98d72769cdd94ba->enter($__internal_42d00191b66a94eaa0ab6e58eeda7cfac55bad7a208e4594c98d72769cdd94ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d00191b66a94eaa0ab6e58eeda7cfac55bad7a208e4594c98d72769cdd94ba->leave($__internal_42d00191b66a94eaa0ab6e58eeda7cfac55bad7a208e4594c98d72769cdd94ba_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_96ec45c7c339d87a85c9f750aaba2c4b2c84e2da7ec441900fdcdb05335cd54c = $this->env->getExtension("native_profiler");
        $__internal_96ec45c7c339d87a85c9f750aaba2c4b2c84e2da7ec441900fdcdb05335cd54c->enter($__internal_96ec45c7c339d87a85c9f750aaba2c4b2c84e2da7ec441900fdcdb05335cd54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_96ec45c7c339d87a85c9f750aaba2c4b2c84e2da7ec441900fdcdb05335cd54c->leave($__internal_96ec45c7c339d87a85c9f750aaba2c4b2c84e2da7ec441900fdcdb05335cd54c_prof);

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
