<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6c8f98ad5d7b90883be1077a30832d9fcc474350e73672138617f67dda13e08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b459d679bc9cbd17017d19582e82052e982482e8765ac312c4275c3ead273ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b459d679bc9cbd17017d19582e82052e982482e8765ac312c4275c3ead273ee7->enter($__internal_b459d679bc9cbd17017d19582e82052e982482e8765ac312c4275c3ead273ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_288d18881690b8d33b6f1de193bad908ed035a6b014256e25edd2f7a5ee620d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288d18881690b8d33b6f1de193bad908ed035a6b014256e25edd2f7a5ee620d3->enter($__internal_288d18881690b8d33b6f1de193bad908ed035a6b014256e25edd2f7a5ee620d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b459d679bc9cbd17017d19582e82052e982482e8765ac312c4275c3ead273ee7->leave($__internal_b459d679bc9cbd17017d19582e82052e982482e8765ac312c4275c3ead273ee7_prof);

        
        $__internal_288d18881690b8d33b6f1de193bad908ed035a6b014256e25edd2f7a5ee620d3->leave($__internal_288d18881690b8d33b6f1de193bad908ed035a6b014256e25edd2f7a5ee620d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de035fd279e341cbbd230f9b98304280643a1cb948d2bc096b8bb32e7d9ebcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de035fd279e341cbbd230f9b98304280643a1cb948d2bc096b8bb32e7d9ebcdc->enter($__internal_de035fd279e341cbbd230f9b98304280643a1cb948d2bc096b8bb32e7d9ebcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d78c8d12ae0b396a94bca9bc08a8ecf7662904b8954ab720e25ca7d2ae581f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78c8d12ae0b396a94bca9bc08a8ecf7662904b8954ab720e25ca7d2ae581f60->enter($__internal_d78c8d12ae0b396a94bca9bc08a8ecf7662904b8954ab720e25ca7d2ae581f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d78c8d12ae0b396a94bca9bc08a8ecf7662904b8954ab720e25ca7d2ae581f60->leave($__internal_d78c8d12ae0b396a94bca9bc08a8ecf7662904b8954ab720e25ca7d2ae581f60_prof);

        
        $__internal_de035fd279e341cbbd230f9b98304280643a1cb948d2bc096b8bb32e7d9ebcdc->leave($__internal_de035fd279e341cbbd230f9b98304280643a1cb948d2bc096b8bb32e7d9ebcdc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af77a9d1a0caa5d5614173a91597e72a15e81be1e31e718248bd8f6426ac092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af77a9d1a0caa5d5614173a91597e72a15e81be1e31e718248bd8f6426ac092->enter($__internal_8af77a9d1a0caa5d5614173a91597e72a15e81be1e31e718248bd8f6426ac092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3b8ff30fde7d212e9fb9a3e09c228d1e065d89213390e0922a465c4c362d2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b8ff30fde7d212e9fb9a3e09c228d1e065d89213390e0922a465c4c362d2eb->enter($__internal_b3b8ff30fde7d212e9fb9a3e09c228d1e065d89213390e0922a465c4c362d2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b3b8ff30fde7d212e9fb9a3e09c228d1e065d89213390e0922a465c4c362d2eb->leave($__internal_b3b8ff30fde7d212e9fb9a3e09c228d1e065d89213390e0922a465c4c362d2eb_prof);

        
        $__internal_8af77a9d1a0caa5d5614173a91597e72a15e81be1e31e718248bd8f6426ac092->leave($__internal_8af77a9d1a0caa5d5614173a91597e72a15e81be1e31e718248bd8f6426ac092_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
