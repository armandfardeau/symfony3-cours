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
        $__internal_a9b7a688b865cbed2bda9e1c82dd23b5f0aac042631170bc68aaa765ab4dff6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b7a688b865cbed2bda9e1c82dd23b5f0aac042631170bc68aaa765ab4dff6b->enter($__internal_a9b7a688b865cbed2bda9e1c82dd23b5f0aac042631170bc68aaa765ab4dff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_41fbd2f0d5def95625c53439d4f307ca319e1d35158d163dc3b91883dd10978b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fbd2f0d5def95625c53439d4f307ca319e1d35158d163dc3b91883dd10978b->enter($__internal_41fbd2f0d5def95625c53439d4f307ca319e1d35158d163dc3b91883dd10978b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b7a688b865cbed2bda9e1c82dd23b5f0aac042631170bc68aaa765ab4dff6b->leave($__internal_a9b7a688b865cbed2bda9e1c82dd23b5f0aac042631170bc68aaa765ab4dff6b_prof);

        
        $__internal_41fbd2f0d5def95625c53439d4f307ca319e1d35158d163dc3b91883dd10978b->leave($__internal_41fbd2f0d5def95625c53439d4f307ca319e1d35158d163dc3b91883dd10978b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1875b6fe4f1b53a130c889712b4eed3c19399bf28a72df8f076b0a277f719bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1875b6fe4f1b53a130c889712b4eed3c19399bf28a72df8f076b0a277f719bb8->enter($__internal_1875b6fe4f1b53a130c889712b4eed3c19399bf28a72df8f076b0a277f719bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74fd2ca5d1a5dbe7edb562d0484341b6e1c3916e01ab505700049b99153740d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fd2ca5d1a5dbe7edb562d0484341b6e1c3916e01ab505700049b99153740d4->enter($__internal_74fd2ca5d1a5dbe7edb562d0484341b6e1c3916e01ab505700049b99153740d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_74fd2ca5d1a5dbe7edb562d0484341b6e1c3916e01ab505700049b99153740d4->leave($__internal_74fd2ca5d1a5dbe7edb562d0484341b6e1c3916e01ab505700049b99153740d4_prof);

        
        $__internal_1875b6fe4f1b53a130c889712b4eed3c19399bf28a72df8f076b0a277f719bb8->leave($__internal_1875b6fe4f1b53a130c889712b4eed3c19399bf28a72df8f076b0a277f719bb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41e85f072535aebdfbeb18b33aee722ffcfb33cf0293763b4e633cadcb95d281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e85f072535aebdfbeb18b33aee722ffcfb33cf0293763b4e633cadcb95d281->enter($__internal_41e85f072535aebdfbeb18b33aee722ffcfb33cf0293763b4e633cadcb95d281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c147dcaa8413d53ecb09db3bb9a5e91e63e6fae6ebd6cb0b7d5a8e21ef6416b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c147dcaa8413d53ecb09db3bb9a5e91e63e6fae6ebd6cb0b7d5a8e21ef6416b->enter($__internal_7c147dcaa8413d53ecb09db3bb9a5e91e63e6fae6ebd6cb0b7d5a8e21ef6416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7c147dcaa8413d53ecb09db3bb9a5e91e63e6fae6ebd6cb0b7d5a8e21ef6416b->leave($__internal_7c147dcaa8413d53ecb09db3bb9a5e91e63e6fae6ebd6cb0b7d5a8e21ef6416b_prof);

        
        $__internal_41e85f072535aebdfbeb18b33aee722ffcfb33cf0293763b4e633cadcb95d281->leave($__internal_41e85f072535aebdfbeb18b33aee722ffcfb33cf0293763b4e633cadcb95d281_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15c60525e5d7e96764f11d68d28f7cd8b3f1b22a499703fcebc2350b0c00ead8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c60525e5d7e96764f11d68d28f7cd8b3f1b22a499703fcebc2350b0c00ead8->enter($__internal_15c60525e5d7e96764f11d68d28f7cd8b3f1b22a499703fcebc2350b0c00ead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6912d085ca322eba9b8ee70f9a7719143d9af014d293db5d98e4e26179e29e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6912d085ca322eba9b8ee70f9a7719143d9af014d293db5d98e4e26179e29e43->enter($__internal_6912d085ca322eba9b8ee70f9a7719143d9af014d293db5d98e4e26179e29e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6912d085ca322eba9b8ee70f9a7719143d9af014d293db5d98e4e26179e29e43->leave($__internal_6912d085ca322eba9b8ee70f9a7719143d9af014d293db5d98e4e26179e29e43_prof);

        
        $__internal_15c60525e5d7e96764f11d68d28f7cd8b3f1b22a499703fcebc2350b0c00ead8->leave($__internal_15c60525e5d7e96764f11d68d28f7cd8b3f1b22a499703fcebc2350b0c00ead8_prof);

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
