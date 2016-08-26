<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e5314587e41e54ab60d3e88b0fe8213012e647aaedccbef465d93280b45f6f3a extends Twig_Template
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
        $__internal_5feb337fa8fd25ba688113b7e9552b29934f7baaf7b2239213cb3837f0b40aa9 = $this->env->getExtension("native_profiler");
        $__internal_5feb337fa8fd25ba688113b7e9552b29934f7baaf7b2239213cb3837f0b40aa9->enter($__internal_5feb337fa8fd25ba688113b7e9552b29934f7baaf7b2239213cb3837f0b40aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5feb337fa8fd25ba688113b7e9552b29934f7baaf7b2239213cb3837f0b40aa9->leave($__internal_5feb337fa8fd25ba688113b7e9552b29934f7baaf7b2239213cb3837f0b40aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
