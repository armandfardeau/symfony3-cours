<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c387b734d28ecd94e88ab7d66e63e1a85c172855140a1478774a8c1e73bce04d extends Twig_Template
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
        $__internal_8aa19af6eeb0e8fddd2f2c60cfc368e9b154a9ea6a9eed98ccb487179cc5a4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa19af6eeb0e8fddd2f2c60cfc368e9b154a9ea6a9eed98ccb487179cc5a4d8->enter($__internal_8aa19af6eeb0e8fddd2f2c60cfc368e9b154a9ea6a9eed98ccb487179cc5a4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9431a343b26afa53c373f9eaa9f898eca3222297fd86fbed0f27a8c967fb7d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9431a343b26afa53c373f9eaa9f898eca3222297fd86fbed0f27a8c967fb7d2e->enter($__internal_9431a343b26afa53c373f9eaa9f898eca3222297fd86fbed0f27a8c967fb7d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8aa19af6eeb0e8fddd2f2c60cfc368e9b154a9ea6a9eed98ccb487179cc5a4d8->leave($__internal_8aa19af6eeb0e8fddd2f2c60cfc368e9b154a9ea6a9eed98ccb487179cc5a4d8_prof);

        
        $__internal_9431a343b26afa53c373f9eaa9f898eca3222297fd86fbed0f27a8c967fb7d2e->leave($__internal_9431a343b26afa53c373f9eaa9f898eca3222297fd86fbed0f27a8c967fb7d2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
