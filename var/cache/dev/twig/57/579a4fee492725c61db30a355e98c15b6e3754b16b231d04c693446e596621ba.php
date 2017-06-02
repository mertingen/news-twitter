<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc54d52a35485adf2450c269915da0d929d26b3b325284bdf0e219e32091f691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc54d52a35485adf2450c269915da0d929d26b3b325284bdf0e219e32091f691->enter($__internal_bc54d52a35485adf2450c269915da0d929d26b3b325284bdf0e219e32091f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_52a3b0fb41eda0794fa1708b5e227ce9c6e37e6c3484c832f229def8ec06a0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a3b0fb41eda0794fa1708b5e227ce9c6e37e6c3484c832f229def8ec06a0a8->enter($__internal_52a3b0fb41eda0794fa1708b5e227ce9c6e37e6c3484c832f229def8ec06a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc54d52a35485adf2450c269915da0d929d26b3b325284bdf0e219e32091f691->leave($__internal_bc54d52a35485adf2450c269915da0d929d26b3b325284bdf0e219e32091f691_prof);

        
        $__internal_52a3b0fb41eda0794fa1708b5e227ce9c6e37e6c3484c832f229def8ec06a0a8->leave($__internal_52a3b0fb41eda0794fa1708b5e227ce9c6e37e6c3484c832f229def8ec06a0a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a37f9779214e55696a3250be37ec618ed05b827ab137eaadafa5b9b2effc901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a37f9779214e55696a3250be37ec618ed05b827ab137eaadafa5b9b2effc901->enter($__internal_7a37f9779214e55696a3250be37ec618ed05b827ab137eaadafa5b9b2effc901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d34328a68cc28ae6ad6b116d35a7a09114f437bcd1d7921f9bdfbbff304c2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d34328a68cc28ae6ad6b116d35a7a09114f437bcd1d7921f9bdfbbff304c2e1->enter($__internal_8d34328a68cc28ae6ad6b116d35a7a09114f437bcd1d7921f9bdfbbff304c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d34328a68cc28ae6ad6b116d35a7a09114f437bcd1d7921f9bdfbbff304c2e1->leave($__internal_8d34328a68cc28ae6ad6b116d35a7a09114f437bcd1d7921f9bdfbbff304c2e1_prof);

        
        $__internal_7a37f9779214e55696a3250be37ec618ed05b827ab137eaadafa5b9b2effc901->leave($__internal_7a37f9779214e55696a3250be37ec618ed05b827ab137eaadafa5b9b2effc901_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5865fc72169f27db25e7aca437d72854d344a89aa7d7a86f42696547eb7bbd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5865fc72169f27db25e7aca437d72854d344a89aa7d7a86f42696547eb7bbd57->enter($__internal_5865fc72169f27db25e7aca437d72854d344a89aa7d7a86f42696547eb7bbd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e66a38986e24ada477f034d588096841a883c8b95c785f76cfe6b3a5b102e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e66a38986e24ada477f034d588096841a883c8b95c785f76cfe6b3a5b102e7b->enter($__internal_8e66a38986e24ada477f034d588096841a883c8b95c785f76cfe6b3a5b102e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e66a38986e24ada477f034d588096841a883c8b95c785f76cfe6b3a5b102e7b->leave($__internal_8e66a38986e24ada477f034d588096841a883c8b95c785f76cfe6b3a5b102e7b_prof);

        
        $__internal_5865fc72169f27db25e7aca437d72854d344a89aa7d7a86f42696547eb7bbd57->leave($__internal_5865fc72169f27db25e7aca437d72854d344a89aa7d7a86f42696547eb7bbd57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6f52afeecb72977711688211b0e3ab388151274b354dcf1b27ac14271de69eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f52afeecb72977711688211b0e3ab388151274b354dcf1b27ac14271de69eb->enter($__internal_e6f52afeecb72977711688211b0e3ab388151274b354dcf1b27ac14271de69eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0695a92b4cb8b64383c4cde6e95026ca42ac357b4dbc70266005dd486f57ee65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0695a92b4cb8b64383c4cde6e95026ca42ac357b4dbc70266005dd486f57ee65->enter($__internal_0695a92b4cb8b64383c4cde6e95026ca42ac357b4dbc70266005dd486f57ee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0695a92b4cb8b64383c4cde6e95026ca42ac357b4dbc70266005dd486f57ee65->leave($__internal_0695a92b4cb8b64383c4cde6e95026ca42ac357b4dbc70266005dd486f57ee65_prof);

        
        $__internal_e6f52afeecb72977711688211b0e3ab388151274b354dcf1b27ac14271de69eb->leave($__internal_e6f52afeecb72977711688211b0e3ab388151274b354dcf1b27ac14271de69eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/mert/Documents/www/News-Twitter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
