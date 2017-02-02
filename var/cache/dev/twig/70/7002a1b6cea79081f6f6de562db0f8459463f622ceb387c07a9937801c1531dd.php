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
        $__internal_907286a3dbcf2a22ef33bf06295e6304fd1d9a7f6c5bf16b623f6855d281ffee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907286a3dbcf2a22ef33bf06295e6304fd1d9a7f6c5bf16b623f6855d281ffee->enter($__internal_907286a3dbcf2a22ef33bf06295e6304fd1d9a7f6c5bf16b623f6855d281ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e6d45bb56fe80ad21048cc8245b8d9cb3da855c277cd0d5ba9a7ce695ae1b482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d45bb56fe80ad21048cc8245b8d9cb3da855c277cd0d5ba9a7ce695ae1b482->enter($__internal_e6d45bb56fe80ad21048cc8245b8d9cb3da855c277cd0d5ba9a7ce695ae1b482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_907286a3dbcf2a22ef33bf06295e6304fd1d9a7f6c5bf16b623f6855d281ffee->leave($__internal_907286a3dbcf2a22ef33bf06295e6304fd1d9a7f6c5bf16b623f6855d281ffee_prof);

        
        $__internal_e6d45bb56fe80ad21048cc8245b8d9cb3da855c277cd0d5ba9a7ce695ae1b482->leave($__internal_e6d45bb56fe80ad21048cc8245b8d9cb3da855c277cd0d5ba9a7ce695ae1b482_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73c1ec43b0eed39d9447d1df4ff16ccc766c33b544ac4be72ac435e89e71814c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c1ec43b0eed39d9447d1df4ff16ccc766c33b544ac4be72ac435e89e71814c->enter($__internal_73c1ec43b0eed39d9447d1df4ff16ccc766c33b544ac4be72ac435e89e71814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b96d8f69f5369346b4289f5194244b3a63ef2d8b8d32a5d656811f40f0103798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96d8f69f5369346b4289f5194244b3a63ef2d8b8d32a5d656811f40f0103798->enter($__internal_b96d8f69f5369346b4289f5194244b3a63ef2d8b8d32a5d656811f40f0103798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b96d8f69f5369346b4289f5194244b3a63ef2d8b8d32a5d656811f40f0103798->leave($__internal_b96d8f69f5369346b4289f5194244b3a63ef2d8b8d32a5d656811f40f0103798_prof);

        
        $__internal_73c1ec43b0eed39d9447d1df4ff16ccc766c33b544ac4be72ac435e89e71814c->leave($__internal_73c1ec43b0eed39d9447d1df4ff16ccc766c33b544ac4be72ac435e89e71814c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f105e639f3b1c60b56082715cb2fd96341f68a882a69ec953e6148550292f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f105e639f3b1c60b56082715cb2fd96341f68a882a69ec953e6148550292f86->enter($__internal_4f105e639f3b1c60b56082715cb2fd96341f68a882a69ec953e6148550292f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dda29632fe2a21190322b4f87d01c7f7b62c0fb0e75abffe256574a89e03c3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda29632fe2a21190322b4f87d01c7f7b62c0fb0e75abffe256574a89e03c3b0->enter($__internal_dda29632fe2a21190322b4f87d01c7f7b62c0fb0e75abffe256574a89e03c3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dda29632fe2a21190322b4f87d01c7f7b62c0fb0e75abffe256574a89e03c3b0->leave($__internal_dda29632fe2a21190322b4f87d01c7f7b62c0fb0e75abffe256574a89e03c3b0_prof);

        
        $__internal_4f105e639f3b1c60b56082715cb2fd96341f68a882a69ec953e6148550292f86->leave($__internal_4f105e639f3b1c60b56082715cb2fd96341f68a882a69ec953e6148550292f86_prof);

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
