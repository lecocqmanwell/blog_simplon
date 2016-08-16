<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_08a5b3c9b293109b756e203302354cfbc94c6a9f1d1d2147298aebe533347538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c54c1dbc8a44c7ebb09728f6ad936e6e77129c56f4d659a9ba26404ad0e129f = $this->env->getExtension("native_profiler");
        $__internal_7c54c1dbc8a44c7ebb09728f6ad936e6e77129c56f4d659a9ba26404ad0e129f->enter($__internal_7c54c1dbc8a44c7ebb09728f6ad936e6e77129c56f4d659a9ba26404ad0e129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_7c54c1dbc8a44c7ebb09728f6ad936e6e77129c56f4d659a9ba26404ad0e129f->leave($__internal_7c54c1dbc8a44c7ebb09728f6ad936e6e77129c56f4d659a9ba26404ad0e129f_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_870866e93f973d132def92701203f63e7bf186a7221d8121ac1a1517ef502f40 = $this->env->getExtension("native_profiler");
        $__internal_870866e93f973d132def92701203f63e7bf186a7221d8121ac1a1517ef502f40->enter($__internal_870866e93f973d132def92701203f63e7bf186a7221d8121ac1a1517ef502f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_870866e93f973d132def92701203f63e7bf186a7221d8121ac1a1517ef502f40->leave($__internal_870866e93f973d132def92701203f63e7bf186a7221d8121ac1a1517ef502f40_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
