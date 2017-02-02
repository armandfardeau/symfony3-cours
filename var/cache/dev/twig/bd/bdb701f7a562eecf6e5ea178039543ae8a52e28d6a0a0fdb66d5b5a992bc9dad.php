<?php

/* student/index.html.twig */
class __TwigTemplate_a8cd51dbcbd0adac7e33032ba33ac56206847c539991a3a691b35006c41704d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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
        $__internal_c0f6dd0de61ffbaf5be58d520c8121a5306842565dbbebbb7dba07644acc8a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f6dd0de61ffbaf5be58d520c8121a5306842565dbbebbb7dba07644acc8a68->enter($__internal_c0f6dd0de61ffbaf5be58d520c8121a5306842565dbbebbb7dba07644acc8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_c289678d4f3b2e953c824ab07db763aab386595d1c9c75ad23fb5b6270de1c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c289678d4f3b2e953c824ab07db763aab386595d1c9c75ad23fb5b6270de1c96->enter($__internal_c289678d4f3b2e953c824ab07db763aab386595d1c9c75ad23fb5b6270de1c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f6dd0de61ffbaf5be58d520c8121a5306842565dbbebbb7dba07644acc8a68->leave($__internal_c0f6dd0de61ffbaf5be58d520c8121a5306842565dbbebbb7dba07644acc8a68_prof);

        
        $__internal_c289678d4f3b2e953c824ab07db763aab386595d1c9c75ad23fb5b6270de1c96->leave($__internal_c289678d4f3b2e953c824ab07db763aab386595d1c9c75ad23fb5b6270de1c96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeb4b6e2cccc8e8e0f8241fc8ba318db0d1237e2c94b793f5d6d11d57cba63e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb4b6e2cccc8e8e0f8241fc8ba318db0d1237e2c94b793f5d6d11d57cba63e2->enter($__internal_eeb4b6e2cccc8e8e0f8241fc8ba318db0d1237e2c94b793f5d6d11d57cba63e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b24614ff69019a7a6a6384a6df77e73b18bb68c7f9774f3c7d978ada2783452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24614ff69019a7a6a6384a6df77e73b18bb68c7f9774f3c7d978ada2783452->enter($__internal_2b24614ff69019a7a6a6384a6df77e73b18bb68c7f9774f3c7d978ada2783452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_2b24614ff69019a7a6a6384a6df77e73b18bb68c7f9774f3c7d978ada2783452->leave($__internal_2b24614ff69019a7a6a6384a6df77e73b18bb68c7f9774f3c7d978ada2783452_prof);

        
        $__internal_eeb4b6e2cccc8e8e0f8241fc8ba318db0d1237e2c94b793f5d6d11d57cba63e2->leave($__internal_eeb4b6e2cccc8e8e0f8241fc8ba318db0d1237e2c94b793f5d6d11d57cba63e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_041ef8f72fcf62b87d8b316d0b9b3da948b45c1453802bfd6c4a1e78c0725581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041ef8f72fcf62b87d8b316d0b9b3da948b45c1453802bfd6c4a1e78c0725581->enter($__internal_041ef8f72fcf62b87d8b316d0b9b3da948b45c1453802bfd6c4a1e78c0725581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a919a51cfe04749ce6cd5888c3019e2786329c5cbf9b569ce6206edbcca0ce96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a919a51cfe04749ce6cd5888c3019e2786329c5cbf9b569ce6206edbcca0ce96->enter($__internal_a919a51cfe04749ce6cd5888c3019e2786329c5cbf9b569ce6206edbcca0ce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the StudentController:index page</h1>
";
        
        $__internal_a919a51cfe04749ce6cd5888c3019e2786329c5cbf9b569ce6206edbcca0ce96->leave($__internal_a919a51cfe04749ce6cd5888c3019e2786329c5cbf9b569ce6206edbcca0ce96_prof);

        
        $__internal_041ef8f72fcf62b87d8b316d0b9b3da948b45c1453802bfd6c4a1e78c0725581->leave($__internal_041ef8f72fcf62b87d8b316d0b9b3da948b45c1453802bfd6c4a1e78c0725581_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
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
", "student/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/student/index.html.twig");
    }
}
