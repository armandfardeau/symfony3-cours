<?php

/* :studenttype:index.html.twig */
class __TwigTemplate_e1bd30d4f86bf3e20ed278e3077f0af0e6c95eeb09954bf4b6ffe1878c436cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":studenttype:index.html.twig", 1);
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
        $__internal_5bc3d418aca1ca33911b8270d0b7cb67216a75a55094ef6eff5f7102d3b892e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc3d418aca1ca33911b8270d0b7cb67216a75a55094ef6eff5f7102d3b892e5->enter($__internal_5bc3d418aca1ca33911b8270d0b7cb67216a75a55094ef6eff5f7102d3b892e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:index.html.twig"));

        $__internal_fbb3b49126172b897922cbd21af69fd8b0ed3ca08cb4f2536bb927e2c354c81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb3b49126172b897922cbd21af69fd8b0ed3ca08cb4f2536bb927e2c354c81a->enter($__internal_fbb3b49126172b897922cbd21af69fd8b0ed3ca08cb4f2536bb927e2c354c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc3d418aca1ca33911b8270d0b7cb67216a75a55094ef6eff5f7102d3b892e5->leave($__internal_5bc3d418aca1ca33911b8270d0b7cb67216a75a55094ef6eff5f7102d3b892e5_prof);

        
        $__internal_fbb3b49126172b897922cbd21af69fd8b0ed3ca08cb4f2536bb927e2c354c81a->leave($__internal_fbb3b49126172b897922cbd21af69fd8b0ed3ca08cb4f2536bb927e2c354c81a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f61e536dcd78a97de6d1de9d593ab211f002cba38a273aab6fcadd8ea11b41ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61e536dcd78a97de6d1de9d593ab211f002cba38a273aab6fcadd8ea11b41ef->enter($__internal_f61e536dcd78a97de6d1de9d593ab211f002cba38a273aab6fcadd8ea11b41ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49a6bd3c549246e05199548b9cc183148243c4b09765655f445e46008825ff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a6bd3c549246e05199548b9cc183148243c4b09765655f445e46008825ff15->enter($__internal_49a6bd3c549246e05199548b9cc183148243c4b09765655f445e46008825ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentTypes"] ?? $this->getContext($context, "studentTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentType"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_show", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentType"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentType"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["studentType"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["studentType"], "createdAt", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_show", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_edit", array("id" => $this->getAttribute($context["studentType"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_new");
        echo "\">Create a new studentType</a>
        </li>
    </ul>
";
        
        $__internal_49a6bd3c549246e05199548b9cc183148243c4b09765655f445e46008825ff15->leave($__internal_49a6bd3c549246e05199548b9cc183148243c4b09765655f445e46008825ff15_prof);

        
        $__internal_f61e536dcd78a97de6d1de9d593ab211f002cba38a273aab6fcadd8ea11b41ef->leave($__internal_f61e536dcd78a97de6d1de9d593ab211f002cba38a273aab6fcadd8ea11b41ef_prof);

    }

    public function getTemplateName()
    {
        return ":studenttype:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for studentType in studentTypes %}
            <tr>
                <td><a href=\"{{ path('studenttype_show', { 'id': studentType.id }) }}\">{{ studentType.id }}</a></td>
                <td>{{ studentType.name }}</td>
                <td>{% if studentType.createdAt %}{{ studentType.createdAt|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('studenttype_show', { 'id': studentType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('studenttype_edit', { 'id': studentType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studenttype_new') }}\">Create a new studentType</a>
        </li>
    </ul>
{% endblock %}
", ":studenttype:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/index.html.twig");
    }
}
