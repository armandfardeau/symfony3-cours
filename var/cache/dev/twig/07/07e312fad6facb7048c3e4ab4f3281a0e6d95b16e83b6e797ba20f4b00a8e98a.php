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
        $__internal_39b986a0bf2e98656293e8246dba7ec707b32c040ba02f526bcd4fc4b9284a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b986a0bf2e98656293e8246dba7ec707b32c040ba02f526bcd4fc4b9284a77->enter($__internal_39b986a0bf2e98656293e8246dba7ec707b32c040ba02f526bcd4fc4b9284a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_528001744b66102e5b197284d069f2959e30ddf3cad9e29f44b98ec2d7c000b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528001744b66102e5b197284d069f2959e30ddf3cad9e29f44b98ec2d7c000b1->enter($__internal_528001744b66102e5b197284d069f2959e30ddf3cad9e29f44b98ec2d7c000b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_39b986a0bf2e98656293e8246dba7ec707b32c040ba02f526bcd4fc4b9284a77->leave($__internal_39b986a0bf2e98656293e8246dba7ec707b32c040ba02f526bcd4fc4b9284a77_prof);

        
        $__internal_528001744b66102e5b197284d069f2959e30ddf3cad9e29f44b98ec2d7c000b1->leave($__internal_528001744b66102e5b197284d069f2959e30ddf3cad9e29f44b98ec2d7c000b1_prof);

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
