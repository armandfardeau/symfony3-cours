<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_198b338338ccc1ff5e08087bb3ef351d86ce1b36773aa0d2df137da0a69b9386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4965818013306ab568e86e4ff3c9b7581881a309d9ce0f5b538ab7af4f40371d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4965818013306ab568e86e4ff3c9b7581881a309d9ce0f5b538ab7af4f40371d->enter($__internal_4965818013306ab568e86e4ff3c9b7581881a309d9ce0f5b538ab7af4f40371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a3f59791a5e9c9c9d06833dc2245f420d8f2a939d07f0ba162fe61b9d5811a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f59791a5e9c9c9d06833dc2245f420d8f2a939d07f0ba162fe61b9d5811a6a->enter($__internal_a3f59791a5e9c9c9d06833dc2245f420d8f2a939d07f0ba162fe61b9d5811a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4965818013306ab568e86e4ff3c9b7581881a309d9ce0f5b538ab7af4f40371d->leave($__internal_4965818013306ab568e86e4ff3c9b7581881a309d9ce0f5b538ab7af4f40371d_prof);

        
        $__internal_a3f59791a5e9c9c9d06833dc2245f420d8f2a939d07f0ba162fe61b9d5811a6a->leave($__internal_a3f59791a5e9c9c9d06833dc2245f420d8f2a939d07f0ba162fe61b9d5811a6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb34dea48b716d4bed3cd28cb3017105e1faddf33ad82e8cdb1a68bc2702c6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb34dea48b716d4bed3cd28cb3017105e1faddf33ad82e8cdb1a68bc2702c6cc->enter($__internal_bb34dea48b716d4bed3cd28cb3017105e1faddf33ad82e8cdb1a68bc2702c6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1fbd3c18a50c24f00b8bd70a521c6fc241be436b04e800ccb6e0dcfa631fd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fbd3c18a50c24f00b8bd70a521c6fc241be436b04e800ccb6e0dcfa631fd5e->enter($__internal_a1fbd3c18a50c24f00b8bd70a521c6fc241be436b04e800ccb6e0dcfa631fd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a1fbd3c18a50c24f00b8bd70a521c6fc241be436b04e800ccb6e0dcfa631fd5e->leave($__internal_a1fbd3c18a50c24f00b8bd70a521c6fc241be436b04e800ccb6e0dcfa631fd5e_prof);

        
        $__internal_bb34dea48b716d4bed3cd28cb3017105e1faddf33ad82e8cdb1a68bc2702c6cc->leave($__internal_bb34dea48b716d4bed3cd28cb3017105e1faddf33ad82e8cdb1a68bc2702c6cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
