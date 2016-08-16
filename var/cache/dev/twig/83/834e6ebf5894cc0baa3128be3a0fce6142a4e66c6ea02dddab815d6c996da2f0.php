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
        $__internal_9a25237470b19c31c0727fc299a7974ee9a1ab846193870dadf3509854a757a0 = $this->env->getExtension("native_profiler");
        $__internal_9a25237470b19c31c0727fc299a7974ee9a1ab846193870dadf3509854a757a0->enter($__internal_9a25237470b19c31c0727fc299a7974ee9a1ab846193870dadf3509854a757a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9a25237470b19c31c0727fc299a7974ee9a1ab846193870dadf3509854a757a0->leave($__internal_9a25237470b19c31c0727fc299a7974ee9a1ab846193870dadf3509854a757a0_prof);

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
