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
        $__internal_5e93e7b2431a5bd84cad5263f92b62d067891c98362b3f80749a52caa87f6348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e93e7b2431a5bd84cad5263f92b62d067891c98362b3f80749a52caa87f6348->enter($__internal_5e93e7b2431a5bd84cad5263f92b62d067891c98362b3f80749a52caa87f6348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_35268568e11533283a3086faab07fe40d23370c20a55717c70e9c7210f7f0650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35268568e11533283a3086faab07fe40d23370c20a55717c70e9c7210f7f0650->enter($__internal_35268568e11533283a3086faab07fe40d23370c20a55717c70e9c7210f7f0650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5e93e7b2431a5bd84cad5263f92b62d067891c98362b3f80749a52caa87f6348->leave($__internal_5e93e7b2431a5bd84cad5263f92b62d067891c98362b3f80749a52caa87f6348_prof);

        
        $__internal_35268568e11533283a3086faab07fe40d23370c20a55717c70e9c7210f7f0650->leave($__internal_35268568e11533283a3086faab07fe40d23370c20a55717c70e9c7210f7f0650_prof);

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
