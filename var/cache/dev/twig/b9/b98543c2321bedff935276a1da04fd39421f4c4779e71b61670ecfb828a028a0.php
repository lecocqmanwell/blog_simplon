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
        $__internal_05c94e96ccc2aa3eef628073267b8739d0fc31bc2baadcfdd1457aa30df49709 = $this->env->getExtension("native_profiler");
        $__internal_05c94e96ccc2aa3eef628073267b8739d0fc31bc2baadcfdd1457aa30df49709->enter($__internal_05c94e96ccc2aa3eef628073267b8739d0fc31bc2baadcfdd1457aa30df49709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_05c94e96ccc2aa3eef628073267b8739d0fc31bc2baadcfdd1457aa30df49709->leave($__internal_05c94e96ccc2aa3eef628073267b8739d0fc31bc2baadcfdd1457aa30df49709_prof);

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
