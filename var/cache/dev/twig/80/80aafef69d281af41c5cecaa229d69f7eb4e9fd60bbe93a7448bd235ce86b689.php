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
        $__internal_851a468b91d797aed9306d76dfbbe16d8d1a1285ea41a59a30cb75261a84bf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851a468b91d797aed9306d76dfbbe16d8d1a1285ea41a59a30cb75261a84bf46->enter($__internal_851a468b91d797aed9306d76dfbbe16d8d1a1285ea41a59a30cb75261a84bf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_237df8c5e76a65c01b573882a6c91fce74149eddc99fc68f6bdad5a7893d4525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237df8c5e76a65c01b573882a6c91fce74149eddc99fc68f6bdad5a7893d4525->enter($__internal_237df8c5e76a65c01b573882a6c91fce74149eddc99fc68f6bdad5a7893d4525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_851a468b91d797aed9306d76dfbbe16d8d1a1285ea41a59a30cb75261a84bf46->leave($__internal_851a468b91d797aed9306d76dfbbe16d8d1a1285ea41a59a30cb75261a84bf46_prof);

        
        $__internal_237df8c5e76a65c01b573882a6c91fce74149eddc99fc68f6bdad5a7893d4525->leave($__internal_237df8c5e76a65c01b573882a6c91fce74149eddc99fc68f6bdad5a7893d4525_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a9267714eaa9c2d5a9776b24dcc66b5c3838ed65763f1c5d84587dd5a18e318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9267714eaa9c2d5a9776b24dcc66b5c3838ed65763f1c5d84587dd5a18e318->enter($__internal_7a9267714eaa9c2d5a9776b24dcc66b5c3838ed65763f1c5d84587dd5a18e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2046c6289fb8fd284cc2fb282f703c6fb02a00e22dd76d31c828b74f9daf0034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2046c6289fb8fd284cc2fb282f703c6fb02a00e22dd76d31c828b74f9daf0034->enter($__internal_2046c6289fb8fd284cc2fb282f703c6fb02a00e22dd76d31c828b74f9daf0034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2046c6289fb8fd284cc2fb282f703c6fb02a00e22dd76d31c828b74f9daf0034->leave($__internal_2046c6289fb8fd284cc2fb282f703c6fb02a00e22dd76d31c828b74f9daf0034_prof);

        
        $__internal_7a9267714eaa9c2d5a9776b24dcc66b5c3838ed65763f1c5d84587dd5a18e318->leave($__internal_7a9267714eaa9c2d5a9776b24dcc66b5c3838ed65763f1c5d84587dd5a18e318_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee68eab36c89a1488277431c37e61e8372a137dcd9b984bd71fa6ad325258acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee68eab36c89a1488277431c37e61e8372a137dcd9b984bd71fa6ad325258acb->enter($__internal_ee68eab36c89a1488277431c37e61e8372a137dcd9b984bd71fa6ad325258acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d90076a496a27ff15d2584d88533f6bfd06449fd8c0615c4cf5210f80c213f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d90076a496a27ff15d2584d88533f6bfd06449fd8c0615c4cf5210f80c213f4->enter($__internal_1d90076a496a27ff15d2584d88533f6bfd06449fd8c0615c4cf5210f80c213f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d90076a496a27ff15d2584d88533f6bfd06449fd8c0615c4cf5210f80c213f4->leave($__internal_1d90076a496a27ff15d2584d88533f6bfd06449fd8c0615c4cf5210f80c213f4_prof);

        
        $__internal_ee68eab36c89a1488277431c37e61e8372a137dcd9b984bd71fa6ad325258acb->leave($__internal_ee68eab36c89a1488277431c37e61e8372a137dcd9b984bd71fa6ad325258acb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b38078a9a79a58c5b7117ec83c05764a8b5003921cdaf924f729adc8922ed2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38078a9a79a58c5b7117ec83c05764a8b5003921cdaf924f729adc8922ed2ce->enter($__internal_b38078a9a79a58c5b7117ec83c05764a8b5003921cdaf924f729adc8922ed2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f931a54efe97071f16a4abae68aaba7c4b78670027ca9f52b718b42f25121de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f931a54efe97071f16a4abae68aaba7c4b78670027ca9f52b718b42f25121de4->enter($__internal_f931a54efe97071f16a4abae68aaba7c4b78670027ca9f52b718b42f25121de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f931a54efe97071f16a4abae68aaba7c4b78670027ca9f52b718b42f25121de4->leave($__internal_f931a54efe97071f16a4abae68aaba7c4b78670027ca9f52b718b42f25121de4_prof);

        
        $__internal_b38078a9a79a58c5b7117ec83c05764a8b5003921cdaf924f729adc8922ed2ce->leave($__internal_b38078a9a79a58c5b7117ec83c05764a8b5003921cdaf924f729adc8922ed2ce_prof);

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
