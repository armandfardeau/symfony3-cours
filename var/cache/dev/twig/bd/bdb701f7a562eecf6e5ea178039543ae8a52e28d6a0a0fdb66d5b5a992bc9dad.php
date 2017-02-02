<?php

/* student/index.html.twig */
class __TwigTemplate_a8cd51dbcbd0adac7e33032ba33ac56206847c539991a3a691b35006c41704d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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
        $__internal_f9ec2ac837b5f05ed33eb35c1f849a185bfdb1cb8e54c463b7681e23af7bd541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ec2ac837b5f05ed33eb35c1f849a185bfdb1cb8e54c463b7681e23af7bd541->enter($__internal_f9ec2ac837b5f05ed33eb35c1f849a185bfdb1cb8e54c463b7681e23af7bd541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_c30185d1733b30dcf64f67da85eba96fbffd9727c08fd96111dd92f6617a8531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30185d1733b30dcf64f67da85eba96fbffd9727c08fd96111dd92f6617a8531->enter($__internal_c30185d1733b30dcf64f67da85eba96fbffd9727c08fd96111dd92f6617a8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ec2ac837b5f05ed33eb35c1f849a185bfdb1cb8e54c463b7681e23af7bd541->leave($__internal_f9ec2ac837b5f05ed33eb35c1f849a185bfdb1cb8e54c463b7681e23af7bd541_prof);

        
        $__internal_c30185d1733b30dcf64f67da85eba96fbffd9727c08fd96111dd92f6617a8531->leave($__internal_c30185d1733b30dcf64f67da85eba96fbffd9727c08fd96111dd92f6617a8531_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5dc1c950ad39c33ee8667ae7ec638472d8475e15b5a1cdc1f2894b85aaa64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5dc1c950ad39c33ee8667ae7ec638472d8475e15b5a1cdc1f2894b85aaa64a->enter($__internal_5a5dc1c950ad39c33ee8667ae7ec638472d8475e15b5a1cdc1f2894b85aaa64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d16954bb4e9fe8945dcbbc157c0c401d85dc4b8fb45f2af8b1a54dde0da523bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16954bb4e9fe8945dcbbc157c0c401d85dc4b8fb45f2af8b1a54dde0da523bb->enter($__internal_d16954bb4e9fe8945dcbbc157c0c401d85dc4b8fb45f2af8b1a54dde0da523bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_d16954bb4e9fe8945dcbbc157c0c401d85dc4b8fb45f2af8b1a54dde0da523bb->leave($__internal_d16954bb4e9fe8945dcbbc157c0c401d85dc4b8fb45f2af8b1a54dde0da523bb_prof);

        
        $__internal_5a5dc1c950ad39c33ee8667ae7ec638472d8475e15b5a1cdc1f2894b85aaa64a->leave($__internal_5a5dc1c950ad39c33ee8667ae7ec638472d8475e15b5a1cdc1f2894b85aaa64a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6bbc603fab18caedbda8e0347c5db4164db09184ed6313181c0f73e9ec2e395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bbc603fab18caedbda8e0347c5db4164db09184ed6313181c0f73e9ec2e395->enter($__internal_a6bbc603fab18caedbda8e0347c5db4164db09184ed6313181c0f73e9ec2e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b8b60e980aea1db5c9dfe6831ddd9771a0fba102cb69ba35f484b9ecffdd775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8b60e980aea1db5c9dfe6831ddd9771a0fba102cb69ba35f484b9ecffdd775->enter($__internal_6b8b60e980aea1db5c9dfe6831ddd9771a0fba102cb69ba35f484b9ecffdd775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the StudentController:index page</h1>
";
        
        $__internal_6b8b60e980aea1db5c9dfe6831ddd9771a0fba102cb69ba35f484b9ecffdd775->leave($__internal_6b8b60e980aea1db5c9dfe6831ddd9771a0fba102cb69ba35f484b9ecffdd775_prof);

        
        $__internal_a6bbc603fab18caedbda8e0347c5db4164db09184ed6313181c0f73e9ec2e395->leave($__internal_a6bbc603fab18caedbda8e0347c5db4164db09184ed6313181c0f73e9ec2e395_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
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
", "student/index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/student/index.html.twig");
    }
}
