<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_324b81744e2d0a075a008a285e3347f56bb54de282e604931b94489c9228b098 extends Twig_Template
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
        $__internal_25603ae04d12a9d3e8b3e10b6f26bcedec93588fd9b158494c80d21d033e84d9 = $this->env->getExtension("native_profiler");
        $__internal_25603ae04d12a9d3e8b3e10b6f26bcedec93588fd9b158494c80d21d033e84d9->enter($__internal_25603ae04d12a9d3e8b3e10b6f26bcedec93588fd9b158494c80d21d033e84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_25603ae04d12a9d3e8b3e10b6f26bcedec93588fd9b158494c80d21d033e84d9->leave($__internal_25603ae04d12a9d3e8b3e10b6f26bcedec93588fd9b158494c80d21d033e84d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
