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
        $__internal_f51356a37cd929b434a911e02882eb7e9f6b89c36f208f977734b01ac3fbe9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51356a37cd929b434a911e02882eb7e9f6b89c36f208f977734b01ac3fbe9c7->enter($__internal_f51356a37cd929b434a911e02882eb7e9f6b89c36f208f977734b01ac3fbe9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $__internal_6b27777a00f6b00f1c4a27d43ad8cdbec6160340be9a9c5eb980dda1c74b75f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b27777a00f6b00f1c4a27d43ad8cdbec6160340be9a9c5eb980dda1c74b75f9->enter($__internal_6b27777a00f6b00f1c4a27d43ad8cdbec6160340be9a9c5eb980dda1c74b75f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":chevalier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51356a37cd929b434a911e02882eb7e9f6b89c36f208f977734b01ac3fbe9c7->leave($__internal_f51356a37cd929b434a911e02882eb7e9f6b89c36f208f977734b01ac3fbe9c7_prof);

        
        $__internal_6b27777a00f6b00f1c4a27d43ad8cdbec6160340be9a9c5eb980dda1c74b75f9->leave($__internal_6b27777a00f6b00f1c4a27d43ad8cdbec6160340be9a9c5eb980dda1c74b75f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a988eeb0812d68f55c65b465f16ced185a30e5a63c1761f88de68ca628ed007f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a988eeb0812d68f55c65b465f16ced185a30e5a63c1761f88de68ca628ed007f->enter($__internal_a988eeb0812d68f55c65b465f16ced185a30e5a63c1761f88de68ca628ed007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39b5644406fe0a6cb735981cfb6da634d99794f799702fef055f55c27c997f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b5644406fe0a6cb735981cfb6da634d99794f799702fef055f55c27c997f36->enter($__internal_39b5644406fe0a6cb735981cfb6da634d99794f799702fef055f55c27c997f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39b5644406fe0a6cb735981cfb6da634d99794f799702fef055f55c27c997f36->leave($__internal_39b5644406fe0a6cb735981cfb6da634d99794f799702fef055f55c27c997f36_prof);

        
        $__internal_a988eeb0812d68f55c65b465f16ced185a30e5a63c1761f88de68ca628ed007f->leave($__internal_a988eeb0812d68f55c65b465f16ced185a30e5a63c1761f88de68ca628ed007f_prof);

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
