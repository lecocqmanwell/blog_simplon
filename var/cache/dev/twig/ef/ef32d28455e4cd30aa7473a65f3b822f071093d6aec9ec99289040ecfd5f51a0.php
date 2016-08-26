<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_83bf37543343dd17ba82c3081890b4b57ebef3cc2ed24790cee79a949a44b088 extends Twig_Template
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
        $__internal_b0ad4d0d2394f2a59b7586a8a5887763df20b2212b902167d60decdc6c037f7f = $this->env->getExtension("native_profiler");
        $__internal_b0ad4d0d2394f2a59b7586a8a5887763df20b2212b902167d60decdc6c037f7f->enter($__internal_b0ad4d0d2394f2a59b7586a8a5887763df20b2212b902167d60decdc6c037f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b0ad4d0d2394f2a59b7586a8a5887763df20b2212b902167d60decdc6c037f7f->leave($__internal_b0ad4d0d2394f2a59b7586a8a5887763df20b2212b902167d60decdc6c037f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
