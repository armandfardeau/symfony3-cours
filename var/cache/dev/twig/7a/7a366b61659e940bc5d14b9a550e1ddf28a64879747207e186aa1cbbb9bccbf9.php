<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d80f5488a760cbb06855744c9b6b151a0ef2c891c65aff590a206b2f7f9a65b0 extends Twig_Template
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
        $__internal_920bc466bd09016cec1a05828bd5f03da92f785cf0f8a0b7bd99012f0bd509ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920bc466bd09016cec1a05828bd5f03da92f785cf0f8a0b7bd99012f0bd509ef->enter($__internal_920bc466bd09016cec1a05828bd5f03da92f785cf0f8a0b7bd99012f0bd509ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d6defef1cd08acc6e32df080ac8aa3bf1dd51fed32becea99e04915152894434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6defef1cd08acc6e32df080ac8aa3bf1dd51fed32becea99e04915152894434->enter($__internal_d6defef1cd08acc6e32df080ac8aa3bf1dd51fed32becea99e04915152894434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_920bc466bd09016cec1a05828bd5f03da92f785cf0f8a0b7bd99012f0bd509ef->leave($__internal_920bc466bd09016cec1a05828bd5f03da92f785cf0f8a0b7bd99012f0bd509ef_prof);

        
        $__internal_d6defef1cd08acc6e32df080ac8aa3bf1dd51fed32becea99e04915152894434->leave($__internal_d6defef1cd08acc6e32df080ac8aa3bf1dd51fed32becea99e04915152894434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
