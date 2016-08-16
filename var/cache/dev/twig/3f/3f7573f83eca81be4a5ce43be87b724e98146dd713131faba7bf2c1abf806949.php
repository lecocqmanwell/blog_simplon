<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_4b59cf74857dfab8d9f126080dc93a1167647ce85d157c1d0392fccf8a690cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96e8fe1989abbebae9d86d92279a155baff8d49bb4a6a13337e482445509997 = $this->env->getExtension("native_profiler");
        $__internal_d96e8fe1989abbebae9d86d92279a155baff8d49bb4a6a13337e482445509997->enter($__internal_d96e8fe1989abbebae9d86d92279a155baff8d49bb4a6a13337e482445509997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96e8fe1989abbebae9d86d92279a155baff8d49bb4a6a13337e482445509997->leave($__internal_d96e8fe1989abbebae9d86d92279a155baff8d49bb4a6a13337e482445509997_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_00437ef8fc23954a1dfbd29374efb253b4602289eb63b2805431127da8184da5 = $this->env->getExtension("native_profiler");
        $__internal_00437ef8fc23954a1dfbd29374efb253b4602289eb63b2805431127da8184da5->enter($__internal_00437ef8fc23954a1dfbd29374efb253b4602289eb63b2805431127da8184da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_00437ef8fc23954a1dfbd29374efb253b4602289eb63b2805431127da8184da5->leave($__internal_00437ef8fc23954a1dfbd29374efb253b4602289eb63b2805431127da8184da5_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_32dfb5ad2164ecb60d0bd0f9f689a7f144aedb9f5c8450d324132f5180b95972 = $this->env->getExtension("native_profiler");
        $__internal_32dfb5ad2164ecb60d0bd0f9f689a7f144aedb9f5c8450d324132f5180b95972->enter($__internal_32dfb5ad2164ecb60d0bd0f9f689a7f144aedb9f5c8450d324132f5180b95972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_32dfb5ad2164ecb60d0bd0f9f689a7f144aedb9f5c8450d324132f5180b95972->leave($__internal_32dfb5ad2164ecb60d0bd0f9f689a7f144aedb9f5c8450d324132f5180b95972_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
/* {% block num_results %}*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }}*/
/*     /*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         ?*/
/*     {% else %}*/
/*         {{ admin.datagrid.pager.lastpage }}*/
/*     {% endif %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
