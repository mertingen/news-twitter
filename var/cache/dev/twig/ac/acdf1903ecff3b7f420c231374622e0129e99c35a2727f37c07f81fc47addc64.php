<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bc9aea1e42a5762ca5347de1940626ddcc49a65d4e317df4bddf0e6cca6cbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc9aea1e42a5762ca5347de1940626ddcc49a65d4e317df4bddf0e6cca6cbcc->enter($__internal_6bc9aea1e42a5762ca5347de1940626ddcc49a65d4e317df4bddf0e6cca6cbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_493c64fec2aa6c7c5bb54135cc8616419e1035ab6574485e8ce73aa81a8c52e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c64fec2aa6c7c5bb54135cc8616419e1035ab6574485e8ce73aa81a8c52e1->enter($__internal_493c64fec2aa6c7c5bb54135cc8616419e1035ab6574485e8ce73aa81a8c52e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Welcome To | News Keywords</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Animation Css -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Css -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-select/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themes/all-themes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "</head>

<body class=\"theme-red\">
<!-- Page Loader -->
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class=\"navbar\" id=\"top-navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
               data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"navbar-brand\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-list");
        echo "\">NEWS KEYWORDS</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <!-- User Info -->
        <div class=\"user-info\">
            <div class=\"image\">
                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"User\"/>
            </div>
            <div class=\"info-container\">
                <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                     aria-expanded=\"false\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "</div>
                <div class=\"email\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</div>
                <div class=\"btn-group user-helper-dropdown\">
                    <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                    <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
        echo "\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"header\">Menu</li>
                <li class=\"active\">
                    <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-list");
        echo "\">
                        <i class=\"material-icons\">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                        <i class=\"material-icons\">trending_down</i>
                        <span>Keyword</span>
                    </a>
                    <ul class=\"ml-menu\">
                        <li>
                            <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-add");
        echo "\">
                                <span>Add</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-table");
        echo "\">
                                <span>Table</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class=\"legal\">
            <div class=\"copyright\">
                &copy; ";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-list");
        echo "\">News Keywords</a>
            </div>
            <div class=\"version\">
                <b>Version: </b> 0.0.2
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    </aside>
    <!-- #END# Right Sidebar -->
</section>

<section class=\"content\">
    ";
        // line 144
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "</section>

<!-- Jquery Core Js -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core Js -->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Select Plugin Js -->
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery CountTo Plugin Js -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-countto/jquery.countTo.js"), "html", null, true);
        echo "\"></script>

<!-- Sparkline Chart Plugin Js -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Js -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/admin.js"), "html", null, true);
        echo "\"></script>

<!-- Demo Js -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dialog.js"), "html", null, true);
        echo "\"></script>
";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "</body>

