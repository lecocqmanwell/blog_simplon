<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c671e45c151ec3306ab300635f2a5ba927f64626a462780abcdadbc2f4b9a75 extends Twig_Template
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
        $__internal_fe85a27564374aedcedf95bdf2fbc9715d572dec840db4f0d9819988f54a647a = $this->env->getExtension("native_profiler");
        $__internal_fe85a27564374aedcedf95bdf2fbc9715d572dec840db4f0d9819988f54a647a->enter($__internal_fe85a27564374aedcedf95bdf2fbc9715d572dec840db4f0d9819988f54a647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fe85a27564374aedcedf95bdf2fbc9715d572dec840db4f0d9819988f54a647a->leave($__internal_fe85a27564374aedcedf95bdf2fbc9715d572dec840db4f0d9819988f54a647a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
