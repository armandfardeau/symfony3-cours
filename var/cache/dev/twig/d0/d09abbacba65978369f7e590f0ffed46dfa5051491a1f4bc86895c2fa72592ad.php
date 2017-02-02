<?php

/* :studenttype:edit.html.twig */
class __TwigTemplate_7223fb2fdde8d8cba61f463e91cf8d5ef26614cf511bba9581aa7cacb5b15237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":studenttype:edit.html.twig", 1);
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
        $__internal_2c45c2daba2e38d0a50297a47c30ab8da32fbfa56779c7e7bbb0c23303c65aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c45c2daba2e38d0a50297a47c30ab8da32fbfa56779c7e7bbb0c23303c65aac->enter($__internal_2c45c2daba2e38d0a50297a47c30ab8da32fbfa56779c7e7bbb0c23303c65aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:edit.html.twig"));

        $__internal_406f88603955bd0c87fac2a234f88cd21c6f3df54366c640ac2924133f2e1958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406f88603955bd0c87fac2a234f88cd21c6f3df54366c640ac2924133f2e1958->enter($__internal_406f88603955bd0c87fac2a234f88cd21c6f3df54366c640ac2924133f2e1958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":studenttype:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c45c2daba2e38d0a50297a47c30ab8da32fbfa56779c7e7bbb0c23303c65aac->leave($__internal_2c45c2daba2e38d0a50297a47c30ab8da32fbfa56779c7e7bbb0c23303c65aac_prof);

        
        $__internal_406f88603955bd0c87fac2a234f88cd21c6f3df54366c640ac2924133f2e1958->leave($__internal_406f88603955bd0c87fac2a234f88cd21c6f3df54366c640ac2924133f2e1958_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de82cf9a292e23348b021795bc2cdf82ad5978e6a1debb12b08d4451f08a6759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de82cf9a292e23348b021795bc2cdf82ad5978e6a1debb12b08d4451f08a6759->enter($__internal_de82cf9a292e23348b021795bc2cdf82ad5978e6a1debb12b08d4451f08a6759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c240b697617e528863bc186bda9033a75505c6cd0fe6712a1eb67f76f4c2ef2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c240b697617e528863bc186bda9033a75505c6cd0fe6712a1eb67f76f4c2ef2c->enter($__internal_c240b697617e528863bc186bda9033a75505c6cd0fe6712a1eb67f76f4c2ef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
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
        
        $__internal_c240b697617e528863bc186bda9033a75505c6cd0fe6712a1eb67f76f4c2ef2c->leave($__internal_c240b697617e528863bc186bda9033a75505c6cd0fe6712a1eb67f76f4c2ef2c_prof);

        
        $__internal_de82cf9a292e23348b021795bc2cdf82ad5978e6a1debb12b08d4451f08a6759->leave($__internal_de82cf9a292e23348b021795bc2cdf82ad5978e6a1debb12b08d4451f08a6759_prof);

    }

    public function getTemplateName()
    {
        return ":studenttype:edit.html.twig";
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
    <h1>Studenttype edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":studenttype:edit.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/edit.html.twig");
    }
}
