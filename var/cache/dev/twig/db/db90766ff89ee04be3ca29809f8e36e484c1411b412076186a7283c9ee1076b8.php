<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6ec1a1d490ebcfbaddf32f77a0775d17b646a6da66f95011657bcd3f60758774 extends Twig_Template
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
        $__internal_619325436295a4c38107edc15019b03c7541a248f8ec77881c31e6aa03495f31 = $this->env->getExtension("native_profiler");
        $__internal_619325436295a4c38107edc15019b03c7541a248f8ec77881c31e6aa03495f31->enter($__internal_619325436295a4c38107edc15019b03c7541a248f8ec77881c31e6aa03495f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_619325436295a4c38107edc15019b03c7541a248f8ec77881c31e6aa03495f31->leave($__internal_619325436295a4c38107edc15019b03c7541a248f8ec77881c31e6aa03495f31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
