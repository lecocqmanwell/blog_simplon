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
        $__internal_19de6a70792102e567cba91c6858b70e2f66b79535a7e1caac16e51d467fda85 = $this->env->getExtension("native_profiler");
        $__internal_19de6a70792102e567cba91c6858b70e2f66b79535a7e1caac16e51d467fda85->enter($__internal_19de6a70792102e567cba91c6858b70e2f66b79535a7e1caac16e51d467fda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_19de6a70792102e567cba91c6858b70e2f66b79535a7e1caac16e51d467fda85->leave($__internal_19de6a70792102e567cba91c6858b70e2f66b79535a7e1caac16e51d467fda85_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4ccb897035d1a9ba3f2ee9681a9347c79f6bde9f10464dd83f112644f29f065b = $this->env->getExtension("native_profiler");
        $__internal_4ccb897035d1a9ba3f2ee9681a9347c79f6bde9f10464dd83f112644f29f065b->enter($__internal_4ccb897035d1a9ba3f2ee9681a9347c79f6bde9f10464dd83f112644f29f065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4ccb897035d1a9ba3f2ee9681a9347c79f6bde9f10464dd83f112644f29f065b->leave($__internal_4ccb897035d1a9ba3f2ee9681a9347c79f6bde9f10464dd83f112644f29f065b_prof);

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
