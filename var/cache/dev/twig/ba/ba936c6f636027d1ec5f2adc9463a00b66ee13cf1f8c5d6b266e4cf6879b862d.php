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
        $__internal_02708a46bcf9af720852aa73b8f5d643f4bf6e9bce5a4e50bb75a227fc088273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02708a46bcf9af720852aa73b8f5d643f4bf6e9bce5a4e50bb75a227fc088273->enter($__internal_02708a46bcf9af720852aa73b8f5d643f4bf6e9bce5a4e50bb75a227fc088273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:show.html.twig"));

        $__internal_731c8c29673e123c53b2db6104d794a3253e5b090035c809bc422517501d9999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731c8c29673e123c53b2db6104d794a3253e5b090035c809bc422517501d9999->enter($__internal_731c8c29673e123c53b2db6104d794a3253e5b090035c809bc422517501d9999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02708a46bcf9af720852aa73b8f5d643f4bf6e9bce5a4e50bb75a227fc088273->leave($__internal_02708a46bcf9af720852aa73b8f5d643f4bf6e9bce5a4e50bb75a227fc088273_prof);

        
        $__internal_731c8c29673e123c53b2db6104d794a3253e5b090035c809bc422517501d9999->leave($__internal_731c8c29673e123c53b2db6104d794a3253e5b090035c809bc422517501d9999_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40becd43aef4d48445db59dd95cc8f68fdfb072ef447259b674bd2f5bfd0f9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40becd43aef4d48445db59dd95cc8f68fdfb072ef447259b674bd2f5bfd0f9db->enter($__internal_40becd43aef4d48445db59dd95cc8f68fdfb072ef447259b674bd2f5bfd0f9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e81f740ffc3a0495a1a077f8fd969f208c6ada5af95ab50df4c9b971c47b707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e81f740ffc3a0495a1a077f8fd969f208c6ada5af95ab50df4c9b971c47b707->enter($__internal_9e81f740ffc3a0495a1a077f8fd969f208c6ada5af95ab50df4c9b971c47b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e81f740ffc3a0495a1a077f8fd969f208c6ada5af95ab50df4c9b971c47b707->leave($__internal_9e81f740ffc3a0495a1a077f8fd969f208c6ada5af95ab50df4c9b971c47b707_prof);

        
        $__internal_40becd43aef4d48445db59dd95cc8f68fdfb072ef447259b674bd2f5bfd0f9db->leave($__internal_40becd43aef4d48445db59dd95cc8f68fdfb072ef447259b674bd2f5bfd0f9db_prof);

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
