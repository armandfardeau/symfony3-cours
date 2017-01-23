<?php

/* chevalier/new.html.twig */
class __TwigTemplate_47a274ddd1794e4d3ee7594d64a081ce4fbc9e3ae1e7280c18a9fd690a49b36c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chevalier/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47ebe8f3e5ec3930fa4515512363396ac1f66e4e8d74271e4cd181764acc9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47ebe8f3e5ec3930fa4515512363396ac1f66e4e8d74271e4cd181764acc9b4->enter($__internal_e47ebe8f3e5ec3930fa4515512363396ac1f66e4e8d74271e4cd181764acc9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        $__internal_36f1f3d7536bd32a88a248acb492266054e5f3d714f993c0697e8caed7599080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f1f3d7536bd32a88a248acb492266054e5f3d714f993c0697e8caed7599080->enter($__internal_36f1f3d7536bd32a88a248acb492266054e5f3d714f993c0697e8caed7599080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e47ebe8f3e5ec3930fa4515512363396ac1f66e4e8d74271e4cd181764acc9b4->leave($__internal_e47ebe8f3e5ec3930fa4515512363396ac1f66e4e8d74271e4cd181764acc9b4_prof);

        
        $__internal_36f1f3d7536bd32a88a248acb492266054e5f3d714f993c0697e8caed7599080->leave($__internal_36f1f3d7536bd32a88a248acb492266054e5f3d714f993c0697e8caed7599080_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e064ea61b587e350ef6a650c317f001bc132a8218077cb91de2a89fbfde797d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e064ea61b587e350ef6a650c317f001bc132a8218077cb91de2a89fbfde797d->enter($__internal_4e064ea61b587e350ef6a650c317f001bc132a8218077cb91de2a89fbfde797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a10d9539f4d59bff185c696bdd6f2510c7f4b7d7cfc22814d1652a6ab18091e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a10d9539f4d59bff185c696bdd6f2510c7f4b7d7cfc22814d1652a6ab18091e->enter($__internal_1a10d9539f4d59bff185c696bdd6f2510c7f4b7d7cfc22814d1652a6ab18091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chevalier creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1a10d9539f4d59bff185c696bdd6f2510c7f4b7d7cfc22814d1652a6ab18091e->leave($__internal_1a10d9539f4d59bff185c696bdd6f2510c7f4b7d7cfc22814d1652a6ab18091e_prof);

        
        $__internal_4e064ea61b587e350ef6a650c317f001bc132a8218077cb91de2a89fbfde797d->leave($__internal_4e064ea61b587e350ef6a650c317f001bc132a8218077cb91de2a89fbfde797d_prof);

    }

    public function getTemplateName()
    {
        return "chevalier/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Chevalier creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "chevalier/new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/new.html.twig");
    }
}
