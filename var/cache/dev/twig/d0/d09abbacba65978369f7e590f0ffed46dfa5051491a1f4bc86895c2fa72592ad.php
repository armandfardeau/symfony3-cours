<?php

/* studenttype/edit.html.twig */
class __TwigTemplate_7223fb2fdde8d8cba61f463e91cf8d5ef26614cf511bba9581aa7cacb5b15237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/edit.html.twig", 1);
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
        $__internal_9d1ff0172cf8f14342aa9b8510873204d8244bbb16e32ff6c72b60d6bdb45f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1ff0172cf8f14342aa9b8510873204d8244bbb16e32ff6c72b60d6bdb45f1e->enter($__internal_9d1ff0172cf8f14342aa9b8510873204d8244bbb16e32ff6c72b60d6bdb45f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/edit.html.twig"));

        $__internal_f6dfebcf7162a95b52b2f63d3037e5f8b5631b2bdd4e80ac904585a203d2ce56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dfebcf7162a95b52b2f63d3037e5f8b5631b2bdd4e80ac904585a203d2ce56->enter($__internal_f6dfebcf7162a95b52b2f63d3037e5f8b5631b2bdd4e80ac904585a203d2ce56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1ff0172cf8f14342aa9b8510873204d8244bbb16e32ff6c72b60d6bdb45f1e->leave($__internal_9d1ff0172cf8f14342aa9b8510873204d8244bbb16e32ff6c72b60d6bdb45f1e_prof);

        
        $__internal_f6dfebcf7162a95b52b2f63d3037e5f8b5631b2bdd4e80ac904585a203d2ce56->leave($__internal_f6dfebcf7162a95b52b2f63d3037e5f8b5631b2bdd4e80ac904585a203d2ce56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7af74694676041b7ed9afccb6504de2ea9db1cc50cbfc728e8a6c2587b0b108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7af74694676041b7ed9afccb6504de2ea9db1cc50cbfc728e8a6c2587b0b108->enter($__internal_f7af74694676041b7ed9afccb6504de2ea9db1cc50cbfc728e8a6c2587b0b108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13abce6dc78a121b5febc5e1c95881177376bc41df43892cab3a30598746479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13abce6dc78a121b5febc5e1c95881177376bc41df43892cab3a30598746479b->enter($__internal_13abce6dc78a121b5febc5e1c95881177376bc41df43892cab3a30598746479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13abce6dc78a121b5febc5e1c95881177376bc41df43892cab3a30598746479b->leave($__internal_13abce6dc78a121b5febc5e1c95881177376bc41df43892cab3a30598746479b_prof);

        
        $__internal_f7af74694676041b7ed9afccb6504de2ea9db1cc50cbfc728e8a6c2587b0b108->leave($__internal_f7af74694676041b7ed9afccb6504de2ea9db1cc50cbfc728e8a6c2587b0b108_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/edit.html.twig";
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
", "studenttype/edit.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/studenttype/edit.html.twig");
    }
}
