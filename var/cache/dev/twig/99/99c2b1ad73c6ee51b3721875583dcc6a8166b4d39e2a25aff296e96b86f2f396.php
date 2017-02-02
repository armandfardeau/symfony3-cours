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
        $__internal_7a78891a2a6475c7eeb3a67b92fef67997d3e34e3430f36faaa5365dc985b120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a78891a2a6475c7eeb3a67b92fef67997d3e34e3430f36faaa5365dc985b120->enter($__internal_7a78891a2a6475c7eeb3a67b92fef67997d3e34e3430f36faaa5365dc985b120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b96d34ebf65ecfd9c946c0988437a74ca961846b42cc1d5bab871ad7c9420a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96d34ebf65ecfd9c946c0988437a74ca961846b42cc1d5bab871ad7c9420a50->enter($__internal_b96d34ebf65ecfd9c946c0988437a74ca961846b42cc1d5bab871ad7c9420a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7a78891a2a6475c7eeb3a67b92fef67997d3e34e3430f36faaa5365dc985b120->leave($__internal_7a78891a2a6475c7eeb3a67b92fef67997d3e34e3430f36faaa5365dc985b120_prof);

        
        $__internal_b96d34ebf65ecfd9c946c0988437a74ca961846b42cc1d5bab871ad7c9420a50->leave($__internal_b96d34ebf65ecfd9c946c0988437a74ca961846b42cc1d5bab871ad7c9420a50_prof);

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
