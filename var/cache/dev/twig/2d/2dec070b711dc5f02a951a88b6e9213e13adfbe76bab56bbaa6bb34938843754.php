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
        $__internal_38de56574b6eaf1d5e6e05f7f3c429949b06674e915bff1dfc27481a2fc452c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38de56574b6eaf1d5e6e05f7f3c429949b06674e915bff1dfc27481a2fc452c1->enter($__internal_38de56574b6eaf1d5e6e05f7f3c429949b06674e915bff1dfc27481a2fc452c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $__internal_97ba5828860084308959850caf8e7dbd02e47a36abf1f7772381a6222f31449f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ba5828860084308959850caf8e7dbd02e47a36abf1f7772381a6222f31449f->enter($__internal_97ba5828860084308959850caf8e7dbd02e47a36abf1f7772381a6222f31449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38de56574b6eaf1d5e6e05f7f3c429949b06674e915bff1dfc27481a2fc452c1->leave($__internal_38de56574b6eaf1d5e6e05f7f3c429949b06674e915bff1dfc27481a2fc452c1_prof);

        
        $__internal_97ba5828860084308959850caf8e7dbd02e47a36abf1f7772381a6222f31449f->leave($__internal_97ba5828860084308959850caf8e7dbd02e47a36abf1f7772381a6222f31449f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3480aeb6a5e086079b1a1158e74a0a69adc8279554d102ae6d585e68053c153a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3480aeb6a5e086079b1a1158e74a0a69adc8279554d102ae6d585e68053c153a->enter($__internal_3480aeb6a5e086079b1a1158e74a0a69adc8279554d102ae6d585e68053c153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af0fe2fd5df549cdc4c5c3b93f5ae5d16844e2c9059aa0a56f2da18ac6ddd3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0fe2fd5df549cdc4c5c3b93f5ae5d16844e2c9059aa0a56f2da18ac6ddd3b6->enter($__internal_af0fe2fd5df549cdc4c5c3b93f5ae5d16844e2c9059aa0a56f2da18ac6ddd3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af0fe2fd5df549cdc4c5c3b93f5ae5d16844e2c9059aa0a56f2da18ac6ddd3b6->leave($__internal_af0fe2fd5df549cdc4c5c3b93f5ae5d16844e2c9059aa0a56f2da18ac6ddd3b6_prof);

        
        $__internal_3480aeb6a5e086079b1a1158e74a0a69adc8279554d102ae6d585e68053c153a->leave($__internal_3480aeb6a5e086079b1a1158e74a0a69adc8279554d102ae6d585e68053c153a_prof);

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
