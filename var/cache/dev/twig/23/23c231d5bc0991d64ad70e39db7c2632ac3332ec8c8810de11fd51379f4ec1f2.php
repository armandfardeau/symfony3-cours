<?php

/* :studenttype:show.html.twig */
class __TwigTemplate_51caee2a4177b73923383e482049ba46144e8e10a9ae4cbf528faff762054ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":studenttype:show.html.twig", 1);
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
        $__internal_fb8e0efa923c0ec49c91deb10c9c6be697fa2fa375876f5d24e3a7d9e7e75432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8e0efa923c0ec49c91deb10c9c6be697fa2fa375876f5d24e3a7d9e7e75432->enter($__internal_fb8e0efa923c0ec49c91deb10c9c6be697fa2fa375876f5d24e3a7d9e7e75432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:show.html.twig"));

        $__internal_3d5f587eafa540f741578871439abf2f18829d82d67c9e779e6319d6a634e4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5f587eafa540f741578871439abf2f18829d82d67c9e779e6319d6a634e4fb->enter($__internal_3d5f587eafa540f741578871439abf2f18829d82d67c9e779e6319d6a634e4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8e0efa923c0ec49c91deb10c9c6be697fa2fa375876f5d24e3a7d9e7e75432->leave($__internal_fb8e0efa923c0ec49c91deb10c9c6be697fa2fa375876f5d24e3a7d9e7e75432_prof);

        
        $__internal_3d5f587eafa540f741578871439abf2f18829d82d67c9e779e6319d6a634e4fb->leave($__internal_3d5f587eafa540f741578871439abf2f18829d82d67c9e779e6319d6a634e4fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15a259ed2b8f35f2e8bf32cbbe5d20b87c5fe7baaeb8116081e079c11a85ef3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a259ed2b8f35f2e8bf32cbbe5d20b87c5fe7baaeb8116081e079c11a85ef3e->enter($__internal_15a259ed2b8f35f2e8bf32cbbe5d20b87c5fe7baaeb8116081e079c11a85ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_881bb7eb4864ffd945f7fff2654dfb090e257865cb3677097f04ed927e6f0c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881bb7eb4864ffd945f7fff2654dfb090e257865cb3677097f04ed927e6f0c59->enter($__internal_881bb7eb4864ffd945f7fff2654dfb090e257865cb3677097f04ed927e6f0c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_edit", array("id" => $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_881bb7eb4864ffd945f7fff2654dfb090e257865cb3677097f04ed927e6f0c59->leave($__internal_881bb7eb4864ffd945f7fff2654dfb090e257865cb3677097f04ed927e6f0c59_prof);

        
        $__internal_15a259ed2b8f35f2e8bf32cbbe5d20b87c5fe7baaeb8116081e079c11a85ef3e->leave($__internal_15a259ed2b8f35f2e8bf32cbbe5d20b87c5fe7baaeb8116081e079c11a85ef3e_prof);

    }

    public function getTemplateName()
    {
        return ":studenttype:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ studentType.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ studentType.name }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if studentType.createdAt %}{{ studentType.createdAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('studenttype_edit', { 'id': studentType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":studenttype:show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/show.html.twig");
    }
}
