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
        $__internal_9c8ea76ff250be3cc09bd58e00175a60584ba48cad7c47f51b5f59d7e9c7a514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8ea76ff250be3cc09bd58e00175a60584ba48cad7c47f51b5f59d7e9c7a514->enter($__internal_9c8ea76ff250be3cc09bd58e00175a60584ba48cad7c47f51b5f59d7e9c7a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $__internal_df683c78debdba5acea9512e89799b4c272293918ff45ec2ecdc46a8c5bad98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df683c78debdba5acea9512e89799b4c272293918ff45ec2ecdc46a8c5bad98a->enter($__internal_df683c78debdba5acea9512e89799b4c272293918ff45ec2ecdc46a8c5bad98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8ea76ff250be3cc09bd58e00175a60584ba48cad7c47f51b5f59d7e9c7a514->leave($__internal_9c8ea76ff250be3cc09bd58e00175a60584ba48cad7c47f51b5f59d7e9c7a514_prof);

        
        $__internal_df683c78debdba5acea9512e89799b4c272293918ff45ec2ecdc46a8c5bad98a->leave($__internal_df683c78debdba5acea9512e89799b4c272293918ff45ec2ecdc46a8c5bad98a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2a5b5d1849fe2aa54101cd77adce6990aac37311dd20588ff63659982897e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a5b5d1849fe2aa54101cd77adce6990aac37311dd20588ff63659982897e0b->enter($__internal_e2a5b5d1849fe2aa54101cd77adce6990aac37311dd20588ff63659982897e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d03662aafd58b64d38b3bdba378c3a0269c4c6c7586a8dd99fd909252911fb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03662aafd58b64d38b3bdba378c3a0269c4c6c7586a8dd99fd909252911fb4a->enter($__internal_d03662aafd58b64d38b3bdba378c3a0269c4c6c7586a8dd99fd909252911fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d03662aafd58b64d38b3bdba378c3a0269c4c6c7586a8dd99fd909252911fb4a->leave($__internal_d03662aafd58b64d38b3bdba378c3a0269c4c6c7586a8dd99fd909252911fb4a_prof);

        
        $__internal_e2a5b5d1849fe2aa54101cd77adce6990aac37311dd20588ff63659982897e0b->leave($__internal_e2a5b5d1849fe2aa54101cd77adce6990aac37311dd20588ff63659982897e0b_prof);

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
