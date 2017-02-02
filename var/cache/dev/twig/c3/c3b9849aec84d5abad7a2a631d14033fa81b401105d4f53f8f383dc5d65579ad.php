<?php

/* :Student:index.html.twig */
class __TwigTemplate_c55671ae665521d5e90e335216f1651f69886ec836f69a170b9c02783ee9b216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Student:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5274d3093ca89a959ebe19fdf1515c77d6f4837336a2c5541f909e2a3118e25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5274d3093ca89a959ebe19fdf1515c77d6f4837336a2c5541f909e2a3118e25e->enter($__internal_5274d3093ca89a959ebe19fdf1515c77d6f4837336a2c5541f909e2a3118e25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $__internal_ad0acb6646ec63481150bbea4253917d029c2094bd6f307ec7a0774617e4acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0acb6646ec63481150bbea4253917d029c2094bd6f307ec7a0774617e4acc6->enter($__internal_ad0acb6646ec63481150bbea4253917d029c2094bd6f307ec7a0774617e4acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5274d3093ca89a959ebe19fdf1515c77d6f4837336a2c5541f909e2a3118e25e->leave($__internal_5274d3093ca89a959ebe19fdf1515c77d6f4837336a2c5541f909e2a3118e25e_prof);

        
        $__internal_ad0acb6646ec63481150bbea4253917d029c2094bd6f307ec7a0774617e4acc6->leave($__internal_ad0acb6646ec63481150bbea4253917d029c2094bd6f307ec7a0774617e4acc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f16de18482a46924214e5c4f0d58d8a44a87ef9e3ad0159c67d8f363803c06b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16de18482a46924214e5c4f0d58d8a44a87ef9e3ad0159c67d8f363803c06b0->enter($__internal_f16de18482a46924214e5c4f0d58d8a44a87ef9e3ad0159c67d8f363803c06b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6234abee45e813d878e9aa60dbdd5c6f41960df59132b51b8032abe01b552900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6234abee45e813d878e9aa60dbdd5c6f41960df59132b51b8032abe01b552900->enter($__internal_6234abee45e813d878e9aa60dbdd5c6f41960df59132b51b8032abe01b552900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_6234abee45e813d878e9aa60dbdd5c6f41960df59132b51b8032abe01b552900->leave($__internal_6234abee45e813d878e9aa60dbdd5c6f41960df59132b51b8032abe01b552900_prof);

        
        $__internal_f16de18482a46924214e5c4f0d58d8a44a87ef9e3ad0159c67d8f363803c06b0->leave($__internal_f16de18482a46924214e5c4f0d58d8a44a87ef9e3ad0159c67d8f363803c06b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3caff75073e36f3792a77d4f350e7d82e08648aaa0705ba69dd065901e5ab6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caff75073e36f3792a77d4f350e7d82e08648aaa0705ba69dd065901e5ab6dd->enter($__internal_3caff75073e36f3792a77d4f350e7d82e08648aaa0705ba69dd065901e5ab6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c944614145f8c7c8f12a736622b905dfbfe951b9ac8ea1bc9ae6b30108137fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c944614145f8c7c8f12a736622b905dfbfe951b9ac8ea1bc9ae6b30108137fed->enter($__internal_c944614145f8c7c8f12a736622b905dfbfe951b9ac8ea1bc9ae6b30108137fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the StudentController:index page</h1>
";
        
        $__internal_c944614145f8c7c8f12a736622b905dfbfe951b9ac8ea1bc9ae6b30108137fed->leave($__internal_c944614145f8c7c8f12a736622b905dfbfe951b9ac8ea1bc9ae6b30108137fed_prof);

        
        $__internal_3caff75073e36f3792a77d4f350e7d82e08648aaa0705ba69dd065901e5ab6dd->leave($__internal_3caff75073e36f3792a77d4f350e7d82e08648aaa0705ba69dd065901e5ab6dd_prof);

    }

    public function getTemplateName()
    {
        return ":Student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}JustBundle:StudentController:index{% endblock %}

{% block body %}
<h1>Welcome to the StudentController:index page</h1>
{% endblock %}
", ":Student:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/Student/index.html.twig");
    }
}
