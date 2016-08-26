<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_126ce1173d88c6f415044d7fea2f9f9ae14c0747cef9251fc4d93e4e5f5bc5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244a125fa4188df430994d8fd0dc76024da0e69f275e9866f6c9d3649526c3aa = $this->env->getExtension("native_profiler");
        $__internal_244a125fa4188df430994d8fd0dc76024da0e69f275e9866f6c9d3649526c3aa->enter($__internal_244a125fa4188df430994d8fd0dc76024da0e69f275e9866f6c9d3649526c3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "
        <title>
        ";
        // line 81
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 101
        echo "        </title>
    </head>
    <body ";
        // line 103
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 107
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 188
        echo "
        ";
        // line 189
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 333
        echo "    </div>

    ";
        // line 335
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 336
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 342
            echo "    ";
        }
        // line 343
        echo "
    </body>
</html>
";
        
        $__internal_244a125fa4188df430994d8fd0dc76024da0e69f275e9866f6c9d3649526c3aa->leave($__internal_244a125fa4188df430994d8fd0dc76024da0e69f275e9866f6c9d3649526c3aa_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_3828b053f2cd4300d078b14495e9eee6c17a9b572dd6653cd130fdaa19188905 = $this->env->getExtension("native_profiler");
        $__internal_3828b053f2cd4300d078b14495e9eee6c17a9b572dd6653cd130fdaa19188905->enter($__internal_3828b053f2cd4300d078b14495e9eee6c17a9b572dd6653cd130fdaa19188905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_3828b053f2cd4300d078b14495e9eee6c17a9b572dd6653cd130fdaa19188905->leave($__internal_3828b053f2cd4300d078b14495e9eee6c17a9b572dd6653cd130fdaa19188905_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_546d4a7b50954be0d3da5961e307611134307b1f2f03bd153f1554c8280ab897 = $this->env->getExtension("native_profiler");
        $__internal_546d4a7b50954be0d3da5961e307611134307b1f2f03bd153f1554c8280ab897->enter($__internal_546d4a7b50954be0d3da5961e307611134307b1f2f03bd153f1554c8280ab897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_546d4a7b50954be0d3da5961e307611134307b1f2f03bd153f1554c8280ab897->leave($__internal_546d4a7b50954be0d3da5961e307611134307b1f2f03bd153f1554c8280ab897_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10132c43906a9c038e48c51880e3eef9b9e5514f9d31b9c56c13d3320713caa8 = $this->env->getExtension("native_profiler");
        $__internal_10132c43906a9c038e48c51880e3eef9b9e5514f9d31b9c56c13d3320713caa8->enter($__internal_10132c43906a9c038e48c51880e3eef9b9e5514f9d31b9c56c13d3320713caa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_10132c43906a9c038e48c51880e3eef9b9e5514f9d31b9c56c13d3320713caa8->leave($__internal_10132c43906a9c038e48c51880e3eef9b9e5514f9d31b9c56c13d3320713caa8_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c54b22076be320dcda1c84f6d68342f918863a78bfe3ca40b646a48998d68d2d = $this->env->getExtension("native_profiler");
        $__internal_c54b22076be320dcda1c84f6d68342f918863a78bfe3ca40b646a48998d68d2d->enter($__internal_c54b22076be320dcda1c84f6d68342f918863a78bfe3ca40b646a48998d68d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_STICKYFORMS: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
            ";
        // line 63
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 66
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 68
        echo "
            ";
        // line 70
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 71
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 72
            echo "
                ";
            // line 74
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 75
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 77
            echo "            ";
        }
        // line 78
        echo "        ";
        
        $__internal_c54b22076be320dcda1c84f6d68342f918863a78bfe3ca40b646a48998d68d2d->leave($__internal_c54b22076be320dcda1c84f6d68342f918863a78bfe3ca40b646a48998d68d2d_prof);

    }

    // line 81
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_5e480860c04005c95d053c75aacf57d33d1b3e1f2d0027627c798e9d39d87d95 = $this->env->getExtension("native_profiler");
        $__internal_5e480860c04005c95d053c75aacf57d33d1b3e1f2d0027627c798e9d39d87d95->enter($__internal_5e480860c04005c95d053c75aacf57d33d1b3e1f2d0027627c798e9d39d87d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 84
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 85
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 87
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 88
                echo "                    -
                    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 90
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 92
                            echo "                                &gt;
                            ";
                        }
                        // line 94
                        echo "
                            ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 97
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                ";
            }
            // line 99
            echo "            ";
        }
        // line 100
        echo "        ";
        
        $__internal_5e480860c04005c95d053c75aacf57d33d1b3e1f2d0027627c798e9d39d87d95->leave($__internal_5e480860c04005c95d053c75aacf57d33d1b3e1f2d0027627c798e9d39d87d95_prof);

    }

    // line 103
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_5654e7cf5fd75fe14a3386574261f4a3047101505b4f33328b46cb588e85df91 = $this->env->getExtension("native_profiler");
        $__internal_5654e7cf5fd75fe14a3386574261f4a3047101505b4f33328b46cb588e85df91->enter($__internal_5654e7cf5fd75fe14a3386574261f4a3047101505b4f33328b46cb588e85df91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_5654e7cf5fd75fe14a3386574261f4a3047101505b4f33328b46cb588e85df91->leave($__internal_5654e7cf5fd75fe14a3386574261f4a3047101505b4f33328b46cb588e85df91_prof);

    }

    // line 107
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_cba86a3fe6d06a40032cf864b4e9e5b652d6034e1c2f7987409e49409d4f80c8 = $this->env->getExtension("native_profiler");
        $__internal_cba86a3fe6d06a40032cf864b4e9e5b652d6034e1c2f7987409e49409d4f80c8->enter($__internal_cba86a3fe6d06a40032cf864b4e9e5b652d6034e1c2f7987409e49409d4f80c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 108
        echo "            <header class=\"main-header\">
                ";
        // line 109
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 116
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 128
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "            </header>
        ";
        
        $__internal_cba86a3fe6d06a40032cf864b4e9e5b652d6034e1c2f7987409e49409d4f80c8->leave($__internal_cba86a3fe6d06a40032cf864b4e9e5b652d6034e1c2f7987409e49409d4f80c8_prof);

    }

    // line 109
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_14ca7e34f3bcd3ff178e5888912696a79b5584c36afd8a7dff550e756977c08e = $this->env->getExtension("native_profiler");
        $__internal_14ca7e34f3bcd3ff178e5888912696a79b5584c36afd8a7dff550e756977c08e->enter($__internal_14ca7e34f3bcd3ff178e5888912696a79b5584c36afd8a7dff550e756977c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 110
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_14ca7e34f3bcd3ff178e5888912696a79b5584c36afd8a7dff550e756977c08e->leave($__internal_14ca7e34f3bcd3ff178e5888912696a79b5584c36afd8a7dff550e756977c08e_prof);

    }

    // line 116
    public function block_logo($context, array $blocks = array())
    {
        $__internal_7c903180df8aabaf4c1e4fc84d3fc41a98692c159eb3286147b92dc0ec650fab = $this->env->getExtension("native_profiler");
        $__internal_7c903180df8aabaf4c1e4fc84d3fc41a98692c159eb3286147b92dc0ec650fab->enter($__internal_7c903180df8aabaf4c1e4fc84d3fc41a98692c159eb3286147b92dc0ec650fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 117
        echo "                    ";
        ob_start();
        // line 118
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 119
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 120
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 122
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 123
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 125
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 127
        echo "                ";
        
        $__internal_7c903180df8aabaf4c1e4fc84d3fc41a98692c159eb3286147b92dc0ec650fab->leave($__internal_7c903180df8aabaf4c1e4fc84d3fc41a98692c159eb3286147b92dc0ec650fab_prof);

    }

    // line 128
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4f9ecc40f42524274bc8191ef1af1f19caf26a83b5af81b3f4b21d8c42a441d5 = $this->env->getExtension("native_profiler");
        $__internal_4f9ecc40f42524274bc8191ef1af1f19caf26a83b5af81b3f4b21d8c42a441d5->enter($__internal_4f9ecc40f42524274bc8191ef1af1f19caf26a83b5af81b3f4b21d8c42a441d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 129
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 135
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 162
        echo "                        </div>

                        ";
        // line 164
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 184
        echo "                    </nav>
                ";
        
        $__internal_4f9ecc40f42524274bc8191ef1af1f19caf26a83b5af81b3f4b21d8c42a441d5->leave($__internal_4f9ecc40f42524274bc8191ef1af1f19caf26a83b5af81b3f4b21d8c42a441d5_prof);

    }

    // line 135
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f9f13b587a3acf0ff9ca09406fea172fa382f0099347b7220a6a3a1a73b9dfaf = $this->env->getExtension("native_profiler");
        $__internal_f9f13b587a3acf0ff9ca09406fea172fa382f0099347b7220a6a3a1a73b9dfaf->enter($__internal_f9f13b587a3acf0ff9ca09406fea172fa382f0099347b7220a6a3a1a73b9dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 136
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 137
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 138
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 139
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 140
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 141
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 142
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 143
                            echo "                                                            <li>
                                                                ";
                            // line 144
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 145
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 147
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 149
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 151
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 153
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                                                ";
                }
                // line 155
                echo "                                            ";
            } else {
                // line 156
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 158
            echo "                                        </ol>
                                    ";
        }
        // line 160
        echo "                                </div>
                            ";
        
        $__internal_f9f13b587a3acf0ff9ca09406fea172fa382f0099347b7220a6a3a1a73b9dfaf->leave($__internal_f9f13b587a3acf0ff9ca09406fea172fa382f0099347b7220a6a3a1a73b9dfaf_prof);

    }

    // line 164
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_fd5e1b0b5e99c23cbd2c7da40b3c37ecdb47294de963e683b455e3e8c0b9289c = $this->env->getExtension("native_profiler");
        $__internal_fd5e1b0b5e99c23cbd2c7da40b3c37ecdb47294de963e683b455e3e8c0b9289c->enter($__internal_fd5e1b0b5e99c23cbd2c7da40b3c37ecdb47294de963e683b455e3e8c0b9289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 165
        echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 171
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 171)->display($context);
        // line 172
        echo "                                    </li>
                                    <li class=\"dropdown user-menu\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            ";
        // line 178
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 178)->display($context);
        // line 179
        echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        ";
        
        $__internal_fd5e1b0b5e99c23cbd2c7da40b3c37ecdb47294de963e683b455e3e8c0b9289c->leave($__internal_fd5e1b0b5e99c23cbd2c7da40b3c37ecdb47294de963e683b455e3e8c0b9289c_prof);

    }

    // line 189
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_6d8f63a813f021bc5cf547c3222484500116cb2743c534d79812936571331309 = $this->env->getExtension("native_profiler");
        $__internal_6d8f63a813f021bc5cf547c3222484500116cb2743c534d79812936571331309->enter($__internal_6d8f63a813f021bc5cf547c3222484500116cb2743c534d79812936571331309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 190
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 232
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 234
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 331
        echo "            </div>
        ";
        
        $__internal_6d8f63a813f021bc5cf547c3222484500116cb2743c534d79812936571331309->leave($__internal_6d8f63a813f021bc5cf547c3222484500116cb2743c534d79812936571331309_prof);

    }

    // line 190
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c9d31357f963a13ca68d374508e710fdf10eb5fee4ab2747eea30755a78fff48 = $this->env->getExtension("native_profiler");
        $__internal_c9d31357f963a13ca68d374508e710fdf10eb5fee4ab2747eea30755a78fff48->enter($__internal_c9d31357f963a13ca68d374508e710fdf10eb5fee4ab2747eea30755a78fff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 191
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">

                        ";
        // line 194
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 224
        echo "                        <ul>
                            <li>
                                <a href=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("sr_article_home");
        echo "\"><h3>retour au site</h3></a>
                            </li>
                        </ul>
                    </section>
                </aside>
            ";
        
        $__internal_c9d31357f963a13ca68d374508e710fdf10eb5fee4ab2747eea30755a78fff48->leave($__internal_c9d31357f963a13ca68d374508e710fdf10eb5fee4ab2747eea30755a78fff48_prof);

    }

    // line 194
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_ab907ef4d75814033e9895eaaf9247679fe7b26017d90dafc325271a5a4d17d3 = $this->env->getExtension("native_profiler");
        $__internal_ab907ef4d75814033e9895eaaf9247679fe7b26017d90dafc325271a5a4d17d3->enter($__internal_ab907ef4d75814033e9895eaaf9247679fe7b26017d90dafc325271a5a4d17d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 195
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 209
        echo "
                            ";
        // line 210
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 211
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 216
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 223
        echo "                        ";
        
        $__internal_ab907ef4d75814033e9895eaaf9247679fe7b26017d90dafc325271a5a4d17d3->leave($__internal_ab907ef4d75814033e9895eaaf9247679fe7b26017d90dafc325271a5a4d17d3_prof);

    }

    // line 195
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_889efa3b824845f8ef0537bb1e1eb6f1443a50440f2274a0887bccbecf330357 = $this->env->getExtension("native_profiler");
        $__internal_889efa3b824845f8ef0537bb1e1eb6f1443a50440f2274a0887bccbecf330357->enter($__internal_889efa3b824845f8ef0537bb1e1eb6f1443a50440f2274a0887bccbecf330357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 196
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 197
            echo "                                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 208
        echo "                            ";
        
        $__internal_889efa3b824845f8ef0537bb1e1eb6f1443a50440f2274a0887bccbecf330357->leave($__internal_889efa3b824845f8ef0537bb1e1eb6f1443a50440f2274a0887bccbecf330357_prof);

    }

    // line 210
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_61aa2fa9c082ee4685adc60288eb64751063f6c8e8bc5f396c80c1cf3b3b70fd = $this->env->getExtension("native_profiler");
        $__internal_61aa2fa9c082ee4685adc60288eb64751063f6c8e8bc5f396c80c1cf3b3b70fd->enter($__internal_61aa2fa9c082ee4685adc60288eb64751063f6c8e8bc5f396c80c1cf3b3b70fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_61aa2fa9c082ee4685adc60288eb64751063f6c8e8bc5f396c80c1cf3b3b70fd->leave($__internal_61aa2fa9c082ee4685adc60288eb64751063f6c8e8bc5f396c80c1cf3b3b70fd_prof);

    }

    // line 211
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_bef204c75f415eb6f3db00d5ff7600afad9ca988bd2bcee8235644277e08a526 = $this->env->getExtension("native_profiler");
        $__internal_bef204c75f415eb6f3db00d5ff7600afad9ca988bd2bcee8235644277e08a526->enter($__internal_bef204c75f415eb6f3db00d5ff7600afad9ca988bd2bcee8235644277e08a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 212
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 213
            echo "                                    ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 215
        echo "                            ";
        
        $__internal_bef204c75f415eb6f3db00d5ff7600afad9ca988bd2bcee8235644277e08a526->leave($__internal_bef204c75f415eb6f3db00d5ff7600afad9ca988bd2bcee8235644277e08a526_prof);

    }

    // line 216
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_eb2e6b5b2dd03e30c0774d8505c998371d1e45803e129d054c2c44d5de82bd69 = $this->env->getExtension("native_profiler");
        $__internal_eb2e6b5b2dd03e30c0774d8505c998371d1e45803e129d054c2c44d5de82bd69->enter($__internal_eb2e6b5b2dd03e30c0774d8505c998371d1e45803e129d054c2c44d5de82bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 217
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 218
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 221
        echo "                                </p>
                            ";
        
        $__internal_eb2e6b5b2dd03e30c0774d8505c998371d1e45803e129d054c2c44d5de82bd69->leave($__internal_eb2e6b5b2dd03e30c0774d8505c998371d1e45803e129d054c2c44d5de82bd69_prof);

    }

    // line 218
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_fea8189ef1d4e148d3069676a2745905bc1ee49f61474f058fe62f05a03311f7 = $this->env->getExtension("native_profiler");
        $__internal_fea8189ef1d4e148d3069676a2745905bc1ee49f61474f058fe62f05a03311f7->enter($__internal_fea8189ef1d4e148d3069676a2745905bc1ee49f61474f058fe62f05a03311f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 219
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_fea8189ef1d4e148d3069676a2745905bc1ee49f61474f058fe62f05a03311f7->leave($__internal_fea8189ef1d4e148d3069676a2745905bc1ee49f61474f058fe62f05a03311f7_prof);

    }

    // line 234
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c57cc1fb3807501d41e3b9739f396662baefbc0b91bd2b931e4a8d29197c7c25 = $this->env->getExtension("native_profiler");
        $__internal_c57cc1fb3807501d41e3b9739f396662baefbc0b91bd2b931e4a8d29197c7c25->enter($__internal_c57cc1fb3807501d41e3b9739f396662baefbc0b91bd2b931e4a8d29197c7c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 235
        echo "                    <section class=\"content-header\">

                        ";
        // line 237
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 291
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 294
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 329
        echo "                    </section>
                ";
        
        $__internal_c57cc1fb3807501d41e3b9739f396662baefbc0b91bd2b931e4a8d29197c7c25->leave($__internal_c57cc1fb3807501d41e3b9739f396662baefbc0b91bd2b931e4a8d29197c7c25_prof);

    }

    // line 237
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_42466e6966bf070827fd716b7da21d62b3b3897a08b8f36ba2145c8b45bcd571 = $this->env->getExtension("native_profiler");
        $__internal_42466e6966bf070827fd716b7da21d62b3b3897a08b8f36ba2145c8b45bcd571->enter($__internal_42466e6966bf070827fd716b7da21d62b3b3897a08b8f36ba2145c8b45bcd571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 238
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 290
        echo "                        ";
        
        $__internal_42466e6966bf070827fd716b7da21d62b3b3897a08b8f36ba2145c8b45bcd571->leave($__internal_42466e6966bf070827fd716b7da21d62b3b3897a08b8f36ba2145c8b45bcd571_prof);

    }

    // line 238
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_33b4049266b6b5b8a0e61c636e64dbb678670c8f6fae3b49fa31c34e8d4e28f8 = $this->env->getExtension("native_profiler");
        $__internal_33b4049266b6b5b8a0e61c636e64dbb678670c8f6fae3b49fa31c34e8d4e28f8->enter($__internal_33b4049266b6b5b8a0e61c636e64dbb678670c8f6fae3b49fa31c34e8d4e28f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 239
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 240
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 242
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 249
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 252
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 253
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 255
            echo "                                                </div>

                                                ";
            // line 257
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 258
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 259
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 260
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "                                                    </div>
                                                ";
            }
            // line 264
            echo "
                                                ";
            // line 265
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 281
            echo "
                                                ";
            // line 282
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 283
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 285
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 289
        echo "                            ";
        
        $__internal_33b4049266b6b5b8a0e61c636e64dbb678670c8f6fae3b49fa31c34e8d4e28f8->leave($__internal_33b4049266b6b5b8a0e61c636e64dbb678670c8f6fae3b49fa31c34e8d4e28f8_prof);

    }

    // line 242
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_4ea5754c6fae917ab6bbdd79a34bbfe990612275ed1df72efdd9459ace4484dd = $this->env->getExtension("native_profiler");
        $__internal_4ea5754c6fae917ab6bbdd79a34bbfe990612275ed1df72efdd9459ace4484dd->enter($__internal_4ea5754c6fae917ab6bbdd79a34bbfe990612275ed1df72efdd9459ace4484dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 243
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 244
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 245
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 248
        echo "                                            ";
        
        $__internal_4ea5754c6fae917ab6bbdd79a34bbfe990612275ed1df72efdd9459ace4484dd->leave($__internal_4ea5754c6fae917ab6bbdd79a34bbfe990612275ed1df72efdd9459ace4484dd_prof);

    }

    // line 265
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_ea274c1d1d8cb76f76a393a608182e4f9c992b7715b386176beea1aef263434e = $this->env->getExtension("native_profiler");
        $__internal_ea274c1d1d8cb76f76a393a608182e4f9c992b7715b386176beea1aef263434e->enter($__internal_ea274c1d1d8cb76f76a393a608182e4f9c992b7715b386176beea1aef263434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 266
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 267
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 268
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 269
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 270
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 272
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 276
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 278
            echo "                                                        </ul>
                                                    ";
        }
        // line 280
        echo "                                                ";
        
        $__internal_ea274c1d1d8cb76f76a393a608182e4f9c992b7715b386176beea1aef263434e->leave($__internal_ea274c1d1d8cb76f76a393a608182e4f9c992b7715b386176beea1aef263434e_prof);

    }

    // line 294
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_7933901834989a25a6df6dcc4d40d6d46b75c61ea8db0dc9444e00fcb4e17a3f = $this->env->getExtension("native_profiler");
        $__internal_7933901834989a25a6df6dcc4d40d6d46b75c61ea8db0dc9444e00fcb4e17a3f->enter($__internal_7933901834989a25a6df6dcc4d40d6d46b75c61ea8db0dc9444e00fcb4e17a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 295
        echo "
                            ";
        // line 296
        $this->displayBlock('notice', $context, $blocks);
        // line 299
        echo "
                            ";
        // line 300
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 301
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 303
        echo "
                            ";
        // line 304
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 305
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 307
        echo "
                            ";
        // line 308
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 309
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 311
        echo "
                            ";
        // line 312
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 313
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 315
        echo "
                            ";
        // line 316
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 317
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 318
                echo "                                    <div class=\"row\">
                                        ";
                // line 319
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 322
            echo "
                                <div class=\"row\">
                                    ";
            // line 324
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 328
        echo "                        ";
        
        $__internal_7933901834989a25a6df6dcc4d40d6d46b75c61ea8db0dc9444e00fcb4e17a3f->leave($__internal_7933901834989a25a6df6dcc4d40d6d46b75c61ea8db0dc9444e00fcb4e17a3f_prof);

    }

    // line 296
    public function block_notice($context, array $blocks = array())
    {
        $__internal_6dc7871acce9591da7d44911368ef9ed7e5a7d86b76ce3e1bbdf2582911f7a20 = $this->env->getExtension("native_profiler");
        $__internal_6dc7871acce9591da7d44911368ef9ed7e5a7d86b76ce3e1bbdf2582911f7a20->enter($__internal_6dc7871acce9591da7d44911368ef9ed7e5a7d86b76ce3e1bbdf2582911f7a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 297
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 297)->display($context);
        // line 298
        echo "                            ";
        
        $__internal_6dc7871acce9591da7d44911368ef9ed7e5a7d86b76ce3e1bbdf2582911f7a20->leave($__internal_6dc7871acce9591da7d44911368ef9ed7e5a7d86b76ce3e1bbdf2582911f7a20_prof);

    }

    // line 336
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_244b384b3beb8bd308d9ed9b75e038b0655f01e344e66fa3fbe246c3291a59ba = $this->env->getExtension("native_profiler");
        $__internal_244b384b3beb8bd308d9ed9b75e038b0655f01e344e66fa3fbe246c3291a59ba->enter($__internal_244b384b3beb8bd308d9ed9b75e038b0655f01e344e66fa3fbe246c3291a59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 337
        echo "            ";
        // line 338
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_244b384b3beb8bd308d9ed9b75e038b0655f01e344e66fa3fbe246c3291a59ba->leave($__internal_244b384b3beb8bd308d9ed9b75e038b0655f01e344e66fa3fbe246c3291a59ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1180 => 338,  1178 => 337,  1172 => 336,  1165 => 298,  1162 => 297,  1156 => 296,  1149 => 328,  1142 => 324,  1138 => 322,  1132 => 319,  1129 => 318,  1126 => 317,  1124 => 316,  1121 => 315,  1115 => 313,  1113 => 312,  1110 => 311,  1104 => 309,  1102 => 308,  1099 => 307,  1093 => 305,  1091 => 304,  1088 => 303,  1082 => 301,  1080 => 300,  1077 => 299,  1075 => 296,  1072 => 295,  1066 => 294,  1059 => 280,  1055 => 278,  1049 => 276,  1042 => 272,  1037 => 270,  1034 => 269,  1032 => 268,  1029 => 267,  1026 => 266,  1020 => 265,  1013 => 248,  1007 => 245,  1004 => 244,  1001 => 243,  995 => 242,  988 => 289,  982 => 285,  976 => 283,  974 => 282,  971 => 281,  969 => 265,  966 => 264,  962 => 262,  947 => 260,  943 => 259,  940 => 258,  938 => 257,  934 => 255,  928 => 253,  926 => 252,  921 => 249,  919 => 242,  915 => 240,  912 => 239,  906 => 238,  899 => 290,  896 => 238,  890 => 237,  882 => 329,  880 => 294,  875 => 291,  873 => 237,  869 => 235,  863 => 234,  855 => 219,  849 => 218,  841 => 221,  839 => 218,  836 => 217,  830 => 216,  823 => 215,  817 => 213,  814 => 212,  808 => 211,  796 => 210,  789 => 208,  775 => 199,  769 => 197,  766 => 196,  760 => 195,  753 => 223,  750 => 216,  747 => 211,  745 => 210,  742 => 209,  739 => 195,  733 => 194,  720 => 226,  716 => 224,  714 => 194,  709 => 191,  703 => 190,  695 => 331,  693 => 234,  689 => 232,  686 => 190,  680 => 189,  669 => 179,  667 => 178,  659 => 172,  657 => 171,  649 => 165,  643 => 164,  635 => 160,  631 => 158,  625 => 156,  622 => 155,  619 => 154,  605 => 153,  599 => 151,  595 => 149,  589 => 147,  581 => 145,  579 => 144,  576 => 143,  573 => 142,  555 => 141,  552 => 140,  550 => 139,  547 => 138,  545 => 137,  542 => 136,  536 => 135,  528 => 184,  526 => 164,  522 => 162,  520 => 135,  512 => 129,  506 => 128,  499 => 127,  495 => 125,  489 => 123,  486 => 122,  478 => 120,  476 => 119,  471 => 118,  468 => 117,  462 => 116,  451 => 112,  447 => 110,  441 => 109,  433 => 186,  430 => 128,  427 => 116,  425 => 109,  422 => 108,  416 => 107,  404 => 103,  397 => 100,  394 => 99,  391 => 98,  377 => 97,  372 => 95,  369 => 94,  365 => 92,  362 => 91,  359 => 90,  342 => 89,  339 => 88,  336 => 87,  330 => 85,  328 => 84,  322 => 82,  316 => 81,  309 => 78,  306 => 77,  300 => 75,  297 => 74,  294 => 72,  289 => 71,  286 => 70,  283 => 68,  277 => 66,  274 => 65,  272 => 64,  270 => 63,  267 => 62,  258 => 60,  254 => 59,  240 => 48,  236 => 46,  230 => 45,  222 => 44,  214 => 43,  206 => 42,  202 => 40,  196 => 39,  189 => 37,  180 => 35,  175 => 34,  169 => 33,  159 => 28,  153 => 27,  141 => 25,  131 => 343,  128 => 342,  125 => 336,  123 => 335,  119 => 333,  117 => 189,  114 => 188,  112 => 107,  105 => 103,  101 => 101,  99 => 81,  95 => 79,  93 => 39,  90 => 38,  88 => 33,  85 => 32,  83 => 27,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,);
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
/* {% set _preview              = block('preview') %}*/
/* {% set _form                 = block('form') %}*/
/* {% set _show                 = block('show') %}*/
/* {% set _list_table           = block('list_table') %}*/
/* {% set _list_filters         = block('list_filters') %}*/
/* {% set _tab_menu             = block('tab_menu') %}*/
/* {% set _content              = block('content') %}*/
/* {% set _title                = block('title') %}*/
/* {% set _breadcrumb           = block('breadcrumb') %}*/
/* {% set _actions              = block('actions') %}*/
/* {% set _navbar_title         = block('navbar_title') %}*/
/* {% set _list_filters_actions = block('list_filters_actions') %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/*             {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}*/
/*                     <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},*/
/*                     USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                 };*/
/* */
/*                 // http://getbootstrap.com/getting-started/#support-ie10-width*/
/*                 if (navigator.userAgent.match(/IEMobile\/10\.0/)) {*/
/*                     var msViewportStyle = document.createElement('style');*/
/*                     msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));*/
/*                     document.querySelector('head').appendChild(msViewportStyle);*/
/*                 }*/
/*             </script>*/
/* */
/*             {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {% set locale = app.request.locale %}*/
/*             {# localize moment #}*/
/*             {% if locale[:2] != 'en' %}*/
/*                 <script src="{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if sonata_admin.adminPool.getOption('use_select2') %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/* */
/*     <div class="wrapper">*/
/* */
/*         {% block sonata_header %}*/
/*             <header class="main-header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                         <a class="logo" href="{{ path('sonata_admin_dashboard') }}">*/
/*                             {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <img src="{{ asset(sonata_admin.adminPool.titlelogo) }}" alt="{{ sonata_admin.adminPool.title }}">*/
/*                             {% endif %}*/
/*                             {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <span>{{ sonata_admin.adminPool.title }}</span>*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     <nav class="navbar navbar-static-top" role="navigation">*/
/*                         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                         </a>*/
/* */
/*                         <div class="navbar-left">*/
/*                             {% block sonata_breadcrumb %}*/
/*                                 <div class="hidden-xs">*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endblock sonata_breadcrumb %}*/
/*                         </div>*/
/* */
/*                         {% block sonata_top_nav_menu %}*/
/*                             <div class="navbar-custom-menu">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         {% include sonata_admin.adminPool.getTemplate('add_block') %}*/
/*                                     </li>*/
/*                                     <li class="dropdown user-menu">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu dropdown-user">*/
/*                                             {% include sonata_admin.adminPool.getTemplate('user_block') %}*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </nav>*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             {% block sonata_left_side %}*/
/*                 <aside class="main-sidebar">*/
/*                     <section class="sidebar">*/
/* */
/*                         {% block sonata_side_nav %}*/
/*                             {% block sonata_sidebar_search %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     <form action="{{ path('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                         <div class="input-group custom-search-form">*/
/*                                             <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-flat" type="submit">*/
/*                                                         <i class="fa fa-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_sidebar_search %}*/
/* */
/*                             {% block side_bar_before_nav %} {% endblock %}*/
/*                             {% block side_bar_nav %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}*/
/*                                 {% endif %}*/
/*                             {% endblock side_bar_nav %}*/
/*                             {% block side_bar_after_nav %}*/
/*                                 <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px">*/
/*                                     {% block side_bar_after_nav_content %}*/
/*                                         <a href="https://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a>*/
/*                                     {% endblock %}*/
/*                                 </p>*/
/*                             {% endblock %}*/
/*                         {% endblock sonata_side_nav %}*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('sr_article_home') }}"><h3>retour au site</h3></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </section>*/
/*                 </aside>*/
/*             {% endblock sonata_left_side %}*/
/* */
/*             <div class="content-wrapper">*/
/*                 {% block sonata_page_content %}*/
/*                     <section class="content-header">*/
/* */
/*                         {% block sonata_page_content_header %}*/
/*                             {% block sonata_page_content_nav %}*/
/*                                 {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}*/
/*                                     <nav class="navbar navbar-default" role="navigation">*/
/*                                         <div class="container-fluid">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <a class="navbar-brand" href="#">{{ _navbar_title|raw }}</a>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/* */
/*                                             <div class="navbar-collapse">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}*/
/*                                                     <div class="nav navbar-right btn-group">*/
/*                                                         {% for mode, settings in admin.listModes %}*/
/*                                                             <a href="{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}" class="btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}"><i class="{{ settings.class }}"></i></a>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% block sonata_admin_content_actions_wrappers %}*/
/*                                                     {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                         {% if _actions|split('</a>')|length > 2 %}*/
/*                                                             <li class="dropdown sonata-actions">*/
/*                                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                                 <ul class="dropdown-menu" role="menu">*/
/*                                                                     {{ _actions|raw }}*/
/*                                                                 </ul>*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             {{ _actions|raw }}*/
/*                                                         {% endif %}*/
/*                                                         </ul>*/
/*                                                     {% endif %}*/
/*                                                 {% endblock sonata_admin_content_actions_wrappers %}*/
/* */
/*                                                 {% if _list_filters_actions is not empty %}*/
/*                                                     {{ _list_filters_actions|raw }}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </nav>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_page_content_nav %}*/
/*                         {% endblock sonata_page_content_header %}*/
/*                     </section>*/
/* */
/*                     <section class="content">*/
/*                         {% block sonata_admin_content %}*/
/* */
/*                             {% block notice %}*/
/*                                 {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                             {% endblock notice %}*/
/* */
/*                             {% if _preview is not empty %}*/
/*                                 <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _content is not empty %}*/
/*                                 <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _show is not empty %}*/
/*                                 <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _form is not empty %}*/
/*                                 <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                 {% if _list_filters|trim %}*/
/*                                     <div class="row">*/
/*                                         {{ _list_filters|raw }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="row">*/
/*                                     {{ _list_table|raw }}*/
/*                                 </div>*/
/* */
/*                             {% endif %}*/
/*                         {% endblock sonata_admin_content %}*/
/*                     </section>*/
/*                 {% endblock sonata_page_content %}*/
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </div>*/
/* */
/*     {% if sonata_admin.adminPool.getOption('use_bootlint') %}*/
/*         {% block bootlint %}*/
/*             {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}*/
/*             <script type="text/javascript">*/
/*                 javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();*/
/*             </script>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
