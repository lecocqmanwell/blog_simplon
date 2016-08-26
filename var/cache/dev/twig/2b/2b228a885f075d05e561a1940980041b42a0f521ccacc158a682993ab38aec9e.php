<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_6098fbd21f084328baf289713ad6cac3fb482f7cf1489617814e20adf7b2b2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65ceecec8f45e886a55244f676d124764a0f7b6868f704a0b1ba88a6bf3a99d = $this->env->getExtension("native_profiler");
        $__internal_e65ceecec8f45e886a55244f676d124764a0f7b6868f704a0b1ba88a6bf3a99d->enter($__internal_e65ceecec8f45e886a55244f676d124764a0f7b6868f704a0b1ba88a6bf3a99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65ceecec8f45e886a55244f676d124764a0f7b6868f704a0b1ba88a6bf3a99d->leave($__internal_e65ceecec8f45e886a55244f676d124764a0f7b6868f704a0b1ba88a6bf3a99d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fe38d0e03a2a96d92fe40c72cd692f55258000aeb7832b5c87650da5dcb60bb = $this->env->getExtension("native_profiler");
        $__internal_2fe38d0e03a2a96d92fe40c72cd692f55258000aeb7832b5c87650da5dcb60bb->enter($__internal_2fe38d0e03a2a96d92fe40c72cd692f55258000aeb7832b5c87650da5dcb60bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_2fe38d0e03a2a96d92fe40c72cd692f55258000aeb7832b5c87650da5dcb60bb->leave($__internal_2fe38d0e03a2a96d92fe40c72cd692f55258000aeb7832b5c87650da5dcb60bb_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a88d248bf626266c8b42248abed97d7bb8b467d6dc5ad9c8a6c65d4c2df6bd40 = $this->env->getExtension("native_profiler");
        $__internal_a88d248bf626266c8b42248abed97d7bb8b467d6dc5ad9c8a6c65d4c2df6bd40->enter($__internal_a88d248bf626266c8b42248abed97d7bb8b467d6dc5ad9c8a6c65d4c2df6bd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_a88d248bf626266c8b42248abed97d7bb8b467d6dc5ad9c8a6c65d4c2df6bd40->leave($__internal_a88d248bf626266c8b42248abed97d7bb8b467d6dc5ad9c8a6c65d4c2df6bd40_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4947fa5bbbcedb1ea7336aeaca7695df722c45ef8c811e4e1a9a5ee147c6a1e = $this->env->getExtension("native_profiler");
        $__internal_a4947fa5bbbcedb1ea7336aeaca7695df722c45ef8c811e4e1a9a5ee147c6a1e->enter($__internal_a4947fa5bbbcedb1ea7336aeaca7695df722c45ef8c811e4e1a9a5ee147c6a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

    ";
        // line 55
        if ((isset($context["has_top"]) ? $context["has_top"] : $this->getContext($context, "has_top"))) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "

    <div class=\"row\">
        ";
        // line 69
        $context["width_left"] = 4;
        // line 70
        echo "        ";
        $context["width_right"] = 4;
        // line 71
        echo "        ";
        $context["width_center"] = 4;
        // line 72
        echo "
        ";
        // line 74
        echo "        ";
        if ( !(isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 75
            echo "            ";
            $context["width_left"] = 6;
            // line 76
            echo "            ";
            $context["width_right"] = 6;
            // line 77
            echo "        ";
        }
        // line 78
        echo "
        ";
        // line 80
        echo "        ";
        if (( !(isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) &&  !(isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 81
            echo "            ";
            $context["width_center"] = 12;
            // line 82
            echo "        ";
        }
        // line 83
        echo "
        ";
        // line 85
        echo "        ";
        if (((isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) || (isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 86
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_left"]) ? $context["width_left"] : $this->getContext($context, "width_left")), "html", null, true);
            echo "\">
            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 88
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 89
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "


                ";
                }
                // line 93
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        </div>
        ";
        }
        // line 96
        echo "
        ";
        // line 97
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 98
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_center"]) ? $context["width_center"] : $this->getContext($context, "width_center")), "html", null, true);
            echo "\">
                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 100
                echo "                    ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 101
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 103
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            </div>
        ";
        }
        // line 106
        echo "
        ";
        // line 108
        echo "        ";
        if (((isset($context["has_left"]) ? $context["has_left"] : $this->getContext($context, "has_left")) || (isset($context["has_right"]) ? $context["has_right"] : $this->getContext($context, "has_right")))) {
            // line 109
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_right"]) ? $context["width_right"] : $this->getContext($context, "width_right")), "html", null, true);
            echo "\">
            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 111
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 112
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </div>
        ";
        }
        // line 117
        echo "    </div>

    ";
        // line 119
        if ((isset($context["has_bottom"]) ? $context["has_bottom"] : $this->getContext($context, "has_bottom"))) {
            // line 120
            echo "        <div class=\"row\">
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 122
                echo "                ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('security')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 123
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 124
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>
                ";
                }
                // line 127
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        </div>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()))));
        echo "

";
        
        $__internal_a4947fa5bbbcedb1ea7336aeaca7695df722c45ef8c811e4e1a9a5ee147c6a1e->leave($__internal_a4947fa5bbbcedb1ea7336aeaca7695df722c45ef8c811e4e1a9a5ee147c6a1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 131,  410 => 130,  406 => 128,  400 => 127,  394 => 124,  389 => 123,  386 => 122,  382 => 121,  379 => 120,  377 => 119,  373 => 117,  369 => 115,  363 => 114,  357 => 112,  354 => 111,  350 => 110,  345 => 109,  342 => 108,  339 => 106,  335 => 104,  329 => 103,  323 => 101,  320 => 100,  316 => 99,  311 => 98,  309 => 97,  306 => 96,  302 => 94,  296 => 93,  288 => 89,  285 => 88,  281 => 87,  276 => 86,  273 => 85,  270 => 83,  267 => 82,  264 => 81,  261 => 80,  258 => 78,  255 => 77,  252 => 76,  249 => 75,  246 => 74,  243 => 72,  240 => 71,  237 => 70,  235 => 69,  230 => 66,  226 => 64,  220 => 63,  214 => 60,  209 => 59,  206 => 58,  202 => 57,  199 => 56,  197 => 55,  192 => 53,  189 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  169 => 47,  167 => 46,  164 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  144 => 40,  142 => 39,  139 => 38,  133 => 37,  130 => 36,  127 => 35,  124 => 34,  119 => 33,  117 => 32,  114 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 26,  92 => 25,  89 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 19,  67 => 18,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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
/* */
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock%}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     {% set has_left = false %}*/
/*     {% for block in blocks.left %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_left = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_center = false %}*/
/*     {% for block in blocks.center %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_center = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_right = false %}*/
/*     {% for block in blocks.right %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_right = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_top = false %}*/
/*     {% for block in blocks.top %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_top = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set has_bottom = false %}*/
/*     {% for block in blocks.bottom %}*/
/*         {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*             {% set has_bottom = true %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': sonata_admin.adminPool }) }}*/
/* */
/*     {% if has_top %}*/
/*         <div class="row">*/
/*             {% for block in blocks.top %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     <div class="{{ block.class }}">*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     <div class="row">*/
/*         {% set width_left = 4 %}*/
/*         {% set width_right = 4 %}*/
/*         {% set width_center = 4 %}*/
/* */
/*         {# if center block is not present we make left and right ones wider #}*/
/*         {% if not has_center %}*/
/*             {% set width_left = 6 %}*/
/*             {% set width_right = 6 %}*/
/*         {% endif %}*/
/* */
/*         {# if there is no right and left block present we make center one full width #}*/
/*         {% if not has_left and not has_right %}*/
/*             {% set width_center = 12 %}*/
/*         {% endif %}*/
/* */
/*         {# don't show left column if only center one is present #}*/
/*         {% if has_left or has_right %}*/
/*         <div class="col-md-{{ width_left }}">*/
/*             {% for block in blocks.left %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/* */
/* */
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if has_center %}*/
/*             <div class="col-md-{{ width_center }}">*/
/*                 {% for block in blocks.center %}*/
/*                     {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {# don't show right column if only center one is present #}*/
/*         {% if has_left or has_right %}*/
/*          <div class="col-md-{{ width_right }}">*/
/*             {% for block in blocks.right %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% if has_bottom %}*/
/*         <div class="row">*/
/*             {% for block in blocks.bottom %}*/
/*                 {% if block.roles|length == 0 or is_granted(block.roles) %}*/
/*                     <div class="{{ block.class }}">*/
/*                         {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': sonata_admin.adminPool }) }}*/
/* */
/* {% endblock %}*/
/* */
