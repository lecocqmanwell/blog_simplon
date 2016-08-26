<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_025cdae68c525c85588a4e0de04b95b7913211a8a00d5bd464a80e69e4a2817c extends Twig_Template
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
        $__internal_0af9f7e27ac5c53b7c8a0c48e1f96a5ef99af7b2e031b20c458c9295df737319 = $this->env->getExtension("native_profiler");
        $__internal_0af9f7e27ac5c53b7c8a0c48e1f96a5ef99af7b2e031b20c458c9295df737319->enter($__internal_0af9f7e27ac5c53b7c8a0c48e1f96a5ef99af7b2e031b20c458c9295df737319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0af9f7e27ac5c53b7c8a0c48e1f96a5ef99af7b2e031b20c458c9295df737319->leave($__internal_0af9f7e27ac5c53b7c8a0c48e1f96a5ef99af7b2e031b20c458c9295df737319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
