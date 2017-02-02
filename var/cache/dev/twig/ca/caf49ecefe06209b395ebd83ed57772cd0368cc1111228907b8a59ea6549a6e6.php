<?php

/* CreatureFantastique/index.html.twig */
class __TwigTemplate_41065d86984756d01e5ab8c0225cabc799176288290c6cf8f9648175fdba27b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CreatureFantastique/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da04303a964a1ccf4a6f013930acb48ef88abd6c408e0685f9c0c6fcc1002e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da04303a964a1ccf4a6f013930acb48ef88abd6c408e0685f9c0c6fcc1002e4c->enter($__internal_da04303a964a1ccf4a6f013930acb48ef88abd6c408e0685f9c0c6fcc1002e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $__internal_318dcb0c04194cbaa913266ed22c1b247711ef7464c4d42e68d08892558f196e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318dcb0c04194cbaa913266ed22c1b247711ef7464c4d42e68d08892558f196e->enter($__internal_318dcb0c04194cbaa913266ed22c1b247711ef7464c4d42e68d08892558f196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da04303a964a1ccf4a6f013930acb48ef88abd6c408e0685f9c0c6fcc1002e4c->leave($__internal_da04303a964a1ccf4a6f013930acb48ef88abd6c408e0685f9c0c6fcc1002e4c_prof);

        
        $__internal_318dcb0c04194cbaa913266ed22c1b247711ef7464c4d42e68d08892558f196e->leave($__internal_318dcb0c04194cbaa913266ed22c1b247711ef7464c4d42e68d08892558f196e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2817e3c596066afc83ed5913d59067365f28fa3c866b9510a238e98306330514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2817e3c596066afc83ed5913d59067365f28fa3c866b9510a238e98306330514->enter($__internal_2817e3c596066afc83ed5913d59067365f28fa3c866b9510a238e98306330514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7adaf8c609c904746454832cfe78e40f48cb3e7c5c5b0dc4a1dffba0567c0831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adaf8c609c904746454832cfe78e40f48cb3e7c5c5b0dc4a1dffba0567c0831->enter($__internal_7adaf8c609c904746454832cfe78e40f48cb3e7c5c5b0dc4a1dffba0567c0831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:index ";
        
        $__internal_7adaf8c609c904746454832cfe78e40f48cb3e7c5c5b0dc4a1dffba0567c0831->leave($__internal_7adaf8c609c904746454832cfe78e40f48cb3e7c5c5b0dc4a1dffba0567c0831_prof);

        
        $__internal_2817e3c596066afc83ed5913d59067365f28fa3c866b9510a238e98306330514->leave($__internal_2817e3c596066afc83ed5913d59067365f28fa3c866b9510a238e98306330514_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a92fe2a0d8e6a14866fb2a9f035a69eacb959a1c2f0efc725050c735e738c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a92fe2a0d8e6a14866fb2a9f035a69eacb959a1c2f0efc725050c735e738c0->enter($__internal_a2a92fe2a0d8e6a14866fb2a9f035a69eacb959a1c2f0efc725050c735e738c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_272798ccce0b093fbfb72033a6515fb02c602bdfcfb745a52abcc8960c64cb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272798ccce0b093fbfb72033a6515fb02c602bdfcfb745a52abcc8960c64cb67->enter($__internal_272798ccce0b093fbfb72033a6515fb02c602bdfcfb745a52abcc8960c64cb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the CreatureFantastique:index page</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["creatureFantastiques"] ?? $this->getContext($context, "creatureFantastiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["creatureFantastique"]) {
            // line 8
            echo "    <div>
        <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatureFantastique"], "nom", array()), "html", null, true);
            echo "</h2>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatureFantastique"], "superPower", array()), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creatureFantastique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_272798ccce0b093fbfb72033a6515fb02c602bdfcfb745a52abcc8960c64cb67->leave($__internal_272798ccce0b093fbfb72033a6515fb02c602bdfcfb745a52abcc8960c64cb67_prof);

        
        $__internal_a2a92fe2a0d8e6a14866fb2a9f035a69eacb959a1c2f0efc725050c735e738c0->leave($__internal_a2a92fe2a0d8e6a14866fb2a9f035a69eacb959a1c2f0efc725050c735e738c0_prof);

    }

    public function getTemplateName()
    {
        return "CreatureFantastique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  78 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} AppBundle:CreatureFantastique:index {% endblock %}

{% block body %}
<h1>Welcome to the CreatureFantastique:index page</h1>
    {% for creatureFantastique in creatureFantastiques %}
    <div>
        <h2>{{ creatureFantastique.nom }}</h2>
        <p>{{ creatureFantastique.superPower }}</p>
    </div>
    {% endfor %}
{% endblock %}
", "CreatureFantastique/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/index.html.twig");
    }
}
