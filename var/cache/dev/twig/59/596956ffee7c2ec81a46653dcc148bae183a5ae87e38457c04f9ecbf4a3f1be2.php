<?php

/* AppBundle:keyword:list.html.twig */
class __TwigTemplate_dd8bd0d5d34104ef97fdb28cbce2e667fb3e554bcc94d0060d507d08c195590e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:keyword:list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_c2653ce5bbaf3b1b8edd124822b4ee7ef6d9e9253c029a1f7f6bd448743ff0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2653ce5bbaf3b1b8edd124822b4ee7ef6d9e9253c029a1f7f6bd448743ff0e4->enter($__internal_c2653ce5bbaf3b1b8edd124822b4ee7ef6d9e9253c029a1f7f6bd448743ff0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:list.html.twig"));

        $__internal_9a8b655158dc046e580a53579412ceea92a03613abb0b578e06e502f1b6e24d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8b655158dc046e580a53579412ceea92a03613abb0b578e06e502f1b6e24d9->enter($__internal_9a8b655158dc046e580a53579412ceea92a03613abb0b578e06e502f1b6e24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2653ce5bbaf3b1b8edd124822b4ee7ef6d9e9253c029a1f7f6bd448743ff0e4->leave($__internal_c2653ce5bbaf3b1b8edd124822b4ee7ef6d9e9253c029a1f7f6bd448743ff0e4_prof);

        
        $__internal_9a8b655158dc046e580a53579412ceea92a03613abb0b578e06e502f1b6e24d9->leave($__internal_9a8b655158dc046e580a53579412ceea92a03613abb0b578e06e502f1b6e24d9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b8e6a6c6e4b0287d2a2374136f6a52dc0f2addfdddaa77859e34d851945c560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8e6a6c6e4b0287d2a2374136f6a52dc0f2addfdddaa77859e34d851945c560->enter($__internal_4b8e6a6c6e4b0287d2a2374136f6a52dc0f2addfdddaa77859e34d851945c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e27328c48335d08270d2390ad5852b283b74ef9d311ed3dd22a3c7eed35f572b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27328c48335d08270d2390ad5852b283b74ef9d311ed3dd22a3c7eed35f572b->enter($__internal_e27328c48335d08270d2390ad5852b283b74ef9d311ed3dd22a3c7eed35f572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_e27328c48335d08270d2390ad5852b283b74ef9d311ed3dd22a3c7eed35f572b->leave($__internal_e27328c48335d08270d2390ad5852b283b74ef9d311ed3dd22a3c7eed35f572b_prof);

        
        $__internal_4b8e6a6c6e4b0287d2a2374136f6a52dc0f2addfdddaa77859e34d851945c560->leave($__internal_4b8e6a6c6e4b0287d2a2374136f6a52dc0f2addfdddaa77859e34d851945c560_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e547b844a3631ba9b698129d581d03dbe81bbd078726cbb20fd96bc0f701d1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e547b844a3631ba9b698129d581d03dbe81bbd078726cbb20fd96bc0f701d1ea->enter($__internal_e547b844a3631ba9b698129d581d03dbe81bbd078726cbb20fd96bc0f701d1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23b06a28f6ed94c4bad7317cc5d280034550b3338a2fff6c10752c90d1f1a042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b06a28f6ed94c4bad7317cc5d280034550b3338a2fff6c10752c90d1f1a042->enter($__internal_23b06a28f6ed94c4bad7317cc5d280034550b3338a2fff6c10752c90d1f1a042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <h2></h2>
        </div>

        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>
                            Tweet Keywords
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-add");
        echo "\">
                                <button class=\"btn btn-success waves-effect add-keyword-btn\"
                                        type=\"button\">Add
                                </button>
                            </a>
                        </h2>
                    </div>
                    <div class=\"body\">
                        <div class=\"row clearfix\">
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userKeywords"]) ? $context["userKeywords"] : $this->getContext($context, "userKeywords")));
        foreach ($context['_seq'] as $context["_key"] => $context["userKeyword"]) {
            // line 30
            echo "                                <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                    <button class=\"btn btn-primary btn-lg btn-block waves-effect keywords\"
                                            type=\"button\"
                                            data-keywordId=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["userKeyword"], "keywordId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["userKeyword"], "name", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((" (" . twig_capitalize_string_filter($this->env, $this->getAttribute($context["userKeyword"], "language", array()))) . ")"), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userKeyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tweets\">

            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tweetsData"]) ? $context["tweetsData"] : $this->getContext($context, "tweetsData")));
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 44
            echo "                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"body bg-cyan\">
                            <div class=\"tweet-text\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "text", array()), "html", null, true);
            echo "</div>
                            <img class=\"tweet-profile-img\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "profile_image_url", array()), "html", null, true);
            echo "\">
                            <span class=\"tweet-created-at\">";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tweet"], "created_at", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</span>
                            <span class=\"tweet-username\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "name", array()), "html", null, true);
            echo "</span>
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle tweet-setting\" data-toggle=\"dropdown\">
                                <i class=\"material-icons\">more_vert</i>
                            </a>
                            <ul class=\"dropdown-menu tweet-setting pull-right\">
                                <li><a href=\"https://twitter.com/";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "screen_name", array()), "html", null, true);
            echo "/status/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "id_str", array()), "html", null, true);
            echo "\"
                                       target=\"_blank\">Go to tweet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>


    </div>

";
        
        $__internal_23b06a28f6ed94c4bad7317cc5d280034550b3338a2fff6c10752c90d1f1a042->leave($__internal_23b06a28f6ed94c4bad7317cc5d280034550b3338a2fff6c10752c90d1f1a042_prof);

        
        $__internal_e547b844a3631ba9b698129d581d03dbe81bbd078726cbb20fd96bc0f701d1ea->leave($__internal_e547b844a3631ba9b698129d581d03dbe81bbd078726cbb20fd96bc0f701d1ea_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4f470b243622e228b74169dec3f62d7e606b1f3631f7ef056105a0da7cfafce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f470b243622e228b74169dec3f62d7e606b1f3631f7ef056105a0da7cfafce->enter($__internal_e4f470b243622e228b74169dec3f62d7e606b1f3631f7ef056105a0da7cfafce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e7300e723ed8005d21764cffff97114f2e04040719747b74f4a7dd9de5b7bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7300e723ed8005d21764cffff97114f2e04040719747b74f4a7dd9de5b7bb3->enter($__internal_0e7300e723ed8005d21764cffff97114f2e04040719747b74f4a7dd9de5b7bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.keywords').click(function (event) {
                event.preventDefault();
                var keywordId = \$(this).data('keywordid');
                \$.ajax({
                    \"url\": \"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-get");
        echo "\",
                    \"type\": \"POST\",
                    \"data\": {\"keywordId\": keywordId},
                    \"success\": function (data) {
                        \$('#tweets').empty();
                        \$.each(data, function (index, tweet) {
                            var date = new Date(tweet.created_at);

                            var yr = date.getFullYear(),
                                month = date.getMonth() < 10 ? '0' + (parseInt(date.getMonth()) + 1) : (parseInt(date.getMonth()) + 1),
                                day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(),
                                hour = date.getHours(),
                                minute = date.getMinutes(),
                                second = date.getSeconds(),
                                newDate = day + '-' + month + '-' + yr + \" \" + hour + \":\" + minute + \":\" + second;
                            \$('#tweets').append('<div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\"><div class=\"card\"><div class=\"body bg-cyan\"><div class=\"tweet-text\">' + tweet.text + '</div><img class=\"tweet-profile-img\" src=\"' + tweet.user.profile_image_url + '\"><span class=\"tweet-created-at\">' + newDate + '</span><span class=\"tweet-username\">' + tweet.user.name + '</span><a href=\"javascript:void(0);\" class=\"dropdown-toggle tweet-setting\" data-toggle=\"dropdown\"><i class=\"material-icons\">more_vert</i> </a> <ul class=\"dropdown-menu tweet-setting pull-right\"> <li><a href=\"https://twitter.com/' + tweet.user.screen_name + '/status/' + tweet.id_str + '\"target=\"_blank\">Go to tweet</a></li></ul></div></div></div>')
                        });
                    }
                });
            });

            ";
        // line 98
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) && ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type", array()) == "error"))) {
            // line 99
            echo "            swal(\"Error!\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "msg", array()), "html", null, true);
            echo "\", \"warning\");
            ";
        }
        // line 101
        echo "
        });
    </script>

";
        
        $__internal_0e7300e723ed8005d21764cffff97114f2e04040719747b74f4a7dd9de5b7bb3->leave($__internal_0e7300e723ed8005d21764cffff97114f2e04040719747b74f4a7dd9de5b7bb3_prof);

        
        $__internal_e4f470b243622e228b74169dec3f62d7e606b1f3631f7ef056105a0da7cfafce->leave($__internal_e4f470b243622e228b74169dec3f62d7e606b1f3631f7ef056105a0da7cfafce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:keyword:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 101,  232 => 99,  230 => 98,  206 => 77,  198 => 71,  189 => 70,  174 => 62,  159 => 55,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  134 => 44,  130 => 43,  121 => 36,  108 => 33,  103 => 30,  99 => 29,  87 => 20,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
    <link href=\"{{ asset(\"assets/css/custom.css\") }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <h2></h2>
        </div>

        <div class=\"row clearfix\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h2>
                            Tweet Keywords
                            <a href=\"{{ path('keyword-add') }}\">
                                <button class=\"btn btn-success waves-effect add-keyword-btn\"
                                        type=\"button\">Add
                                </button>
                            </a>
                        </h2>
                    </div>
                    <div class=\"body\">
                        <div class=\"row clearfix\">
                            {% for userKeyword in userKeywords %}
                                <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                                    <button class=\"btn btn-primary btn-lg btn-block waves-effect keywords\"
                                            type=\"button\"
                                            data-keywordId=\"{{ userKeyword.keywordId }}\">{{ userKeyword.name | capitalize }} {{ \" (\" ~ userKeyword.language | capitalize ~ \")\" }}</button>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" id=\"tweets\">

            {% for tweet in tweetsData %}
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"body bg-cyan\">
                            <div class=\"tweet-text\">{{ tweet.text }}</div>
                            <img class=\"tweet-profile-img\" src=\"{{ tweet.user.profile_image_url }}\">
                            <span class=\"tweet-created-at\">{{ tweet.created_at | date('d-m-Y H:i:s') }}</span>
                            <span class=\"tweet-username\">{{ tweet.user.name }}</span>
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle tweet-setting\" data-toggle=\"dropdown\">
                                <i class=\"material-icons\">more_vert</i>
                            </a>
                            <ul class=\"dropdown-menu tweet-setting pull-right\">
                                <li><a href=\"https://twitter.com/{{ tweet.user.screen_name }}/status/{{ tweet.id_str }}\"
                                       target=\"_blank\">Go to tweet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>


    </div>

{% endblock %}


{% block javascripts %}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.keywords').click(function (event) {
                event.preventDefault();
                var keywordId = \$(this).data('keywordid');
                \$.ajax({
                    \"url\": \"{{ path(\"keyword-get\") }}\",
                    \"type\": \"POST\",
                    \"data\": {\"keywordId\": keywordId},
                    \"success\": function (data) {
                        \$('#tweets').empty();
                        \$.each(data, function (index, tweet) {
                            var date = new Date(tweet.created_at);

                            var yr = date.getFullYear(),
                                month = date.getMonth() < 10 ? '0' + (parseInt(date.getMonth()) + 1) : (parseInt(date.getMonth()) + 1),
                                day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(),
                                hour = date.getHours(),
                                minute = date.getMinutes(),
                                second = date.getSeconds(),
                                newDate = day + '-' + month + '-' + yr + \" \" + hour + \":\" + minute + \":\" + second;
                            \$('#tweets').append('<div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\"><div class=\"card\"><div class=\"body bg-cyan\"><div class=\"tweet-text\">' + tweet.text + '</div><img class=\"tweet-profile-img\" src=\"' + tweet.user.profile_image_url + '\"><span class=\"tweet-created-at\">' + newDate + '</span><span class=\"tweet-username\">' + tweet.user.name + '</span><a href=\"javascript:void(0);\" class=\"dropdown-toggle tweet-setting\" data-toggle=\"dropdown\"><i class=\"material-icons\">more_vert</i> </a> <ul class=\"dropdown-menu tweet-setting pull-right\"> <li><a href=\"https://twitter.com/' + tweet.user.screen_name + '/status/' + tweet.id_str + '\"target=\"_blank\">Go to tweet</a></li></ul></div></div></div>')
                        });
                    }
                });
            });

            {% if message and message.type == 'error' %}
            swal(\"Error!\", \"{{ message.msg }}\", \"warning\");
            {% endif %}

        });
    </script>

{% endblock %}", "AppBundle:keyword:list.html.twig", "/Users/mert/Documents/www/News-Twitter/src/AppBundle/Resources/views/keyword/list.html.twig");
    }
}
