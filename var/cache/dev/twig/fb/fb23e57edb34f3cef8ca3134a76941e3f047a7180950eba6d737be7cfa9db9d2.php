<?php

/* :chevalier:index.html.twig */
class __TwigTemplate_7fb6606bf08fa7a81b2f2420a0fb37644f26f7847371f8ef2c5d8678608de2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chevalier:index.html.twig", 1);
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
        $__internal_179d219c34037d7ceb00e93ad0402d433fe2711d17de1071cd8f22e5eb8d99b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179d219c34037d7ceb00e93ad0402d433fe2711d17de1071cd8f22e5eb8d99b4->enter($__internal_179d219c34037d7ceb00e93ad0402d433fe2711d17de1071cd8f22e5eb8d99b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:index.html.twig"));

        $__internal_c374daa42a9059f54ca43f3e23e621b476dacaae1d29a1c69c5d1006f5dc8baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c374daa42a9059f54ca43f3e23e621b476dacaae1d29a1c69c5d1006f5dc8baf->enter($__internal_c374daa42a9059f54ca43f3e23e621b476dacaae1d29a1c69c5d1006f5dc8baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179d219c34037d7ceb00e93ad0402d433fe2711d17de1071cd8f22e5eb8d99b4->leave($__internal_179d219c34037d7ceb00e93ad0402d433fe2711d17de1071cd8f22e5eb8d99b4_prof);

        
        $__internal_c374daa42a9059f54ca43f3e23e621b476dacaae1d29a1c69c5d1006f5dc8baf->leave($__internal_c374daa42a9059f54ca43f3e23e621b476dacaae1d29a1c69c5d1006f5dc8baf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ea72dca02741e2c7369bf37f8a8ab45f782fffe961569199cba3fb762d917a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea72dca02741e2c7369bf37f8a8ab45f782fffe961569199cba3fb762d917a5->enter($__internal_1ea72dca02741e2c7369bf37f8a8ab45f782fffe961569199cba3fb762d917a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c3763decdbbf275156cd64cbd933dbef072d8c9b0b2796636f5b9a2b66d568b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3763decdbbf275156cd64cbd933dbef072d8c9b0b2796636f5b9a2b66d568b->enter($__internal_8c3763decdbbf275156cd64cbd933dbef072d8c9b0b2796636f5b9a2b66d568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chevaliers list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chevaliers"] ?? $this->getContext($context, "chevaliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["chevalier"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_show", array("id" => $this->getAttribute($context["chevalier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chevalier"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["chevalier"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["chevalier"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["chevalier"], "grade", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_show", array("id" => $this->getAttribute($context["chevalier"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_edit", array("id" => $this->getAttribute($context["chevalier"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chevalier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_new");
        echo "\">Create a new chevalier</a>
        </li>
    </ul>
";
        
        $__internal_8c3763decdbbf275156cd64cbd933dbef072d8c9b0b2796636f5b9a2b66d568b->leave($__internal_8c3763decdbbf275156cd64cbd933dbef072d8c9b0b2796636f5b9a2b66d568b_prof);

        
        $__internal_1ea72dca02741e2c7369bf37f8a8ab45f782fffe961569199cba3fb762d917a5->leave($__internal_1ea72dca02741e2c7369bf37f8a8ab45f782fffe961569199cba3fb762d917a5_prof);

    }

    public function getTemplateName()
    {
        return ":chevalier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chevaliers list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for chevalier in chevaliers %}
            <tr>
                <td><a href=\"{{ path('chevalier_show', { 'id': chevalier.id }) }}\">{{ chevalier.id }}</a></td>
                <td>{{ chevalier.prenom }}</td>
                <td>{{ chevalier.nom }}</td>
                <td>{{ chevalier.grade }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('chevalier_show', { 'id': chevalier.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('chevalier_edit', { 'id': chevalier.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chevalier_new') }}\">Create a new chevalier</a>
        </li>
    </ul>
{% endblock %}
", ":chevalier:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/index.html.twig");
    }
}
