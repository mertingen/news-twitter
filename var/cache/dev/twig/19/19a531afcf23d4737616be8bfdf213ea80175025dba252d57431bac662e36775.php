<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a38873ee44f18913cb03b07e3d2f776da8568d991adc0a1a7fd706f67c172dc1 extends Twig_Template
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
        $__internal_2f7856b2a48041fb6166e67b2374afd1c4662133c3485ce1afa91c6a11e80d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7856b2a48041fb6166e67b2374afd1c4662133c3485ce1afa91c6a11e80d5e->enter($__internal_2f7856b2a48041fb6166e67b2374afd1c4662133c3485ce1afa91c6a11e80d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3775ad06fef41b4a4af502096bf7f2948d3ab724fe8977f4cc6486e787cc31dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3775ad06fef41b4a4af502096bf7f2948d3ab724fe8977f4cc6486e787cc31dd->enter($__internal_3775ad06fef41b4a4af502096bf7f2948d3ab724fe8977f4cc6486e787cc31dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2f7856b2a48041fb6166e67b2374afd1c4662133c3485ce1afa91c6a11e80d5e->leave($__internal_2f7856b2a48041fb6166e67b2374afd1c4662133c3485ce1afa91c6a11e80d5e_prof);

        
        $__internal_3775ad06fef41b4a4af502096bf7f2948d3ab724fe8977f4cc6486e787cc31dd->leave($__internal_3775ad06fef41b4a4af502096bf7f2948d3ab724fe8977f4cc6486e787cc31dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/mert/Documents/www/News-Twitter/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
