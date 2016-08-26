<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c912d1b514095686d5703f41aa3a4366a27c561dead03b2829bc020561b37bdb extends Twig_Template
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
        $__internal_7d59e77456ed57d7e591b68d855fbb209aa01154c035104ba40aea37f4de7ea7 = $this->env->getExtension("native_profiler");
        $__internal_7d59e77456ed57d7e591b68d855fbb209aa01154c035104ba40aea37f4de7ea7->enter($__internal_7d59e77456ed57d7e591b68d855fbb209aa01154c035104ba40aea37f4de7ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7d59e77456ed57d7e591b68d855fbb209aa01154c035104ba40aea37f4de7ea7->leave($__internal_7d59e77456ed57d7e591b68d855fbb209aa01154c035104ba40aea37f4de7ea7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
