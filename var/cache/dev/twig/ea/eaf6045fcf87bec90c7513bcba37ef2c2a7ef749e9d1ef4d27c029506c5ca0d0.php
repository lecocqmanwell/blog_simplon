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
        $__internal_f1a811f257c1e45f9ac98265afbc4cc80a45a44583ebf13556ef962e913689c1 = $this->env->getExtension("native_profiler");
        $__internal_f1a811f257c1e45f9ac98265afbc4cc80a45a44583ebf13556ef962e913689c1->enter($__internal_f1a811f257c1e45f9ac98265afbc4cc80a45a44583ebf13556ef962e913689c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a811f257c1e45f9ac98265afbc4cc80a45a44583ebf13556ef962e913689c1->leave($__internal_f1a811f257c1e45f9ac98265afbc4cc80a45a44583ebf13556ef962e913689c1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7a4c773a3e11ba71b5c0a6a8910e09c58988b3fad3710fae138a65c202070f93 = $this->env->getExtension("native_profiler");
        $__internal_7a4c773a3e11ba71b5c0a6a8910e09c58988b3fad3710fae138a65c202070f93->enter($__internal_7a4c773a3e11ba71b5c0a6a8910e09c58988b3fad3710fae138a65c202070f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_7a4c773a3e11ba71b5c0a6a8910e09c58988b3fad3710fae138a65c202070f93->leave($__internal_7a4c773a3e11ba71b5c0a6a8910e09c58988b3fad3710fae138a65c202070f93_prof);

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
