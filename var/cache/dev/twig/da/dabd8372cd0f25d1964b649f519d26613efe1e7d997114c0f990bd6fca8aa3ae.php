<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f0e813d3b2e2b1cd3f438eebce67ea0c9472233ea868f05f6b1f19f33c0ff3c5 extends Twig_Template
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
        $__internal_544d4b0ab2ccf95b988de9fe4a35082a5fca524273b9334ee0b46284eb13b074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544d4b0ab2ccf95b988de9fe4a35082a5fca524273b9334ee0b46284eb13b074->enter($__internal_544d4b0ab2ccf95b988de9fe4a35082a5fca524273b9334ee0b46284eb13b074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_edd4949b8a126171b61b6df6465f7cd5cd124c94abc10cb89d2aa0850ea14f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd4949b8a126171b61b6df6465f7cd5cd124c94abc10cb89d2aa0850ea14f7d->enter($__internal_edd4949b8a126171b61b6df6465f7cd5cd124c94abc10cb89d2aa0850ea14f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_544d4b0ab2ccf95b988de9fe4a35082a5fca524273b9334ee0b46284eb13b074->leave($__internal_544d4b0ab2ccf95b988de9fe4a35082a5fca524273b9334ee0b46284eb13b074_prof);

        
        $__internal_edd4949b8a126171b61b6df6465f7cd5cd124c94abc10cb89d2aa0850ea14f7d->leave($__internal_edd4949b8a126171b61b6df6465f7cd5cd124c94abc10cb89d2aa0850ea14f7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
