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
        $__internal_c2bae6ddc50dc458784d24f6e637df40908056481da7eb680dc7d4c8b3924548 = $this->env->getExtension("native_profiler");
        $__internal_c2bae6ddc50dc458784d24f6e637df40908056481da7eb680dc7d4c8b3924548->enter($__internal_c2bae6ddc50dc458784d24f6e637df40908056481da7eb680dc7d4c8b3924548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2bae6ddc50dc458784d24f6e637df40908056481da7eb680dc7d4c8b3924548->leave($__internal_c2bae6ddc50dc458784d24f6e637df40908056481da7eb680dc7d4c8b3924548_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0d1d784f24fe8b38b62803cccf4918cef4ffefd5038965d927cc8ad82aec15f5 = $this->env->getExtension("native_profiler");
        $__internal_0d1d784f24fe8b38b62803cccf4918cef4ffefd5038965d927cc8ad82aec15f5->enter($__internal_0d1d784f24fe8b38b62803cccf4918cef4ffefd5038965d927cc8ad82aec15f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_0d1d784f24fe8b38b62803cccf4918cef4ffefd5038965d927cc8ad82aec15f5->leave($__internal_0d1d784f24fe8b38b62803cccf4918cef4ffefd5038965d927cc8ad82aec15f5_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a5c5a6a3af94697761b9ee0203395148c97cf98fb582ab5e322ee603dc29c0fd = $this->env->getExtension("native_profiler");
        $__internal_a5c5a6a3af94697761b9ee0203395148c97cf98fb582ab5e322ee603dc29c0fd->enter($__internal_a5c5a6a3af94697761b9ee0203395148c97cf98fb582ab5e322ee603dc29c0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a5c5a6a3af94697761b9ee0203395148c97cf98fb582ab5e322ee603dc29c0fd->leave($__internal_a5c5a6a3af94697761b9ee0203395148c97cf98fb582ab5e322ee603dc29c0fd_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_ed53f718ce5cf21d33218c6672ffed824e0e33593145e6944c6ee5a1788b699f = $this->env->getExtension("native_profiler");
        $__internal_ed53f718ce5cf21d33218c6672ffed824e0e33593145e6944c6ee5a1788b699f->enter($__internal_ed53f718ce5cf21d33218c6672ffed824e0e33593145e6944c6ee5a1788b699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_ed53f718ce5cf21d33218c6672ffed824e0e33593145e6944c6ee5a1788b699f->leave($__internal_ed53f718ce5cf21d33218c6672ffed824e0e33593145e6944c6ee5a1788b699f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_1537938c931a405251ec1e0408d16dc9a076cf3f12f53cc5037d40cb96c5fecd = $this->env->getExtension("native_profiler");
        $__internal_1537938c931a405251ec1e0408d16dc9a076cf3f12f53cc5037d40cb96c5fecd->enter($__internal_1537938c931a405251ec1e0408d16dc9a076cf3f12f53cc5037d40cb96c5fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_1537938c931a405251ec1e0408d16dc9a076cf3f12f53cc5037d40cb96c5fecd->leave($__internal_1537938c931a405251ec1e0408d16dc9a076cf3f12f53cc5037d40cb96c5fecd_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d61b9e1251b1928443070f5761ee379188fd191e903707439f21e22c63756610 = $this->env->getExtension("native_profiler");
        $__internal_d61b9e1251b1928443070f5761ee379188fd191e903707439f21e22c63756610->enter($__internal_d61b9e1251b1928443070f5761ee379188fd191e903707439f21e22c63756610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d61b9e1251b1928443070f5761ee379188fd191e903707439f21e22c63756610->leave($__internal_d61b9e1251b1928443070f5761ee379188fd191e903707439f21e22c63756610_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_bfc80ea926f169e84f5c742ed6e856666779a5d78e1a06bb6311c9c557673045 = $this->env->getExtension("native_profiler");
        $__internal_bfc80ea926f169e84f5c742ed6e856666779a5d78e1a06bb6311c9c557673045->enter($__internal_bfc80ea926f169e84f5c742ed6e856666779a5d78e1a06bb6311c9c557673045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_bfc80ea926f169e84f5c742ed6e856666779a5d78e1a06bb6311c9c557673045->leave($__internal_bfc80ea926f169e84f5c742ed6e856666779a5d78e1a06bb6311c9c557673045_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f1d40eef1a48668eb9f97705ed13b27aa024dce03789ed814c54c1bcebbe0bd8 = $this->env->getExtension("native_profiler");
        $__internal_f1d40eef1a48668eb9f97705ed13b27aa024dce03789ed814c54c1bcebbe0bd8->enter($__internal_f1d40eef1a48668eb9f97705ed13b27aa024dce03789ed814c54c1bcebbe0bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f1d40eef1a48668eb9f97705ed13b27aa024dce03789ed814c54c1bcebbe0bd8->leave($__internal_f1d40eef1a48668eb9f97705ed13b27aa024dce03789ed814c54c1bcebbe0bd8_prof);

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
