<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1df6cc678ab820b641bc97eec8f5b033ac1d283504b1775454cb94a33b60c600 extends Twig_Template
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
        $__internal_b0b4d1249e5cede7d99957b8abae99aafe3815ea6b9a4584d419e83c2c7f6398 = $this->env->getExtension("native_profiler");
        $__internal_b0b4d1249e5cede7d99957b8abae99aafe3815ea6b9a4584d419e83c2c7f6398->enter($__internal_b0b4d1249e5cede7d99957b8abae99aafe3815ea6b9a4584d419e83c2c7f6398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0b4d1249e5cede7d99957b8abae99aafe3815ea6b9a4584d419e83c2c7f6398->leave($__internal_b0b4d1249e5cede7d99957b8abae99aafe3815ea6b9a4584d419e83c2c7f6398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
