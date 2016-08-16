<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7ac6a5bca73e7e17e82015cb7f91d12d151b7628d56ce2d455d94ab03e871763 extends Twig_Template
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
        $__internal_452e7964cad4ad80c7c7afb1e624bdbadd27fffc3000fa8ec69fad7be898e017 = $this->env->getExtension("native_profiler");
        $__internal_452e7964cad4ad80c7c7afb1e624bdbadd27fffc3000fa8ec69fad7be898e017->enter($__internal_452e7964cad4ad80c7c7afb1e624bdbadd27fffc3000fa8ec69fad7be898e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_452e7964cad4ad80c7c7afb1e624bdbadd27fffc3000fa8ec69fad7be898e017->leave($__internal_452e7964cad4ad80c7c7afb1e624bdbadd27fffc3000fa8ec69fad7be898e017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
