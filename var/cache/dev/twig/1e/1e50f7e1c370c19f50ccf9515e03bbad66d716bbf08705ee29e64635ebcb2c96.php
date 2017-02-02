<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_80c3db3f30ec77e28530c9569fc822f14bcdbd8a0b86020b0a95d4920595e3ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0347a618a7d2c50e4fd006a4898915c936683d39bca3eea63d6780e35eb455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0347a618a7d2c50e4fd006a4898915c936683d39bca3eea63d6780e35eb455->enter($__internal_9d0347a618a7d2c50e4fd006a4898915c936683d39bca3eea63d6780e35eb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7c29d3a851fb9478ee5ec9238c7ad83bb91783114d11b34ddc1ffe1942accacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c29d3a851fb9478ee5ec9238c7ad83bb91783114d11b34ddc1ffe1942accacf->enter($__internal_7c29d3a851fb9478ee5ec9238c7ad83bb91783114d11b34ddc1ffe1942accacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9d0347a618a7d2c50e4fd006a4898915c936683d39bca3eea63d6780e35eb455->leave($__internal_9d0347a618a7d2c50e4fd006a4898915c936683d39bca3eea63d6780e35eb455_prof);

        
        $__internal_7c29d3a851fb9478ee5ec9238c7ad83bb91783114d11b34ddc1ffe1942accacf->leave($__internal_7c29d3a851fb9478ee5ec9238c7ad83bb91783114d11b34ddc1ffe1942accacf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
