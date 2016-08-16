<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_27bfc98d036eb4b8f2ff67779000d6e666f5f80748449f1d7f1ccb9821a52fe2 extends Twig_Template
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
        $__internal_2dfa81d39c9037fda65ef71afd5ce6268aa2e32f3325c7ce64a6bd80009caec1 = $this->env->getExtension("native_profiler");
        $__internal_2dfa81d39c9037fda65ef71afd5ce6268aa2e32f3325c7ce64a6bd80009caec1->enter($__internal_2dfa81d39c9037fda65ef71afd5ce6268aa2e32f3325c7ce64a6bd80009caec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2dfa81d39c9037fda65ef71afd5ce6268aa2e32f3325c7ce64a6bd80009caec1->leave($__internal_2dfa81d39c9037fda65ef71afd5ce6268aa2e32f3325c7ce64a6bd80009caec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
