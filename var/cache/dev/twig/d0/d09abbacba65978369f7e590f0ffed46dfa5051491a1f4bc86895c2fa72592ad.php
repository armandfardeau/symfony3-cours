<?php

/* :studenttype:edit.html.twig */
class __TwigTemplate_7223fb2fdde8d8cba61f463e91cf8d5ef26614cf511bba9581aa7cacb5b15237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":studenttype:edit.html.twig", 1);
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
        $__internal_50e0688bb7f3afd22fd617973ba86ec085ec44240e1deac9015de0e4dba7d825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e0688bb7f3afd22fd617973ba86ec085ec44240e1deac9015de0e4dba7d825->enter($__internal_50e0688bb7f3afd22fd617973ba86ec085ec44240e1deac9015de0e4dba7d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:edit.html.twig"));

        $__internal_2cda08fd48ee46c8866b6fc890c7238350fdcfef969d70256da74eda2dde1a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cda08fd48ee46c8866b6fc890c7238350fdcfef969d70256da74eda2dde1a73->enter($__internal_2cda08fd48ee46c8866b6fc890c7238350fdcfef969d70256da74eda2dde1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e0688bb7f3afd22fd617973ba86ec085ec44240e1deac9015de0e4dba7d825->leave($__internal_50e0688bb7f3afd22fd617973ba86ec085ec44240e1deac9015de0e4dba7d825_prof);

        
        $__internal_2cda08fd48ee46c8866b6fc890c7238350fdcfef969d70256da74eda2dde1a73->leave($__internal_2cda08fd48ee46c8866b6fc890c7238350fdcfef969d70256da74eda2dde1a73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7897cb02fe57cc09a5d28aa0ac702c01dab8ee96e75ff8b9f36e487a105891b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7897cb02fe57cc09a5d28aa0ac702c01dab8ee96e75ff8b9f36e487a105891b6->enter($__internal_7897cb02fe57cc09a5d28aa0ac702c01dab8ee96e75ff8b9f36e487a105891b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a761704040fa4b82b838abe95ddf8163a255989abf156a47c98f0eddaeb63a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a761704040fa4b82b838abe95ddf8163a255989abf156a47c98f0eddaeb63a3->enter($__internal_2a761704040fa4b82b838abe95ddf8163a255989abf156a47c98f0eddaeb63a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2a761704040fa4b82b838abe95ddf8163a255989abf156a47c98f0eddaeb63a3->leave($__internal_2a761704040fa4b82b838abe95ddf8163a255989abf156a47c98f0eddaeb63a3_prof);

        
        $__internal_7897cb02fe57cc09a5d28aa0ac702c01dab8ee96e75ff8b9f36e487a105891b6->leave($__internal_7897cb02fe57cc09a5d28aa0ac702c01dab8ee96e75ff8b9f36e487a105891b6_prof);

    }

    public function getTemplateName()
    {
        return ":studenttype:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":studenttype:edit.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/edit.html.twig");
    }
}
