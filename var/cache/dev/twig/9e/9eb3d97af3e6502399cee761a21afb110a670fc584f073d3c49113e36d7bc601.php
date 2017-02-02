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
        $__internal_6bd18596191b0536764e233b719f914731b7c1db80ef7359a80c2846829816b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd18596191b0536764e233b719f914731b7c1db80ef7359a80c2846829816b0->enter($__internal_6bd18596191b0536764e233b719f914731b7c1db80ef7359a80c2846829816b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_395c7ac61d74e6629d3532f9402eaa22f63d5f7be82e181e074677094e2e530c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395c7ac61d74e6629d3532f9402eaa22f63d5f7be82e181e074677094e2e530c->enter($__internal_395c7ac61d74e6629d3532f9402eaa22f63d5f7be82e181e074677094e2e530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd18596191b0536764e233b719f914731b7c1db80ef7359a80c2846829816b0->leave($__internal_6bd18596191b0536764e233b719f914731b7c1db80ef7359a80c2846829816b0_prof);

        
        $__internal_395c7ac61d74e6629d3532f9402eaa22f63d5f7be82e181e074677094e2e530c->leave($__internal_395c7ac61d74e6629d3532f9402eaa22f63d5f7be82e181e074677094e2e530c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b1c11514b9804d34c9ffb5f2d0902892070fd5a2d3a03bb32d63cbec93cb448d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c11514b9804d34c9ffb5f2d0902892070fd5a2d3a03bb32d63cbec93cb448d->enter($__internal_b1c11514b9804d34c9ffb5f2d0902892070fd5a2d3a03bb32d63cbec93cb448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_903f13529a816d7db0aeda0b8a4883782b10f0946e0cf602c760cd4cb8887932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f13529a816d7db0aeda0b8a4883782b10f0946e0cf602c760cd4cb8887932->enter($__internal_903f13529a816d7db0aeda0b8a4883782b10f0946e0cf602c760cd4cb8887932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_903f13529a816d7db0aeda0b8a4883782b10f0946e0cf602c760cd4cb8887932->leave($__internal_903f13529a816d7db0aeda0b8a4883782b10f0946e0cf602c760cd4cb8887932_prof);

        
        $__internal_b1c11514b9804d34c9ffb5f2d0902892070fd5a2d3a03bb32d63cbec93cb448d->leave($__internal_b1c11514b9804d34c9ffb5f2d0902892070fd5a2d3a03bb32d63cbec93cb448d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29c70a334142ebb5886a23fd6f2b130e15d93a100f28d64c2f22d2086e6bd083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c70a334142ebb5886a23fd6f2b130e15d93a100f28d64c2f22d2086e6bd083->enter($__internal_29c70a334142ebb5886a23fd6f2b130e15d93a100f28d64c2f22d2086e6bd083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_784c5edcccc4d9896f229f044a6b43624e8810bfff6f1cc100f6b3b995022974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784c5edcccc4d9896f229f044a6b43624e8810bfff6f1cc100f6b3b995022974->enter($__internal_784c5edcccc4d9896f229f044a6b43624e8810bfff6f1cc100f6b3b995022974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_784c5edcccc4d9896f229f044a6b43624e8810bfff6f1cc100f6b3b995022974->leave($__internal_784c5edcccc4d9896f229f044a6b43624e8810bfff6f1cc100f6b3b995022974_prof);

        
        $__internal_29c70a334142ebb5886a23fd6f2b130e15d93a100f28d64c2f22d2086e6bd083->leave($__internal_29c70a334142ebb5886a23fd6f2b130e15d93a100f28d64c2f22d2086e6bd083_prof);

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
