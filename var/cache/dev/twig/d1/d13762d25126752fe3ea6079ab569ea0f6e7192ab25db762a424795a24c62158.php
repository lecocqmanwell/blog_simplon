<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_371e56b614615b433201a377c4c65421059edaf672fcb73dba3a5853e3aaa0ef extends Twig_Template
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
        $__internal_70762cb63a66cfb1d87c7a29b1b32ca50886c863532345473d31d2495f6f69de = $this->env->getExtension("native_profiler");
        $__internal_70762cb63a66cfb1d87c7a29b1b32ca50886c863532345473d31d2495f6f69de->enter($__internal_70762cb63a66cfb1d87c7a29b1b32ca50886c863532345473d31d2495f6f69de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_70762cb63a66cfb1d87c7a29b1b32ca50886c863532345473d31d2495f6f69de->leave($__internal_70762cb63a66cfb1d87c7a29b1b32ca50886c863532345473d31d2495f6f69de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
