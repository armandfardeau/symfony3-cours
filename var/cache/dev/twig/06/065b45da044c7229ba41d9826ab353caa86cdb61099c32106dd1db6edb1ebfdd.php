<?php

/* JustBundle:Default:index.html.twig */
class __TwigTemplate_5d8473eb7b1909e74e7e98d2d405e5651c65bfe8b500ea5a79dc9227aedf57ae extends Twig_Template
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
        $__internal_784aa182d6e6666631d53ef5519f4179601a76ea2709525c4fbcd6f657b8c6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784aa182d6e6666631d53ef5519f4179601a76ea2709525c4fbcd6f657b8c6b3->enter($__internal_784aa182d6e6666631d53ef5519f4179601a76ea2709525c4fbcd6f657b8c6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        $__internal_d5a4fde5a79cf14dbf27b0dd4362c24155cb41b11d797584025dd6882946dae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a4fde5a79cf14dbf27b0dd4362c24155cb41b11d797584025dd6882946dae1->enter($__internal_d5a4fde5a79cf14dbf27b0dd4362c24155cb41b11d797584025dd6882946dae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

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
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_784aa182d6e6666631d53ef5519f4179601a76ea2709525c4fbcd6f657b8c6b3->leave($__internal_784aa182d6e6666631d53ef5519f4179601a76ea2709525c4fbcd6f657b8c6b3_prof);

        
        $__internal_d5a4fde5a79cf14dbf27b0dd4362c24155cb41b11d797584025dd6882946dae1->leave($__internal_d5a4fde5a79cf14dbf27b0dd4362c24155cb41b11d797584025dd6882946dae1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d9306e7d73c08f0985fc6d1f082d654fa3f6a8f4e9b4ce9b85f784f48d8d5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9306e7d73c08f0985fc6d1f082d654fa3f6a8f4e9b4ce9b85f784f48d8d5e1->enter($__internal_1d9306e7d73c08f0985fc6d1f082d654fa3f6a8f4e9b4ce9b85f784f48d8d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d8b5dee187ec19bd2ffccdfd12d9064e3a39f947abc1ccf95a7a1916193078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8b5dee187ec19bd2ffccdfd12d9064e3a39f947abc1ccf95a7a1916193078e->enter($__internal_7d8b5dee187ec19bd2ffccdfd12d9064e3a39f947abc1ccf95a7a1916193078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d8b5dee187ec19bd2ffccdfd12d9064e3a39f947abc1ccf95a7a1916193078e->leave($__internal_7d8b5dee187ec19bd2ffccdfd12d9064e3a39f947abc1ccf95a7a1916193078e_prof);

        
        $__internal_1d9306e7d73c08f0985fc6d1f082d654fa3f6a8f4e9b4ce9b85f784f48d8d5e1->leave($__internal_1d9306e7d73c08f0985fc6d1f082d654fa3f6a8f4e9b4ce9b85f784f48d8d5e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_440463070da0a1b40d6b6bcaf6020a82288a0a6c0c2c81d03f26c28f9f83eb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440463070da0a1b40d6b6bcaf6020a82288a0a6c0c2c81d03f26c28f9f83eb04->enter($__internal_440463070da0a1b40d6b6bcaf6020a82288a0a6c0c2c81d03f26c28f9f83eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_57fc0dbba893aed95af8cf04c9291184aea7971c96cf93f9463eae07482bda58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fc0dbba893aed95af8cf04c9291184aea7971c96cf93f9463eae07482bda58->enter($__internal_57fc0dbba893aed95af8cf04c9291184aea7971c96cf93f9463eae07482bda58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57fc0dbba893aed95af8cf04c9291184aea7971c96cf93f9463eae07482bda58->leave($__internal_57fc0dbba893aed95af8cf04c9291184aea7971c96cf93f9463eae07482bda58_prof);

        
        $__internal_440463070da0a1b40d6b6bcaf6020a82288a0a6c0c2c81d03f26c28f9f83eb04->leave($__internal_440463070da0a1b40d6b6bcaf6020a82288a0a6c0c2c81d03f26c28f9f83eb04_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5ff69a488d53cc6348765d4b1ca9578acae7822cce340587f5270ba84ad8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5ff69a488d53cc6348765d4b1ca9578acae7822cce340587f5270ba84ad8b0->enter($__internal_9b5ff69a488d53cc6348765d4b1ca9578acae7822cce340587f5270ba84ad8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cce0ced6c1d2d8bae6b9d66583dfc6ae129ef0d70c76a5cd6e57c985c9edc8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce0ced6c1d2d8bae6b9d66583dfc6ae129ef0d70c76a5cd6e57c985c9edc8eb->enter($__internal_cce0ced6c1d2d8bae6b9d66583dfc6ae129ef0d70c76a5cd6e57c985c9edc8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cce0ced6c1d2d8bae6b9d66583dfc6ae129ef0d70c76a5cd6e57c985c9edc8eb->leave($__internal_cce0ced6c1d2d8bae6b9d66583dfc6ae129ef0d70c76a5cd6e57c985c9edc8eb_prof);

        
        $__internal_9b5ff69a488d53cc6348765d4b1ca9578acae7822cce340587f5270ba84ad8b0->leave($__internal_9b5ff69a488d53cc6348765d4b1ca9578acae7822cce340587f5270ba84ad8b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd65e2a5b7563161006b3b80ba0a7526a44ebc41e9359047e7246a833bec6506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd65e2a5b7563161006b3b80ba0a7526a44ebc41e9359047e7246a833bec6506->enter($__internal_dd65e2a5b7563161006b3b80ba0a7526a44ebc41e9359047e7246a833bec6506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94457f452b5cdc571c63d04869f9cf0361e31f9d7c0c41c60efda1d21ead3fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94457f452b5cdc571c63d04869f9cf0361e31f9d7c0c41c60efda1d21ead3fc6->enter($__internal_94457f452b5cdc571c63d04869f9cf0361e31f9d7c0c41c60efda1d21ead3fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94457f452b5cdc571c63d04869f9cf0361e31f9d7c0c41c60efda1d21ead3fc6->leave($__internal_94457f452b5cdc571c63d04869f9cf0361e31f9d7c0c41c60efda1d21ead3fc6_prof);

        
        $__internal_dd65e2a5b7563161006b3b80ba0a7526a44ebc41e9359047e7246a833bec6506->leave($__internal_dd65e2a5b7563161006b3b80ba0a7526a44ebc41e9359047e7246a833bec6506_prof);

    }

    public function getTemplateName()
    {
        return "JustBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  64 => 5,  52 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "JustBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/JustBundle/Resources/views/Default/index.html.twig");
    }
}
