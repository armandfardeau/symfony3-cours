<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a05de6dfbd510ffb6dc83d7c4e6bc06a66ec35a126300f084cda68d90435ec09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb6d828eef8a0402309077396d54908ca22b5103ffeb4c98e1feb264413e6958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6d828eef8a0402309077396d54908ca22b5103ffeb4c98e1feb264413e6958->enter($__internal_cb6d828eef8a0402309077396d54908ca22b5103ffeb4c98e1feb264413e6958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_116f14af60906f425e18570ee4195d0f7ca6a6ea5afd7aa72b86448f3dd69903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116f14af60906f425e18570ee4195d0f7ca6a6ea5afd7aa72b86448f3dd69903->enter($__internal_116f14af60906f425e18570ee4195d0f7ca6a6ea5afd7aa72b86448f3dd69903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6d828eef8a0402309077396d54908ca22b5103ffeb4c98e1feb264413e6958->leave($__internal_cb6d828eef8a0402309077396d54908ca22b5103ffeb4c98e1feb264413e6958_prof);

        
        $__internal_116f14af60906f425e18570ee4195d0f7ca6a6ea5afd7aa72b86448f3dd69903->leave($__internal_116f14af60906f425e18570ee4195d0f7ca6a6ea5afd7aa72b86448f3dd69903_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a00fa5a82d95ad31d57e46c9b1e1053435587e04beabe18a0ffac525ed552115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00fa5a82d95ad31d57e46c9b1e1053435587e04beabe18a0ffac525ed552115->enter($__internal_a00fa5a82d95ad31d57e46c9b1e1053435587e04beabe18a0ffac525ed552115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e0dd38761525a8aa66bfeb5577cab51cc29620077c7598766973832e9790387d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dd38761525a8aa66bfeb5577cab51cc29620077c7598766973832e9790387d->enter($__internal_e0dd38761525a8aa66bfeb5577cab51cc29620077c7598766973832e9790387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e0dd38761525a8aa66bfeb5577cab51cc29620077c7598766973832e9790387d->leave($__internal_e0dd38761525a8aa66bfeb5577cab51cc29620077c7598766973832e9790387d_prof);

        
        $__internal_a00fa5a82d95ad31d57e46c9b1e1053435587e04beabe18a0ffac525ed552115->leave($__internal_a00fa5a82d95ad31d57e46c9b1e1053435587e04beabe18a0ffac525ed552115_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_630c82498a46e2863cc6cbcfa8ee54c820bbbce681495544e701a39d36e3d0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630c82498a46e2863cc6cbcfa8ee54c820bbbce681495544e701a39d36e3d0cd->enter($__internal_630c82498a46e2863cc6cbcfa8ee54c820bbbce681495544e701a39d36e3d0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a794c48440d941a410cfdc0b26c9f582d708aafc93bc9b5568050edb3a021917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a794c48440d941a410cfdc0b26c9f582d708aafc93bc9b5568050edb3a021917->enter($__internal_a794c48440d941a410cfdc0b26c9f582d708aafc93bc9b5568050edb3a021917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a794c48440d941a410cfdc0b26c9f582d708aafc93bc9b5568050edb3a021917->leave($__internal_a794c48440d941a410cfdc0b26c9f582d708aafc93bc9b5568050edb3a021917_prof);

        
        $__internal_630c82498a46e2863cc6cbcfa8ee54c820bbbce681495544e701a39d36e3d0cd->leave($__internal_630c82498a46e2863cc6cbcfa8ee54c820bbbce681495544e701a39d36e3d0cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
