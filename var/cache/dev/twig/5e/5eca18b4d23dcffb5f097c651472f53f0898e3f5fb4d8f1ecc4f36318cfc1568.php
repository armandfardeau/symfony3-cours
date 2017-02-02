<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d4517dc8d29ac5ea8236bf21c91bba556b72131f57c116c3110b3b42ea024f59 extends Twig_Template
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
        $__internal_3f83d761ffc009a90e07a9934cb955e98d6756f9352b0a2a91aa5518e37c5765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f83d761ffc009a90e07a9934cb955e98d6756f9352b0a2a91aa5518e37c5765->enter($__internal_3f83d761ffc009a90e07a9934cb955e98d6756f9352b0a2a91aa5518e37c5765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3ab3cf65482c06c49dac16f4075b9b8014fbaf9fe9501580e50973d20369ee2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab3cf65482c06c49dac16f4075b9b8014fbaf9fe9501580e50973d20369ee2a->enter($__internal_3ab3cf65482c06c49dac16f4075b9b8014fbaf9fe9501580e50973d20369ee2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3f83d761ffc009a90e07a9934cb955e98d6756f9352b0a2a91aa5518e37c5765->leave($__internal_3f83d761ffc009a90e07a9934cb955e98d6756f9352b0a2a91aa5518e37c5765_prof);

        
        $__internal_3ab3cf65482c06c49dac16f4075b9b8014fbaf9fe9501580e50973d20369ee2a->leave($__internal_3ab3cf65482c06c49dac16f4075b9b8014fbaf9fe9501580e50973d20369ee2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
