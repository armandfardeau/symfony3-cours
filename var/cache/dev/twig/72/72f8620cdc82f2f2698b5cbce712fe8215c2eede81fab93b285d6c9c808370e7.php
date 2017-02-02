<?php

/* ::base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
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
        $__internal_967d64c01c084f1016c6a1e47ac319d78fff107998c29a98812f98a81156e9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967d64c01c084f1016c6a1e47ac319d78fff107998c29a98812f98a81156e9b4->enter($__internal_967d64c01c084f1016c6a1e47ac319d78fff107998c29a98812f98a81156e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5d73777fc5dde77790eae2908ab8099bfb189022051fd69e878960c916d0960e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d73777fc5dde77790eae2908ab8099bfb189022051fd69e878960c916d0960e->enter($__internal_5d73777fc5dde77790eae2908ab8099bfb189022051fd69e878960c916d0960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_967d64c01c084f1016c6a1e47ac319d78fff107998c29a98812f98a81156e9b4->leave($__internal_967d64c01c084f1016c6a1e47ac319d78fff107998c29a98812f98a81156e9b4_prof);

        
        $__internal_5d73777fc5dde77790eae2908ab8099bfb189022051fd69e878960c916d0960e->leave($__internal_5d73777fc5dde77790eae2908ab8099bfb189022051fd69e878960c916d0960e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_233cd6878afa38adc8ff8c38f4f4098a9a043ab92d45bbb3c8faf03c8b4a8bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233cd6878afa38adc8ff8c38f4f4098a9a043ab92d45bbb3c8faf03c8b4a8bcd->enter($__internal_233cd6878afa38adc8ff8c38f4f4098a9a043ab92d45bbb3c8faf03c8b4a8bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3c1514e90c8f97541b9e9edb8f7f97df44d005b3779361017f27acef46ba8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c1514e90c8f97541b9e9edb8f7f97df44d005b3779361017f27acef46ba8f5->enter($__internal_e3c1514e90c8f97541b9e9edb8f7f97df44d005b3779361017f27acef46ba8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3c1514e90c8f97541b9e9edb8f7f97df44d005b3779361017f27acef46ba8f5->leave($__internal_e3c1514e90c8f97541b9e9edb8f7f97df44d005b3779361017f27acef46ba8f5_prof);

        
        $__internal_233cd6878afa38adc8ff8c38f4f4098a9a043ab92d45bbb3c8faf03c8b4a8bcd->leave($__internal_233cd6878afa38adc8ff8c38f4f4098a9a043ab92d45bbb3c8faf03c8b4a8bcd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2927b7840c4fd20107af18bd1af7aa2a7e1346aa5b6fb3aba096f8d3c3479e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2927b7840c4fd20107af18bd1af7aa2a7e1346aa5b6fb3aba096f8d3c3479e3a->enter($__internal_2927b7840c4fd20107af18bd1af7aa2a7e1346aa5b6fb3aba096f8d3c3479e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79b6c467a985ce99eec2b8066abf0f1165c061d9c16260ac1c8c9726b929e904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b6c467a985ce99eec2b8066abf0f1165c061d9c16260ac1c8c9726b929e904->enter($__internal_79b6c467a985ce99eec2b8066abf0f1165c061d9c16260ac1c8c9726b929e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79b6c467a985ce99eec2b8066abf0f1165c061d9c16260ac1c8c9726b929e904->leave($__internal_79b6c467a985ce99eec2b8066abf0f1165c061d9c16260ac1c8c9726b929e904_prof);

        
        $__internal_2927b7840c4fd20107af18bd1af7aa2a7e1346aa5b6fb3aba096f8d3c3479e3a->leave($__internal_2927b7840c4fd20107af18bd1af7aa2a7e1346aa5b6fb3aba096f8d3c3479e3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e86b15c0b1b8c34a8d7efd27872af1fb1e9b13d4ae27f775273ff746f36fa0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86b15c0b1b8c34a8d7efd27872af1fb1e9b13d4ae27f775273ff746f36fa0f2->enter($__internal_e86b15c0b1b8c34a8d7efd27872af1fb1e9b13d4ae27f775273ff746f36fa0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_562b01c8112ab09f503f4c96501b615eec46f3f304f2113f6dd5c87c0754d33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562b01c8112ab09f503f4c96501b615eec46f3f304f2113f6dd5c87c0754d33a->enter($__internal_562b01c8112ab09f503f4c96501b615eec46f3f304f2113f6dd5c87c0754d33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_562b01c8112ab09f503f4c96501b615eec46f3f304f2113f6dd5c87c0754d33a->leave($__internal_562b01c8112ab09f503f4c96501b615eec46f3f304f2113f6dd5c87c0754d33a_prof);

        
        $__internal_e86b15c0b1b8c34a8d7efd27872af1fb1e9b13d4ae27f775273ff746f36fa0f2->leave($__internal_e86b15c0b1b8c34a8d7efd27872af1fb1e9b13d4ae27f775273ff746f36fa0f2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7fb4658028ca4907c7f7c908da35e2263a2f7c20a71771076b29de7a61cd4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fb4658028ca4907c7f7c908da35e2263a2f7c20a71771076b29de7a61cd4d4->enter($__internal_c7fb4658028ca4907c7f7c908da35e2263a2f7c20a71771076b29de7a61cd4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42fd4c5808e6b1a132f2d2e10cff6824509f2acca31d4a0d42354e0a42c9e174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fd4c5808e6b1a132f2d2e10cff6824509f2acca31d4a0d42354e0a42c9e174->enter($__internal_42fd4c5808e6b1a132f2d2e10cff6824509f2acca31d4a0d42354e0a42c9e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42fd4c5808e6b1a132f2d2e10cff6824509f2acca31d4a0d42354e0a42c9e174->leave($__internal_42fd4c5808e6b1a132f2d2e10cff6824509f2acca31d4a0d42354e0a42c9e174_prof);

        
        $__internal_c7fb4658028ca4907c7f7c908da35e2263a2f7c20a71771076b29de7a61cd4d4->leave($__internal_c7fb4658028ca4907c7f7c908da35e2263a2f7c20a71771076b29de7a61cd4d4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/base.html.twig");
    }
}
