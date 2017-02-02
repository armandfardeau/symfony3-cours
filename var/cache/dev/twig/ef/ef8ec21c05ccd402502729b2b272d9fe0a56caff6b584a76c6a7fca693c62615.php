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
        $__internal_999ab491e3d91b599431bdc1dc29b18f6e10076a38ce6599395cf37757b0dece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999ab491e3d91b599431bdc1dc29b18f6e10076a38ce6599395cf37757b0dece->enter($__internal_999ab491e3d91b599431bdc1dc29b18f6e10076a38ce6599395cf37757b0dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_435498668d1ef354f7cb6efd2465de2f09bc6d92e3d71c276f034315f99a4b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435498668d1ef354f7cb6efd2465de2f09bc6d92e3d71c276f034315f99a4b3c->enter($__internal_435498668d1ef354f7cb6efd2465de2f09bc6d92e3d71c276f034315f99a4b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_999ab491e3d91b599431bdc1dc29b18f6e10076a38ce6599395cf37757b0dece->leave($__internal_999ab491e3d91b599431bdc1dc29b18f6e10076a38ce6599395cf37757b0dece_prof);

        
        $__internal_435498668d1ef354f7cb6efd2465de2f09bc6d92e3d71c276f034315f99a4b3c->leave($__internal_435498668d1ef354f7cb6efd2465de2f09bc6d92e3d71c276f034315f99a4b3c_prof);

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
