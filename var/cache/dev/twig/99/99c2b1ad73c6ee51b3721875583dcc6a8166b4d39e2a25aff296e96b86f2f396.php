<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7d342b1c364f290cc887867a604e5123c82cf940fbead558ca7071466bf9ce29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_949d05768ff1d465c24eb9ea1a3edd977ecd804a87c0b15dbcfaf926c4ce739f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949d05768ff1d465c24eb9ea1a3edd977ecd804a87c0b15dbcfaf926c4ce739f->enter($__internal_949d05768ff1d465c24eb9ea1a3edd977ecd804a87c0b15dbcfaf926c4ce739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c3132a13afc901bd63545a98cab26c9d52590ae54f3471c2c02b15595b3f62db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3132a13afc901bd63545a98cab26c9d52590ae54f3471c2c02b15595b3f62db->enter($__internal_c3132a13afc901bd63545a98cab26c9d52590ae54f3471c2c02b15595b3f62db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_949d05768ff1d465c24eb9ea1a3edd977ecd804a87c0b15dbcfaf926c4ce739f->leave($__internal_949d05768ff1d465c24eb9ea1a3edd977ecd804a87c0b15dbcfaf926c4ce739f_prof);

        
        $__internal_c3132a13afc901bd63545a98cab26c9d52590ae54f3471c2c02b15595b3f62db->leave($__internal_c3132a13afc901bd63545a98cab26c9d52590ae54f3471c2c02b15595b3f62db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
