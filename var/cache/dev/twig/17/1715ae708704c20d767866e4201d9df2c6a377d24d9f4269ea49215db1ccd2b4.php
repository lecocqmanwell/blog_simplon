<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_15fc8e8ad7327dcc7858e07e1e85f8d55497464ef2c0628661663d00685989b6 extends Twig_Template
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
        $__internal_66874934ec297a395f5b955fb148d3c31038e9790909b05ae035a7e93c68882d = $this->env->getExtension("native_profiler");
        $__internal_66874934ec297a395f5b955fb148d3c31038e9790909b05ae035a7e93c68882d->enter($__internal_66874934ec297a395f5b955fb148d3c31038e9790909b05ae035a7e93c68882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_66874934ec297a395f5b955fb148d3c31038e9790909b05ae035a7e93c68882d->leave($__internal_66874934ec297a395f5b955fb148d3c31038e9790909b05ae035a7e93c68882d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
