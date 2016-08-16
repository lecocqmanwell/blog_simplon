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
        $__internal_9862b999d53602c86e505f64db0a97d8ed0de14e29830d4a08c9448b74d5b5cb = $this->env->getExtension("native_profiler");
        $__internal_9862b999d53602c86e505f64db0a97d8ed0de14e29830d4a08c9448b74d5b5cb->enter($__internal_9862b999d53602c86e505f64db0a97d8ed0de14e29830d4a08c9448b74d5b5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9862b999d53602c86e505f64db0a97d8ed0de14e29830d4a08c9448b74d5b5cb->leave($__internal_9862b999d53602c86e505f64db0a97d8ed0de14e29830d4a08c9448b74d5b5cb_prof);

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
