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
        $__internal_f28e48e15be2076e50d63c80615e6e65d5a1a2a680ccd7a6e3fd65bf8e528470 = $this->env->getExtension("native_profiler");
        $__internal_f28e48e15be2076e50d63c80615e6e65d5a1a2a680ccd7a6e3fd65bf8e528470->enter($__internal_f28e48e15be2076e50d63c80615e6e65d5a1a2a680ccd7a6e3fd65bf8e528470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f28e48e15be2076e50d63c80615e6e65d5a1a2a680ccd7a6e3fd65bf8e528470->leave($__internal_f28e48e15be2076e50d63c80615e6e65d5a1a2a680ccd7a6e3fd65bf8e528470_prof);

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
