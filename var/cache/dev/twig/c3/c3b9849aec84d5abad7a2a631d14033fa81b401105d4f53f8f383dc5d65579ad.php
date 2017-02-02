<?php

/* :Student:index.html.twig */
class __TwigTemplate_c55671ae665521d5e90e335216f1651f69886ec836f69a170b9c02783ee9b216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Student:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d84448223c18fe136ea8aa51f3828a2cab8b5730d92f34b5a62d2a410056421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d84448223c18fe136ea8aa51f3828a2cab8b5730d92f34b5a62d2a410056421->enter($__internal_2d84448223c18fe136ea8aa51f3828a2cab8b5730d92f34b5a62d2a410056421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $__internal_deac82c145492c0656a419dcdb69d8edfeb1d2e5ff31f7a37506bb553111f5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deac82c145492c0656a419dcdb69d8edfeb1d2e5ff31f7a37506bb553111f5a3->enter($__internal_deac82c145492c0656a419dcdb69d8edfeb1d2e5ff31f7a37506bb553111f5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d84448223c18fe136ea8aa51f3828a2cab8b5730d92f34b5a62d2a410056421->leave($__internal_2d84448223c18fe136ea8aa51f3828a2cab8b5730d92f34b5a62d2a410056421_prof);

        
        $__internal_deac82c145492c0656a419dcdb69d8edfeb1d2e5ff31f7a37506bb553111f5a3->leave($__internal_deac82c145492c0656a419dcdb69d8edfeb1d2e5ff31f7a37506bb553111f5a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4783b522557382a9db5559bfae6b34094a11b7c0f86ea305a53ee07b4bdfad1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4783b522557382a9db5559bfae6b34094a11b7c0f86ea305a53ee07b4bdfad1a->enter($__internal_4783b522557382a9db5559bfae6b34094a11b7c0f86ea305a53ee07b4bdfad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_003d28c049a35ecbdb7fee29c6ef883ee566c9d34d212803730d273ec26ab6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003d28c049a35ecbdb7fee29c6ef883ee566c9d34d212803730d273ec26ab6bb->enter($__internal_003d28c049a35ecbdb7fee29c6ef883ee566c9d34d212803730d273ec26ab6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_003d28c049a35ecbdb7fee29c6ef883ee566c9d34d212803730d273ec26ab6bb->leave($__internal_003d28c049a35ecbdb7fee29c6ef883ee566c9d34d212803730d273ec26ab6bb_prof);

        
        $__internal_4783b522557382a9db5559bfae6b34094a11b7c0f86ea305a53ee07b4bdfad1a->leave($__internal_4783b522557382a9db5559bfae6b34094a11b7c0f86ea305a53ee07b4bdfad1a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_293dadec191d6ad97e0223a878d1530694576f0c245907219aa495be71ec21bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293dadec191d6ad97e0223a878d1530694576f0c245907219aa495be71ec21bc->enter($__internal_293dadec191d6ad97e0223a878d1530694576f0c245907219aa495be71ec21bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d8e1e10f9ca93e91d27d8150aced7f44a9a574c794382f85f8e7f7b69e2ff68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8e1e10f9ca93e91d27d8150aced7f44a9a574c794382f85f8e7f7b69e2ff68->enter($__internal_2d8e1e10f9ca93e91d27d8150aced7f44a9a574c794382f85f8e7f7b69e2ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the StudentController:index page</h1>
";
        
        $__internal_2d8e1e10f9ca93e91d27d8150aced7f44a9a574c794382f85f8e7f7b69e2ff68->leave($__internal_2d8e1e10f9ca93e91d27d8150aced7f44a9a574c794382f85f8e7f7b69e2ff68_prof);

        
        $__internal_293dadec191d6ad97e0223a878d1530694576f0c245907219aa495be71ec21bc->leave($__internal_293dadec191d6ad97e0223a878d1530694576f0c245907219aa495be71ec21bc_prof);

    }

    public function getTemplateName()
    {
        return ":Student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}JustBundle:StudentController:index{% endblock %}

{% block body %}
<h1>Welcome to the StudentController:index page</h1>
{% endblock %}
", ":Student:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/Student/index.html.twig");
    }
}
