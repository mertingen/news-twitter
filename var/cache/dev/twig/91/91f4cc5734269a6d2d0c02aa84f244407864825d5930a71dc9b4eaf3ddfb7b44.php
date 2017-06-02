<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7a06180981ff05d9c63dec422c580b1bb13fd33635f9ccf39186aff44fa4a79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a06180981ff05d9c63dec422c580b1bb13fd33635f9ccf39186aff44fa4a79e->enter($__internal_7a06180981ff05d9c63dec422c580b1bb13fd33635f9ccf39186aff44fa4a79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6cc43423f723aab00ec0f8584e5865ac44ea7933b962bed60b72dde8433d6a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc43423f723aab00ec0f8584e5865ac44ea7933b962bed60b72dde8433d6a5d->enter($__internal_6cc43423f723aab00ec0f8584e5865ac44ea7933b962bed60b72dde8433d6a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a06180981ff05d9c63dec422c580b1bb13fd33635f9ccf39186aff44fa4a79e->leave($__internal_7a06180981ff05d9c63dec422c580b1bb13fd33635f9ccf39186aff44fa4a79e_prof);

        
        $__internal_6cc43423f723aab00ec0f8584e5865ac44ea7933b962bed60b72dde8433d6a5d->leave($__internal_6cc43423f723aab00ec0f8584e5865ac44ea7933b962bed60b72dde8433d6a5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56d40b5ab684e1fe58f5ec417ccff1e18da15216c91e4e23010827d41cc93722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d40b5ab684e1fe58f5ec417ccff1e18da15216c91e4e23010827d41cc93722->enter($__internal_56d40b5ab684e1fe58f5ec417ccff1e18da15216c91e4e23010827d41cc93722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccd66e21d8a43dc12456dd9732ca54f4b46f6e0a0c58a98262cdc854f890ccf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd66e21d8a43dc12456dd9732ca54f4b46f6e0a0c58a98262cdc854f890ccf4->enter($__internal_ccd66e21d8a43dc12456dd9732ca54f4b46f6e0a0c58a98262cdc854f890ccf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ccd66e21d8a43dc12456dd9732ca54f4b46f6e0a0c58a98262cdc854f890ccf4->leave($__internal_ccd66e21d8a43dc12456dd9732ca54f4b46f6e0a0c58a98262cdc854f890ccf4_prof);

        
        $__internal_56d40b5ab684e1fe58f5ec417ccff1e18da15216c91e4e23010827d41cc93722->leave($__internal_56d40b5ab684e1fe58f5ec417ccff1e18da15216c91e4e23010827d41cc93722_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b690f81c6bc56799b32a531c2492332007005ca9d2f912ba6cc62be187b3d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b690f81c6bc56799b32a531c2492332007005ca9d2f912ba6cc62be187b3d52->enter($__internal_7b690f81c6bc56799b32a531c2492332007005ca9d2f912ba6cc62be187b3d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81f873dec2052ae7bae70d6c0d67aea3de830222b59f8bd6b66f864d0d4542fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f873dec2052ae7bae70d6c0d67aea3de830222b59f8bd6b66f864d0d4542fa->enter($__internal_81f873dec2052ae7bae70d6c0d67aea3de830222b59f8bd6b66f864d0d4542fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_81f873dec2052ae7bae70d6c0d67aea3de830222b59f8bd6b66f864d0d4542fa->leave($__internal_81f873dec2052ae7bae70d6c0d67aea3de830222b59f8bd6b66f864d0d4542fa_prof);

        
        $__internal_7b690f81c6bc56799b32a531c2492332007005ca9d2f912ba6cc62be187b3d52->leave($__internal_7b690f81c6bc56799b32a531c2492332007005ca9d2f912ba6cc62be187b3d52_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3dfe7e5f5b00897246c465ba4fea499605ff51d2e741c8ee7f8b5c55d39c2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dfe7e5f5b00897246c465ba4fea499605ff51d2e741c8ee7f8b5c55d39c2d3->enter($__internal_a3dfe7e5f5b00897246c465ba4fea499605ff51d2e741c8ee7f8b5c55d39c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55e18f56d2a0b82dc145fc6cbd1879d5818fd7ffffa4212af380d92b0950d55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e18f56d2a0b82dc145fc6cbd1879d5818fd7ffffa4212af380d92b0950d55f->enter($__internal_55e18f56d2a0b82dc145fc6cbd1879d5818fd7ffffa4212af380d92b0950d55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_55e18f56d2a0b82dc145fc6cbd1879d5818fd7ffffa4212af380d92b0950d55f->leave($__internal_55e18f56d2a0b82dc145fc6cbd1879d5818fd7ffffa4212af380d92b0950d55f_prof);

        
        $__internal_a3dfe7e5f5b00897246c465ba4fea499605ff51d2e741c8ee7f8b5c55d39c2d3->leave($__internal_a3dfe7e5f5b00897246c465ba4fea499605ff51d2e741c8ee7f8b5c55d39c2d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/mert/Documents/www/News-Twitter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
