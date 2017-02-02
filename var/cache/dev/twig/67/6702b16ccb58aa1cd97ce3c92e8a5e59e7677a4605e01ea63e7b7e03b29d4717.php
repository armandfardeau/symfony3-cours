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
        $__internal_ab69d1d727b32ca34aabac9dcadc11e1b25e0ab74bd203c873ee1c63d59a54b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab69d1d727b32ca34aabac9dcadc11e1b25e0ab74bd203c873ee1c63d59a54b1->enter($__internal_ab69d1d727b32ca34aabac9dcadc11e1b25e0ab74bd203c873ee1c63d59a54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f3bacd7eb86f8ad69ed6bf94be48fd417f6667cbfd1b572dcf5f16eea242349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bacd7eb86f8ad69ed6bf94be48fd417f6667cbfd1b572dcf5f16eea242349b->enter($__internal_f3bacd7eb86f8ad69ed6bf94be48fd417f6667cbfd1b572dcf5f16eea242349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab69d1d727b32ca34aabac9dcadc11e1b25e0ab74bd203c873ee1c63d59a54b1->leave($__internal_ab69d1d727b32ca34aabac9dcadc11e1b25e0ab74bd203c873ee1c63d59a54b1_prof);

        
        $__internal_f3bacd7eb86f8ad69ed6bf94be48fd417f6667cbfd1b572dcf5f16eea242349b->leave($__internal_f3bacd7eb86f8ad69ed6bf94be48fd417f6667cbfd1b572dcf5f16eea242349b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71f686c08bb0b0bca4a82791e432db988f6150a151987881e7c09ee38dc3b04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f686c08bb0b0bca4a82791e432db988f6150a151987881e7c09ee38dc3b04a->enter($__internal_71f686c08bb0b0bca4a82791e432db988f6150a151987881e7c09ee38dc3b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a26f3765860112b8c9b2b93f3a6f083526a2652db2e2ee56537613e4ce6a134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a26f3765860112b8c9b2b93f3a6f083526a2652db2e2ee56537613e4ce6a134->enter($__internal_9a26f3765860112b8c9b2b93f3a6f083526a2652db2e2ee56537613e4ce6a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9a26f3765860112b8c9b2b93f3a6f083526a2652db2e2ee56537613e4ce6a134->leave($__internal_9a26f3765860112b8c9b2b93f3a6f083526a2652db2e2ee56537613e4ce6a134_prof);

        
        $__internal_71f686c08bb0b0bca4a82791e432db988f6150a151987881e7c09ee38dc3b04a->leave($__internal_71f686c08bb0b0bca4a82791e432db988f6150a151987881e7c09ee38dc3b04a_prof);

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
