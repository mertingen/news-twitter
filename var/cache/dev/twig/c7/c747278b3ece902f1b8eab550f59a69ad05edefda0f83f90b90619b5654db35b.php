<?php

/* AppBundle:keyword:edit.html.twig */
class __TwigTemplate_f0e041f10a25eed4c9a8e7dace061fa5c0e8852d55deed952c49f9a555581d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:keyword:edit.html.twig", 1);
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
        $__internal_e647cc6c83d30b91511ff1f7c071ad91862de1b9b83ad369f6842befe235ff03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e647cc6c83d30b91511ff1f7c071ad91862de1b9b83ad369f6842befe235ff03->enter($__internal_e647cc6c83d30b91511ff1f7c071ad91862de1b9b83ad369f6842befe235ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:edit.html.twig"));

        $__internal_19a50a48d8fc89d8e99206c881bc089bfb7893225dfba20408650c6007cc6b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a50a48d8fc89d8e99206c881bc089bfb7893225dfba20408650c6007cc6b3a->enter($__internal_19a50a48d8fc89d8e99206c881bc089bfb7893225dfba20408650c6007cc6b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e647cc6c83d30b91511ff1f7c071ad91862de1b9b83ad369f6842befe235ff03->leave($__internal_e647cc6c83d30b91511ff1f7c071ad91862de1b9b83ad369f6842befe235ff03_prof);

        
        $__internal_19a50a48d8fc89d8e99206c881bc089bfb7893225dfba20408650c6007cc6b3a->leave($__internal_19a50a48d8fc89d8e99206c881bc089bfb7893225dfba20408650c6007cc6b3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e54a07f148f6236aa3afd57e5c0019b7faf7dd1f55561f038ddc928bc2dbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e54a07f148f6236aa3afd57e5c0019b7faf7dd1f55561f038ddc928bc2dbe0->enter($__internal_d0e54a07f148f6236aa3afd57e5c0019b7faf7dd1f55561f038ddc928bc2dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e115bb98d12855385ddce52c2b8b5b3a384350c828356ffc63c25797633f51b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e115bb98d12855385ddce52c2b8b5b3a384350c828356ffc63c25797633f51b0->enter($__internal_e115bb98d12855385ddce52c2b8b5b3a384350c828356ffc63c25797633f51b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-post-edit", array("keywordId" => $this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "keywordId", array()))), "html", null, true);
        echo "\" method=\"POST\">
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "name", array()), "html", null, true);
        echo "\" name=\"keyword\"
                                               class=\"form-control\" placeholder=\"Keyword\"
                                               required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"count\" required>
                                    <option value=\"\">-- Select Count --</option>
                                    <option ";
        // line 30
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "count", array()) == "5")) ? ("selected") : (""));
        echo " value=\"5\">5</option>
                                    <option ";
        // line 31
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "count", array()) == "10")) ? ("selected") : (""));
        echo " value=\"10\">10</option>
                                    <option ";
        // line 32
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "count", array()) == "50")) ? ("selected") : (""));
        echo " value=\"50\">50</option>
                                    <option ";
        // line 33
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "count", array()) == "100")) ? ("selected") : (""));
        echo " value=\"100\">100</option>
                                    <option ";
        // line 34
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "count", array()) == "200")) ? ("selected") : (""));
        echo " value=\"200\">200</option>
                                </select>
                            </div>
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"language\" required>
                                    <option value=\"\">-- Select Language --</option>
                                    <option ";
        // line 40
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "language", array()) == "tr")) ? ("selected") : (""));
        echo " value=\"tr\">Turkish
                                    </option>
                                    <option ";
        // line 42
        echo ((($this->getAttribute((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "language", array()) == "en")) ? ("selected") : (""));
        echo " value=\"en\">English
                                    </option>
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
        
        $__internal_e115bb98d12855385ddce52c2b8b5b3a384350c828356ffc63c25797633f51b0->leave($__internal_e115bb98d12855385ddce52c2b8b5b3a384350c828356ffc63c25797633f51b0_prof);

        
        $__internal_d0e54a07f148f6236aa3afd57e5c0019b7faf7dd1f55561f038ddc928bc2dbe0->leave($__internal_d0e54a07f148f6236aa3afd57e5c0019b7faf7dd1f55561f038ddc928bc2dbe0_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_925a098f1bca1de8f4e07fc1c1731671f2376474fd1008eda390ad6edfefd5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925a098f1bca1de8f4e07fc1c1731671f2376474fd1008eda390ad6edfefd5d4->enter($__internal_925a098f1bca1de8f4e07fc1c1731671f2376474fd1008eda390ad6edfefd5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_451ae62ef4e4a256f688c45a1fe34fa17b1d5223398c56bcb8d12ed0e5093986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451ae62ef4e4a256f688c45a1fe34fa17b1d5223398c56bcb8d12ed0e5093986->enter($__internal_451ae62ef4e4a256f688c45a1fe34fa17b1d5223398c56bcb8d12ed0e5093986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
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
        
        $__internal_451ae62ef4e4a256f688c45a1fe34fa17b1d5223398c56bcb8d12ed0e5093986->leave($__internal_451ae62ef4e4a256f688c45a1fe34fa17b1d5223398c56bcb8d12ed0e5093986_prof);

        
        $__internal_925a098f1bca1de8f4e07fc1c1731671f2376474fd1008eda390ad6edfefd5d4->leave($__internal_925a098f1bca1de8f4e07fc1c1731671f2376474fd1008eda390ad6edfefd5d4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:keyword:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  138 => 58,  114 => 42,  109 => 40,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  70 => 19,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
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
                    <form action=\"{{ path('keyword-post-edit', {keywordId: keyword.keywordId}) }}\" method=\"POST\">
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" value=\"{{ keyword.name }}\" name=\"keyword\"
                                               class=\"form-control\" placeholder=\"Keyword\"
                                               required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"count\" required>
                                    <option value=\"\">-- Select Count --</option>
                                    <option {{ (keyword.count == '5') ? 'selected' : '' }} value=\"5\">5</option>
                                    <option {{ (keyword.count == '10') ? 'selected' : '' }} value=\"10\">10</option>
                                    <option {{ (keyword.count == '50') ? 'selected' : '' }} value=\"50\">50</option>
                                    <option {{ (keyword.count == '100') ? 'selected' : '' }} value=\"100\">100</option>
                                    <option {{ (keyword.count == '200') ? 'selected' : '' }} value=\"200\">200</option>
                                </select>
                            </div>
                            <div class=\"col-sm-6\">
                                <select class=\"form-control show-tick\" name=\"language\" required>
                                    <option value=\"\">-- Select Language --</option>
                                    <option {{ (keyword.language == 'tr') ? 'selected' : '' }} value=\"tr\">Turkish
                                    </option>
                                    <option {{ (keyword.language == 'en') ? 'selected' : '' }} value=\"en\">English
                                    </option>
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

{% endblock %}
", "AppBundle:keyword:edit.html.twig", "/Users/mert/Documents/www/News-Twitter/src/AppBundle/Resources/views/keyword/edit.html.twig");
    }
}
