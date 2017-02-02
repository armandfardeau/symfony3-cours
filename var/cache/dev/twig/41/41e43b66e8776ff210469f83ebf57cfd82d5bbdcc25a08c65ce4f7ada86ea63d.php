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
        $__internal_e5ee6d7f96442aee52542b8c574b6c77ed4729883ba03071e41361140573c6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ee6d7f96442aee52542b8c574b6c77ed4729883ba03071e41361140573c6b2->enter($__internal_e5ee6d7f96442aee52542b8c574b6c77ed4729883ba03071e41361140573c6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8cd51fa49b2abb16dd5cddad618d390583fdd0f5097e6cfcd305dc7a6945faa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd51fa49b2abb16dd5cddad618d390583fdd0f5097e6cfcd305dc7a6945faa8->enter($__internal_8cd51fa49b2abb16dd5cddad618d390583fdd0f5097e6cfcd305dc7a6945faa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5ee6d7f96442aee52542b8c574b6c77ed4729883ba03071e41361140573c6b2->leave($__internal_e5ee6d7f96442aee52542b8c574b6c77ed4729883ba03071e41361140573c6b2_prof);

        
        $__internal_8cd51fa49b2abb16dd5cddad618d390583fdd0f5097e6cfcd305dc7a6945faa8->leave($__internal_8cd51fa49b2abb16dd5cddad618d390583fdd0f5097e6cfcd305dc7a6945faa8_prof);

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
