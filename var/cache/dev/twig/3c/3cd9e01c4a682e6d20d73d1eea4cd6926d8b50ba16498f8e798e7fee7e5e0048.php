<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_fd326c6f5879d7554696f6fdb98a4384d55c26558c31c545ba34c8fc9e845cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd326c6f5879d7554696f6fdb98a4384d55c26558c31c545ba34c8fc9e845cfb->enter($__internal_fd326c6f5879d7554696f6fdb98a4384d55c26558c31c545ba34c8fc9e845cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_644b14595031603e5fcb1d4f0c81b7e779cd57492feb40a7730d39860619e8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644b14595031603e5fcb1d4f0c81b7e779cd57492feb40a7730d39860619e8ba->enter($__internal_644b14595031603e5fcb1d4f0c81b7e779cd57492feb40a7730d39860619e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd326c6f5879d7554696f6fdb98a4384d55c26558c31c545ba34c8fc9e845cfb->leave($__internal_fd326c6f5879d7554696f6fdb98a4384d55c26558c31c545ba34c8fc9e845cfb_prof);

        
        $__internal_644b14595031603e5fcb1d4f0c81b7e779cd57492feb40a7730d39860619e8ba->leave($__internal_644b14595031603e5fcb1d4f0c81b7e779cd57492feb40a7730d39860619e8ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc6103a29838315c4f05d2972160ad1f687c8fdd87e9de22750a5ccbd90c8206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6103a29838315c4f05d2972160ad1f687c8fdd87e9de22750a5ccbd90c8206->enter($__internal_cc6103a29838315c4f05d2972160ad1f687c8fdd87e9de22750a5ccbd90c8206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_092af6f3d629e536035f86db54a8d3e66246129e53b01be30f84b26245e71024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092af6f3d629e536035f86db54a8d3e66246129e53b01be30f84b26245e71024->enter($__internal_092af6f3d629e536035f86db54a8d3e66246129e53b01be30f84b26245e71024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_092af6f3d629e536035f86db54a8d3e66246129e53b01be30f84b26245e71024->leave($__internal_092af6f3d629e536035f86db54a8d3e66246129e53b01be30f84b26245e71024_prof);

        
        $__internal_cc6103a29838315c4f05d2972160ad1f687c8fdd87e9de22750a5ccbd90c8206->leave($__internal_cc6103a29838315c4f05d2972160ad1f687c8fdd87e9de22750a5ccbd90c8206_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f019add2e41b67fd373fa98c0d4f1a82f8d00d4296fcc9e66170ab4bb3cd212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f019add2e41b67fd373fa98c0d4f1a82f8d00d4296fcc9e66170ab4bb3cd212->enter($__internal_7f019add2e41b67fd373fa98c0d4f1a82f8d00d4296fcc9e66170ab4bb3cd212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84a511fc3f319839fc8b46823ae2018dfa8e9265ed48bf419d83d667783eb75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a511fc3f319839fc8b46823ae2018dfa8e9265ed48bf419d83d667783eb75d->enter($__internal_84a511fc3f319839fc8b46823ae2018dfa8e9265ed48bf419d83d667783eb75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84a511fc3f319839fc8b46823ae2018dfa8e9265ed48bf419d83d667783eb75d->leave($__internal_84a511fc3f319839fc8b46823ae2018dfa8e9265ed48bf419d83d667783eb75d_prof);

        
        $__internal_7f019add2e41b67fd373fa98c0d4f1a82f8d00d4296fcc9e66170ab4bb3cd212->leave($__internal_7f019add2e41b67fd373fa98c0d4f1a82f8d00d4296fcc9e66170ab4bb3cd212_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9674edbe6430fb7d08f195fddd7a6c2fdbf7da8a1aad8613fac42cdc6ecd454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9674edbe6430fb7d08f195fddd7a6c2fdbf7da8a1aad8613fac42cdc6ecd454->enter($__internal_f9674edbe6430fb7d08f195fddd7a6c2fdbf7da8a1aad8613fac42cdc6ecd454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3947fdc7a1d3f32a5cb6ae182c1b330463c2642d83d1a57787480781a43b0748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3947fdc7a1d3f32a5cb6ae182c1b330463c2642d83d1a57787480781a43b0748->enter($__internal_3947fdc7a1d3f32a5cb6ae182c1b330463c2642d83d1a57787480781a43b0748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3947fdc7a1d3f32a5cb6ae182c1b330463c2642d83d1a57787480781a43b0748->leave($__internal_3947fdc7a1d3f32a5cb6ae182c1b330463c2642d83d1a57787480781a43b0748_prof);

        
        $__internal_f9674edbe6430fb7d08f195fddd7a6c2fdbf7da8a1aad8613fac42cdc6ecd454->leave($__internal_f9674edbe6430fb7d08f195fddd7a6c2fdbf7da8a1aad8613fac42cdc6ecd454_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Whorthy/GitHub/Whorthy/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
