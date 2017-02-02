<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bb54be4cb4a7645d4a1c27c85d4f85eb1a3cb4e11cf6ddeb54fabf6e4bc10cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb54be4cb4a7645d4a1c27c85d4f85eb1a3cb4e11cf6ddeb54fabf6e4bc10cc->enter($__internal_2bb54be4cb4a7645d4a1c27c85d4f85eb1a3cb4e11cf6ddeb54fabf6e4bc10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ca35dabfb2238a46c9256248b319903cc115681e828ab551ab2dcd9292a10b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca35dabfb2238a46c9256248b319903cc115681e828ab551ab2dcd9292a10b94->enter($__internal_ca35dabfb2238a46c9256248b319903cc115681e828ab551ab2dcd9292a10b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb54be4cb4a7645d4a1c27c85d4f85eb1a3cb4e11cf6ddeb54fabf6e4bc10cc->leave($__internal_2bb54be4cb4a7645d4a1c27c85d4f85eb1a3cb4e11cf6ddeb54fabf6e4bc10cc_prof);

        
        $__internal_ca35dabfb2238a46c9256248b319903cc115681e828ab551ab2dcd9292a10b94->leave($__internal_ca35dabfb2238a46c9256248b319903cc115681e828ab551ab2dcd9292a10b94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ad4fc681546a0239587688853ac1384ab7a7103c86492fe08917067a1589282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad4fc681546a0239587688853ac1384ab7a7103c86492fe08917067a1589282->enter($__internal_3ad4fc681546a0239587688853ac1384ab7a7103c86492fe08917067a1589282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4899ccfa960736cb9765c9d1bcb7f961bc1891a002561c79ac806bf69a96740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4899ccfa960736cb9765c9d1bcb7f961bc1891a002561c79ac806bf69a96740b->enter($__internal_4899ccfa960736cb9765c9d1bcb7f961bc1891a002561c79ac806bf69a96740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4899ccfa960736cb9765c9d1bcb7f961bc1891a002561c79ac806bf69a96740b->leave($__internal_4899ccfa960736cb9765c9d1bcb7f961bc1891a002561c79ac806bf69a96740b_prof);

        
        $__internal_3ad4fc681546a0239587688853ac1384ab7a7103c86492fe08917067a1589282->leave($__internal_3ad4fc681546a0239587688853ac1384ab7a7103c86492fe08917067a1589282_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e387d3d3fe2821c7ef06f230def8130fd528423b36ec12f9b1da5880fd34991b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e387d3d3fe2821c7ef06f230def8130fd528423b36ec12f9b1da5880fd34991b->enter($__internal_e387d3d3fe2821c7ef06f230def8130fd528423b36ec12f9b1da5880fd34991b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6781b0841d3afcde218f4a63e9748410eeea99553b68eaba735fd015e217a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6781b0841d3afcde218f4a63e9748410eeea99553b68eaba735fd015e217a78->enter($__internal_d6781b0841d3afcde218f4a63e9748410eeea99553b68eaba735fd015e217a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6781b0841d3afcde218f4a63e9748410eeea99553b68eaba735fd015e217a78->leave($__internal_d6781b0841d3afcde218f4a63e9748410eeea99553b68eaba735fd015e217a78_prof);

        
        $__internal_e387d3d3fe2821c7ef06f230def8130fd528423b36ec12f9b1da5880fd34991b->leave($__internal_e387d3d3fe2821c7ef06f230def8130fd528423b36ec12f9b1da5880fd34991b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e555f037295a889a37edcff46fa4466529d45ba53e0fb8cc49da7616148903e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e555f037295a889a37edcff46fa4466529d45ba53e0fb8cc49da7616148903e->enter($__internal_2e555f037295a889a37edcff46fa4466529d45ba53e0fb8cc49da7616148903e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2ffb83e577d61c9743f3fb1c82af3417093c94c3d914a8275b54c53d1d5b21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ffb83e577d61c9743f3fb1c82af3417093c94c3d914a8275b54c53d1d5b21f->enter($__internal_e2ffb83e577d61c9743f3fb1c82af3417093c94c3d914a8275b54c53d1d5b21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e2ffb83e577d61c9743f3fb1c82af3417093c94c3d914a8275b54c53d1d5b21f->leave($__internal_e2ffb83e577d61c9743f3fb1c82af3417093c94c3d914a8275b54c53d1d5b21f_prof);

        
        $__internal_2e555f037295a889a37edcff46fa4466529d45ba53e0fb8cc49da7616148903e->leave($__internal_2e555f037295a889a37edcff46fa4466529d45ba53e0fb8cc49da7616148903e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
