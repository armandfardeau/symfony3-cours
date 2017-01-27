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
        $__internal_5fb2262c7e4fb9c2d235bd3c1332b5aa36a6bd86d643c388bda98cc16e0f37f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb2262c7e4fb9c2d235bd3c1332b5aa36a6bd86d643c388bda98cc16e0f37f5->enter($__internal_5fb2262c7e4fb9c2d235bd3c1332b5aa36a6bd86d643c388bda98cc16e0f37f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_aaa0341776e9fa06322ec35e8da0a7fff8ad85a948de1ba4954bd7f774d74a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa0341776e9fa06322ec35e8da0a7fff8ad85a948de1ba4954bd7f774d74a76->enter($__internal_aaa0341776e9fa06322ec35e8da0a7fff8ad85a948de1ba4954bd7f774d74a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb2262c7e4fb9c2d235bd3c1332b5aa36a6bd86d643c388bda98cc16e0f37f5->leave($__internal_5fb2262c7e4fb9c2d235bd3c1332b5aa36a6bd86d643c388bda98cc16e0f37f5_prof);

        
        $__internal_aaa0341776e9fa06322ec35e8da0a7fff8ad85a948de1ba4954bd7f774d74a76->leave($__internal_aaa0341776e9fa06322ec35e8da0a7fff8ad85a948de1ba4954bd7f774d74a76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_320d342ddde3c00a50f5cb12a6f2d1572373bb789f80a178be8b039215541b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320d342ddde3c00a50f5cb12a6f2d1572373bb789f80a178be8b039215541b78->enter($__internal_320d342ddde3c00a50f5cb12a6f2d1572373bb789f80a178be8b039215541b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6bebce6663cdd00a748482ff04033d3d8e0416eacc7443ca20ffe1835c7ebcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bebce6663cdd00a748482ff04033d3d8e0416eacc7443ca20ffe1835c7ebcbe->enter($__internal_6bebce6663cdd00a748482ff04033d3d8e0416eacc7443ca20ffe1835c7ebcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6bebce6663cdd00a748482ff04033d3d8e0416eacc7443ca20ffe1835c7ebcbe->leave($__internal_6bebce6663cdd00a748482ff04033d3d8e0416eacc7443ca20ffe1835c7ebcbe_prof);

        
        $__internal_320d342ddde3c00a50f5cb12a6f2d1572373bb789f80a178be8b039215541b78->leave($__internal_320d342ddde3c00a50f5cb12a6f2d1572373bb789f80a178be8b039215541b78_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f374dd92606a09906c08d310907150fe66852c8d0083b23bbce6c897f236be72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f374dd92606a09906c08d310907150fe66852c8d0083b23bbce6c897f236be72->enter($__internal_f374dd92606a09906c08d310907150fe66852c8d0083b23bbce6c897f236be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_772fbbf5191d1e99c4f8ee4293c790ca823955828428da9e09265b711c83b44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772fbbf5191d1e99c4f8ee4293c790ca823955828428da9e09265b711c83b44a->enter($__internal_772fbbf5191d1e99c4f8ee4293c790ca823955828428da9e09265b711c83b44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_772fbbf5191d1e99c4f8ee4293c790ca823955828428da9e09265b711c83b44a->leave($__internal_772fbbf5191d1e99c4f8ee4293c790ca823955828428da9e09265b711c83b44a_prof);

        
        $__internal_f374dd92606a09906c08d310907150fe66852c8d0083b23bbce6c897f236be72->leave($__internal_f374dd92606a09906c08d310907150fe66852c8d0083b23bbce6c897f236be72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf3e7e294126815277dac7c7cfaca904d7aa345bbe9ea1f1fb98540b5a46f4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3e7e294126815277dac7c7cfaca904d7aa345bbe9ea1f1fb98540b5a46f4ae->enter($__internal_bf3e7e294126815277dac7c7cfaca904d7aa345bbe9ea1f1fb98540b5a46f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_084abb94366ba077a22007eb0347a7cce45df44371b886edce9e1f0a05452d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084abb94366ba077a22007eb0347a7cce45df44371b886edce9e1f0a05452d6a->enter($__internal_084abb94366ba077a22007eb0347a7cce45df44371b886edce9e1f0a05452d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_084abb94366ba077a22007eb0347a7cce45df44371b886edce9e1f0a05452d6a->leave($__internal_084abb94366ba077a22007eb0347a7cce45df44371b886edce9e1f0a05452d6a_prof);

        
        $__internal_bf3e7e294126815277dac7c7cfaca904d7aa345bbe9ea1f1fb98540b5a46f4ae->leave($__internal_bf3e7e294126815277dac7c7cfaca904d7aa345bbe9ea1f1fb98540b5a46f4ae_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
