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
        $__internal_a84d331de815994c4b099497d7c6e9479fa96a0376ea1023b6c430fa2f60b37d = $this->env->getExtension("native_profiler");
        $__internal_a84d331de815994c4b099497d7c6e9479fa96a0376ea1023b6c430fa2f60b37d->enter($__internal_a84d331de815994c4b099497d7c6e9479fa96a0376ea1023b6c430fa2f60b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a84d331de815994c4b099497d7c6e9479fa96a0376ea1023b6c430fa2f60b37d->leave($__internal_a84d331de815994c4b099497d7c6e9479fa96a0376ea1023b6c430fa2f60b37d_prof);

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
