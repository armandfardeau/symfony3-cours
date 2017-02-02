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
        $__internal_b38addb3bb4f898bffb5b2e83bfb535bf6d34d0f1016ea3799bd2f4ae9bce05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38addb3bb4f898bffb5b2e83bfb535bf6d34d0f1016ea3799bd2f4ae9bce05f->enter($__internal_b38addb3bb4f898bffb5b2e83bfb535bf6d34d0f1016ea3799bd2f4ae9bce05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_35dcd0d18603119313f0696e7ccc8dd8a95851dab6dc293ca8d301a95b6c3903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dcd0d18603119313f0696e7ccc8dd8a95851dab6dc293ca8d301a95b6c3903->enter($__internal_35dcd0d18603119313f0696e7ccc8dd8a95851dab6dc293ca8d301a95b6c3903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b38addb3bb4f898bffb5b2e83bfb535bf6d34d0f1016ea3799bd2f4ae9bce05f->leave($__internal_b38addb3bb4f898bffb5b2e83bfb535bf6d34d0f1016ea3799bd2f4ae9bce05f_prof);

        
        $__internal_35dcd0d18603119313f0696e7ccc8dd8a95851dab6dc293ca8d301a95b6c3903->leave($__internal_35dcd0d18603119313f0696e7ccc8dd8a95851dab6dc293ca8d301a95b6c3903_prof);

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
