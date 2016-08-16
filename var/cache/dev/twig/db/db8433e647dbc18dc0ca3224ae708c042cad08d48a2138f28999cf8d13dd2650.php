<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bfa5652b8490468aa22b1becade4581ad677cc5912be945fcad0de18be0174c2 extends Twig_Template
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
        $__internal_cc22ff6f62468a1e924099c3715a7977c49fe57f32cd605b47aa4391285e7061 = $this->env->getExtension("native_profiler");
        $__internal_cc22ff6f62468a1e924099c3715a7977c49fe57f32cd605b47aa4391285e7061->enter($__internal_cc22ff6f62468a1e924099c3715a7977c49fe57f32cd605b47aa4391285e7061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc22ff6f62468a1e924099c3715a7977c49fe57f32cd605b47aa4391285e7061->leave($__internal_cc22ff6f62468a1e924099c3715a7977c49fe57f32cd605b47aa4391285e7061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
