<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_256745554f04cfe790ef5d40e1da1c3674a582da1973d7786a8b99432a698a91 extends Twig_Template
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
        $__internal_66674ef4d4ce2612d8f4f2ba2e253bc42897f6af604b69015eafae97483e52b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66674ef4d4ce2612d8f4f2ba2e253bc42897f6af604b69015eafae97483e52b0->enter($__internal_66674ef4d4ce2612d8f4f2ba2e253bc42897f6af604b69015eafae97483e52b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c29ccdfe0b8e831b118b069133ed70faf70717ab538162642bd22879b426b726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29ccdfe0b8e831b118b069133ed70faf70717ab538162642bd22879b426b726->enter($__internal_c29ccdfe0b8e831b118b069133ed70faf70717ab538162642bd22879b426b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_66674ef4d4ce2612d8f4f2ba2e253bc42897f6af604b69015eafae97483e52b0->leave($__internal_66674ef4d4ce2612d8f4f2ba2e253bc42897f6af604b69015eafae97483e52b0_prof);

        
        $__internal_c29ccdfe0b8e831b118b069133ed70faf70717ab538162642bd22879b426b726->leave($__internal_c29ccdfe0b8e831b118b069133ed70faf70717ab538162642bd22879b426b726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}