<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e2ce138134e3339c130f29a7f40a92f07ed0a3edf6f98d82f596cd940c2347a extends Twig_Template
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
        $__internal_bcdaffc463f85a9e61ecd6c126060dbc722a4093480d7a8e05e26d729b57cc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdaffc463f85a9e61ecd6c126060dbc722a4093480d7a8e05e26d729b57cc37->enter($__internal_bcdaffc463f85a9e61ecd6c126060dbc722a4093480d7a8e05e26d729b57cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_44bd9d1575c4b642ab5df21a191aa8b61e98866b77e7198ef65da56a502f2ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bd9d1575c4b642ab5df21a191aa8b61e98866b77e7198ef65da56a502f2ff8->enter($__internal_44bd9d1575c4b642ab5df21a191aa8b61e98866b77e7198ef65da56a502f2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bcdaffc463f85a9e61ecd6c126060dbc722a4093480d7a8e05e26d729b57cc37->leave($__internal_bcdaffc463f85a9e61ecd6c126060dbc722a4093480d7a8e05e26d729b57cc37_prof);

        
        $__internal_44bd9d1575c4b642ab5df21a191aa8b61e98866b77e7198ef65da56a502f2ff8->leave($__internal_44bd9d1575c4b642ab5df21a191aa8b61e98866b77e7198ef65da56a502f2ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
