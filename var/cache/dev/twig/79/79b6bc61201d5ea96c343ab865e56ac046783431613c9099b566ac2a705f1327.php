<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_7317ecf3310dea7fae9a002ca3db248ae9805c282711d5df0e23e24fd8d51c61 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa35fbd17b5bd677fee16a5e6dbfda6023e1ef5eaef5f97b8d6ea446dd75a5c4 = $this->env->getExtension("native_profiler");
        $__internal_aa35fbd17b5bd677fee16a5e6dbfda6023e1ef5eaef5f97b8d6ea446dd75a5c4->enter($__internal_aa35fbd17b5bd677fee16a5e6dbfda6023e1ef5eaef5f97b8d6ea446dd75a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa35fbd17b5bd677fee16a5e6dbfda6023e1ef5eaef5f97b8d6ea446dd75a5c4->leave($__internal_aa35fbd17b5bd677fee16a5e6dbfda6023e1ef5eaef5f97b8d6ea446dd75a5c4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_1c6cfd1bcf0158f213bf5d23ebb5d805b138b456fd7effe29e9129986fe55a91 = $this->env->getExtension("native_profiler");
        $__internal_1c6cfd1bcf0158f213bf5d23ebb5d805b138b456fd7effe29e9129986fe55a91->enter($__internal_1c6cfd1bcf0158f213bf5d23ebb5d805b138b456fd7effe29e9129986fe55a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_1c6cfd1bcf0158f213bf5d23ebb5d805b138b456fd7effe29e9129986fe55a91->leave($__internal_1c6cfd1bcf0158f213bf5d23ebb5d805b138b456fd7effe29e9129986fe55a91_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
