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
        $__internal_8bbe6c1262e4a4742bc3685caafdcde9430e70f95d6af483d9787a2ae56d449b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbe6c1262e4a4742bc3685caafdcde9430e70f95d6af483d9787a2ae56d449b->enter($__internal_8bbe6c1262e4a4742bc3685caafdcde9430e70f95d6af483d9787a2ae56d449b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f4fe3d01d4940651d92976c024aaf0bc3102ebe91d64cb5f625f2bde3e07550c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fe3d01d4940651d92976c024aaf0bc3102ebe91d64cb5f625f2bde3e07550c->enter($__internal_f4fe3d01d4940651d92976c024aaf0bc3102ebe91d64cb5f625f2bde3e07550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8bbe6c1262e4a4742bc3685caafdcde9430e70f95d6af483d9787a2ae56d449b->leave($__internal_8bbe6c1262e4a4742bc3685caafdcde9430e70f95d6af483d9787a2ae56d449b_prof);

        
        $__internal_f4fe3d01d4940651d92976c024aaf0bc3102ebe91d64cb5f625f2bde3e07550c->leave($__internal_f4fe3d01d4940651d92976c024aaf0bc3102ebe91d64cb5f625f2bde3e07550c_prof);

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
