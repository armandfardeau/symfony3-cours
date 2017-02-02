<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_256745554f04cfe790ef5d40e1da1c3674a582da1973d7786a8b99432a698a91 extends Twig_Template
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
        $__internal_e8df640d7890b0083b2acd7670275c34f04deccc6b15a5f3bd6f571a58f65eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8df640d7890b0083b2acd7670275c34f04deccc6b15a5f3bd6f571a58f65eb3->enter($__internal_e8df640d7890b0083b2acd7670275c34f04deccc6b15a5f3bd6f571a58f65eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_be889aa2b16a78a7d907a03bb95d6e4cd6f8d4f39ccd55d3cd654172edd41380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be889aa2b16a78a7d907a03bb95d6e4cd6f8d4f39ccd55d3cd654172edd41380->enter($__internal_be889aa2b16a78a7d907a03bb95d6e4cd6f8d4f39ccd55d3cd654172edd41380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e8df640d7890b0083b2acd7670275c34f04deccc6b15a5f3bd6f571a58f65eb3->leave($__internal_e8df640d7890b0083b2acd7670275c34f04deccc6b15a5f3bd6f571a58f65eb3_prof);

        
        $__internal_be889aa2b16a78a7d907a03bb95d6e4cd6f8d4f39ccd55d3cd654172edd41380->leave($__internal_be889aa2b16a78a7d907a03bb95d6e4cd6f8d4f39ccd55d3cd654172edd41380_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
