<?php

/* studenttype/index.html.twig */
class __TwigTemplate_e1bd30d4f86bf3e20ed278e3077f0af0e6c95eeb09954bf4b6ffe1878c436cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/index.html.twig", 1);
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
        $__internal_8b40177d00bfb8a3e243318c8f9c587081cf552c4e372576e19ea01cbb4933ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b40177d00bfb8a3e243318c8f9c587081cf552c4e372576e19ea01cbb4933ef->enter($__internal_8b40177d00bfb8a3e243318c8f9c587081cf552c4e372576e19ea01cbb4933ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/index.html.twig"));

        $__internal_741228e4a295a9ee83a19f672691b819565723a3c234dbe4713cb326be9e9604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741228e4a295a9ee83a19f672691b819565723a3c234dbe4713cb326be9e9604->enter($__internal_741228e4a295a9ee83a19f672691b819565723a3c234dbe4713cb326be9e9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b40177d00bfb8a3e243318c8f9c587081cf552c4e372576e19ea01cbb4933ef->leave($__internal_8b40177d00bfb8a3e243318c8f9c587081cf552c4e372576e19ea01cbb4933ef_prof);

        
        $__internal_741228e4a295a9ee83a19f672691b819565723a3c234dbe4713cb326be9e9604->leave($__internal_741228e4a295a9ee83a19f672691b819565723a3c234dbe4713cb326be9e9604_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bc4c51d3b44d1eaf99322948d98cabf58fb1d33a56a2a2d34def37464886a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc4c51d3b44d1eaf99322948d98cabf58fb1d33a56a2a2d34def37464886a33->enter($__internal_0bc4c51d3b44d1eaf99322948d98cabf58fb1d33a56a2a2d34def37464886a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62aa08b8d61b5508bb7e925f6865ea7c3ba5470fa67a818fd96baf51e0310e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aa08b8d61b5508bb7e925f6865ea7c3ba5470fa67a818fd96baf51e0310e93->enter($__internal_62aa08b8d61b5508bb7e925f6865ea7c3ba5470fa67a818fd96baf51e0310e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62aa08b8d61b5508bb7e925f6865ea7c3ba5470fa67a818fd96baf51e0310e93->leave($__internal_62aa08b8d61b5508bb7e925f6865ea7c3ba5470fa67a818fd96baf51e0310e93_prof);

        
        $__internal_0bc4c51d3b44d1eaf99322948d98cabf58fb1d33a56a2a2d34def37464886a33->leave($__internal_0bc4c51d3b44d1eaf99322948d98cabf58fb1d33a56a2a2d34def37464886a33_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/index.html.twig";
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
", "studenttype/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/index.html.twig");
    }
}
