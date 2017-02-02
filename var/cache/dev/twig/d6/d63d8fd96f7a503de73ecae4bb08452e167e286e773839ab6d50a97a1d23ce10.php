<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_3357210ec3cd9d8b40ac23e5b6daa33ec9b969edfa71ecf3082b5ee0a51af3b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc23306b61c1854804c7632ea8bf63d7a9959d6bb434374de2bcbea7eed02795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc23306b61c1854804c7632ea8bf63d7a9959d6bb434374de2bcbea7eed02795->enter($__internal_cc23306b61c1854804c7632ea8bf63d7a9959d6bb434374de2bcbea7eed02795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_9d6390581a6424de36514f63de9737943c4d3811637c9c5b4a673e583e287243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6390581a6424de36514f63de9737943c4d3811637c9c5b4a673e583e287243->enter($__internal_9d6390581a6424de36514f63de9737943c4d3811637c9c5b4a673e583e287243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>";
        
        $__internal_cc23306b61c1854804c7632ea8bf63d7a9959d6bb434374de2bcbea7eed02795->leave($__internal_cc23306b61c1854804c7632ea8bf63d7a9959d6bb434374de2bcbea7eed02795_prof);

        
        $__internal_9d6390581a6424de36514f63de9737943c4d3811637c9c5b4a673e583e287243->leave($__internal_9d6390581a6424de36514f63de9737943c4d3811637c9c5b4a673e583e287243_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e7c6eac5207c780d71a2daec0422b63f33ebe255d71b52f6a5efa115f3080b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7c6eac5207c780d71a2daec0422b63f33ebe255d71b52f6a5efa115f3080b5->enter($__internal_9e7c6eac5207c780d71a2daec0422b63f33ebe255d71b52f6a5efa115f3080b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_615ce5fb1c503261afb189e1f7f41f53ad72a09cc6dbd7e3670c9522e2c59d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615ce5fb1c503261afb189e1f7f41f53ad72a09cc6dbd7e3670c9522e2c59d6e->enter($__internal_615ce5fb1c503261afb189e1f7f41f53ad72a09cc6dbd7e3670c9522e2c59d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_615ce5fb1c503261afb189e1f7f41f53ad72a09cc6dbd7e3670c9522e2c59d6e->leave($__internal_615ce5fb1c503261afb189e1f7f41f53ad72a09cc6dbd7e3670c9522e2c59d6e_prof);

        
        $__internal_9e7c6eac5207c780d71a2daec0422b63f33ebe255d71b52f6a5efa115f3080b5->leave($__internal_9e7c6eac5207c780d71a2daec0422b63f33ebe255d71b52f6a5efa115f3080b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e463349e4108ca7ebf32c636ecdc85be226a7fa1d03a78cd6e1cfaa46147d54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e463349e4108ca7ebf32c636ecdc85be226a7fa1d03a78cd6e1cfaa46147d54d->enter($__internal_e463349e4108ca7ebf32c636ecdc85be226a7fa1d03a78cd6e1cfaa46147d54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_57f325cf68e421a4c702ef73b1e506439461a8bec7a5904059b46d273f0ffed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f325cf68e421a4c702ef73b1e506439461a8bec7a5904059b46d273f0ffed7->enter($__internal_57f325cf68e421a4c702ef73b1e506439461a8bec7a5904059b46d273f0ffed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57f325cf68e421a4c702ef73b1e506439461a8bec7a5904059b46d273f0ffed7->leave($__internal_57f325cf68e421a4c702ef73b1e506439461a8bec7a5904059b46d273f0ffed7_prof);

        
        $__internal_e463349e4108ca7ebf32c636ecdc85be226a7fa1d03a78cd6e1cfaa46147d54d->leave($__internal_e463349e4108ca7ebf32c636ecdc85be226a7fa1d03a78cd6e1cfaa46147d54d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_076b787063197d946cbc0fc875435f8b1401ee71247f3e27eaf4978535407415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076b787063197d946cbc0fc875435f8b1401ee71247f3e27eaf4978535407415->enter($__internal_076b787063197d946cbc0fc875435f8b1401ee71247f3e27eaf4978535407415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2685da8739d12c35bef877675652bcc7246e5b86edc2c4703f4d9d25cc165a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2685da8739d12c35bef877675652bcc7246e5b86edc2c4703f4d9d25cc165a14->enter($__internal_2685da8739d12c35bef877675652bcc7246e5b86edc2c4703f4d9d25cc165a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_2685da8739d12c35bef877675652bcc7246e5b86edc2c4703f4d9d25cc165a14->leave($__internal_2685da8739d12c35bef877675652bcc7246e5b86edc2c4703f4d9d25cc165a14_prof);

        
        $__internal_076b787063197d946cbc0fc875435f8b1401ee71247f3e27eaf4978535407415->leave($__internal_076b787063197d946cbc0fc875435f8b1401ee71247f3e27eaf4978535407415_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef5f62d90f065a56d984602269b885da594500f26bbc93ca4e9945668faebc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5f62d90f065a56d984602269b885da594500f26bbc93ca4e9945668faebc19->enter($__internal_ef5f62d90f065a56d984602269b885da594500f26bbc93ca4e9945668faebc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd568f6cfee290a5495437e35186de927e9110a3c6e2f2c43cf11228b2df34ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd568f6cfee290a5495437e35186de927e9110a3c6e2f2c43cf11228b2df34ab->enter($__internal_bd568f6cfee290a5495437e35186de927e9110a3c6e2f2c43cf11228b2df34ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd568f6cfee290a5495437e35186de927e9110a3c6e2f2c43cf11228b2df34ab->leave($__internal_bd568f6cfee290a5495437e35186de927e9110a3c6e2f2c43cf11228b2df34ab_prof);

        
        $__internal_ef5f62d90f065a56d984602269b885da594500f26bbc93ca4e9945668faebc19->leave($__internal_ef5f62d90f065a56d984602269b885da594500f26bbc93ca4e9945668faebc19_prof);

    }

    public function getTemplateName()
    {
        return "BunkerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  109 => 12,  100 => 11,  83 => 6,  65 => 5,  54 => 15,  51 => 14,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    {% block body %}
        <h1>SUPRISE MOTHERFUCKER</h1>
    {% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
