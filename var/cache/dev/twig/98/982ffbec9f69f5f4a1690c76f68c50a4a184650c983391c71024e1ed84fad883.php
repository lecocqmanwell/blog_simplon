<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9e45892a61648e146cab1ada924db48f94aad47a74c7f37ec0d6a200c8b3d5f3 extends Twig_Template
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
        $__internal_bcac23a28a2330c2b8197d6d46d300beb71c887c26b30725b55eb84de1e28c32 = $this->env->getExtension("native_profiler");
        $__internal_bcac23a28a2330c2b8197d6d46d300beb71c887c26b30725b55eb84de1e28c32->enter($__internal_bcac23a28a2330c2b8197d6d46d300beb71c887c26b30725b55eb84de1e28c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bcac23a28a2330c2b8197d6d46d300beb71c887c26b30725b55eb84de1e28c32->leave($__internal_bcac23a28a2330c2b8197d6d46d300beb71c887c26b30725b55eb84de1e28c32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
