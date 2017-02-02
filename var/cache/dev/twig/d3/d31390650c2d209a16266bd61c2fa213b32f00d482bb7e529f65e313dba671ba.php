<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_76a0c5773bb5b255556530475d00d15bf0b29977ea7b49bf612402a4778068f5 extends Twig_Template
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
        $__internal_9ba21217540639fe4555b2a4682866e079392b12016884ecdd2fc0e8b3548b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba21217540639fe4555b2a4682866e079392b12016884ecdd2fc0e8b3548b87->enter($__internal_9ba21217540639fe4555b2a4682866e079392b12016884ecdd2fc0e8b3548b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9815987ee26b95ff75cfd6cde9ad8eda7a569411834920d528f1b3a703cbfe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9815987ee26b95ff75cfd6cde9ad8eda7a569411834920d528f1b3a703cbfe0d->enter($__internal_9815987ee26b95ff75cfd6cde9ad8eda7a569411834920d528f1b3a703cbfe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9ba21217540639fe4555b2a4682866e079392b12016884ecdd2fc0e8b3548b87->leave($__internal_9ba21217540639fe4555b2a4682866e079392b12016884ecdd2fc0e8b3548b87_prof);

        
        $__internal_9815987ee26b95ff75cfd6cde9ad8eda7a569411834920d528f1b3a703cbfe0d->leave($__internal_9815987ee26b95ff75cfd6cde9ad8eda7a569411834920d528f1b3a703cbfe0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
