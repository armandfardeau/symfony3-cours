<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
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
        $__internal_b61a1fdbfc7616e9bf93d86f1a9cf6a416116cabe4b7e6a68c8412b7f735bffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61a1fdbfc7616e9bf93d86f1a9cf6a416116cabe4b7e6a68c8412b7f735bffa->enter($__internal_b61a1fdbfc7616e9bf93d86f1a9cf6a416116cabe4b7e6a68c8412b7f735bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_167452bab9a2757becb239576c8047392210551c3cb79ce7216d731e4f1c4f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167452bab9a2757becb239576c8047392210551c3cb79ce7216d731e4f1c4f22->enter($__internal_167452bab9a2757becb239576c8047392210551c3cb79ce7216d731e4f1c4f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61a1fdbfc7616e9bf93d86f1a9cf6a416116cabe4b7e6a68c8412b7f735bffa->leave($__internal_b61a1fdbfc7616e9bf93d86f1a9cf6a416116cabe4b7e6a68c8412b7f735bffa_prof);

        
        $__internal_167452bab9a2757becb239576c8047392210551c3cb79ce7216d731e4f1c4f22->leave($__internal_167452bab9a2757becb239576c8047392210551c3cb79ce7216d731e4f1c4f22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32e5e13654ddcdef81260d27c14e82f9aba9dcdf7a93f1a59420abbd05feea75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e5e13654ddcdef81260d27c14e82f9aba9dcdf7a93f1a59420abbd05feea75->enter($__internal_32e5e13654ddcdef81260d27c14e82f9aba9dcdf7a93f1a59420abbd05feea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23927ad5f8dee9ec4ecac4a8241d78b9293a745f1dc82dda47da304227580ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23927ad5f8dee9ec4ecac4a8241d78b9293a745f1dc82dda47da304227580ae6->enter($__internal_23927ad5f8dee9ec4ecac4a8241d78b9293a745f1dc82dda47da304227580ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23927ad5f8dee9ec4ecac4a8241d78b9293a745f1dc82dda47da304227580ae6->leave($__internal_23927ad5f8dee9ec4ecac4a8241d78b9293a745f1dc82dda47da304227580ae6_prof);

        
        $__internal_32e5e13654ddcdef81260d27c14e82f9aba9dcdf7a93f1a59420abbd05feea75->leave($__internal_32e5e13654ddcdef81260d27c14e82f9aba9dcdf7a93f1a59420abbd05feea75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af1d56b85e1f8caaeaba2be6a4879b1b8ec46065a10e5bab11a4cc2c891940b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1d56b85e1f8caaeaba2be6a4879b1b8ec46065a10e5bab11a4cc2c891940b8->enter($__internal_af1d56b85e1f8caaeaba2be6a4879b1b8ec46065a10e5bab11a4cc2c891940b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7deca9af9bac644e9e15e505ff48e228a68c4f191344e6a60bf0b703f8ed9f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7deca9af9bac644e9e15e505ff48e228a68c4f191344e6a60bf0b703f8ed9f48->enter($__internal_7deca9af9bac644e9e15e505ff48e228a68c4f191344e6a60bf0b703f8ed9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7deca9af9bac644e9e15e505ff48e228a68c4f191344e6a60bf0b703f8ed9f48->leave($__internal_7deca9af9bac644e9e15e505ff48e228a68c4f191344e6a60bf0b703f8ed9f48_prof);

        
        $__internal_af1d56b85e1f8caaeaba2be6a4879b1b8ec46065a10e5bab11a4cc2c891940b8->leave($__internal_af1d56b85e1f8caaeaba2be6a4879b1b8ec46065a10e5bab11a4cc2c891940b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d541dd3ce14f8be665438149a3fb170b6d0c7ad5298f04db3fa028d2f8f4928f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d541dd3ce14f8be665438149a3fb170b6d0c7ad5298f04db3fa028d2f8f4928f->enter($__internal_d541dd3ce14f8be665438149a3fb170b6d0c7ad5298f04db3fa028d2f8f4928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9fc70fb61d6b29950c31f948f4ea5d36f9afdc80739e9d502a54036a4efe55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fc70fb61d6b29950c31f948f4ea5d36f9afdc80739e9d502a54036a4efe55a->enter($__internal_c9fc70fb61d6b29950c31f948f4ea5d36f9afdc80739e9d502a54036a4efe55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9fc70fb61d6b29950c31f948f4ea5d36f9afdc80739e9d502a54036a4efe55a->leave($__internal_c9fc70fb61d6b29950c31f948f4ea5d36f9afdc80739e9d502a54036a4efe55a_prof);

        
        $__internal_d541dd3ce14f8be665438149a3fb170b6d0c7ad5298f04db3fa028d2f8f4928f->leave($__internal_d541dd3ce14f8be665438149a3fb170b6d0c7ad5298f04db3fa028d2f8f4928f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
