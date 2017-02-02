<?php

/* CreatureFantastique/show.html.twig */
class __TwigTemplate_bdb8c12eff225b0cfdac1085b650aa6e4ebde572634485d1c3983955fe189c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CreatureFantastique/show.html.twig", 1);
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
        $__internal_d649f8eca5c628c088d62b0e752359ae4244abcb710f63ac3ba16ca37eafd0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d649f8eca5c628c088d62b0e752359ae4244abcb710f63ac3ba16ca37eafd0b5->enter($__internal_d649f8eca5c628c088d62b0e752359ae4244abcb710f63ac3ba16ca37eafd0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/show.html.twig"));

        $__internal_436af682fe5c871266e2c3dee63908ad1e651a0dafde3e5b5c66babd4e9757e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436af682fe5c871266e2c3dee63908ad1e651a0dafde3e5b5c66babd4e9757e8->enter($__internal_436af682fe5c871266e2c3dee63908ad1e651a0dafde3e5b5c66babd4e9757e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d649f8eca5c628c088d62b0e752359ae4244abcb710f63ac3ba16ca37eafd0b5->leave($__internal_d649f8eca5c628c088d62b0e752359ae4244abcb710f63ac3ba16ca37eafd0b5_prof);

        
        $__internal_436af682fe5c871266e2c3dee63908ad1e651a0dafde3e5b5c66babd4e9757e8->leave($__internal_436af682fe5c871266e2c3dee63908ad1e651a0dafde3e5b5c66babd4e9757e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ae4de8334f45c36377087b2ad48586d5500d7b418c7a1d287851eacdd7b76db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae4de8334f45c36377087b2ad48586d5500d7b418c7a1d287851eacdd7b76db->enter($__internal_7ae4de8334f45c36377087b2ad48586d5500d7b418c7a1d287851eacdd7b76db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27ce0ea6d16fea68da6faef7b6a81246699ec07676f0a3854182cf682c495b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ce0ea6d16fea68da6faef7b6a81246699ec07676f0a3854182cf682c495b48->enter($__internal_27ce0ea6d16fea68da6faef7b6a81246699ec07676f0a3854182cf682c495b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Appbundle:CreatureFantastique:Show cacao";
        
        $__internal_27ce0ea6d16fea68da6faef7b6a81246699ec07676f0a3854182cf682c495b48->leave($__internal_27ce0ea6d16fea68da6faef7b6a81246699ec07676f0a3854182cf682c495b48_prof);

        
        $__internal_7ae4de8334f45c36377087b2ad48586d5500d7b418c7a1d287851eacdd7b76db->leave($__internal_7ae4de8334f45c36377087b2ad48586d5500d7b418c7a1d287851eacdd7b76db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12f4011da00800a14bd90b094f26a9790e7aa8d0dd65bf0cc062ea898d50f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12f4011da00800a14bd90b094f26a9790e7aa8d0dd65bf0cc062ea898d50f0f->enter($__internal_a12f4011da00800a14bd90b094f26a9790e7aa8d0dd65bf0cc062ea898d50f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f9723ec1f35d31375308ebcd7dd7bb16403892ab5d2fbf9a09fbd92d7db416c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9723ec1f35d31375308ebcd7dd7bb16403892ab5d2fbf9a09fbd92d7db416c->enter($__internal_6f9723ec1f35d31375308ebcd7dd7bb16403892ab5d2fbf9a09fbd92d7db416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the CreatureFantastique:index page</h1>
    <div>
        <h2>";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["creatureFantastique"] ?? $this->getContext($context, "creatureFantastique")), "nom", array()), "html", null, true));
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["creatureFantastique"] ?? $this->getContext($context, "creatureFantastique")), "superPower", array()), "html", null, true);
        echo "</p>
    </div>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_creaturefantastique_index");
        echo "\">Index</a>
";
        
        $__internal_6f9723ec1f35d31375308ebcd7dd7bb16403892ab5d2fbf9a09fbd92d7db416c->leave($__internal_6f9723ec1f35d31375308ebcd7dd7bb16403892ab5d2fbf9a09fbd92d7db416c_prof);

        
        $__internal_a12f4011da00800a14bd90b094f26a9790e7aa8d0dd65bf0cc062ea898d50f0f->leave($__internal_a12f4011da00800a14bd90b094f26a9790e7aa8d0dd65bf0cc062ea898d50f0f_prof);

    }

    public function getTemplateName()
    {
        return "CreatureFantastique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Appbundle:CreatureFantastique:Show cacao{% endblock %}

{% block body %}
<h1>Welcome to the CreatureFantastique:index page</h1>
    <div>
        <h2>{{ creatureFantastique.nom | nl2br }}</h2>
        <p>{{ creatureFantastique.superPower }}</p>
    </div>
    <a href=\"{{ path(\"app_creaturefantastique_index\") }}\">Index</a>
{% endblock %}", "CreatureFantastique/show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/show.html.twig");
    }
}
