<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d09f5d001bdfae6a908da2fca527dcc57f94534cbb2a2fd4d8c1f862b601f725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_6b8f566b4e96373205c0bbb91624ffa6a626a5003080c9a2a74d00acbfaafdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8f566b4e96373205c0bbb91624ffa6a626a5003080c9a2a74d00acbfaafdd9->enter($__internal_6b8f566b4e96373205c0bbb91624ffa6a626a5003080c9a2a74d00acbfaafdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8693a2c35780ec6ed7a1db8f717fc607e73e1e5db4ce84ba4f28f72878f5b490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693a2c35780ec6ed7a1db8f717fc607e73e1e5db4ce84ba4f28f72878f5b490->enter($__internal_8693a2c35780ec6ed7a1db8f717fc607e73e1e5db4ce84ba4f28f72878f5b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8f566b4e96373205c0bbb91624ffa6a626a5003080c9a2a74d00acbfaafdd9->leave($__internal_6b8f566b4e96373205c0bbb91624ffa6a626a5003080c9a2a74d00acbfaafdd9_prof);

        
        $__internal_8693a2c35780ec6ed7a1db8f717fc607e73e1e5db4ce84ba4f28f72878f5b490->leave($__internal_8693a2c35780ec6ed7a1db8f717fc607e73e1e5db4ce84ba4f28f72878f5b490_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_19b34f7e22b84cc523e39acf9f8089347049bae31a49cb6327cbc673b9a5dcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b34f7e22b84cc523e39acf9f8089347049bae31a49cb6327cbc673b9a5dcb1->enter($__internal_19b34f7e22b84cc523e39acf9f8089347049bae31a49cb6327cbc673b9a5dcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dc9878993e083e3fc7ebf69e5ef677b972b0b77274dd810a50285e7a56dbfdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9878993e083e3fc7ebf69e5ef677b972b0b77274dd810a50285e7a56dbfdd0->enter($__internal_dc9878993e083e3fc7ebf69e5ef677b972b0b77274dd810a50285e7a56dbfdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dc9878993e083e3fc7ebf69e5ef677b972b0b77274dd810a50285e7a56dbfdd0->leave($__internal_dc9878993e083e3fc7ebf69e5ef677b972b0b77274dd810a50285e7a56dbfdd0_prof);

        
        $__internal_19b34f7e22b84cc523e39acf9f8089347049bae31a49cb6327cbc673b9a5dcb1->leave($__internal_19b34f7e22b84cc523e39acf9f8089347049bae31a49cb6327cbc673b9a5dcb1_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2528cb338b6b17da32d93a983a87f1afa330766757cf519f4fb32bf774b7df54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2528cb338b6b17da32d93a983a87f1afa330766757cf519f4fb32bf774b7df54->enter($__internal_2528cb338b6b17da32d93a983a87f1afa330766757cf519f4fb32bf774b7df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06f9488b72af9e92c1335792a247d254ead372859fd63adad0efc3ce95ab1480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f9488b72af9e92c1335792a247d254ead372859fd63adad0efc3ce95ab1480->enter($__internal_06f9488b72af9e92c1335792a247d254ead372859fd63adad0efc3ce95ab1480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_06f9488b72af9e92c1335792a247d254ead372859fd63adad0efc3ce95ab1480->leave($__internal_06f9488b72af9e92c1335792a247d254ead372859fd63adad0efc3ce95ab1480_prof);

        
        $__internal_2528cb338b6b17da32d93a983a87f1afa330766757cf519f4fb32bf774b7df54->leave($__internal_2528cb338b6b17da32d93a983a87f1afa330766757cf519f4fb32bf774b7df54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
