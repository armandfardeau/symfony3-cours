<?php

/* base.html.twig */
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
        $__internal_344fcad0d02f41f7e0b669d7ad3326d1654092606eff4f990d5eb7f5da8363a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344fcad0d02f41f7e0b669d7ad3326d1654092606eff4f990d5eb7f5da8363a0->enter($__internal_344fcad0d02f41f7e0b669d7ad3326d1654092606eff4f990d5eb7f5da8363a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_69baf140127c1c689385042512f928ca95af1440e61fbb4076893357b8d1419a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69baf140127c1c689385042512f928ca95af1440e61fbb4076893357b8d1419a->enter($__internal_69baf140127c1c689385042512f928ca95af1440e61fbb4076893357b8d1419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_344fcad0d02f41f7e0b669d7ad3326d1654092606eff4f990d5eb7f5da8363a0->leave($__internal_344fcad0d02f41f7e0b669d7ad3326d1654092606eff4f990d5eb7f5da8363a0_prof);

        
        $__internal_69baf140127c1c689385042512f928ca95af1440e61fbb4076893357b8d1419a->leave($__internal_69baf140127c1c689385042512f928ca95af1440e61fbb4076893357b8d1419a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2834c81732a4a022508eb8543387c675c37d3261e3420fbcc1b70a46033df34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2834c81732a4a022508eb8543387c675c37d3261e3420fbcc1b70a46033df34b->enter($__internal_2834c81732a4a022508eb8543387c675c37d3261e3420fbcc1b70a46033df34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85e14ee65361aeffbb2f35b4803059b303d685ac7c01c31273841e2b81f33e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e14ee65361aeffbb2f35b4803059b303d685ac7c01c31273841e2b81f33e27->enter($__internal_85e14ee65361aeffbb2f35b4803059b303d685ac7c01c31273841e2b81f33e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_85e14ee65361aeffbb2f35b4803059b303d685ac7c01c31273841e2b81f33e27->leave($__internal_85e14ee65361aeffbb2f35b4803059b303d685ac7c01c31273841e2b81f33e27_prof);

        
        $__internal_2834c81732a4a022508eb8543387c675c37d3261e3420fbcc1b70a46033df34b->leave($__internal_2834c81732a4a022508eb8543387c675c37d3261e3420fbcc1b70a46033df34b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_916f41b6058a053d9b8fc339e574ebb34b7531d6023d1f658ba9a72d37442d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916f41b6058a053d9b8fc339e574ebb34b7531d6023d1f658ba9a72d37442d27->enter($__internal_916f41b6058a053d9b8fc339e574ebb34b7531d6023d1f658ba9a72d37442d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eac6ff38a3870b18d19ca02687094adc9b06c0cb96e289a1ae904f1f083b2d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac6ff38a3870b18d19ca02687094adc9b06c0cb96e289a1ae904f1f083b2d2d->enter($__internal_eac6ff38a3870b18d19ca02687094adc9b06c0cb96e289a1ae904f1f083b2d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eac6ff38a3870b18d19ca02687094adc9b06c0cb96e289a1ae904f1f083b2d2d->leave($__internal_eac6ff38a3870b18d19ca02687094adc9b06c0cb96e289a1ae904f1f083b2d2d_prof);

        
        $__internal_916f41b6058a053d9b8fc339e574ebb34b7531d6023d1f658ba9a72d37442d27->leave($__internal_916f41b6058a053d9b8fc339e574ebb34b7531d6023d1f658ba9a72d37442d27_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23e69d927d1e9a78fee31428bd7765f7c6f1f767118822c7fcd47c7be97d4317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e69d927d1e9a78fee31428bd7765f7c6f1f767118822c7fcd47c7be97d4317->enter($__internal_23e69d927d1e9a78fee31428bd7765f7c6f1f767118822c7fcd47c7be97d4317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5e7e2ea7042675b948ba2dc79bb647f1f456d872d85832efe885fc2e43ec94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e7e2ea7042675b948ba2dc79bb647f1f456d872d85832efe885fc2e43ec94a->enter($__internal_e5e7e2ea7042675b948ba2dc79bb647f1f456d872d85832efe885fc2e43ec94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5e7e2ea7042675b948ba2dc79bb647f1f456d872d85832efe885fc2e43ec94a->leave($__internal_e5e7e2ea7042675b948ba2dc79bb647f1f456d872d85832efe885fc2e43ec94a_prof);

        
        $__internal_23e69d927d1e9a78fee31428bd7765f7c6f1f767118822c7fcd47c7be97d4317->leave($__internal_23e69d927d1e9a78fee31428bd7765f7c6f1f767118822c7fcd47c7be97d4317_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71edf9a5c0054538310425dbd88187b6e4570b39e3dbf4e82f00d791ad36c534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71edf9a5c0054538310425dbd88187b6e4570b39e3dbf4e82f00d791ad36c534->enter($__internal_71edf9a5c0054538310425dbd88187b6e4570b39e3dbf4e82f00d791ad36c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb915414110ef88589ff56b1d5d268d4953c2a24fc8565e04c9ea61e42f08086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb915414110ef88589ff56b1d5d268d4953c2a24fc8565e04c9ea61e42f08086->enter($__internal_eb915414110ef88589ff56b1d5d268d4953c2a24fc8565e04c9ea61e42f08086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb915414110ef88589ff56b1d5d268d4953c2a24fc8565e04c9ea61e42f08086->leave($__internal_eb915414110ef88589ff56b1d5d268d4953c2a24fc8565e04c9ea61e42f08086_prof);

        
        $__internal_71edf9a5c0054538310425dbd88187b6e4570b39e3dbf4e82f00d791ad36c534->leave($__internal_71edf9a5c0054538310425dbd88187b6e4570b39e3dbf4e82f00d791ad36c534_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/base.html.twig");
    }
}
