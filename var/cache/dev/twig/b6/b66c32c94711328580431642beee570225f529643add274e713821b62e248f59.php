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
        $__internal_6a457797eb4a40e3d4d71139e86541b06dfcc8db43310b7e6e8731601fe2b1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a457797eb4a40e3d4d71139e86541b06dfcc8db43310b7e6e8731601fe2b1f8->enter($__internal_6a457797eb4a40e3d4d71139e86541b06dfcc8db43310b7e6e8731601fe2b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_19cb080acc43d75b84f899510a2279cdac1768110f526355fd69dec3876fe6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cb080acc43d75b84f899510a2279cdac1768110f526355fd69dec3876fe6f1->enter($__internal_19cb080acc43d75b84f899510a2279cdac1768110f526355fd69dec3876fe6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a457797eb4a40e3d4d71139e86541b06dfcc8db43310b7e6e8731601fe2b1f8->leave($__internal_6a457797eb4a40e3d4d71139e86541b06dfcc8db43310b7e6e8731601fe2b1f8_prof);

        
        $__internal_19cb080acc43d75b84f899510a2279cdac1768110f526355fd69dec3876fe6f1->leave($__internal_19cb080acc43d75b84f899510a2279cdac1768110f526355fd69dec3876fe6f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35d65132a8562f2731baba354bc3941973264f54b6152c7c09c722bd24548b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d65132a8562f2731baba354bc3941973264f54b6152c7c09c722bd24548b66->enter($__internal_35d65132a8562f2731baba354bc3941973264f54b6152c7c09c722bd24548b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c8f6424c9a4eb206d96215eef891720f614f1ccf076448382c42001f3fbcf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8f6424c9a4eb206d96215eef891720f614f1ccf076448382c42001f3fbcf55->enter($__internal_7c8f6424c9a4eb206d96215eef891720f614f1ccf076448382c42001f3fbcf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c8f6424c9a4eb206d96215eef891720f614f1ccf076448382c42001f3fbcf55->leave($__internal_7c8f6424c9a4eb206d96215eef891720f614f1ccf076448382c42001f3fbcf55_prof);

        
        $__internal_35d65132a8562f2731baba354bc3941973264f54b6152c7c09c722bd24548b66->leave($__internal_35d65132a8562f2731baba354bc3941973264f54b6152c7c09c722bd24548b66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0397a46ac408e27bb0fdad1c31746284f9bc88c398b3987fe154060807a07fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0397a46ac408e27bb0fdad1c31746284f9bc88c398b3987fe154060807a07fd->enter($__internal_a0397a46ac408e27bb0fdad1c31746284f9bc88c398b3987fe154060807a07fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b43c9bdd9621b878aa1321a4279a691c4558beb67259aebac7ae598e5fa7da0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43c9bdd9621b878aa1321a4279a691c4558beb67259aebac7ae598e5fa7da0d->enter($__internal_b43c9bdd9621b878aa1321a4279a691c4558beb67259aebac7ae598e5fa7da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b43c9bdd9621b878aa1321a4279a691c4558beb67259aebac7ae598e5fa7da0d->leave($__internal_b43c9bdd9621b878aa1321a4279a691c4558beb67259aebac7ae598e5fa7da0d_prof);

        
        $__internal_a0397a46ac408e27bb0fdad1c31746284f9bc88c398b3987fe154060807a07fd->leave($__internal_a0397a46ac408e27bb0fdad1c31746284f9bc88c398b3987fe154060807a07fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dca0d2bd1c729f08bb7e0355a40aa73a633da4d15954be69e762663c5635964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dca0d2bd1c729f08bb7e0355a40aa73a633da4d15954be69e762663c5635964->enter($__internal_4dca0d2bd1c729f08bb7e0355a40aa73a633da4d15954be69e762663c5635964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_562b60d53e0882f6c1fe0b5ef70d04c60c69f7b9f3e82f3b0eb579077fa97177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562b60d53e0882f6c1fe0b5ef70d04c60c69f7b9f3e82f3b0eb579077fa97177->enter($__internal_562b60d53e0882f6c1fe0b5ef70d04c60c69f7b9f3e82f3b0eb579077fa97177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_562b60d53e0882f6c1fe0b5ef70d04c60c69f7b9f3e82f3b0eb579077fa97177->leave($__internal_562b60d53e0882f6c1fe0b5ef70d04c60c69f7b9f3e82f3b0eb579077fa97177_prof);

        
        $__internal_4dca0d2bd1c729f08bb7e0355a40aa73a633da4d15954be69e762663c5635964->leave($__internal_4dca0d2bd1c729f08bb7e0355a40aa73a633da4d15954be69e762663c5635964_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
