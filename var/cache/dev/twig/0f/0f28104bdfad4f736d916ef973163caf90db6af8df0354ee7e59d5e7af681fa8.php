<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5c0c67b2c3ca5c864a666f379b4c0c1385f0015a6543fd938ee148f3a2cd6912 extends Twig_Template
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
        $__internal_96bdec4547809d473386e642face5e99d112eabfe982b9da7c9ca5398a909628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bdec4547809d473386e642face5e99d112eabfe982b9da7c9ca5398a909628->enter($__internal_96bdec4547809d473386e642face5e99d112eabfe982b9da7c9ca5398a909628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f2036007598c7aee8ba24bf30e1d3270717933d1aa6880aa34a8b0ea94294614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2036007598c7aee8ba24bf30e1d3270717933d1aa6880aa34a8b0ea94294614->enter($__internal_f2036007598c7aee8ba24bf30e1d3270717933d1aa6880aa34a8b0ea94294614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_96bdec4547809d473386e642face5e99d112eabfe982b9da7c9ca5398a909628->leave($__internal_96bdec4547809d473386e642face5e99d112eabfe982b9da7c9ca5398a909628_prof);

        
        $__internal_f2036007598c7aee8ba24bf30e1d3270717933d1aa6880aa34a8b0ea94294614->leave($__internal_f2036007598c7aee8ba24bf30e1d3270717933d1aa6880aa34a8b0ea94294614_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
