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
        $__internal_7753a3735bd4a665abc34b2a9d9558b7fc80ffcc4bd18809dfe69d1db54c0d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7753a3735bd4a665abc34b2a9d9558b7fc80ffcc4bd18809dfe69d1db54c0d61->enter($__internal_7753a3735bd4a665abc34b2a9d9558b7fc80ffcc4bd18809dfe69d1db54c0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b6a2caebbe7e3fa3c7a0704b70cb00441fe1fa6162e04cafb82b222c2e458367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a2caebbe7e3fa3c7a0704b70cb00441fe1fa6162e04cafb82b222c2e458367->enter($__internal_b6a2caebbe7e3fa3c7a0704b70cb00441fe1fa6162e04cafb82b222c2e458367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_7753a3735bd4a665abc34b2a9d9558b7fc80ffcc4bd18809dfe69d1db54c0d61->leave($__internal_7753a3735bd4a665abc34b2a9d9558b7fc80ffcc4bd18809dfe69d1db54c0d61_prof);

        
        $__internal_b6a2caebbe7e3fa3c7a0704b70cb00441fe1fa6162e04cafb82b222c2e458367->leave($__internal_b6a2caebbe7e3fa3c7a0704b70cb00441fe1fa6162e04cafb82b222c2e458367_prof);

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
