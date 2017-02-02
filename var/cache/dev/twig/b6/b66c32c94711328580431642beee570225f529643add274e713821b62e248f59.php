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
        $__internal_0d296632efbdc2f4aa4931a1a196023bbbc42449a2771925a7123cf390a96537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d296632efbdc2f4aa4931a1a196023bbbc42449a2771925a7123cf390a96537->enter($__internal_0d296632efbdc2f4aa4931a1a196023bbbc42449a2771925a7123cf390a96537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dd4630105ef6c123f25243a11e8d37c86c5c3b14564134b0716811727667d60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4630105ef6c123f25243a11e8d37c86c5c3b14564134b0716811727667d60e->enter($__internal_dd4630105ef6c123f25243a11e8d37c86c5c3b14564134b0716811727667d60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d296632efbdc2f4aa4931a1a196023bbbc42449a2771925a7123cf390a96537->leave($__internal_0d296632efbdc2f4aa4931a1a196023bbbc42449a2771925a7123cf390a96537_prof);

        
        $__internal_dd4630105ef6c123f25243a11e8d37c86c5c3b14564134b0716811727667d60e->leave($__internal_dd4630105ef6c123f25243a11e8d37c86c5c3b14564134b0716811727667d60e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96cc43a8f206b22e2d312a5e7a148d20ecbc78de2a891ad58aee2f09bb691e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cc43a8f206b22e2d312a5e7a148d20ecbc78de2a891ad58aee2f09bb691e72->enter($__internal_96cc43a8f206b22e2d312a5e7a148d20ecbc78de2a891ad58aee2f09bb691e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa93d00e5bde64032ca202c25376fa0540f184d37c05a52160ed798f2d46ec6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa93d00e5bde64032ca202c25376fa0540f184d37c05a52160ed798f2d46ec6a->enter($__internal_aa93d00e5bde64032ca202c25376fa0540f184d37c05a52160ed798f2d46ec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa93d00e5bde64032ca202c25376fa0540f184d37c05a52160ed798f2d46ec6a->leave($__internal_aa93d00e5bde64032ca202c25376fa0540f184d37c05a52160ed798f2d46ec6a_prof);

        
        $__internal_96cc43a8f206b22e2d312a5e7a148d20ecbc78de2a891ad58aee2f09bb691e72->leave($__internal_96cc43a8f206b22e2d312a5e7a148d20ecbc78de2a891ad58aee2f09bb691e72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8adb75c7e04eae2086a60d5836804a10be4ed1f4922c6b26549ecc7733af8247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adb75c7e04eae2086a60d5836804a10be4ed1f4922c6b26549ecc7733af8247->enter($__internal_8adb75c7e04eae2086a60d5836804a10be4ed1f4922c6b26549ecc7733af8247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fdf031f1e3d535ac4e0da33c7564bc2ce2158fb811ec53966031f16fd50440d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf031f1e3d535ac4e0da33c7564bc2ce2158fb811ec53966031f16fd50440d7->enter($__internal_fdf031f1e3d535ac4e0da33c7564bc2ce2158fb811ec53966031f16fd50440d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdf031f1e3d535ac4e0da33c7564bc2ce2158fb811ec53966031f16fd50440d7->leave($__internal_fdf031f1e3d535ac4e0da33c7564bc2ce2158fb811ec53966031f16fd50440d7_prof);

        
        $__internal_8adb75c7e04eae2086a60d5836804a10be4ed1f4922c6b26549ecc7733af8247->leave($__internal_8adb75c7e04eae2086a60d5836804a10be4ed1f4922c6b26549ecc7733af8247_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_afdabe0856f7dc8387af42db697a9754ce6c593b01de23da25d07232c903fe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdabe0856f7dc8387af42db697a9754ce6c593b01de23da25d07232c903fe6f->enter($__internal_afdabe0856f7dc8387af42db697a9754ce6c593b01de23da25d07232c903fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5483ddb3043a9b6daa77eee55f0bf174aea87cd31c898e7d6383759013c1ce93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5483ddb3043a9b6daa77eee55f0bf174aea87cd31c898e7d6383759013c1ce93->enter($__internal_5483ddb3043a9b6daa77eee55f0bf174aea87cd31c898e7d6383759013c1ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5483ddb3043a9b6daa77eee55f0bf174aea87cd31c898e7d6383759013c1ce93->leave($__internal_5483ddb3043a9b6daa77eee55f0bf174aea87cd31c898e7d6383759013c1ce93_prof);

        
        $__internal_afdabe0856f7dc8387af42db697a9754ce6c593b01de23da25d07232c903fe6f->leave($__internal_afdabe0856f7dc8387af42db697a9754ce6c593b01de23da25d07232c903fe6f_prof);

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
