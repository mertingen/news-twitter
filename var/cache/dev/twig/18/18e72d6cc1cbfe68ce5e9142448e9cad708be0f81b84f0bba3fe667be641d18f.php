<?php

/* AppBundle:keyword:add.html.twig */
class __TwigTemplate_490292ce9469b04992a91d8a63da5217f339ddc2bc2f1624daee4a34dd3f18b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:keyword:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2620281412448b700f1ecb353e9c954cef4bf008bf53bca0f1ac2487e283866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2620281412448b700f1ecb353e9c954cef4bf008bf53bca0f1ac2487e283866->enter($__internal_a2620281412448b700f1ecb353e9c954cef4bf008bf53bca0f1ac2487e283866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:add.html.twig"));

        $__internal_8f8cdacd1b7c15ce6925bba1f0a3978265193c8fd1e8ddb0071cf5633a668abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8cdacd1b7c15ce6925bba1f0a3978265193c8fd1e8ddb0071cf5633a668abc->enter($__internal_8f8cdacd1b7c15ce6925bba1f0a3978265193c8fd1e8ddb0071cf5633a668abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2620281412448b700f1ecb353e9c954cef4bf008bf53bca0f1ac2487e283866->leave($__internal_a2620281412448b700f1ecb353e9c954cef4bf008bf53bca0f1ac2487e283866_prof);

        
        $__internal_8f8cdacd1b7c15ce6925bba1f0a3978265193c8fd1e8ddb0071cf5633a668abc->leave($__internal_8f8cdacd1b7c15ce6925bba1f0a3978265193c8fd1e8ddb0071cf5633a668abc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c4be01d04a91df5701f0130a250d506e027b42777984e4867dce6611b95f9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4be01d04a91df5701f0130a250d506e027b42777984e4867dce6611b95f9d3->enter($__internal_7c4be01d04a91df5701f0130a250d506e027b42777984e4867dce6611b95f9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1d1440f344f878c470851f3c0e09ee5613f4b8a099d63d2bf96591e2814ab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d1440f344f878c470851f3c0e09ee5613f4b8a099d63d2bf96591e2814ab41->enter($__internal_c1d1440f344f878c470851f3c0e09ee5613f4b8a099d63d2bf96591e2814ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row clearfix\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"header\">
                    <h2>
                        Add
                        <small></small>
                    </h2>
                </div>
                <div class=\"body\">
                    <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-post-add");
        echo "\" method=\"POST\" id=\"add-form\">
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\"
                                               required/>
                                        <div class=\"help-info\">Max. 140 characters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"count\" required>
                                    <option value=\"\">-- Select Count --</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"100\">100</option>
                                    <option value=\"200\">200</option>
                                </select>
                            </div>
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"language\" required>
                                    <option value=\"\">-- Select Language --</option>
                                    <option value=\"tr\">Turkish</option>
                                    <option value=\"en\">English</option>
                                </select>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn bg-cyan btn-block btn-lg waves-effect\">Add</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_c1d1440f344f878c470851f3c0e09ee5613f4b8a099d63d2bf96591e2814ab41->leave($__internal_c1d1440f344f878c470851f3c0e09ee5613f4b8a099d63d2bf96591e2814ab41_prof);

        
        $__internal_7c4be01d04a91df5701f0130a250d506e027b42777984e4867dce6611b95f9d3->leave($__internal_7c4be01d04a91df5701f0130a250d506e027b42777984e4867dce6611b95f9d3_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51b23008e8844d8f6575d8b1b68b943966b3acf2cc9f3e73a58907677131ca8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b23008e8844d8f6575d8b1b68b943966b3acf2cc9f3e73a58907677131ca8a->enter($__internal_51b23008e8844d8f6575d8b1b68b943966b3acf2cc9f3e73a58907677131ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_199150def47b802e860681aa616046cad036cf603501977d094e2b731859a80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199150def47b802e860681aa616046cad036cf603501977d094e2b731859a80d->enter($__internal_199150def47b802e860681aa616046cad036cf603501977d094e2b731859a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            ";
        // line 60
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) && ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array()) == "error"))) {
            // line 61
            echo "                swal(\"Error!\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "msg", array()), "html", null, true);
            echo "\", \"warning\");
            ";
        }
        // line 63
        echo "
            \$('#add-form').validate({
                rules: {
                    keyword: {
                        maxlength: 140,
                        required: true
                    },
                    count: {
                        required: true
                    },
                    language: {
                        required: true
                    }
                },
                highlight: function (input) {
                    \$(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    \$(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    \$(element).parents('.form-group').append(error);
                }
            });

        })
    </script>

";
        
        $__internal_199150def47b802e860681aa616046cad036cf603501977d094e2b731859a80d->leave($__internal_199150def47b802e860681aa616046cad036cf603501977d094e2b731859a80d_prof);

        
        $__internal_51b23008e8844d8f6575d8b1b68b943966b3acf2cc9f3e73a58907677131ca8a->leave($__internal_51b23008e8844d8f6575d8b1b68b943966b3acf2cc9f3e73a58907677131ca8a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:keyword:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 63,  131 => 61,  129 => 60,  121 => 56,  112 => 55,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row clearfix\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"header\">
                    <h2>
                        Add
                        <small></small>
                    </h2>
                </div>
                <div class=\"body\">
                    <form action=\"{{ path('keyword-post-add') }}\" method=\"POST\" id=\"add-form\">
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\"
                                               required/>
                                        <div class=\"help-info\">Max. 140 characters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"count\" required>
                                    <option value=\"\">-- Select Count --</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"100\">100</option>
                                    <option value=\"200\">200</option>
                                </select>
                            </div>
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"language\" required>
                                    <option value=\"\">-- Select Language --</option>
                                    <option value=\"tr\">Turkish</option>
                                    <option value=\"en\">English</option>
                                </select>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn bg-cyan btn-block btn-lg waves-effect\">Add</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset(\"assets/plugins/jquery-validation/jquery.validate.js\") }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            {% if message and message.type == 'error' %}
                swal(\"Error!\", \"{{ message.msg }}\", \"warning\");
            {% endif %}

            \$('#add-form').validate({
                rules: {
                    keyword: {
                        maxlength: 140,
                        required: true
                    },
                    count: {
                        required: true
                    },
                    language: {
                        required: true
                    }
                },
                highlight: function (input) {
                    \$(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    \$(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    \$(element).parents('.form-group').append(error);
                }
            });

        })
    </script>

{% endblock %}", "AppBundle:keyword:add.html.twig", "/Users/mert/Documents/www/News-Twitter/src/AppBundle/Resources/views/keyword/add.html.twig");
    }
}
