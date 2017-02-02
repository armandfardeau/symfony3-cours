<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ca59f6ff09ef41be0a348712221920938a2ef85e904faafef34bdb5eb0ebfabb extends Twig_Template
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
        $__internal_bc70ea74be86734f8acd3da9c97d1b41fc2a7d38ab41be677fac8e60c8f94983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc70ea74be86734f8acd3da9c97d1b41fc2a7d38ab41be677fac8e60c8f94983->enter($__internal_bc70ea74be86734f8acd3da9c97d1b41fc2a7d38ab41be677fac8e60c8f94983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8e831b93030e10df035ab85de30c4c989f7cf2059d714c3c611d25f991dce038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e831b93030e10df035ab85de30c4c989f7cf2059d714c3c611d25f991dce038->enter($__internal_8e831b93030e10df035ab85de30c4c989f7cf2059d714c3c611d25f991dce038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bc70ea74be86734f8acd3da9c97d1b41fc2a7d38ab41be677fac8e60c8f94983->leave($__internal_bc70ea74be86734f8acd3da9c97d1b41fc2a7d38ab41be677fac8e60c8f94983_prof);

        
        $__internal_8e831b93030e10df035ab85de30c4c989f7cf2059d714c3c611d25f991dce038->leave($__internal_8e831b93030e10df035ab85de30c4c989f7cf2059d714c3c611d25f991dce038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
