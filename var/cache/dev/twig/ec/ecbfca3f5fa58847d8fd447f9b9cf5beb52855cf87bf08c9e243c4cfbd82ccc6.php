<?php

/* :chevalier:edit.html.twig */
class __TwigTemplate_2cb29145226ac44b33eef335aab1926def0255c7805efd9590d0613b39c2c254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":chevalier:edit.html.twig", 1);
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
        $__internal_ff387873ebc3215ea73bfb7b6438a0a6425008e3e7d9e87be5b64b398ed906d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff387873ebc3215ea73bfb7b6438a0a6425008e3e7d9e87be5b64b398ed906d0->enter($__internal_ff387873ebc3215ea73bfb7b6438a0a6425008e3e7d9e87be5b64b398ed906d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $__internal_2a96639a97b78d01d4c13f143c3798e994f7d2fe91a96260873bde17caf600d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a96639a97b78d01d4c13f143c3798e994f7d2fe91a96260873bde17caf600d3->enter($__internal_2a96639a97b78d01d4c13f143c3798e994f7d2fe91a96260873bde17caf600d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff387873ebc3215ea73bfb7b6438a0a6425008e3e7d9e87be5b64b398ed906d0->leave($__internal_ff387873ebc3215ea73bfb7b6438a0a6425008e3e7d9e87be5b64b398ed906d0_prof);

        
        $__internal_2a96639a97b78d01d4c13f143c3798e994f7d2fe91a96260873bde17caf600d3->leave($__internal_2a96639a97b78d01d4c13f143c3798e994f7d2fe91a96260873bde17caf600d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cf3a71dec0c3b26366465c0c8971b09caf30e48d387fef4cda3bf27f572e186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf3a71dec0c3b26366465c0c8971b09caf30e48d387fef4cda3bf27f572e186->enter($__internal_0cf3a71dec0c3b26366465c0c8971b09caf30e48d387fef4cda3bf27f572e186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_117f251c0005c5deda82f83e18f37014083fb06013efd0c3f9af4b024322448b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117f251c0005c5deda82f83e18f37014083fb06013efd0c3f9af4b024322448b->enter($__internal_117f251c0005c5deda82f83e18f37014083fb06013efd0c3f9af4b024322448b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chevalier edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_117f251c0005c5deda82f83e18f37014083fb06013efd0c3f9af4b024322448b->leave($__internal_117f251c0005c5deda82f83e18f37014083fb06013efd0c3f9af4b024322448b_prof);

        
        $__internal_0cf3a71dec0c3b26366465c0c8971b09caf30e48d387fef4cda3bf27f572e186->leave($__internal_0cf3a71dec0c3b26366465c0c8971b09caf30e48d387fef4cda3bf27f572e186_prof);

    }

    public function getTemplateName()
    {
        return ":chevalier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chevalier edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":chevalier:edit.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/chevalier/edit.html.twig");
    }
}
