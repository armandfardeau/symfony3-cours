<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1b841a0b3139e957cd3754c62f4e119376d531a1c42b9608dee6998931ac60ca extends Twig_Template
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
        $__internal_939c56d0819beed77bbc37881d8fc48e48938365201c2c9d47491f564184e727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939c56d0819beed77bbc37881d8fc48e48938365201c2c9d47491f564184e727->enter($__internal_939c56d0819beed77bbc37881d8fc48e48938365201c2c9d47491f564184e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_901aee95c153601d8236bcd08d5ead7942f60c0cc1d5afc9c0920e2c07bb39a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901aee95c153601d8236bcd08d5ead7942f60c0cc1d5afc9c0920e2c07bb39a6->enter($__internal_901aee95c153601d8236bcd08d5ead7942f60c0cc1d5afc9c0920e2c07bb39a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_939c56d0819beed77bbc37881d8fc48e48938365201c2c9d47491f564184e727->leave($__internal_939c56d0819beed77bbc37881d8fc48e48938365201c2c9d47491f564184e727_prof);

        
        $__internal_901aee95c153601d8236bcd08d5ead7942f60c0cc1d5afc9c0920e2c07bb39a6->leave($__internal_901aee95c153601d8236bcd08d5ead7942f60c0cc1d5afc9c0920e2c07bb39a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