</html>";
        
        $__internal_6bc9aea1e42a5762ca5347de1940626ddcc49a65d4e317df4bddf0e6cca6cbcc->leave($__internal_6bc9aea1e42a5762ca5347de1940626ddcc49a65d4e317df4bddf0e6cca6cbcc_prof);

        
        $__internal_493c64fec2aa6c7c5bb54135cc8616419e1035ab6574485e8ce73aa81a8c52e1->leave($__internal_493c64fec2aa6c7c5bb54135cc8616419e1035ab6574485e8ce73aa81a8c52e1_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a46a5414cd9b46240e9b24c3157a485fee9b077eefe21fa5d040bcd99a9d1bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46a5414cd9b46240e9b24c3157a485fee9b077eefe21fa5d040bcd99a9d1bd5->enter($__internal_a46a5414cd9b46240e9b24c3157a485fee9b077eefe21fa5d040bcd99a9d1bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_932c17c6d32c4bde756297bb06a7c118fe845619e5fea81fde674e50a57277bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932c17c6d32c4bde756297bb06a7c118fe845619e5fea81fde674e50a57277bb->enter($__internal_932c17c6d32c4bde756297bb06a7c118fe845619e5fea81fde674e50a57277bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        echo "    ";
        
        $__internal_932c17c6d32c4bde756297bb06a7c118fe845619e5fea81fde674e50a57277bb->leave($__internal_932c17c6d32c4bde756297bb06a7c118fe845619e5fea81fde674e50a57277bb_prof);

        
        $__internal_a46a5414cd9b46240e9b24c3157a485fee9b077eefe21fa5d040bcd99a9d1bd5->leave($__internal_a46a5414cd9b46240e9b24c3157a485fee9b077eefe21fa5d040bcd99a9d1bd5_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_a372373cd6f62843a0426a6611ffd7e44002bafd974a86e9fe593080b59a85c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a372373cd6f62843a0426a6611ffd7e44002bafd974a86e9fe593080b59a85c9->enter($__internal_a372373cd6f62843a0426a6611ffd7e44002bafd974a86e9fe593080b59a85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c5eea6c04c2c6058b860bcb2fb59d9e4d598827432f1c5fda058aa12ebebc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5eea6c04c2c6058b860bcb2fb59d9e4d598827432f1c5fda058aa12ebebc6c->enter($__internal_5c5eea6c04c2c6058b860bcb2fb59d9e4d598827432f1c5fda058aa12ebebc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c5eea6c04c2c6058b860bcb2fb59d9e4d598827432f1c5fda058aa12ebebc6c->leave($__internal_5c5eea6c04c2c6058b860bcb2fb59d9e4d598827432f1c5fda058aa12ebebc6c_prof);

        
        $__internal_a372373cd6f62843a0426a6611ffd7e44002bafd974a86e9fe593080b59a85c9->leave($__internal_a372373cd6f62843a0426a6611ffd7e44002bafd974a86e9fe593080b59a85c9_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c1e5ecc6a1bd0f8472b42ef153b3a6ad8307a22e5ff38fa023b82d019ef1078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1e5ecc6a1bd0f8472b42ef153b3a6ad8307a22e5ff38fa023b82d019ef1078->enter($__internal_7c1e5ecc6a1bd0f8472b42ef153b3a6ad8307a22e5ff38fa023b82d019ef1078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93cb74b09f06968b564b0133ddf34d2bc2ea79ed6dfa71b9010c7bec875ac477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cb74b09f06968b564b0133ddf34d2bc2ea79ed6dfa71b9010c7bec875ac477->enter($__internal_93cb74b09f06968b564b0133ddf34d2bc2ea79ed6dfa71b9010c7bec875ac477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_93cb74b09f06968b564b0133ddf34d2bc2ea79ed6dfa71b9010c7bec875ac477->leave($__internal_93cb74b09f06968b564b0133ddf34d2bc2ea79ed6dfa71b9010c7bec875ac477_prof);

        
        $__internal_7c1e5ecc6a1bd0f8472b42ef153b3a6ad8307a22e5ff38fa023b82d019ef1078->leave($__internal_7c1e5ecc6a1bd0f8472b42ef153b3a6ad8307a22e5ff38fa023b82d019ef1078_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 177,  330 => 144,  320 => 36,  311 => 35,  299 => 179,  297 => 177,  293 => 176,  289 => 175,  285 => 174,  280 => 172,  274 => 169,  268 => 166,  262 => 163,  256 => 160,  250 => 157,  244 => 154,  238 => 151,  232 => 148,  227 => 145,  225 => 144,  205 => 129,  190 => 117,  182 => 112,  167 => 100,  153 => 89,  146 => 85,  142 => 84,  135 => 80,  119 => 67,  87 => 37,  85 => 35,  81 => 34,  75 => 31,  70 => 29,  65 => 27,  59 => 24,  53 => 21,  47 => 18,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Welcome To | News Keywords</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"{{ asset(\"assets/plugins/bootstrap/css/bootstrap.css\") }}\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"{{ asset(\"assets/plugins/node-waves/waves.css\") }}\" rel=\"stylesheet\">

    <!-- Animation Css -->
    <link href=\"{{ asset(\"assets/plugins/animate-css/animate.css\") }}\" rel=\"stylesheet\">

    <!-- Custom Css -->
    <link href=\"{{ asset(\"assets/css/style.css\") }}\" rel=\"stylesheet\">

    <link href=\"{{ asset(\"assets/plugins/sweetalert/sweetalert.css\") }}\" rel=\"stylesheet\">

    <link href=\"{{ asset(\"assets/plugins/bootstrap-select/css/bootstrap-select.css\") }}\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"{{ asset(\"assets/css/themes/all-themes.css\") }}\" rel=\"stylesheet\">
    {% block stylesheets %}
    {% endblock %}
</head>

<body class=\"theme-red\">
<!-- Page Loader -->
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class=\"navbar\" id=\"top-navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
               data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
            <a class=\"navbar-brand\" href=\"{{ path('keyword-list') }}\">NEWS KEYWORDS</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <!-- User Info -->
        <div class=\"user-info\">
            <div class=\"image\">
                <img src=\"{{ app.user.image }}\" width=\"48\" height=\"48\" alt=\"User\"/>
            </div>
            <div class=\"info-container\">
                <div class=\"name\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                     aria-expanded=\"false\">{{ app.user.name }}</div>
                <div class=\"email\">{{ app.user.username }}</div>
                <div class=\"btn-group user-helper-dropdown\">
                    <i class=\"material-icons\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">keyboard_arrow_down</i>
                    <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"{{ path('security_logout') }}\"><i class=\"material-icons\">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"header\">Menu</li>
                <li class=\"active\">
                    <a href=\"{{ path('keyword-list') }}\">
                        <i class=\"material-icons\">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href=\"javascript:void(0);\" class=\"menu-toggle\">
                        <i class=\"material-icons\">trending_down</i>
                        <span>Keyword</span>
                    </a>
                    <ul class=\"ml-menu\">
                        <li>
                            <a href=\"{{ path('keyword-add') }}\">
                                <span>Add</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('keyword-table') }}\">
                                <span>Table</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class=\"legal\">
            <div class=\"copyright\">
                &copy; {{ \"now\"|date('Y') }} <a href=\"{{ path('keyword-list') }}\">News Keywords</a>
            </div>
            <div class=\"version\">
                <b>Version: </b> 0.0.2
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    </aside>
    <!-- #END# Right Sidebar -->
</section>

<section class=\"content\">
    {% block body %}{% endblock %}
</section>

<!-- Jquery Core Js -->
<script src=\"{{ asset(\"assets/plugins/jquery/jquery.min.js\") }}\"></script>

<!-- Bootstrap Core Js -->
<script src=\"{{ asset(\"assets/plugins/bootstrap/js/bootstrap.js\") }}\"></script>

<!-- Select Plugin Js -->
<script src=\"{{ asset(\"assets/plugins/bootstrap-select/js/bootstrap-select.js\") }}\"></script>

<!-- Slimscroll Plugin Js -->
<script src=\"{{ asset(\"assets/plugins/jquery-slimscroll/jquery.slimscroll.js\") }}\"></script>

<!-- Waves Effect Plugin Js -->
<script src=\"{{ asset(\"assets/plugins/node-waves/waves.js\") }}\"></script>

<!-- Jquery CountTo Plugin Js -->
<script src=\"{{ asset(\"assets/plugins/jquery-countto/jquery.countTo.js\") }}\"></script>

<!-- Sparkline Chart Plugin Js -->
<script src=\"{{ asset(\"assets/plugins/jquery-sparkline/jquery.sparkline.js\") }}\"></script>

<!-- Custom Js -->
<script src=\"{{ asset(\"assets/js/admin.js\") }}\"></script>

<!-- Demo Js -->
<script src=\"{{ asset(\"assets/js/demo.js\") }}\"></script>

<script src=\"{{ asset(\"assets/plugins/bootstrap-notify/bootstrap-notify.js\") }}\"></script>
<script src=\"{{ asset(\"assets/plugins/sweetalert/sweetalert.min.js\") }}\"></script>
<script src=\"{{ asset(\"assets/js/dialog.js\") }}\"></script>
{% block javascripts %}
{% endblock %}
</body>

</html>", "base.html.twig", "/Users/mert/Documents/www/News-Twitter/app/Resources/views/base.html.twig");
    }
}
