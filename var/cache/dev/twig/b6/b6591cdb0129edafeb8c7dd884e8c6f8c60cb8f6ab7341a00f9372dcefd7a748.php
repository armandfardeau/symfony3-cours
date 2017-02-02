<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa3da2ac6ddc0b103b1317bd6ce393bbef536390c4131503339cfd40dea08b9f extends Twig_Template
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
        $__internal_4c71404a740db0414081214289d8d2bef298e31124dbbaeb4d0250c7a264f2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c71404a740db0414081214289d8d2bef298e31124dbbaeb4d0250c7a264f2d3->enter($__internal_4c71404a740db0414081214289d8d2bef298e31124dbbaeb4d0250c7a264f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d97ae789c3f8e673cf383636e27f1ccad1c485824cad69ae5a3ee96fe9504052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97ae789c3f8e673cf383636e27f1ccad1c485824cad69ae5a3ee96fe9504052->enter($__internal_d97ae789c3f8e673cf383636e27f1ccad1c485824cad69ae5a3ee96fe9504052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4c71404a740db0414081214289d8d2bef298e31124dbbaeb4d0250c7a264f2d3->leave($__internal_4c71404a740db0414081214289d8d2bef298e31124dbbaeb4d0250c7a264f2d3_prof);

        
        $__internal_d97ae789c3f8e673cf383636e27f1ccad1c485824cad69ae5a3ee96fe9504052->leave($__internal_d97ae789c3f8e673cf383636e27f1ccad1c485824cad69ae5a3ee96fe9504052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
