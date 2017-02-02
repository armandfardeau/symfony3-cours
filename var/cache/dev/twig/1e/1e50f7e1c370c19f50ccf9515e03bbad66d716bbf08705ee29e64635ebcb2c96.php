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
        $__internal_49b4c7aed6b47390acbda7f3b834f6a69d8d45389ba5086963a7a5c4e364a9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b4c7aed6b47390acbda7f3b834f6a69d8d45389ba5086963a7a5c4e364a9af->enter($__internal_49b4c7aed6b47390acbda7f3b834f6a69d8d45389ba5086963a7a5c4e364a9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_becc47966398c2f16070aee57025c3b622901326bb543c7063aa99456186907c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becc47966398c2f16070aee57025c3b622901326bb543c7063aa99456186907c->enter($__internal_becc47966398c2f16070aee57025c3b622901326bb543c7063aa99456186907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_49b4c7aed6b47390acbda7f3b834f6a69d8d45389ba5086963a7a5c4e364a9af->leave($__internal_49b4c7aed6b47390acbda7f3b834f6a69d8d45389ba5086963a7a5c4e364a9af_prof);

        
        $__internal_becc47966398c2f16070aee57025c3b622901326bb543c7063aa99456186907c->leave($__internal_becc47966398c2f16070aee57025c3b622901326bb543c7063aa99456186907c_prof);

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
