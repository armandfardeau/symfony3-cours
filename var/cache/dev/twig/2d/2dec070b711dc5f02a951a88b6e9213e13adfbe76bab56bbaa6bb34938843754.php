<?php

/* studenttype/new.html.twig */
class __TwigTemplate_062ed430e4139e594b8388846c7614f60d46b8fcee0f6fdb396af5c52a9c39eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/new.html.twig", 1);
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
        $__internal_6d7b12254fc89f334dc42ea7610448dea5e2142cc9bcbaeb4437fd09e38d39b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7b12254fc89f334dc42ea7610448dea5e2142cc9bcbaeb4437fd09e38d39b9->enter($__internal_6d7b12254fc89f334dc42ea7610448dea5e2142cc9bcbaeb4437fd09e38d39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $__internal_ab9d17472d20f4b5d8c48c2a950456fed035586fd7a59d2c9297207c5389e3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9d17472d20f4b5d8c48c2a950456fed035586fd7a59d2c9297207c5389e3d4->enter($__internal_ab9d17472d20f4b5d8c48c2a950456fed035586fd7a59d2c9297207c5389e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7b12254fc89f334dc42ea7610448dea5e2142cc9bcbaeb4437fd09e38d39b9->leave($__internal_6d7b12254fc89f334dc42ea7610448dea5e2142cc9bcbaeb4437fd09e38d39b9_prof);

        
        $__internal_ab9d17472d20f4b5d8c48c2a950456fed035586fd7a59d2c9297207c5389e3d4->leave($__internal_ab9d17472d20f4b5d8c48c2a950456fed035586fd7a59d2c9297207c5389e3d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a826a37275ac9ab8163c30804325f4d645f95f67a91265a48b70497608653d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a826a37275ac9ab8163c30804325f4d645f95f67a91265a48b70497608653d0->enter($__internal_4a826a37275ac9ab8163c30804325f4d645f95f67a91265a48b70497608653d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6df9be3fa44eef1f1d8f4d69da55976e16cc486513429298f34ffb0555f3b2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df9be3fa44eef1f1d8f4d69da55976e16cc486513429298f34ffb0555f3b2cf->enter($__internal_6df9be3fa44eef1f1d8f4d69da55976e16cc486513429298f34ffb0555f3b2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6df9be3fa44eef1f1d8f4d69da55976e16cc486513429298f34ffb0555f3b2cf->leave($__internal_6df9be3fa44eef1f1d8f4d69da55976e16cc486513429298f34ffb0555f3b2cf_prof);

        
        $__internal_4a826a37275ac9ab8163c30804325f4d645f95f67a91265a48b70497608653d0->leave($__internal_4a826a37275ac9ab8163c30804325f4d645f95f67a91265a48b70497608653d0_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "studenttype/new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/new.html.twig");
    }
}
