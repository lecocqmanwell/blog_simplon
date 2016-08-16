<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4836352c5a6195aabf794aefb5271ec068f2257a2cac785dce8df30d5ee9b34b extends Twig_Template
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
        $__internal_3300eb2d90a8b6eb9c0cc9dc3001c5623d64c8414d1aff5e47fa8648df4db6be = $this->env->getExtension("native_profiler");
        $__internal_3300eb2d90a8b6eb9c0cc9dc3001c5623d64c8414d1aff5e47fa8648df4db6be->enter($__internal_3300eb2d90a8b6eb9c0cc9dc3001c5623d64c8414d1aff5e47fa8648df4db6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3300eb2d90a8b6eb9c0cc9dc3001c5623d64c8414d1aff5e47fa8648df4db6be->leave($__internal_3300eb2d90a8b6eb9c0cc9dc3001c5623d64c8414d1aff5e47fa8648df4db6be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
