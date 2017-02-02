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
        $__internal_f7f541d362331a5e9283fa1f6db722feb5341371e57904069a77184aa99da563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f541d362331a5e9283fa1f6db722feb5341371e57904069a77184aa99da563->enter($__internal_f7f541d362331a5e9283fa1f6db722feb5341371e57904069a77184aa99da563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d98ba1552d5118ffdba8cdaaf51d049c411ee9bbd5b1c2296c110f2366ecd69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98ba1552d5118ffdba8cdaaf51d049c411ee9bbd5b1c2296c110f2366ecd69c->enter($__internal_d98ba1552d5118ffdba8cdaaf51d049c411ee9bbd5b1c2296c110f2366ecd69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f541d362331a5e9283fa1f6db722feb5341371e57904069a77184aa99da563->leave($__internal_f7f541d362331a5e9283fa1f6db722feb5341371e57904069a77184aa99da563_prof);

        
        $__internal_d98ba1552d5118ffdba8cdaaf51d049c411ee9bbd5b1c2296c110f2366ecd69c->leave($__internal_d98ba1552d5118ffdba8cdaaf51d049c411ee9bbd5b1c2296c110f2366ecd69c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ad95dfce411e659aabf17e4e98bd1e7c81c735cfd2232d4c52e7d0c3a69520d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad95dfce411e659aabf17e4e98bd1e7c81c735cfd2232d4c52e7d0c3a69520d->enter($__internal_7ad95dfce411e659aabf17e4e98bd1e7c81c735cfd2232d4c52e7d0c3a69520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96a44ad71f39307a50678ef8d36b270747121eb256de4040f539c3eb85755fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a44ad71f39307a50678ef8d36b270747121eb256de4040f539c3eb85755fbc->enter($__internal_96a44ad71f39307a50678ef8d36b270747121eb256de4040f539c3eb85755fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_96a44ad71f39307a50678ef8d36b270747121eb256de4040f539c3eb85755fbc->leave($__internal_96a44ad71f39307a50678ef8d36b270747121eb256de4040f539c3eb85755fbc_prof);

        
        $__internal_7ad95dfce411e659aabf17e4e98bd1e7c81c735cfd2232d4c52e7d0c3a69520d->leave($__internal_7ad95dfce411e659aabf17e4e98bd1e7c81c735cfd2232d4c52e7d0c3a69520d_prof);

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
