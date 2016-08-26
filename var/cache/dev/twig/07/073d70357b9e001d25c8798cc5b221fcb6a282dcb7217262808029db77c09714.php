<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d3022d468f64a79f79dbf6041297384e2179254264594fbf46f3ad71a0ec71bf extends Twig_Template
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
        $__internal_95643711b68b3072b9974d82f818484a2d69cd0fa8f468b20ad215b8aa0eb4e5 = $this->env->getExtension("native_profiler");
        $__internal_95643711b68b3072b9974d82f818484a2d69cd0fa8f468b20ad215b8aa0eb4e5->enter($__internal_95643711b68b3072b9974d82f818484a2d69cd0fa8f468b20ad215b8aa0eb4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_95643711b68b3072b9974d82f818484a2d69cd0fa8f468b20ad215b8aa0eb4e5->leave($__internal_95643711b68b3072b9974d82f818484a2d69cd0fa8f468b20ad215b8aa0eb4e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
