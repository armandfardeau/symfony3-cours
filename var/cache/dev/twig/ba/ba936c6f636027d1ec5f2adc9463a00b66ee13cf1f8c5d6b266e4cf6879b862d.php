<?php

/* :chevalier:show.html.twig */
class __TwigTemplate_e41a0c13e33ce4885c87d6e25e943f47d4fa4bca5b10c7c4065cf55bb18d9f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chevalier:show.html.twig", 1);
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
        $__internal_cb6499d333dc8598c9894f9bbe1af65050d7134eb2e71dfbfaa0f1b495015f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6499d333dc8598c9894f9bbe1af65050d7134eb2e71dfbfaa0f1b495015f85->enter($__internal_cb6499d333dc8598c9894f9bbe1af65050d7134eb2e71dfbfaa0f1b495015f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:show.html.twig"));

        $__internal_33cc6d0f88b0c78272f8389e0046414a64e7fb3975688a1626c4d58bbc7ebaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cc6d0f88b0c78272f8389e0046414a64e7fb3975688a1626c4d58bbc7ebaa0->enter($__internal_33cc6d0f88b0c78272f8389e0046414a64e7fb3975688a1626c4d58bbc7ebaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6499d333dc8598c9894f9bbe1af65050d7134eb2e71dfbfaa0f1b495015f85->leave($__internal_cb6499d333dc8598c9894f9bbe1af65050d7134eb2e71dfbfaa0f1b495015f85_prof);

        
        $__internal_33cc6d0f88b0c78272f8389e0046414a64e7fb3975688a1626c4d58bbc7ebaa0->leave($__internal_33cc6d0f88b0c78272f8389e0046414a64e7fb3975688a1626c4d58bbc7ebaa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_759175121ca3b433d2613752ecf604fdb1f920a7e0b7c571ccf6b06a8ce3c2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759175121ca3b433d2613752ecf604fdb1f920a7e0b7c571ccf6b06a8ce3c2a9->enter($__internal_759175121ca3b433d2613752ecf604fdb1f920a7e0b7c571ccf6b06a8ce3c2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c3617858d52763a8e3a4f17a30df5e9d00d2792ce34c261ee872d6e3ccc13bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3617858d52763a8e3a4f17a30df5e9d00d2792ce34c261ee872d6e3ccc13bf->enter($__internal_1c3617858d52763a8e3a4f17a30df5e9d00d2792ce34c261ee872d6e3ccc13bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chevalier</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "grade", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_edit", array("id" => $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1c3617858d52763a8e3a4f17a30df5e9d00d2792ce34c261ee872d6e3ccc13bf->leave($__internal_1c3617858d52763a8e3a4f17a30df5e9d00d2792ce34c261ee872d6e3ccc13bf_prof);

        
        $__internal_759175121ca3b433d2613752ecf604fdb1f920a7e0b7c571ccf6b06a8ce3c2a9->leave($__internal_759175121ca3b433d2613752ecf604fdb1f920a7e0b7c571ccf6b06a8ce3c2a9_prof);

    }

    public function getTemplateName()
    {
        return ":chevalier:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chevalier</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chevalier.id }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ chevalier.prenom }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ chevalier.nom }}</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>{{ chevalier.grade }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('chevalier_edit', { 'id': chevalier.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":chevalier:show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/show.html.twig");
    }
}
