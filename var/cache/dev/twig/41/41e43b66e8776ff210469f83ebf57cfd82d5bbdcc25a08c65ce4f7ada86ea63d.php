<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_81e8dfe185047b83da6891c373ebcce8fee80971196d51b886bbc86852ed8550 extends Twig_Template
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
        $__internal_8ce4d31ba45a7cbb240c31f6a9cb874ee422e78e545a9f49d7b8c358ec14fc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce4d31ba45a7cbb240c31f6a9cb874ee422e78e545a9f49d7b8c358ec14fc19->enter($__internal_8ce4d31ba45a7cbb240c31f6a9cb874ee422e78e545a9f49d7b8c358ec14fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a7ea583829669325ac5b4750bbf21ec541e9efee3d5114aa80c57e448aba2d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ea583829669325ac5b4750bbf21ec541e9efee3d5114aa80c57e448aba2d69->enter($__internal_a7ea583829669325ac5b4750bbf21ec541e9efee3d5114aa80c57e448aba2d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8ce4d31ba45a7cbb240c31f6a9cb874ee422e78e545a9f49d7b8c358ec14fc19->leave($__internal_8ce4d31ba45a7cbb240c31f6a9cb874ee422e78e545a9f49d7b8c358ec14fc19_prof);

        
        $__internal_a7ea583829669325ac5b4750bbf21ec541e9efee3d5114aa80c57e448aba2d69->leave($__internal_a7ea583829669325ac5b4750bbf21ec541e9efee3d5114aa80c57e448aba2d69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
