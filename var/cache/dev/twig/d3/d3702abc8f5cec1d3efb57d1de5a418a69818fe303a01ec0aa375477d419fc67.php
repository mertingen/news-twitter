<?php

/* AppBundle:keyword:table.html.twig */
class __TwigTemplate_416d8db89c73704cc0907fa948d18f19432a38abdda8c86083e87daf04ed0185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:keyword:table.html.twig", 1);
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
        $__internal_dde236ad75f27678fd5577ff7017c5342c859d3ea138f9c0a29d7f91c87d570b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde236ad75f27678fd5577ff7017c5342c859d3ea138f9c0a29d7f91c87d570b->enter($__internal_dde236ad75f27678fd5577ff7017c5342c859d3ea138f9c0a29d7f91c87d570b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:table.html.twig"));

        $__internal_02b6f03433ddf3aef850a512f34841b05a5670e433d94cb4d39f6e23473cfbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b6f03433ddf3aef850a512f34841b05a5670e433d94cb4d39f6e23473cfbda->enter($__internal_02b6f03433ddf3aef850a512f34841b05a5670e433d94cb4d39f6e23473cfbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:keyword:table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde236ad75f27678fd5577ff7017c5342c859d3ea138f9c0a29d7f91c87d570b->leave($__internal_dde236ad75f27678fd5577ff7017c5342c859d3ea138f9c0a29d7f91c87d570b_prof);

        
        $__internal_02b6f03433ddf3aef850a512f34841b05a5670e433d94cb4d39f6e23473cfbda->leave($__internal_02b6f03433ddf3aef850a512f34841b05a5670e433d94cb4d39f6e23473cfbda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bbafdbe578bf761388f244d331500adfd057c0f5e62a7596bbaf7f53025092e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbafdbe578bf761388f244d331500adfd057c0f5e62a7596bbaf7f53025092e->enter($__internal_9bbafdbe578bf761388f244d331500adfd057c0f5e62a7596bbaf7f53025092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd2a3e79173bdded81c20b02a9664f0cd76ec401c8778df2fabe29eeef0b355d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2a3e79173bdded81c20b02a9664f0cd76ec401c8778df2fabe29eeef0b355d->enter($__internal_dd2a3e79173bdded81c20b02a9664f0cd76ec401c8778df2fabe29eeef0b355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row clearfix\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"header\">
                    <h2>
                        Keyword Table
                    </h2>
                </div>
                <div class=\"body table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Language</th>
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context["counter"] = 1;
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 27
            echo "                            <tr class=\"list-item-block\">
                                <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "</th>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "language", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "count", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a data-toggle=\"confirmation\"
                                       href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-edit", array("keywordId" => $this->getAttribute($context["keyword"], "keywordId", array()))), "html", null, true);
            echo "\"
                                       class=\"btn fancybox default edit btn-xs green\"
                                       title=\"Edit\"><i class=\"material-icons\">edit</i></a>
                                    <a data-toggle=\"confirmation\"
                                       href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keyword-delete", array("keywordId" => $this->getAttribute($context["keyword"], "keywordId", array()))), "html", null, true);
            echo "\"
                                       data-type=\"confirm\"
                                       class=\"btn fancybox default delete btn-xs green\"
                                       title=\"Delete\"><i class=\"material-icons\">delete</i></a>
                                </td>
                            </tr>
                            ";
            // line 44
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 45
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





";
        
        $__internal_dd2a3e79173bdded81c20b02a9664f0cd76ec401c8778df2fabe29eeef0b355d->leave($__internal_dd2a3e79173bdded81c20b02a9664f0cd76ec401c8778df2fabe29eeef0b355d_prof);

        
        $__internal_9bbafdbe578bf761388f244d331500adfd057c0f5e62a7596bbaf7f53025092e->leave($__internal_9bbafdbe578bf761388f244d331500adfd057c0f5e62a7596bbaf7f53025092e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_976723ba3c29a46fa301f05336b87f265105d4811a7e481d15a6f2c17d387441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976723ba3c29a46fa301f05336b87f265105d4811a7e481d15a6f2c17d387441->enter($__internal_976723ba3c29a46fa301f05336b87f265105d4811a7e481d15a6f2c17d387441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38f202d4f568bd2e578961d77c1cbda02706307bb6fe6dc7fecd975831b13359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f202d4f568bd2e578961d77c1cbda02706307bb6fe6dc7fecd975831b13359->enter($__internal_38f202d4f568bd2e578961d77c1cbda02706307bb6fe6dc7fecd975831b13359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/iziToast.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('.delete').click(function (event) {
                event.preventDefault();
                var targetElem = \$(this);
                swal({
                    title: \"Are you sure?\",
                    text: \"You will not be able to recover this data!\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#DD6B55\",
                    confirmButtonText: \"Yes, delete it!\",
                    closeOnConfirm: false
                }, function () {
                    var targetHref = targetElem.attr('href');
                    \$.get(targetHref, function (data) {
                        var objData = JSON.parse(data);
                        if (objData.status) {
                            targetElem.closest('.list-item-block').remove();
                            swal(\"Deleted!\", \"Your data has been deleted.\", \"success\");
                        } else {
                            swal(\"Error!\", \"error\", \"warning\");
                        }
                    });
                });
            })
        });
    </script>


";
        
        $__internal_38f202d4f568bd2e578961d77c1cbda02706307bb6fe6dc7fecd975831b13359->leave($__internal_38f202d4f568bd2e578961d77c1cbda02706307bb6fe6dc7fecd975831b13359_prof);

        
        $__internal_976723ba3c29a46fa301f05336b87f265105d4811a7e481d15a6f2c17d387441->leave($__internal_976723ba3c29a46fa301f05336b87f265105d4811a7e481d15a6f2c17d387441_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:keyword:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  155 => 61,  146 => 60,  125 => 46,  119 => 45,  117 => 44,  108 => 38,  101 => 34,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  80 => 27,  75 => 26,  73 => 25,  50 => 4,  41 => 3,  11 => 1,);
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
                        Keyword Table
                    </h2>
                </div>
                <div class=\"body table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Language</th>
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% set counter = 1 %}
                        {% for keyword in keywords %}
                            <tr class=\"list-item-block\">
                                <th scope=\"row\">{{ counter }}</th>
                                <td>{{ keyword.name }}</td>
                                <td>{{ keyword.language }}</td>
                                <td>{{ keyword.count }}</td>
                                <td>
                                    <a data-toggle=\"confirmation\"
                                       href=\"{{ path('keyword-edit', {keywordId: keyword.keywordId}) }}\"
                                       class=\"btn fancybox default edit btn-xs green\"
                                       title=\"Edit\"><i class=\"material-icons\">edit</i></a>
                                    <a data-toggle=\"confirmation\"
                                       href=\"{{ path('keyword-delete', {keywordId: keyword.keywordId}) }}\"
                                       data-type=\"confirm\"
                                       class=\"btn fancybox default delete btn-xs green\"
                                       title=\"Delete\"><i class=\"material-icons\">delete</i></a>
                                </td>
                            </tr>
                            {% set counter = counter + 1 %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





{% endblock %}


{% block javascripts %}
    <script src=\"{{ asset('assets/js/iziToast.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/select2.min.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('.delete').click(function (event) {
                event.preventDefault();
                var targetElem = \$(this);
                swal({
                    title: \"Are you sure?\",
                    text: \"You will not be able to recover this data!\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#DD6B55\",
                    confirmButtonText: \"Yes, delete it!\",
                    closeOnConfirm: false
                }, function () {
                    var targetHref = targetElem.attr('href');
                    \$.get(targetHref, function (data) {
                        var objData = JSON.parse(data);
                        if (objData.status) {
                            targetElem.closest('.list-item-block').remove();
                            swal(\"Deleted!\", \"Your data has been deleted.\", \"success\");
                        } else {
                            swal(\"Error!\", \"error\", \"warning\");
                        }
                    });
                });
            })
        });
    </script>


{% endblock %}", "AppBundle:keyword:table.html.twig", "/Users/mert/Documents/www/News-Twitter/src/AppBundle/Resources/views/keyword/table.html.twig");
    }
}
