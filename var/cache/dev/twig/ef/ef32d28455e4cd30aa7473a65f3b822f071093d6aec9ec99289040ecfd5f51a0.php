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
        $__internal_0c47df30b02a42befbeea1f501ee5eceae2a920c3d46d01ebbed4c22dd47948d = $this->env->getExtension("native_profiler");
        $__internal_0c47df30b02a42befbeea1f501ee5eceae2a920c3d46d01ebbed4c22dd47948d->enter($__internal_0c47df30b02a42befbeea1f501ee5eceae2a920c3d46d01ebbed4c22dd47948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0c47df30b02a42befbeea1f501ee5eceae2a920c3d46d01ebbed4c22dd47948d->leave($__internal_0c47df30b02a42befbeea1f501ee5eceae2a920c3d46d01ebbed4c22dd47948d_prof);

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
