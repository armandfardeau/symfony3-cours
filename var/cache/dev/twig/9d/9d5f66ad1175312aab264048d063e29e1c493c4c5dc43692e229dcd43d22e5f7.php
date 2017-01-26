<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_b6a62a14efc9afb7f15d75ca19eb4c72336b02eb4f6fe1cbf87760ccc84916e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a62a14efc9afb7f15d75ca19eb4c72336b02eb4f6fe1cbf87760ccc84916e2->enter($__internal_b6a62a14efc9afb7f15d75ca19eb4c72336b02eb4f6fe1cbf87760ccc84916e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_010ab9eb33038959f74f2e468de3ff912461666277f3524cde4de49d7f097574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010ab9eb33038959f74f2e468de3ff912461666277f3524cde4de49d7f097574->enter($__internal_010ab9eb33038959f74f2e468de3ff912461666277f3524cde4de49d7f097574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6a62a14efc9afb7f15d75ca19eb4c72336b02eb4f6fe1cbf87760ccc84916e2->leave($__internal_b6a62a14efc9afb7f15d75ca19eb4c72336b02eb4f6fe1cbf87760ccc84916e2_prof);

        
        $__internal_010ab9eb33038959f74f2e468de3ff912461666277f3524cde4de49d7f097574->leave($__internal_010ab9eb33038959f74f2e468de3ff912461666277f3524cde4de49d7f097574_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_638f2449e6cf552e75908b06d80c676369b156f64b1a24e19da4f795288f9e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638f2449e6cf552e75908b06d80c676369b156f64b1a24e19da4f795288f9e8d->enter($__internal_638f2449e6cf552e75908b06d80c676369b156f64b1a24e19da4f795288f9e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3024c1d93a4ad4bcb2fa2a7d886fadb26c35c99f1c29f58c4d2be1e73a47c2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3024c1d93a4ad4bcb2fa2a7d886fadb26c35c99f1c29f58c4d2be1e73a47c2a7->enter($__internal_3024c1d93a4ad4bcb2fa2a7d886fadb26c35c99f1c29f58c4d2be1e73a47c2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3024c1d93a4ad4bcb2fa2a7d886fadb26c35c99f1c29f58c4d2be1e73a47c2a7->leave($__internal_3024c1d93a4ad4bcb2fa2a7d886fadb26c35c99f1c29f58c4d2be1e73a47c2a7_prof);

        
        $__internal_638f2449e6cf552e75908b06d80c676369b156f64b1a24e19da4f795288f9e8d->leave($__internal_638f2449e6cf552e75908b06d80c676369b156f64b1a24e19da4f795288f9e8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a5ece75406b3037df0441096e067125f744b81b88f3579078f7d2bf73606cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5ece75406b3037df0441096e067125f744b81b88f3579078f7d2bf73606cc1->enter($__internal_3a5ece75406b3037df0441096e067125f744b81b88f3579078f7d2bf73606cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_208b093a7bbca79191f8319d3e6c2979be6aca8bf255a9bf8e8017a293903f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208b093a7bbca79191f8319d3e6c2979be6aca8bf255a9bf8e8017a293903f56->enter($__internal_208b093a7bbca79191f8319d3e6c2979be6aca8bf255a9bf8e8017a293903f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_208b093a7bbca79191f8319d3e6c2979be6aca8bf255a9bf8e8017a293903f56->leave($__internal_208b093a7bbca79191f8319d3e6c2979be6aca8bf255a9bf8e8017a293903f56_prof);

        
        $__internal_3a5ece75406b3037df0441096e067125f744b81b88f3579078f7d2bf73606cc1->leave($__internal_3a5ece75406b3037df0441096e067125f744b81b88f3579078f7d2bf73606cc1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e71b40af31cd936515ac9102eff7ab7063ad5b044beaa14263a740ed29c3d7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71b40af31cd936515ac9102eff7ab7063ad5b044beaa14263a740ed29c3d7d0->enter($__internal_e71b40af31cd936515ac9102eff7ab7063ad5b044beaa14263a740ed29c3d7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a49499b06b46d4e8038a288c792707d35ff0e22e0784635ec2285f7f8bb30226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49499b06b46d4e8038a288c792707d35ff0e22e0784635ec2285f7f8bb30226->enter($__internal_a49499b06b46d4e8038a288c792707d35ff0e22e0784635ec2285f7f8bb30226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a49499b06b46d4e8038a288c792707d35ff0e22e0784635ec2285f7f8bb30226->leave($__internal_a49499b06b46d4e8038a288c792707d35ff0e22e0784635ec2285f7f8bb30226_prof);

        
        $__internal_e71b40af31cd936515ac9102eff7ab7063ad5b044beaa14263a740ed29c3d7d0->leave($__internal_e71b40af31cd936515ac9102eff7ab7063ad5b044beaa14263a740ed29c3d7d0_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39e9d08877417c97db9969987d835b2a2042404c1c741c59d3d0533a1b05bf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e9d08877417c97db9969987d835b2a2042404c1c741c59d3d0533a1b05bf20->enter($__internal_39e9d08877417c97db9969987d835b2a2042404c1c741c59d3d0533a1b05bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0da6ae378be0a2687923db3eb4b98c628f4d8a3ce8423bb13fcc617da78bc70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da6ae378be0a2687923db3eb4b98c628f4d8a3ce8423bb13fcc617da78bc70d->enter($__internal_0da6ae378be0a2687923db3eb4b98c628f4d8a3ce8423bb13fcc617da78bc70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0da6ae378be0a2687923db3eb4b98c628f4d8a3ce8423bb13fcc617da78bc70d->leave($__internal_0da6ae378be0a2687923db3eb4b98c628f4d8a3ce8423bb13fcc617da78bc70d_prof);

        
        $__internal_39e9d08877417c97db9969987d835b2a2042404c1c741c59d3d0533a1b05bf20->leave($__internal_39e9d08877417c97db9969987d835b2a2042404c1c741c59d3d0533a1b05bf20_prof);

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
