<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b65ec5e47a443e0f04562c51d7d085e19eedcc462dfe81ec806101d1e0d1a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284e6adf08793e5e7bb10f3152eb6cc9b1ad1eb8f8baed6730c5d1deb4b7aa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284e6adf08793e5e7bb10f3152eb6cc9b1ad1eb8f8baed6730c5d1deb4b7aa94->enter($__internal_284e6adf08793e5e7bb10f3152eb6cc9b1ad1eb8f8baed6730c5d1deb4b7aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d6ccd18a1a461813115815f1e254a24a73cb08dd3053b83b3572ed3b853ffe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ccd18a1a461813115815f1e254a24a73cb08dd3053b83b3572ed3b853ffe9c->enter($__internal_d6ccd18a1a461813115815f1e254a24a73cb08dd3053b83b3572ed3b853ffe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284e6adf08793e5e7bb10f3152eb6cc9b1ad1eb8f8baed6730c5d1deb4b7aa94->leave($__internal_284e6adf08793e5e7bb10f3152eb6cc9b1ad1eb8f8baed6730c5d1deb4b7aa94_prof);

        
        $__internal_d6ccd18a1a461813115815f1e254a24a73cb08dd3053b83b3572ed3b853ffe9c->leave($__internal_d6ccd18a1a461813115815f1e254a24a73cb08dd3053b83b3572ed3b853ffe9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a67bd2b5a000e21fb33abca9ee20e7c924d474692e3f8dad2bbc9685955167f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67bd2b5a000e21fb33abca9ee20e7c924d474692e3f8dad2bbc9685955167f1->enter($__internal_a67bd2b5a000e21fb33abca9ee20e7c924d474692e3f8dad2bbc9685955167f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e43fb8ed2894c820b6ae836633e66948752e483c6182eff3eae0dd2cf96dfdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43fb8ed2894c820b6ae836633e66948752e483c6182eff3eae0dd2cf96dfdd5->enter($__internal_e43fb8ed2894c820b6ae836633e66948752e483c6182eff3eae0dd2cf96dfdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e43fb8ed2894c820b6ae836633e66948752e483c6182eff3eae0dd2cf96dfdd5->leave($__internal_e43fb8ed2894c820b6ae836633e66948752e483c6182eff3eae0dd2cf96dfdd5_prof);

        
        $__internal_a67bd2b5a000e21fb33abca9ee20e7c924d474692e3f8dad2bbc9685955167f1->leave($__internal_a67bd2b5a000e21fb33abca9ee20e7c924d474692e3f8dad2bbc9685955167f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea4e8a54f46f49c906542039f902ace485b393e1f9525e789e1df4644c1b5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea4e8a54f46f49c906542039f902ace485b393e1f9525e789e1df4644c1b5bf->enter($__internal_bea4e8a54f46f49c906542039f902ace485b393e1f9525e789e1df4644c1b5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffab4edb55e83a1bc64763e558f01d5f5d6580c3f8fe67872ed6c23254085cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffab4edb55e83a1bc64763e558f01d5f5d6580c3f8fe67872ed6c23254085cb9->enter($__internal_ffab4edb55e83a1bc64763e558f01d5f5d6580c3f8fe67872ed6c23254085cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ffab4edb55e83a1bc64763e558f01d5f5d6580c3f8fe67872ed6c23254085cb9->leave($__internal_ffab4edb55e83a1bc64763e558f01d5f5d6580c3f8fe67872ed6c23254085cb9_prof);

        
        $__internal_bea4e8a54f46f49c906542039f902ace485b393e1f9525e789e1df4644c1b5bf->leave($__internal_bea4e8a54f46f49c906542039f902ace485b393e1f9525e789e1df4644c1b5bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
