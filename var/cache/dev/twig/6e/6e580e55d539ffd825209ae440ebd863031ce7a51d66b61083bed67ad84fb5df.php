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
        $__internal_f8571a0eea158ef6a78cf4fa59076c4add846238d57ba26c1bb4dfe9eb0ad1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8571a0eea158ef6a78cf4fa59076c4add846238d57ba26c1bb4dfe9eb0ad1f7->enter($__internal_f8571a0eea158ef6a78cf4fa59076c4add846238d57ba26c1bb4dfe9eb0ad1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbdd4fd3a2c0a09ac28717518242b7eadf87a686c4e9e45e312edab5af30b8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdd4fd3a2c0a09ac28717518242b7eadf87a686c4e9e45e312edab5af30b8c3->enter($__internal_dbdd4fd3a2c0a09ac28717518242b7eadf87a686c4e9e45e312edab5af30b8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8571a0eea158ef6a78cf4fa59076c4add846238d57ba26c1bb4dfe9eb0ad1f7->leave($__internal_f8571a0eea158ef6a78cf4fa59076c4add846238d57ba26c1bb4dfe9eb0ad1f7_prof);

        
        $__internal_dbdd4fd3a2c0a09ac28717518242b7eadf87a686c4e9e45e312edab5af30b8c3->leave($__internal_dbdd4fd3a2c0a09ac28717518242b7eadf87a686c4e9e45e312edab5af30b8c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ca8c97e54151a1126798e40dbf91fbc70290bfe98d8437a896506e9759706e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca8c97e54151a1126798e40dbf91fbc70290bfe98d8437a896506e9759706e6->enter($__internal_0ca8c97e54151a1126798e40dbf91fbc70290bfe98d8437a896506e9759706e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a8522b29814e610ef63047fb19ab13cc9c22a7a1f480e7be3a939c233824216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8522b29814e610ef63047fb19ab13cc9c22a7a1f480e7be3a939c233824216->enter($__internal_7a8522b29814e610ef63047fb19ab13cc9c22a7a1f480e7be3a939c233824216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a8522b29814e610ef63047fb19ab13cc9c22a7a1f480e7be3a939c233824216->leave($__internal_7a8522b29814e610ef63047fb19ab13cc9c22a7a1f480e7be3a939c233824216_prof);

        
        $__internal_0ca8c97e54151a1126798e40dbf91fbc70290bfe98d8437a896506e9759706e6->leave($__internal_0ca8c97e54151a1126798e40dbf91fbc70290bfe98d8437a896506e9759706e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09f1cc31b4e416ba709651de923a4c36729feb8a025763ed39539c8706d88025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f1cc31b4e416ba709651de923a4c36729feb8a025763ed39539c8706d88025->enter($__internal_09f1cc31b4e416ba709651de923a4c36729feb8a025763ed39539c8706d88025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2b69bb8a6c2e89d4071750d4c39270442d84f9355285a633702887e0f3c9aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b69bb8a6c2e89d4071750d4c39270442d84f9355285a633702887e0f3c9aaf->enter($__internal_a2b69bb8a6c2e89d4071750d4c39270442d84f9355285a633702887e0f3c9aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a2b69bb8a6c2e89d4071750d4c39270442d84f9355285a633702887e0f3c9aaf->leave($__internal_a2b69bb8a6c2e89d4071750d4c39270442d84f9355285a633702887e0f3c9aaf_prof);

        
        $__internal_09f1cc31b4e416ba709651de923a4c36729feb8a025763ed39539c8706d88025->leave($__internal_09f1cc31b4e416ba709651de923a4c36729feb8a025763ed39539c8706d88025_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57cad5c2c166b564e118eb19468923ab2fcea890c0cb8c74b0af010425058d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cad5c2c166b564e118eb19468923ab2fcea890c0cb8c74b0af010425058d99->enter($__internal_57cad5c2c166b564e118eb19468923ab2fcea890c0cb8c74b0af010425058d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00704e0890755c348dcb5cb629aebcb8e422a43a5bc5814f1aab5d46c76de4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00704e0890755c348dcb5cb629aebcb8e422a43a5bc5814f1aab5d46c76de4e4->enter($__internal_00704e0890755c348dcb5cb629aebcb8e422a43a5bc5814f1aab5d46c76de4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_00704e0890755c348dcb5cb629aebcb8e422a43a5bc5814f1aab5d46c76de4e4->leave($__internal_00704e0890755c348dcb5cb629aebcb8e422a43a5bc5814f1aab5d46c76de4e4_prof);

        
        $__internal_57cad5c2c166b564e118eb19468923ab2fcea890c0cb8c74b0af010425058d99->leave($__internal_57cad5c2c166b564e118eb19468923ab2fcea890c0cb8c74b0af010425058d99_prof);

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
