<?php

/* chevalier/show.html.twig */
class __TwigTemplate_113f0faa8e6ef1bee236cf8b5ba5b938961d8c7c98a41f030b66ee2427671e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chevalier/show.html.twig", 1);
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
        $__internal_8bfe8ad6ac69b5aa3ace63badc9d87a63ed0146cd039bcf2bd7813d418d7aae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfe8ad6ac69b5aa3ace63badc9d87a63ed0146cd039bcf2bd7813d418d7aae9->enter($__internal_8bfe8ad6ac69b5aa3ace63badc9d87a63ed0146cd039bcf2bd7813d418d7aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/show.html.twig"));

        $__internal_6620f221894e27d803dfbe2c957db005124b779c4406909fe11d63408e4a8d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6620f221894e27d803dfbe2c957db005124b779c4406909fe11d63408e4a8d1e->enter($__internal_6620f221894e27d803dfbe2c957db005124b779c4406909fe11d63408e4a8d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bfe8ad6ac69b5aa3ace63badc9d87a63ed0146cd039bcf2bd7813d418d7aae9->leave($__internal_8bfe8ad6ac69b5aa3ace63badc9d87a63ed0146cd039bcf2bd7813d418d7aae9_prof);

        
        $__internal_6620f221894e27d803dfbe2c957db005124b779c4406909fe11d63408e4a8d1e->leave($__internal_6620f221894e27d803dfbe2c957db005124b779c4406909fe11d63408e4a8d1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_341d39bb3aa45ce37310a829f4fa6333935276770ffb88da850c86d6b574f220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341d39bb3aa45ce37310a829f4fa6333935276770ffb88da850c86d6b574f220->enter($__internal_341d39bb3aa45ce37310a829f4fa6333935276770ffb88da850c86d6b574f220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47efc7a8f89dc65aac51172b59019134b5f481f218647c0fa3085f916b1b5809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47efc7a8f89dc65aac51172b59019134b5f481f218647c0fa3085f916b1b5809->enter($__internal_47efc7a8f89dc65aac51172b59019134b5f481f218647c0fa3085f916b1b5809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47efc7a8f89dc65aac51172b59019134b5f481f218647c0fa3085f916b1b5809->leave($__internal_47efc7a8f89dc65aac51172b59019134b5f481f218647c0fa3085f916b1b5809_prof);

        
        $__internal_341d39bb3aa45ce37310a829f4fa6333935276770ffb88da850c86d6b574f220->leave($__internal_341d39bb3aa45ce37310a829f4fa6333935276770ffb88da850c86d6b574f220_prof);

    }

    public function getTemplateName()
    {
        return "chevalier/show.html.twig";
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
", "chevalier/show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/show.html.twig");
    }
}
