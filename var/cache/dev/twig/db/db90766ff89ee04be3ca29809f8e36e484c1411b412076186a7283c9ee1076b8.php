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
        $__internal_35d173f83c33811b771e1b8af161d24d537e8a7d8a9303fbfdf212e26c156900 = $this->env->getExtension("native_profiler");
        $__internal_35d173f83c33811b771e1b8af161d24d537e8a7d8a9303fbfdf212e26c156900->enter($__internal_35d173f83c33811b771e1b8af161d24d537e8a7d8a9303fbfdf212e26c156900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_35d173f83c33811b771e1b8af161d24d537e8a7d8a9303fbfdf212e26c156900->leave($__internal_35d173f83c33811b771e1b8af161d24d537e8a7d8a9303fbfdf212e26c156900_prof);

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
