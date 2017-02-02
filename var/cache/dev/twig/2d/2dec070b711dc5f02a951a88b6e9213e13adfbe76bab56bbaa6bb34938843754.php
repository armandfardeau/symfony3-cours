<?php

/* :studenttype:new.html.twig */
class __TwigTemplate_062ed430e4139e594b8388846c7614f60d46b8fcee0f6fdb396af5c52a9c39eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":studenttype:new.html.twig", 1);
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
        $__internal_9f85df24fc601b68f52ebb11790a1e8351722105f5b2be5c82427711d6c6188a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f85df24fc601b68f52ebb11790a1e8351722105f5b2be5c82427711d6c6188a->enter($__internal_9f85df24fc601b68f52ebb11790a1e8351722105f5b2be5c82427711d6c6188a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:new.html.twig"));

        $__internal_5504b70a6aa2426ad72df3b2eca66cfd4476ef23d205c7ca2bfc068dba8bc94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5504b70a6aa2426ad72df3b2eca66cfd4476ef23d205c7ca2bfc068dba8bc94b->enter($__internal_5504b70a6aa2426ad72df3b2eca66cfd4476ef23d205c7ca2bfc068dba8bc94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f85df24fc601b68f52ebb11790a1e8351722105f5b2be5c82427711d6c6188a->leave($__internal_9f85df24fc601b68f52ebb11790a1e8351722105f5b2be5c82427711d6c6188a_prof);

        
        $__internal_5504b70a6aa2426ad72df3b2eca66cfd4476ef23d205c7ca2bfc068dba8bc94b->leave($__internal_5504b70a6aa2426ad72df3b2eca66cfd4476ef23d205c7ca2bfc068dba8bc94b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c9ee51cf65f92a28f5a5d27ac2f627c102d336117147d3adc7bc1c0d8bafc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9ee51cf65f92a28f5a5d27ac2f627c102d336117147d3adc7bc1c0d8bafc88->enter($__internal_4c9ee51cf65f92a28f5a5d27ac2f627c102d336117147d3adc7bc1c0d8bafc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18743dcd21c76df302212850048177ea81307942b48c077542b62ff61b03369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18743dcd21c76df302212850048177ea81307942b48c077542b62ff61b03369c->enter($__internal_18743dcd21c76df302212850048177ea81307942b48c077542b62ff61b03369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18743dcd21c76df302212850048177ea81307942b48c077542b62ff61b03369c->leave($__internal_18743dcd21c76df302212850048177ea81307942b48c077542b62ff61b03369c_prof);

        
        $__internal_4c9ee51cf65f92a28f5a5d27ac2f627c102d336117147d3adc7bc1c0d8bafc88->leave($__internal_4c9ee51cf65f92a28f5a5d27ac2f627c102d336117147d3adc7bc1c0d8bafc88_prof);

    }

    public function getTemplateName()
    {
        return ":studenttype:new.html.twig";
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
", ":studenttype:new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/new.html.twig");
    }
}
