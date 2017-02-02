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
        $__internal_3e85583adb674e4e7d5cb2980cf9d2e608ce0e818816af104b5481ad30e175bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e85583adb674e4e7d5cb2980cf9d2e608ce0e818816af104b5481ad30e175bc->enter($__internal_3e85583adb674e4e7d5cb2980cf9d2e608ce0e818816af104b5481ad30e175bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd1071f3bb60a4eccbfa1e47b278e6649f4726ae88d2bebf67298bbc8973a24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1071f3bb60a4eccbfa1e47b278e6649f4726ae88d2bebf67298bbc8973a24e->enter($__internal_fd1071f3bb60a4eccbfa1e47b278e6649f4726ae88d2bebf67298bbc8973a24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3e85583adb674e4e7d5cb2980cf9d2e608ce0e818816af104b5481ad30e175bc->leave($__internal_3e85583adb674e4e7d5cb2980cf9d2e608ce0e818816af104b5481ad30e175bc_prof);

        
        $__internal_fd1071f3bb60a4eccbfa1e47b278e6649f4726ae88d2bebf67298bbc8973a24e->leave($__internal_fd1071f3bb60a4eccbfa1e47b278e6649f4726ae88d2bebf67298bbc8973a24e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cb332066a817b3b787cbaadf75ce9400487d8a31a575eec99080098b128a109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb332066a817b3b787cbaadf75ce9400487d8a31a575eec99080098b128a109->enter($__internal_7cb332066a817b3b787cbaadf75ce9400487d8a31a575eec99080098b128a109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79673148214e7b27111c5d9077df50419f0ce732f6abf6f6566b21317ef70130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79673148214e7b27111c5d9077df50419f0ce732f6abf6f6566b21317ef70130->enter($__internal_79673148214e7b27111c5d9077df50419f0ce732f6abf6f6566b21317ef70130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79673148214e7b27111c5d9077df50419f0ce732f6abf6f6566b21317ef70130->leave($__internal_79673148214e7b27111c5d9077df50419f0ce732f6abf6f6566b21317ef70130_prof);

        
        $__internal_7cb332066a817b3b787cbaadf75ce9400487d8a31a575eec99080098b128a109->leave($__internal_7cb332066a817b3b787cbaadf75ce9400487d8a31a575eec99080098b128a109_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b89bc879ded0f9b120516b7c8746a5ce74a19050a6a64d4505e4f11bbe31207c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89bc879ded0f9b120516b7c8746a5ce74a19050a6a64d4505e4f11bbe31207c->enter($__internal_b89bc879ded0f9b120516b7c8746a5ce74a19050a6a64d4505e4f11bbe31207c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e49862c89fd49453ca4776b41acfa4b761bef9d2d59add5796f4c7d6f1c4bcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49862c89fd49453ca4776b41acfa4b761bef9d2d59add5796f4c7d6f1c4bcbe->enter($__internal_e49862c89fd49453ca4776b41acfa4b761bef9d2d59add5796f4c7d6f1c4bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e49862c89fd49453ca4776b41acfa4b761bef9d2d59add5796f4c7d6f1c4bcbe->leave($__internal_e49862c89fd49453ca4776b41acfa4b761bef9d2d59add5796f4c7d6f1c4bcbe_prof);

        
        $__internal_b89bc879ded0f9b120516b7c8746a5ce74a19050a6a64d4505e4f11bbe31207c->leave($__internal_b89bc879ded0f9b120516b7c8746a5ce74a19050a6a64d4505e4f11bbe31207c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d1ec559fcc0251e0f25c6943a77ff9b120a15b2480bf8eb3a8811674ebf9323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1ec559fcc0251e0f25c6943a77ff9b120a15b2480bf8eb3a8811674ebf9323->enter($__internal_1d1ec559fcc0251e0f25c6943a77ff9b120a15b2480bf8eb3a8811674ebf9323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f56861b57f4b96ab1f95cf10562cf87c7f5673e6d7237bea31b6b479985878e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56861b57f4b96ab1f95cf10562cf87c7f5673e6d7237bea31b6b479985878e9->enter($__internal_f56861b57f4b96ab1f95cf10562cf87c7f5673e6d7237bea31b6b479985878e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f56861b57f4b96ab1f95cf10562cf87c7f5673e6d7237bea31b6b479985878e9->leave($__internal_f56861b57f4b96ab1f95cf10562cf87c7f5673e6d7237bea31b6b479985878e9_prof);

        
        $__internal_1d1ec559fcc0251e0f25c6943a77ff9b120a15b2480bf8eb3a8811674ebf9323->leave($__internal_1d1ec559fcc0251e0f25c6943a77ff9b120a15b2480bf8eb3a8811674ebf9323_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de22844d4dc45ea15d2cf7c8999b323a886edb526cae484fc7d4765045670641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de22844d4dc45ea15d2cf7c8999b323a886edb526cae484fc7d4765045670641->enter($__internal_de22844d4dc45ea15d2cf7c8999b323a886edb526cae484fc7d4765045670641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5db8435ddcd30022094a66713c780133beb433b7caeac67a2845e8dc998244f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5db8435ddcd30022094a66713c780133beb433b7caeac67a2845e8dc998244f->enter($__internal_d5db8435ddcd30022094a66713c780133beb433b7caeac67a2845e8dc998244f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5db8435ddcd30022094a66713c780133beb433b7caeac67a2845e8dc998244f->leave($__internal_d5db8435ddcd30022094a66713c780133beb433b7caeac67a2845e8dc998244f_prof);

        
        $__internal_de22844d4dc45ea15d2cf7c8999b323a886edb526cae484fc7d4765045670641->leave($__internal_de22844d4dc45ea15d2cf7c8999b323a886edb526cae484fc7d4765045670641_prof);

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
