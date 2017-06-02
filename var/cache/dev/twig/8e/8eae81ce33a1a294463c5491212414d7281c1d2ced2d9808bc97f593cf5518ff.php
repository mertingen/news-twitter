<?php

/* AppBundle:user:login.html.twig */
class __TwigTemplate_090400a1218a9919e82f9855dbdce9b781c188578d85aa480b6c9084381c2d3c extends Twig_Template
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
        $__internal_54cd093fb0ccdac90bf75fdb16684a5ff5d76ab52a456cfc61badc79177e4c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cd093fb0ccdac90bf75fdb16684a5ff5d76ab52a456cfc61badc79177e4c1e->enter($__internal_54cd093fb0ccdac90bf75fdb16684a5ff5d76ab52a456cfc61badc79177e4c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:login.html.twig"));

        $__internal_68adc7f400af2f017c527e68ed2c878ca7bfe4dcb90aaed33ae163481b9ca8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68adc7f400af2f017c527e68ed2c878ca7bfe4dcb90aaed33ae163481b9ca8b8->enter($__internal_68adc7f400af2f017c527e68ed2c878ca7bfe4dcb90aaed33ae163481b9ca8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        News Twitter
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"News Twitter\" name=\"description\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body>
<div class=\"container\" id=\"container-body\">
    <div class=\"row\">
        <form class=\"form-signin mg-btm\">
            <h3 class=\"heading-desc\">
                Login to News Twitter</h3>
            <div class=\"social-box\">
                <div class=\"row mg-btm\">
                    <div class=\"col-md-12\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">
                            <i class=\"icon-facebook\"></i>    Login with Facebook
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["authUrl"]) ? $context["authUrl"] : $this->getContext($context, "authUrl")), "html", null, true);
        echo "\" class=\"btn btn-info btn-block\" >
                            <i class=\"fa fa-twitter\"></i>    Login with Twitter
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>


</html>";
        
        $__internal_54cd093fb0ccdac90bf75fdb16684a5ff5d76ab52a456cfc61badc79177e4c1e->leave($__internal_54cd093fb0ccdac90bf75fdb16684a5ff5d76ab52a456cfc61badc79177e4c1e_prof);

        
        $__internal_68adc7f400af2f017c527e68ed2c878ca7bfe4dcb90aaed33ae163481b9ca8b8->leave($__internal_68adc7f400af2f017c527e68ed2c878ca7bfe4dcb90aaed33ae163481b9ca8b8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  71 => 33,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  25 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <title>
        News Twitter
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"News Twitter\" name=\"description\"/>
    <link href=\"{{ asset('assets/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/css/bootstrap-theme.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('assets/css/login.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body>
<div class=\"container\" id=\"container-body\">
    <div class=\"row\">
        <form class=\"form-signin mg-btm\">
            <h3 class=\"heading-desc\">
                Login to News Twitter</h3>
            <div class=\"social-box\">
                <div class=\"row mg-btm\">
                    <div class=\"col-md-12\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">
                            <i class=\"icon-facebook\"></i>    Login with Facebook
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"{{ authUrl }}\" class=\"btn btn-info btn-block\" >
                            <i class=\"fa fa-twitter\"></i>    Login with Twitter
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src=\"{{ asset('assets/js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\"></script>

</body>


</html>", "AppBundle:user:login.html.twig", "/Users/mert/Documents/www/News-Twitter/src/AppBundle/Resources/views/user/login.html.twig");
    }
}
