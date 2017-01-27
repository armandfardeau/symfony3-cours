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
        $__internal_e60530e533b703f2c385e18af54ccf745eea22b6da4a12787dc2cf5ad88899f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60530e533b703f2c385e18af54ccf745eea22b6da4a12787dc2cf5ad88899f3->enter($__internal_e60530e533b703f2c385e18af54ccf745eea22b6da4a12787dc2cf5ad88899f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9f8a2ab7c8029febab5f33577218196c0e06e80cd4f2dc2f69bc06279e1f30a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8a2ab7c8029febab5f33577218196c0e06e80cd4f2dc2f69bc06279e1f30a0->enter($__internal_9f8a2ab7c8029febab5f33577218196c0e06e80cd4f2dc2f69bc06279e1f30a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e60530e533b703f2c385e18af54ccf745eea22b6da4a12787dc2cf5ad88899f3->leave($__internal_e60530e533b703f2c385e18af54ccf745eea22b6da4a12787dc2cf5ad88899f3_prof);

        
        $__internal_9f8a2ab7c8029febab5f33577218196c0e06e80cd4f2dc2f69bc06279e1f30a0->leave($__internal_9f8a2ab7c8029febab5f33577218196c0e06e80cd4f2dc2f69bc06279e1f30a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94be159e5c4bb3755269a1cf3ce14e4ad52cdbec93d700472fcc1d65eb5fb883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94be159e5c4bb3755269a1cf3ce14e4ad52cdbec93d700472fcc1d65eb5fb883->enter($__internal_94be159e5c4bb3755269a1cf3ce14e4ad52cdbec93d700472fcc1d65eb5fb883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b4ad1ac29411c55ebce26d07be91b7c52a4515f90197a0c8b9cdd9542e16667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4ad1ac29411c55ebce26d07be91b7c52a4515f90197a0c8b9cdd9542e16667->enter($__internal_9b4ad1ac29411c55ebce26d07be91b7c52a4515f90197a0c8b9cdd9542e16667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b4ad1ac29411c55ebce26d07be91b7c52a4515f90197a0c8b9cdd9542e16667->leave($__internal_9b4ad1ac29411c55ebce26d07be91b7c52a4515f90197a0c8b9cdd9542e16667_prof);

        
        $__internal_94be159e5c4bb3755269a1cf3ce14e4ad52cdbec93d700472fcc1d65eb5fb883->leave($__internal_94be159e5c4bb3755269a1cf3ce14e4ad52cdbec93d700472fcc1d65eb5fb883_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af6c0e34449a5c148a2f6db42b6704b55cd82696c1b8f56e2f37466679248b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6c0e34449a5c148a2f6db42b6704b55cd82696c1b8f56e2f37466679248b3d->enter($__internal_af6c0e34449a5c148a2f6db42b6704b55cd82696c1b8f56e2f37466679248b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c6b79ef2ceea430a402b69cb13e9a76cc2498bd46f4fdab261312d5cfbe1d984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b79ef2ceea430a402b69cb13e9a76cc2498bd46f4fdab261312d5cfbe1d984->enter($__internal_c6b79ef2ceea430a402b69cb13e9a76cc2498bd46f4fdab261312d5cfbe1d984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6b79ef2ceea430a402b69cb13e9a76cc2498bd46f4fdab261312d5cfbe1d984->leave($__internal_c6b79ef2ceea430a402b69cb13e9a76cc2498bd46f4fdab261312d5cfbe1d984_prof);

        
        $__internal_af6c0e34449a5c148a2f6db42b6704b55cd82696c1b8f56e2f37466679248b3d->leave($__internal_af6c0e34449a5c148a2f6db42b6704b55cd82696c1b8f56e2f37466679248b3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ee8292b367c28fff0536532fea277016a5acf645a09e05b42214f60fe4d4ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee8292b367c28fff0536532fea277016a5acf645a09e05b42214f60fe4d4ed7->enter($__internal_6ee8292b367c28fff0536532fea277016a5acf645a09e05b42214f60fe4d4ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e25ac5a18fd767b789a54cd1ce18ab71b1ec9c89df0539b200fbbf06879265ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25ac5a18fd767b789a54cd1ce18ab71b1ec9c89df0539b200fbbf06879265ed->enter($__internal_e25ac5a18fd767b789a54cd1ce18ab71b1ec9c89df0539b200fbbf06879265ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e25ac5a18fd767b789a54cd1ce18ab71b1ec9c89df0539b200fbbf06879265ed->leave($__internal_e25ac5a18fd767b789a54cd1ce18ab71b1ec9c89df0539b200fbbf06879265ed_prof);

        
        $__internal_6ee8292b367c28fff0536532fea277016a5acf645a09e05b42214f60fe4d4ed7->leave($__internal_6ee8292b367c28fff0536532fea277016a5acf645a09e05b42214f60fe4d4ed7_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a247d68f0c3dfa315439df5c1ff1b934efefffad41ae3aef47f3c64f0a450963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a247d68f0c3dfa315439df5c1ff1b934efefffad41ae3aef47f3c64f0a450963->enter($__internal_a247d68f0c3dfa315439df5c1ff1b934efefffad41ae3aef47f3c64f0a450963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7a366e23a295ca8097605756f7f6dc641d50ea482a11ca93b2ce9098066b6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a366e23a295ca8097605756f7f6dc641d50ea482a11ca93b2ce9098066b6e2->enter($__internal_f7a366e23a295ca8097605756f7f6dc641d50ea482a11ca93b2ce9098066b6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7a366e23a295ca8097605756f7f6dc641d50ea482a11ca93b2ce9098066b6e2->leave($__internal_f7a366e23a295ca8097605756f7f6dc641d50ea482a11ca93b2ce9098066b6e2_prof);

        
        $__internal_a247d68f0c3dfa315439df5c1ff1b934efefffad41ae3aef47f3c64f0a450963->leave($__internal_a247d68f0c3dfa315439df5c1ff1b934efefffad41ae3aef47f3c64f0a450963_prof);

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
