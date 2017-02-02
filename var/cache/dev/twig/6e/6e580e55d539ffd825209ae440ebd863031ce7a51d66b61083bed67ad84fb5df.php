<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c22d97982730d0d4058b9bea1bb74a2f52595da1deb791b793bc1f9f9d92daa7 extends Twig_Template
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
        $__internal_11a5a58f96872c25c6b0e89c0658cb252e36ae6ed64be29e68ca6d70082a0a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a5a58f96872c25c6b0e89c0658cb252e36ae6ed64be29e68ca6d70082a0a53->enter($__internal_11a5a58f96872c25c6b0e89c0658cb252e36ae6ed64be29e68ca6d70082a0a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9ba09747229cdaa94f9fc20d6f7acc437e31807ad223a350af88f69d24597f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba09747229cdaa94f9fc20d6f7acc437e31807ad223a350af88f69d24597f54->enter($__internal_9ba09747229cdaa94f9fc20d6f7acc437e31807ad223a350af88f69d24597f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a5a58f96872c25c6b0e89c0658cb252e36ae6ed64be29e68ca6d70082a0a53->leave($__internal_11a5a58f96872c25c6b0e89c0658cb252e36ae6ed64be29e68ca6d70082a0a53_prof);

        
        $__internal_9ba09747229cdaa94f9fc20d6f7acc437e31807ad223a350af88f69d24597f54->leave($__internal_9ba09747229cdaa94f9fc20d6f7acc437e31807ad223a350af88f69d24597f54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfdeb9fdfdaa22943be08f1d884874f7df105365e9f29a0cbe3e224f9a57a814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdeb9fdfdaa22943be08f1d884874f7df105365e9f29a0cbe3e224f9a57a814->enter($__internal_bfdeb9fdfdaa22943be08f1d884874f7df105365e9f29a0cbe3e224f9a57a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84f224143743dbded8113f169ff43318a7a667b546f52aa8bdf5eb174cc3e392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f224143743dbded8113f169ff43318a7a667b546f52aa8bdf5eb174cc3e392->enter($__internal_84f224143743dbded8113f169ff43318a7a667b546f52aa8bdf5eb174cc3e392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_84f224143743dbded8113f169ff43318a7a667b546f52aa8bdf5eb174cc3e392->leave($__internal_84f224143743dbded8113f169ff43318a7a667b546f52aa8bdf5eb174cc3e392_prof);

        
        $__internal_bfdeb9fdfdaa22943be08f1d884874f7df105365e9f29a0cbe3e224f9a57a814->leave($__internal_bfdeb9fdfdaa22943be08f1d884874f7df105365e9f29a0cbe3e224f9a57a814_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4361d36a0bde5c8be688e74862cce2c4c92a256c3a7b7ee447e85fcb43ef2d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4361d36a0bde5c8be688e74862cce2c4c92a256c3a7b7ee447e85fcb43ef2d3a->enter($__internal_4361d36a0bde5c8be688e74862cce2c4c92a256c3a7b7ee447e85fcb43ef2d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c43188eea97e48fcb2fe0eaa9b2fdf988f54762b6ac5b7bd737f2d50f6180283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43188eea97e48fcb2fe0eaa9b2fdf988f54762b6ac5b7bd737f2d50f6180283->enter($__internal_c43188eea97e48fcb2fe0eaa9b2fdf988f54762b6ac5b7bd737f2d50f6180283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c43188eea97e48fcb2fe0eaa9b2fdf988f54762b6ac5b7bd737f2d50f6180283->leave($__internal_c43188eea97e48fcb2fe0eaa9b2fdf988f54762b6ac5b7bd737f2d50f6180283_prof);

        
        $__internal_4361d36a0bde5c8be688e74862cce2c4c92a256c3a7b7ee447e85fcb43ef2d3a->leave($__internal_4361d36a0bde5c8be688e74862cce2c4c92a256c3a7b7ee447e85fcb43ef2d3a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05c0fe664b5438d1a30e53cc168dccee3d706cb0caef0f2fd887d84054dda85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c0fe664b5438d1a30e53cc168dccee3d706cb0caef0f2fd887d84054dda85e->enter($__internal_05c0fe664b5438d1a30e53cc168dccee3d706cb0caef0f2fd887d84054dda85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3584516e74d6ca56b313fbd599db1f21c0bcdcb1e2b1dcfaf89fa60396481ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3584516e74d6ca56b313fbd599db1f21c0bcdcb1e2b1dcfaf89fa60396481ba->enter($__internal_d3584516e74d6ca56b313fbd599db1f21c0bcdcb1e2b1dcfaf89fa60396481ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d3584516e74d6ca56b313fbd599db1f21c0bcdcb1e2b1dcfaf89fa60396481ba->leave($__internal_d3584516e74d6ca56b313fbd599db1f21c0bcdcb1e2b1dcfaf89fa60396481ba_prof);

        
        $__internal_05c0fe664b5438d1a30e53cc168dccee3d706cb0caef0f2fd887d84054dda85e->leave($__internal_05c0fe664b5438d1a30e53cc168dccee3d706cb0caef0f2fd887d84054dda85e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
