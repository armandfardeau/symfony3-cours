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
        $__internal_90f03641ce002cd00c843b0a78005cd96a509fae81bbecbe80283d3fa5f9bbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f03641ce002cd00c843b0a78005cd96a509fae81bbecbe80283d3fa5f9bbac->enter($__internal_90f03641ce002cd00c843b0a78005cd96a509fae81bbecbe80283d3fa5f9bbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c96d3b8708b7eca460005baca4cfa3d7cf0140fa7a3a00f9b42a4dbdf33e70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c96d3b8708b7eca460005baca4cfa3d7cf0140fa7a3a00f9b42a4dbdf33e70e->enter($__internal_3c96d3b8708b7eca460005baca4cfa3d7cf0140fa7a3a00f9b42a4dbdf33e70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f03641ce002cd00c843b0a78005cd96a509fae81bbecbe80283d3fa5f9bbac->leave($__internal_90f03641ce002cd00c843b0a78005cd96a509fae81bbecbe80283d3fa5f9bbac_prof);

        
        $__internal_3c96d3b8708b7eca460005baca4cfa3d7cf0140fa7a3a00f9b42a4dbdf33e70e->leave($__internal_3c96d3b8708b7eca460005baca4cfa3d7cf0140fa7a3a00f9b42a4dbdf33e70e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2b128343fd0fcc0fcf0d400b513166c688be5ec8cbed6745e3b5e9f8fa22f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b128343fd0fcc0fcf0d400b513166c688be5ec8cbed6745e3b5e9f8fa22f6f->enter($__internal_a2b128343fd0fcc0fcf0d400b513166c688be5ec8cbed6745e3b5e9f8fa22f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ce078e86388f13b786ed8667bd926ff4ee841f95fae93eb6b5ad96aeba1899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce078e86388f13b786ed8667bd926ff4ee841f95fae93eb6b5ad96aeba1899b->enter($__internal_3ce078e86388f13b786ed8667bd926ff4ee841f95fae93eb6b5ad96aeba1899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ce078e86388f13b786ed8667bd926ff4ee841f95fae93eb6b5ad96aeba1899b->leave($__internal_3ce078e86388f13b786ed8667bd926ff4ee841f95fae93eb6b5ad96aeba1899b_prof);

        
        $__internal_a2b128343fd0fcc0fcf0d400b513166c688be5ec8cbed6745e3b5e9f8fa22f6f->leave($__internal_a2b128343fd0fcc0fcf0d400b513166c688be5ec8cbed6745e3b5e9f8fa22f6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e02b86dc67400d47906caf1b3bb4f24f551e710e19d1300077b62680c2379bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e02b86dc67400d47906caf1b3bb4f24f551e710e19d1300077b62680c2379bd->enter($__internal_2e02b86dc67400d47906caf1b3bb4f24f551e710e19d1300077b62680c2379bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e4b02cd8c8e70a7f2c151a043b43e716baafbba54bdbf20891c9e03ff1846bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4b02cd8c8e70a7f2c151a043b43e716baafbba54bdbf20891c9e03ff1846bb->enter($__internal_8e4b02cd8c8e70a7f2c151a043b43e716baafbba54bdbf20891c9e03ff1846bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e4b02cd8c8e70a7f2c151a043b43e716baafbba54bdbf20891c9e03ff1846bb->leave($__internal_8e4b02cd8c8e70a7f2c151a043b43e716baafbba54bdbf20891c9e03ff1846bb_prof);

        
        $__internal_2e02b86dc67400d47906caf1b3bb4f24f551e710e19d1300077b62680c2379bd->leave($__internal_2e02b86dc67400d47906caf1b3bb4f24f551e710e19d1300077b62680c2379bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_788ce2513f170c15601117e755210e6256c9e150f9cb02e03edb0d2cda388c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788ce2513f170c15601117e755210e6256c9e150f9cb02e03edb0d2cda388c03->enter($__internal_788ce2513f170c15601117e755210e6256c9e150f9cb02e03edb0d2cda388c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ff496b4d5154e17501fc2752d17e3a3f920bbec4cb7fca1bfe8a59e178ad3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff496b4d5154e17501fc2752d17e3a3f920bbec4cb7fca1bfe8a59e178ad3ec->enter($__internal_1ff496b4d5154e17501fc2752d17e3a3f920bbec4cb7fca1bfe8a59e178ad3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ff496b4d5154e17501fc2752d17e3a3f920bbec4cb7fca1bfe8a59e178ad3ec->leave($__internal_1ff496b4d5154e17501fc2752d17e3a3f920bbec4cb7fca1bfe8a59e178ad3ec_prof);

        
        $__internal_788ce2513f170c15601117e755210e6256c9e150f9cb02e03edb0d2cda388c03->leave($__internal_788ce2513f170c15601117e755210e6256c9e150f9cb02e03edb0d2cda388c03_prof);

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
