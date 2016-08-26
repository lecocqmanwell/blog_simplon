<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_aa48c00e31aa403d3f1288b3f2eddbedb0dec440e889f0014ff9280e9ed1d381 extends Twig_Template
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
        $__internal_4bb2bd7398bdfebefe1fc129ae784d0a79f1823d0bc485f2dbe57ca54d6a0a68 = $this->env->getExtension("native_profiler");
        $__internal_4bb2bd7398bdfebefe1fc129ae784d0a79f1823d0bc485f2dbe57ca54d6a0a68->enter($__internal_4bb2bd7398bdfebefe1fc129ae784d0a79f1823d0bc485f2dbe57ca54d6a0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4bb2bd7398bdfebefe1fc129ae784d0a79f1823d0bc485f2dbe57ca54d6a0a68->leave($__internal_4bb2bd7398bdfebefe1fc129ae784d0a79f1823d0bc485f2dbe57ca54d6a0a68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
