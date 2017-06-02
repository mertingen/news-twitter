<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eebed8d324785e24378ebbf02ec64d6e26d3ed3fb9e3cef95046baac6693cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9809ca4b5faca2416c91aadf0a51c3912ec8f00c34e385c9424135fd37e59a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9809ca4b5faca2416c91aadf0a51c3912ec8f00c34e385c9424135fd37e59a8->enter($__internal_d9809ca4b5faca2416c91aadf0a51c3912ec8f00c34e385c9424135fd37e59a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f92f5b45873fc3386eec2f229ef4df89c01d6a909b952644c11f49b6dfe830e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92f5b45873fc3386eec2f229ef4df89c01d6a909b952644c11f49b6dfe830e4->enter($__internal_f92f5b45873fc3386eec2f229ef4df89c01d6a909b952644c11f49b6dfe830e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9809ca4b5faca2416c91aadf0a51c3912ec8f00c34e385c9424135fd37e59a8->leave($__internal_d9809ca4b5faca2416c91aadf0a51c3912ec8f00c34e385c9424135fd37e59a8_prof);

        
        $__internal_f92f5b45873fc3386eec2f229ef4df89c01d6a909b952644c11f49b6dfe830e4->leave($__internal_f92f5b45873fc3386eec2f229ef4df89c01d6a909b952644c11f49b6dfe830e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6e16117f41774014936eeb6b51d3ad6e05c675e4a59fa60eddb64006474e1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e16117f41774014936eeb6b51d3ad6e05c675e4a59fa60eddb64006474e1f5->enter($__internal_d6e16117f41774014936eeb6b51d3ad6e05c675e4a59fa60eddb64006474e1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fcdfce4078f839fa9fcd3cc7526edc793f9b9ebdb13227d72dd095ae32649d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdfce4078f839fa9fcd3cc7526edc793f9b9ebdb13227d72dd095ae32649d7d->enter($__internal_fcdfce4078f839fa9fcd3cc7526edc793f9b9ebdb13227d72dd095ae32649d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fcdfce4078f839fa9fcd3cc7526edc793f9b9ebdb13227d72dd095ae32649d7d->leave($__internal_fcdfce4078f839fa9fcd3cc7526edc793f9b9ebdb13227d72dd095ae32649d7d_prof);

        
        $__internal_d6e16117f41774014936eeb6b51d3ad6e05c675e4a59fa60eddb64006474e1f5->leave($__internal_d6e16117f41774014936eeb6b51d3ad6e05c675e4a59fa60eddb64006474e1f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/mert/Documents/www/News-Twitter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
