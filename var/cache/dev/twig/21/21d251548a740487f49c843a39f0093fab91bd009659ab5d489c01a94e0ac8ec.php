<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_62a10e200f7a70a0fd4359fa40354d38ae6d4f533de2d52f1ff4d3fc67174289 extends Twig_Template
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
        $__internal_2a88a719eee4b2d7740b3805a5f8a9c0a9e405ab758f36afb9a63e0e2e5d199a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a88a719eee4b2d7740b3805a5f8a9c0a9e405ab758f36afb9a63e0e2e5d199a->enter($__internal_2a88a719eee4b2d7740b3805a5f8a9c0a9e405ab758f36afb9a63e0e2e5d199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5034dedbd018f37cb1e2259771dd2bafd51f3ee670ac6022b1f6aa2d631a2cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5034dedbd018f37cb1e2259771dd2bafd51f3ee670ac6022b1f6aa2d631a2cff->enter($__internal_5034dedbd018f37cb1e2259771dd2bafd51f3ee670ac6022b1f6aa2d631a2cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2a88a719eee4b2d7740b3805a5f8a9c0a9e405ab758f36afb9a63e0e2e5d199a->leave($__internal_2a88a719eee4b2d7740b3805a5f8a9c0a9e405ab758f36afb9a63e0e2e5d199a_prof);

        
        $__internal_5034dedbd018f37cb1e2259771dd2bafd51f3ee670ac6022b1f6aa2d631a2cff->leave($__internal_5034dedbd018f37cb1e2259771dd2bafd51f3ee670ac6022b1f6aa2d631a2cff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
