<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_757cda046f68661edba2e16ef9b897319daa2d9915b879ad1845a10924e04286 extends Twig_Template
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
        $__internal_4698f92983cd718b9c0a98a8d0ce215d132e42178aad7b5a051098ed2af56187 = $this->env->getExtension("native_profiler");
        $__internal_4698f92983cd718b9c0a98a8d0ce215d132e42178aad7b5a051098ed2af56187->enter($__internal_4698f92983cd718b9c0a98a8d0ce215d132e42178aad7b5a051098ed2af56187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4698f92983cd718b9c0a98a8d0ce215d132e42178aad7b5a051098ed2af56187->leave($__internal_4698f92983cd718b9c0a98a8d0ce215d132e42178aad7b5a051098ed2af56187_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
