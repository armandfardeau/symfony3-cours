<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3220d21018a82a6b0032cbb1fe1721da33902d35253b6dae3228d5c428cdea4f extends Twig_Template
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
        $__internal_90501ea8b678b605da1b6535b62b354c72c855a437352cd50adc45edba7ff1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90501ea8b678b605da1b6535b62b354c72c855a437352cd50adc45edba7ff1c2->enter($__internal_90501ea8b678b605da1b6535b62b354c72c855a437352cd50adc45edba7ff1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6e6882d3026aa679a478c4219f4911da100f9342f60abdb7696c4315c70c9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6882d3026aa679a478c4219f4911da100f9342f60abdb7696c4315c70c9eea->enter($__internal_6e6882d3026aa679a478c4219f4911da100f9342f60abdb7696c4315c70c9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_90501ea8b678b605da1b6535b62b354c72c855a437352cd50adc45edba7ff1c2->leave($__internal_90501ea8b678b605da1b6535b62b354c72c855a437352cd50adc45edba7ff1c2_prof);

        
        $__internal_6e6882d3026aa679a478c4219f4911da100f9342f60abdb7696c4315c70c9eea->leave($__internal_6e6882d3026aa679a478c4219f4911da100f9342f60abdb7696c4315c70c9eea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
