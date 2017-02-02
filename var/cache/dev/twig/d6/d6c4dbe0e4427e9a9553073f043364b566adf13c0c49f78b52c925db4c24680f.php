<?php

/* :chevalier:new.html.twig */
class __TwigTemplate_1bb576bc220b0061481e4250b7a9dd4f3a6914b5824661e4bdd6d3342ceee5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chevalier:new.html.twig", 1);
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
        $__internal_c77ab8028bb8497a7c0004af5e6754cbb9161293b68a4f060cfc822100f3e7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77ab8028bb8497a7c0004af5e6754cbb9161293b68a4f060cfc822100f3e7de->enter($__internal_c77ab8028bb8497a7c0004af5e6754cbb9161293b68a4f060cfc822100f3e7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:new.html.twig"));

        $__internal_0dbba62b3c3054fdb951e48e329ae34ecd0920e9c5e58ccd9e1c71b51b68cb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbba62b3c3054fdb951e48e329ae34ecd0920e9c5e58ccd9e1c71b51b68cb7d->enter($__internal_0dbba62b3c3054fdb951e48e329ae34ecd0920e9c5e58ccd9e1c71b51b68cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:new.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c77ab8028bb8497a7c0004af5e6754cbb9161293b68a4f060cfc822100f3e7de->leave($__internal_c77ab8028bb8497a7c0004af5e6754cbb9161293b68a4f060cfc822100f3e7de_prof);

        
        $__internal_0dbba62b3c3054fdb951e48e329ae34ecd0920e9c5e58ccd9e1c71b51b68cb7d->leave($__internal_0dbba62b3c3054fdb951e48e329ae34ecd0920e9c5e58ccd9e1c71b51b68cb7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b914b09ff094c170fbc4cbd71da5f7f4918795315c343211284620084481171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b914b09ff094c170fbc4cbd71da5f7f4918795315c343211284620084481171->enter($__internal_4b914b09ff094c170fbc4cbd71da5f7f4918795315c343211284620084481171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2457154c501d1d52ffbad5453b71795e036bf838b483190896e9a9f2835dfc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2457154c501d1d52ffbad5453b71795e036bf838b483190896e9a9f2835dfc59->enter($__internal_2457154c501d1d52ffbad5453b71795e036bf838b483190896e9a9f2835dfc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Chevalier creation</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2457154c501d1d52ffbad5453b71795e036bf838b483190896e9a9f2835dfc59->leave($__internal_2457154c501d1d52ffbad5453b71795e036bf838b483190896e9a9f2835dfc59_prof);

        
        $__internal_4b914b09ff094c170fbc4cbd71da5f7f4918795315c343211284620084481171->leave($__internal_4b914b09ff094c170fbc4cbd71da5f7f4918795315c343211284620084481171_prof);

    }

    public function getTemplateName()
    {
        return ":chevalier:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  65 => 11,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block body %}
    <h1>Chevalier creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":chevalier:new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/new.html.twig");
    }
}
