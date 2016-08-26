<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_1944b291008bf354c8a0a96438908b1fea0b1875da7dc5dc34c525e1c1f4b4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16a1f42662c730d7c50ca70f70a49fc4058fb4bf764cc3582470c54a37d28a3a = $this->env->getExtension("native_profiler");
        $__internal_16a1f42662c730d7c50ca70f70a49fc4058fb4bf764cc3582470c54a37d28a3a->enter($__internal_16a1f42662c730d7c50ca70f70a49fc4058fb4bf764cc3582470c54a37d28a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_16a1f42662c730d7c50ca70f70a49fc4058fb4bf764cc3582470c54a37d28a3a->leave($__internal_16a1f42662c730d7c50ca70f70a49fc4058fb4bf764cc3582470c54a37d28a3a_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_70596dbdc366ea761061a5e7b85d46a4f5ce3e2c158d01bc4716511c2bdf628f = $this->env->getExtension("native_profiler");
        $__internal_70596dbdc366ea761061a5e7b85d46a4f5ce3e2c158d01bc4716511c2bdf628f->enter($__internal_70596dbdc366ea761061a5e7b85d46a4f5ce3e2c158d01bc4716511c2bdf628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_70596dbdc366ea761061a5e7b85d46a4f5ce3e2c158d01bc4716511c2bdf628f->leave($__internal_70596dbdc366ea761061a5e7b85d46a4f5ce3e2c158d01bc4716511c2bdf628f_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
