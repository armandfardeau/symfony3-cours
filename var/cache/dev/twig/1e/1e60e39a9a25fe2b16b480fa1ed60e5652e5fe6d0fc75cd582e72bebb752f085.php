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
        $__internal_c8421b811133a95a83ed120d9c3125ceed402f1a24bcb62690d135720bf03775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8421b811133a95a83ed120d9c3125ceed402f1a24bcb62690d135720bf03775->enter($__internal_c8421b811133a95a83ed120d9c3125ceed402f1a24bcb62690d135720bf03775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        $__internal_6d33f4de9133798b8885f458ab4cb67d9ff9ffd3228651c78342ff5b58388260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d33f4de9133798b8885f458ab4cb67d9ff9ffd3228651c78342ff5b58388260->enter($__internal_6d33f4de9133798b8885f458ab4cb67d9ff9ffd3228651c78342ff5b58388260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8421b811133a95a83ed120d9c3125ceed402f1a24bcb62690d135720bf03775->leave($__internal_c8421b811133a95a83ed120d9c3125ceed402f1a24bcb62690d135720bf03775_prof);

        
        $__internal_6d33f4de9133798b8885f458ab4cb67d9ff9ffd3228651c78342ff5b58388260->leave($__internal_6d33f4de9133798b8885f458ab4cb67d9ff9ffd3228651c78342ff5b58388260_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aa31989eee2a0cfb641264ff0a37ea8de1919e5edecf5b04759967d54d5999f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa31989eee2a0cfb641264ff0a37ea8de1919e5edecf5b04759967d54d5999f->enter($__internal_2aa31989eee2a0cfb641264ff0a37ea8de1919e5edecf5b04759967d54d5999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2edc3107c8b7df00471826ec28d40a765f2fa6683672821f16ecc9d95e6debd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2edc3107c8b7df00471826ec28d40a765f2fa6683672821f16ecc9d95e6debd->enter($__internal_d2edc3107c8b7df00471826ec28d40a765f2fa6683672821f16ecc9d95e6debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Chevalier creation</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d2edc3107c8b7df00471826ec28d40a765f2fa6683672821f16ecc9d95e6debd->leave($__internal_d2edc3107c8b7df00471826ec28d40a765f2fa6683672821f16ecc9d95e6debd_prof);

        
        $__internal_2aa31989eee2a0cfb641264ff0a37ea8de1919e5edecf5b04759967d54d5999f->leave($__internal_2aa31989eee2a0cfb641264ff0a37ea8de1919e5edecf5b04759967d54d5999f_prof);

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
        return array (  72 => 15,  65 => 11,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

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
