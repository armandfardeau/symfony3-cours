<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_737d4b6fa2d65416ddedbffcc4380588d795aea10ab0aa4c0e869371f95bbdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737d4b6fa2d65416ddedbffcc4380588d795aea10ab0aa4c0e869371f95bbdc3->enter($__internal_737d4b6fa2d65416ddedbffcc4380588d795aea10ab0aa4c0e869371f95bbdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_33efc1d09525501dd7bf757886ad8f96924006eb4e35f1e2bad186bed1e8370c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33efc1d09525501dd7bf757886ad8f96924006eb4e35f1e2bad186bed1e8370c->enter($__internal_33efc1d09525501dd7bf757886ad8f96924006eb4e35f1e2bad186bed1e8370c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737d4b6fa2d65416ddedbffcc4380588d795aea10ab0aa4c0e869371f95bbdc3->leave($__internal_737d4b6fa2d65416ddedbffcc4380588d795aea10ab0aa4c0e869371f95bbdc3_prof);

        
        $__internal_33efc1d09525501dd7bf757886ad8f96924006eb4e35f1e2bad186bed1e8370c->leave($__internal_33efc1d09525501dd7bf757886ad8f96924006eb4e35f1e2bad186bed1e8370c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b8c4eb55885947fbaf5e601b8912bf9c96f049493a2270b52bf7d3a8a90d0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8c4eb55885947fbaf5e601b8912bf9c96f049493a2270b52bf7d3a8a90d0e9->enter($__internal_3b8c4eb55885947fbaf5e601b8912bf9c96f049493a2270b52bf7d3a8a90d0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7dcc7b42262c9b74806d6d5256920e4531eda884627e848cb02e4927148a802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcc7b42262c9b74806d6d5256920e4531eda884627e848cb02e4927148a802e->enter($__internal_7dcc7b42262c9b74806d6d5256920e4531eda884627e848cb02e4927148a802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7dcc7b42262c9b74806d6d5256920e4531eda884627e848cb02e4927148a802e->leave($__internal_7dcc7b42262c9b74806d6d5256920e4531eda884627e848cb02e4927148a802e_prof);

        
        $__internal_3b8c4eb55885947fbaf5e601b8912bf9c96f049493a2270b52bf7d3a8a90d0e9->leave($__internal_3b8c4eb55885947fbaf5e601b8912bf9c96f049493a2270b52bf7d3a8a90d0e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3327e460d1d1af95c1afe68656e97930dbc3d4fdf765d40380b4e5fb0bd39296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3327e460d1d1af95c1afe68656e97930dbc3d4fdf765d40380b4e5fb0bd39296->enter($__internal_3327e460d1d1af95c1afe68656e97930dbc3d4fdf765d40380b4e5fb0bd39296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90f9f1256d22b2069a38471d47cf6a8b5c30287cffae6d856aac62c94dfe302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f9f1256d22b2069a38471d47cf6a8b5c30287cffae6d856aac62c94dfe302b->enter($__internal_90f9f1256d22b2069a38471d47cf6a8b5c30287cffae6d856aac62c94dfe302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90f9f1256d22b2069a38471d47cf6a8b5c30287cffae6d856aac62c94dfe302b->leave($__internal_90f9f1256d22b2069a38471d47cf6a8b5c30287cffae6d856aac62c94dfe302b_prof);

        
        $__internal_3327e460d1d1af95c1afe68656e97930dbc3d4fdf765d40380b4e5fb0bd39296->leave($__internal_3327e460d1d1af95c1afe68656e97930dbc3d4fdf765d40380b4e5fb0bd39296_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5571cdb71eee0da5b6a746db56a4c7a1143d802e479b42db5403ce863082a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5571cdb71eee0da5b6a746db56a4c7a1143d802e479b42db5403ce863082a15->enter($__internal_a5571cdb71eee0da5b6a746db56a4c7a1143d802e479b42db5403ce863082a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f049a40563d657185a72909e71fc42d04189388e53cf070288609928f32dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f049a40563d657185a72909e71fc42d04189388e53cf070288609928f32dd4f->enter($__internal_2f049a40563d657185a72909e71fc42d04189388e53cf070288609928f32dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f049a40563d657185a72909e71fc42d04189388e53cf070288609928f32dd4f->leave($__internal_2f049a40563d657185a72909e71fc42d04189388e53cf070288609928f32dd4f_prof);

        
        $__internal_a5571cdb71eee0da5b6a746db56a4c7a1143d802e479b42db5403ce863082a15->leave($__internal_a5571cdb71eee0da5b6a746db56a4c7a1143d802e479b42db5403ce863082a15_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/Whorthy/GitHub/Whorthy/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
