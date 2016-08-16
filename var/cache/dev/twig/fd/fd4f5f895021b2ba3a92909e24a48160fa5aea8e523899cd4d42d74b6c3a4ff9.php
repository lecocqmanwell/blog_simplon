<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c912d1b514095686d5703f41aa3a4366a27c561dead03b2829bc020561b37bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46a965beb2700d17e2b215e3d4c4364c88bf63308d87c623cff44deb1f813ebf = $this->env->getExtension("native_profiler");
        $__internal_46a965beb2700d17e2b215e3d4c4364c88bf63308d87c623cff44deb1f813ebf->enter($__internal_46a965beb2700d17e2b215e3d4c4364c88bf63308d87c623cff44deb1f813ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_46a965beb2700d17e2b215e3d4c4364c88bf63308d87c623cff44deb1f813ebf->leave($__internal_46a965beb2700d17e2b215e3d4c4364c88bf63308d87c623cff44deb1f813ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
