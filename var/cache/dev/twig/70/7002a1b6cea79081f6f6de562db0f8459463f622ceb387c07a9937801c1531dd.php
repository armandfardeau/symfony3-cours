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
        $__internal_0c2c3b6dd6e16865f57b7ef1d3644f0b0daf30669b56fe2e63bfdd3c50e997b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2c3b6dd6e16865f57b7ef1d3644f0b0daf30669b56fe2e63bfdd3c50e997b0->enter($__internal_0c2c3b6dd6e16865f57b7ef1d3644f0b0daf30669b56fe2e63bfdd3c50e997b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ca4811a275df88fd5db288aaf8ac723afd601dfc32f06a861cb53d24742a25cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4811a275df88fd5db288aaf8ac723afd601dfc32f06a861cb53d24742a25cc->enter($__internal_ca4811a275df88fd5db288aaf8ac723afd601dfc32f06a861cb53d24742a25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2c3b6dd6e16865f57b7ef1d3644f0b0daf30669b56fe2e63bfdd3c50e997b0->leave($__internal_0c2c3b6dd6e16865f57b7ef1d3644f0b0daf30669b56fe2e63bfdd3c50e997b0_prof);

        
        $__internal_ca4811a275df88fd5db288aaf8ac723afd601dfc32f06a861cb53d24742a25cc->leave($__internal_ca4811a275df88fd5db288aaf8ac723afd601dfc32f06a861cb53d24742a25cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94981a23dce4e28f5f15776ae27742b4159d27cc7e44d37ca52f62ea1ae41cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94981a23dce4e28f5f15776ae27742b4159d27cc7e44d37ca52f62ea1ae41cd9->enter($__internal_94981a23dce4e28f5f15776ae27742b4159d27cc7e44d37ca52f62ea1ae41cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45d394dc030f3242a987fbde08575c81b697de8a20a244332ecf47e61370294f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d394dc030f3242a987fbde08575c81b697de8a20a244332ecf47e61370294f->enter($__internal_45d394dc030f3242a987fbde08575c81b697de8a20a244332ecf47e61370294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45d394dc030f3242a987fbde08575c81b697de8a20a244332ecf47e61370294f->leave($__internal_45d394dc030f3242a987fbde08575c81b697de8a20a244332ecf47e61370294f_prof);

        
        $__internal_94981a23dce4e28f5f15776ae27742b4159d27cc7e44d37ca52f62ea1ae41cd9->leave($__internal_94981a23dce4e28f5f15776ae27742b4159d27cc7e44d37ca52f62ea1ae41cd9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2a5e7e87e62832b0b6282c41258d90dce18cc21c03ac93ba965a5f797596854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a5e7e87e62832b0b6282c41258d90dce18cc21c03ac93ba965a5f797596854->enter($__internal_f2a5e7e87e62832b0b6282c41258d90dce18cc21c03ac93ba965a5f797596854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2a4d36c8a31ee78f7620f7e952bb9670330e54e483bb383873d780ff26332da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a4d36c8a31ee78f7620f7e952bb9670330e54e483bb383873d780ff26332da->enter($__internal_c2a4d36c8a31ee78f7620f7e952bb9670330e54e483bb383873d780ff26332da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2a4d36c8a31ee78f7620f7e952bb9670330e54e483bb383873d780ff26332da->leave($__internal_c2a4d36c8a31ee78f7620f7e952bb9670330e54e483bb383873d780ff26332da_prof);

        
        $__internal_f2a5e7e87e62832b0b6282c41258d90dce18cc21c03ac93ba965a5f797596854->leave($__internal_f2a5e7e87e62832b0b6282c41258d90dce18cc21c03ac93ba965a5f797596854_prof);

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
