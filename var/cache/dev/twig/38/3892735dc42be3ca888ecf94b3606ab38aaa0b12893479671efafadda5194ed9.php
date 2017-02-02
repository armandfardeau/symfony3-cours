<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_af622b2bac9820e190ebcaf8eca29099106fbf75d2150d6cea394b13590e608a extends Twig_Template
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
        $__internal_5c6b0cc30b65bf22c1d12e7f1a046fa29036caa8444a9309ddfd2157f3a75dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6b0cc30b65bf22c1d12e7f1a046fa29036caa8444a9309ddfd2157f3a75dcf->enter($__internal_5c6b0cc30b65bf22c1d12e7f1a046fa29036caa8444a9309ddfd2157f3a75dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f4eb9864b9a6bb101a3afdb531e93cba84f862dd3d1e835a5834109844a15a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4eb9864b9a6bb101a3afdb531e93cba84f862dd3d1e835a5834109844a15a18->enter($__internal_f4eb9864b9a6bb101a3afdb531e93cba84f862dd3d1e835a5834109844a15a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5c6b0cc30b65bf22c1d12e7f1a046fa29036caa8444a9309ddfd2157f3a75dcf->leave($__internal_5c6b0cc30b65bf22c1d12e7f1a046fa29036caa8444a9309ddfd2157f3a75dcf_prof);

        
        $__internal_f4eb9864b9a6bb101a3afdb531e93cba84f862dd3d1e835a5834109844a15a18->leave($__internal_f4eb9864b9a6bb101a3afdb531e93cba84f862dd3d1e835a5834109844a15a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
