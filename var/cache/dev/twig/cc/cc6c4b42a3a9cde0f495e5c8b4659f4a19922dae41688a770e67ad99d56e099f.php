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
        $__internal_f134e52785a14c8d93a6256f374ffcb4e1e4cc4d3385bffed7a2e2af4b406f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f134e52785a14c8d93a6256f374ffcb4e1e4cc4d3385bffed7a2e2af4b406f86->enter($__internal_f134e52785a14c8d93a6256f374ffcb4e1e4cc4d3385bffed7a2e2af4b406f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f2e7581b56a3a05e77df19de70aac0b520296f116a31ebc5e0b703808922d1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e7581b56a3a05e77df19de70aac0b520296f116a31ebc5e0b703808922d1e7->enter($__internal_f2e7581b56a3a05e77df19de70aac0b520296f116a31ebc5e0b703808922d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f134e52785a14c8d93a6256f374ffcb4e1e4cc4d3385bffed7a2e2af4b406f86->leave($__internal_f134e52785a14c8d93a6256f374ffcb4e1e4cc4d3385bffed7a2e2af4b406f86_prof);

        
        $__internal_f2e7581b56a3a05e77df19de70aac0b520296f116a31ebc5e0b703808922d1e7->leave($__internal_f2e7581b56a3a05e77df19de70aac0b520296f116a31ebc5e0b703808922d1e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_deda7ef4dccc97ad52b734cf011186d0f1a47a195a11eff9b60f3a4abdce4202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deda7ef4dccc97ad52b734cf011186d0f1a47a195a11eff9b60f3a4abdce4202->enter($__internal_deda7ef4dccc97ad52b734cf011186d0f1a47a195a11eff9b60f3a4abdce4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eee9182d6154053ecb4fa821a70834d456ccd99e4e43ac7a800df2e2419c0a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee9182d6154053ecb4fa821a70834d456ccd99e4e43ac7a800df2e2419c0a98->enter($__internal_eee9182d6154053ecb4fa821a70834d456ccd99e4e43ac7a800df2e2419c0a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eee9182d6154053ecb4fa821a70834d456ccd99e4e43ac7a800df2e2419c0a98->leave($__internal_eee9182d6154053ecb4fa821a70834d456ccd99e4e43ac7a800df2e2419c0a98_prof);

        
        $__internal_deda7ef4dccc97ad52b734cf011186d0f1a47a195a11eff9b60f3a4abdce4202->leave($__internal_deda7ef4dccc97ad52b734cf011186d0f1a47a195a11eff9b60f3a4abdce4202_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4386fcaa37e1743ccc0b2fc3b2ccb11f094b101896c7577f1f87b2fd2ad0c295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4386fcaa37e1743ccc0b2fc3b2ccb11f094b101896c7577f1f87b2fd2ad0c295->enter($__internal_4386fcaa37e1743ccc0b2fc3b2ccb11f094b101896c7577f1f87b2fd2ad0c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e601902101abbb5116b271df65d6eb0712a392422b0ead34c49dea59514c263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e601902101abbb5116b271df65d6eb0712a392422b0ead34c49dea59514c263->enter($__internal_2e601902101abbb5116b271df65d6eb0712a392422b0ead34c49dea59514c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e601902101abbb5116b271df65d6eb0712a392422b0ead34c49dea59514c263->leave($__internal_2e601902101abbb5116b271df65d6eb0712a392422b0ead34c49dea59514c263_prof);

        
        $__internal_4386fcaa37e1743ccc0b2fc3b2ccb11f094b101896c7577f1f87b2fd2ad0c295->leave($__internal_4386fcaa37e1743ccc0b2fc3b2ccb11f094b101896c7577f1f87b2fd2ad0c295_prof);

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
