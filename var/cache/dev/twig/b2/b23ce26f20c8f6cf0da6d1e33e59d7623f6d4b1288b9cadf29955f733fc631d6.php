<?php

/* student/new.html.twig */
class __TwigTemplate_81e9f74b51b6bdaa0c79ae918d421ccc03906b46c58566ffc52f1499c568f130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/new.html.twig", 1);
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
        $__internal_a1d0cdd101f8e2c50d2641316ac8b82df669eee7e43d850420874e1eeccb91b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d0cdd101f8e2c50d2641316ac8b82df669eee7e43d850420874e1eeccb91b8->enter($__internal_a1d0cdd101f8e2c50d2641316ac8b82df669eee7e43d850420874e1eeccb91b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/new.html.twig"));

        $__internal_787f4ddc294b853041ad48d0a1eeae5a5d076f5a3501e2685ebbc80260c85d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787f4ddc294b853041ad48d0a1eeae5a5d076f5a3501e2685ebbc80260c85d23->enter($__internal_787f4ddc294b853041ad48d0a1eeae5a5d076f5a3501e2685ebbc80260c85d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d0cdd101f8e2c50d2641316ac8b82df669eee7e43d850420874e1eeccb91b8->leave($__internal_a1d0cdd101f8e2c50d2641316ac8b82df669eee7e43d850420874e1eeccb91b8_prof);

        
        $__internal_787f4ddc294b853041ad48d0a1eeae5a5d076f5a3501e2685ebbc80260c85d23->leave($__internal_787f4ddc294b853041ad48d0a1eeae5a5d076f5a3501e2685ebbc80260c85d23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0425530590883d7f2d50d4e7a668ba4b1573db194a11a16ccc86d49c3d659af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0425530590883d7f2d50d4e7a668ba4b1573db194a11a16ccc86d49c3d659af7->enter($__internal_0425530590883d7f2d50d4e7a668ba4b1573db194a11a16ccc86d49c3d659af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b27ea911a76fbd92ecd3ef1d9745bf107c8c2aa83df2d9a4645a6ac20325008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b27ea911a76fbd92ecd3ef1d9745bf107c8c2aa83df2d9a4645a6ac20325008->enter($__internal_3b27ea911a76fbd92ecd3ef1d9745bf107c8c2aa83df2d9a4645a6ac20325008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3b27ea911a76fbd92ecd3ef1d9745bf107c8c2aa83df2d9a4645a6ac20325008->leave($__internal_3b27ea911a76fbd92ecd3ef1d9745bf107c8c2aa83df2d9a4645a6ac20325008_prof);

        
        $__internal_0425530590883d7f2d50d4e7a668ba4b1573db194a11a16ccc86d49c3d659af7->leave($__internal_0425530590883d7f2d50d4e7a668ba4b1573db194a11a16ccc86d49c3d659af7_prof);

    }

    public function getTemplateName()
    {
        return "student/new.html.twig";
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
    <h1>Student creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "student/new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/student/new.html.twig");
    }
}
