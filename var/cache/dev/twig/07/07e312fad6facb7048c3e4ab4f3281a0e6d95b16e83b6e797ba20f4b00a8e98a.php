<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7c4c4c9a0815998a8f16644ca2ed89b58f38b2a8ffad9c34d7f9f8d8ce512cd5 extends Twig_Template
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
        $__internal_fab47545b5a23aa4e677c9c0b12b7fd32d10757b96d766b24b7a952dda154a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab47545b5a23aa4e677c9c0b12b7fd32d10757b96d766b24b7a952dda154a07->enter($__internal_fab47545b5a23aa4e677c9c0b12b7fd32d10757b96d766b24b7a952dda154a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9ea377823c39cee607377143a417e620e556af67f19b5dd7b8cbb55498fe23ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea377823c39cee607377143a417e620e556af67f19b5dd7b8cbb55498fe23ef->enter($__internal_9ea377823c39cee607377143a417e620e556af67f19b5dd7b8cbb55498fe23ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fab47545b5a23aa4e677c9c0b12b7fd32d10757b96d766b24b7a952dda154a07->leave($__internal_fab47545b5a23aa4e677c9c0b12b7fd32d10757b96d766b24b7a952dda154a07_prof);

        
        $__internal_9ea377823c39cee607377143a417e620e556af67f19b5dd7b8cbb55498fe23ef->leave($__internal_9ea377823c39cee607377143a417e620e556af67f19b5dd7b8cbb55498fe23ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
