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
        $__internal_0a08a6b4ef8fbaa956a700de0f55088a4b4b842e527664372b8d72530c34cc84 = $this->env->getExtension("native_profiler");
        $__internal_0a08a6b4ef8fbaa956a700de0f55088a4b4b842e527664372b8d72530c34cc84->enter($__internal_0a08a6b4ef8fbaa956a700de0f55088a4b4b842e527664372b8d72530c34cc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0a08a6b4ef8fbaa956a700de0f55088a4b4b842e527664372b8d72530c34cc84->leave($__internal_0a08a6b4ef8fbaa956a700de0f55088a4b4b842e527664372b8d72530c34cc84_prof);

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
