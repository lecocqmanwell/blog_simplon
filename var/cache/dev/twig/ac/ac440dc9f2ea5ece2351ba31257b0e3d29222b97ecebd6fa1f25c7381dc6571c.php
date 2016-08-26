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
        $__internal_c3800987bce751522467d55cf23ea2cccfdb9bcdb38a0599ffd8e68ee12eb8e6 = $this->env->getExtension("native_profiler");
        $__internal_c3800987bce751522467d55cf23ea2cccfdb9bcdb38a0599ffd8e68ee12eb8e6->enter($__internal_c3800987bce751522467d55cf23ea2cccfdb9bcdb38a0599ffd8e68ee12eb8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c3800987bce751522467d55cf23ea2cccfdb9bcdb38a0599ffd8e68ee12eb8e6->leave($__internal_c3800987bce751522467d55cf23ea2cccfdb9bcdb38a0599ffd8e68ee12eb8e6_prof);

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
