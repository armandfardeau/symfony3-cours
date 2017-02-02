<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5fa0070558946b21045be1beb90b4d67d9900164722187d85be0dd0ade1ab8cf extends Twig_Template
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
        $__internal_c8527ef9edb71559d735e442cea4e85d77c874090cfd92d841a82defd4eb58f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8527ef9edb71559d735e442cea4e85d77c874090cfd92d841a82defd4eb58f3->enter($__internal_c8527ef9edb71559d735e442cea4e85d77c874090cfd92d841a82defd4eb58f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4c0efdb097eedd986420d2a5ede452f7742691b46c776e40cc1d3753ee9d8322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0efdb097eedd986420d2a5ede452f7742691b46c776e40cc1d3753ee9d8322->enter($__internal_4c0efdb097eedd986420d2a5ede452f7742691b46c776e40cc1d3753ee9d8322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c8527ef9edb71559d735e442cea4e85d77c874090cfd92d841a82defd4eb58f3->leave($__internal_c8527ef9edb71559d735e442cea4e85d77c874090cfd92d841a82defd4eb58f3_prof);

        
        $__internal_4c0efdb097eedd986420d2a5ede452f7742691b46c776e40cc1d3753ee9d8322->leave($__internal_4c0efdb097eedd986420d2a5ede452f7742691b46c776e40cc1d3753ee9d8322_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
