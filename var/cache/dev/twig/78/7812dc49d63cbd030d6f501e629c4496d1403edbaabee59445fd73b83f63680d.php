<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f3d75ebe020513618e3c0f96471e65adb8958c43398088a0503654ee91b37442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d814a779ced032ccd96ed8469085995cf3236945f06562a02bc89e9c4201295 = $this->env->getExtension("native_profiler");
        $__internal_4d814a779ced032ccd96ed8469085995cf3236945f06562a02bc89e9c4201295->enter($__internal_4d814a779ced032ccd96ed8469085995cf3236945f06562a02bc89e9c4201295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d814a779ced032ccd96ed8469085995cf3236945f06562a02bc89e9c4201295->leave($__internal_4d814a779ced032ccd96ed8469085995cf3236945f06562a02bc89e9c4201295_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_16eb5e9436804df576f3e893a2f5dc2452a7d5ca75d5a9a369e6be5a66ab324a = $this->env->getExtension("native_profiler");
        $__internal_16eb5e9436804df576f3e893a2f5dc2452a7d5ca75d5a9a369e6be5a66ab324a->enter($__internal_16eb5e9436804df576f3e893a2f5dc2452a7d5ca75d5a9a369e6be5a66ab324a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_16eb5e9436804df576f3e893a2f5dc2452a7d5ca75d5a9a369e6be5a66ab324a->leave($__internal_16eb5e9436804df576f3e893a2f5dc2452a7d5ca75d5a9a369e6be5a66ab324a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d30aadead2aeb2c1660d367d47c84f80454d634999e73d364d5a31a2bff2e7f0 = $this->env->getExtension("native_profiler");
        $__internal_d30aadead2aeb2c1660d367d47c84f80454d634999e73d364d5a31a2bff2e7f0->enter($__internal_d30aadead2aeb2c1660d367d47c84f80454d634999e73d364d5a31a2bff2e7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d30aadead2aeb2c1660d367d47c84f80454d634999e73d364d5a31a2bff2e7f0->leave($__internal_d30aadead2aeb2c1660d367d47c84f80454d634999e73d364d5a31a2bff2e7f0_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a52e7b5f18b18ee76379df0115c4332d2000ba6b94f81d1cca383b976b1b3b95 = $this->env->getExtension("native_profiler");
        $__internal_a52e7b5f18b18ee76379df0115c4332d2000ba6b94f81d1cca383b976b1b3b95->enter($__internal_a52e7b5f18b18ee76379df0115c4332d2000ba6b94f81d1cca383b976b1b3b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a52e7b5f18b18ee76379df0115c4332d2000ba6b94f81d1cca383b976b1b3b95->leave($__internal_a52e7b5f18b18ee76379df0115c4332d2000ba6b94f81d1cca383b976b1b3b95_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c00338ffc062596ab7caa50e032eeff06a48bd8f5bb951c9db95c85b162c1517 = $this->env->getExtension("native_profiler");
        $__internal_c00338ffc062596ab7caa50e032eeff06a48bd8f5bb951c9db95c85b162c1517->enter($__internal_c00338ffc062596ab7caa50e032eeff06a48bd8f5bb951c9db95c85b162c1517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_c00338ffc062596ab7caa50e032eeff06a48bd8f5bb951c9db95c85b162c1517->leave($__internal_c00338ffc062596ab7caa50e032eeff06a48bd8f5bb951c9db95c85b162c1517_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b905c45fbcda97170d472950cd1b05204a1072723c43f5a423a2d316344a3f6 = $this->env->getExtension("native_profiler");
        $__internal_6b905c45fbcda97170d472950cd1b05204a1072723c43f5a423a2d316344a3f6->enter($__internal_6b905c45fbcda97170d472950cd1b05204a1072723c43f5a423a2d316344a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_6b905c45fbcda97170d472950cd1b05204a1072723c43f5a423a2d316344a3f6->leave($__internal_6b905c45fbcda97170d472950cd1b05204a1072723c43f5a423a2d316344a3f6_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f3e209c0f0ea0416d9e791691a21ffeca39719608c3273ff3ce759913e485094 = $this->env->getExtension("native_profiler");
        $__internal_f3e209c0f0ea0416d9e791691a21ffeca39719608c3273ff3ce759913e485094->enter($__internal_f3e209c0f0ea0416d9e791691a21ffeca39719608c3273ff3ce759913e485094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f3e209c0f0ea0416d9e791691a21ffeca39719608c3273ff3ce759913e485094->leave($__internal_f3e209c0f0ea0416d9e791691a21ffeca39719608c3273ff3ce759913e485094_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_986866e32e14370f678ae6687be0af4b12d12b8b747bd653c4b454a0b84a030b = $this->env->getExtension("native_profiler");
        $__internal_986866e32e14370f678ae6687be0af4b12d12b8b747bd653c4b454a0b84a030b->enter($__internal_986866e32e14370f678ae6687be0af4b12d12b8b747bd653c4b454a0b84a030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_986866e32e14370f678ae6687be0af4b12d12b8b747bd653c4b454a0b84a030b->leave($__internal_986866e32e14370f678ae6687be0af4b12d12b8b747bd653c4b454a0b84a030b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
