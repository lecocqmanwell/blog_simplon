<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ded9f7ac22aa024074e40a811409bd4955cb035475dbbb95e7ee79f3d337fc0f extends Twig_Template
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
        $__internal_03c78145c34540260c709ba0bf18a4f1049b3a180311d2b8312eb26b2fed7e91 = $this->env->getExtension("native_profiler");
        $__internal_03c78145c34540260c709ba0bf18a4f1049b3a180311d2b8312eb26b2fed7e91->enter($__internal_03c78145c34540260c709ba0bf18a4f1049b3a180311d2b8312eb26b2fed7e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03c78145c34540260c709ba0bf18a4f1049b3a180311d2b8312eb26b2fed7e91->leave($__internal_03c78145c34540260c709ba0bf18a4f1049b3a180311d2b8312eb26b2fed7e91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
