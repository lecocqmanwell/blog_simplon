<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bdd08c0e17ffbbf90fb4708cecaf4b102987c9fb91bf9d4890e6c72902b6194e extends Twig_Template
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
        $__internal_c527dae48abde323903696f438d0a55ad9ea54084879cf85e26ef32e8d58dc19 = $this->env->getExtension("native_profiler");
        $__internal_c527dae48abde323903696f438d0a55ad9ea54084879cf85e26ef32e8d58dc19->enter($__internal_c527dae48abde323903696f438d0a55ad9ea54084879cf85e26ef32e8d58dc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c527dae48abde323903696f438d0a55ad9ea54084879cf85e26ef32e8d58dc19->leave($__internal_c527dae48abde323903696f438d0a55ad9ea54084879cf85e26ef32e8d58dc19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
