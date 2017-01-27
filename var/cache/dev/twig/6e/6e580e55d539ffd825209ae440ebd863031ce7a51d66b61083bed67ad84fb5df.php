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
        $__internal_ea55ed36fb5d1d695a49318a037264bccba2c4f5fc5f52773812e47b3e3f4460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea55ed36fb5d1d695a49318a037264bccba2c4f5fc5f52773812e47b3e3f4460->enter($__internal_ea55ed36fb5d1d695a49318a037264bccba2c4f5fc5f52773812e47b3e3f4460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c063bfb72ad73849407e3750fa1899373350efd7dff94d8e88be5292a3028b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c063bfb72ad73849407e3750fa1899373350efd7dff94d8e88be5292a3028b0b->enter($__internal_c063bfb72ad73849407e3750fa1899373350efd7dff94d8e88be5292a3028b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea55ed36fb5d1d695a49318a037264bccba2c4f5fc5f52773812e47b3e3f4460->leave($__internal_ea55ed36fb5d1d695a49318a037264bccba2c4f5fc5f52773812e47b3e3f4460_prof);

        
        $__internal_c063bfb72ad73849407e3750fa1899373350efd7dff94d8e88be5292a3028b0b->leave($__internal_c063bfb72ad73849407e3750fa1899373350efd7dff94d8e88be5292a3028b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b51b35524bf666f1bb7c50069fcc29b05d2b23eb356c942cf438d02e6358fbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51b35524bf666f1bb7c50069fcc29b05d2b23eb356c942cf438d02e6358fbb6->enter($__internal_b51b35524bf666f1bb7c50069fcc29b05d2b23eb356c942cf438d02e6358fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_209307a6c8031b60d2e61e23e7739984c1830f9dea8f0ada3baf184f74ef5c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209307a6c8031b60d2e61e23e7739984c1830f9dea8f0ada3baf184f74ef5c93->enter($__internal_209307a6c8031b60d2e61e23e7739984c1830f9dea8f0ada3baf184f74ef5c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_209307a6c8031b60d2e61e23e7739984c1830f9dea8f0ada3baf184f74ef5c93->leave($__internal_209307a6c8031b60d2e61e23e7739984c1830f9dea8f0ada3baf184f74ef5c93_prof);

        
        $__internal_b51b35524bf666f1bb7c50069fcc29b05d2b23eb356c942cf438d02e6358fbb6->leave($__internal_b51b35524bf666f1bb7c50069fcc29b05d2b23eb356c942cf438d02e6358fbb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a358e46682d67d3ea8646cddaa9a5684243fece9edc852735cac833bd085e6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358e46682d67d3ea8646cddaa9a5684243fece9edc852735cac833bd085e6fd->enter($__internal_a358e46682d67d3ea8646cddaa9a5684243fece9edc852735cac833bd085e6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ca30fbf21b733dc5accd8a10aa90bac410de4974c52ec4f8bf29d2b26f37f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca30fbf21b733dc5accd8a10aa90bac410de4974c52ec4f8bf29d2b26f37f7e->enter($__internal_1ca30fbf21b733dc5accd8a10aa90bac410de4974c52ec4f8bf29d2b26f37f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ca30fbf21b733dc5accd8a10aa90bac410de4974c52ec4f8bf29d2b26f37f7e->leave($__internal_1ca30fbf21b733dc5accd8a10aa90bac410de4974c52ec4f8bf29d2b26f37f7e_prof);

        
        $__internal_a358e46682d67d3ea8646cddaa9a5684243fece9edc852735cac833bd085e6fd->leave($__internal_a358e46682d67d3ea8646cddaa9a5684243fece9edc852735cac833bd085e6fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a50b51b49f5acc836d2d610b3d9f3e10305ca2579825a62f6b9cf59a25f0a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a50b51b49f5acc836d2d610b3d9f3e10305ca2579825a62f6b9cf59a25f0a3b->enter($__internal_4a50b51b49f5acc836d2d610b3d9f3e10305ca2579825a62f6b9cf59a25f0a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ec9e3500d6a179c6df0181453c057f0371bcc4f8502f8b3be9e2cc0e7d5bcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec9e3500d6a179c6df0181453c057f0371bcc4f8502f8b3be9e2cc0e7d5bcc6->enter($__internal_9ec9e3500d6a179c6df0181453c057f0371bcc4f8502f8b3be9e2cc0e7d5bcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9ec9e3500d6a179c6df0181453c057f0371bcc4f8502f8b3be9e2cc0e7d5bcc6->leave($__internal_9ec9e3500d6a179c6df0181453c057f0371bcc4f8502f8b3be9e2cc0e7d5bcc6_prof);

        
        $__internal_4a50b51b49f5acc836d2d610b3d9f3e10305ca2579825a62f6b9cf59a25f0a3b->leave($__internal_4a50b51b49f5acc836d2d610b3d9f3e10305ca2579825a62f6b9cf59a25f0a3b_prof);

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
