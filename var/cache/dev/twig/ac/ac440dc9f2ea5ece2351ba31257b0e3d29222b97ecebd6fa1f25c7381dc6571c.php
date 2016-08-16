<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_55d372b5353dae2abef8160505ce3cc01e7bc600f1d20cce1ad0325ff2c4bc1b extends Twig_Template
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
        $__internal_d227b6016e2c2937502564cf1bc8ada2d9d05c9b99963d2f823373d672911350 = $this->env->getExtension("native_profiler");
        $__internal_d227b6016e2c2937502564cf1bc8ada2d9d05c9b99963d2f823373d672911350->enter($__internal_d227b6016e2c2937502564cf1bc8ada2d9d05c9b99963d2f823373d672911350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d227b6016e2c2937502564cf1bc8ada2d9d05c9b99963d2f823373d672911350->leave($__internal_d227b6016e2c2937502564cf1bc8ada2d9d05c9b99963d2f823373d672911350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
