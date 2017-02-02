<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d4517dc8d29ac5ea8236bf21c91bba556b72131f57c116c3110b3b42ea024f59 extends Twig_Template
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
        $__internal_b4035c6523d13db4a59463a1406cf2f02614079af9d24b0f453599974807a005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4035c6523d13db4a59463a1406cf2f02614079af9d24b0f453599974807a005->enter($__internal_b4035c6523d13db4a59463a1406cf2f02614079af9d24b0f453599974807a005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0610e98f623f1e1fe7d3ae48b69c7daf78172b491c8e4148a1800d2a2b13a24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0610e98f623f1e1fe7d3ae48b69c7daf78172b491c8e4148a1800d2a2b13a24d->enter($__internal_0610e98f623f1e1fe7d3ae48b69c7daf78172b491c8e4148a1800d2a2b13a24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b4035c6523d13db4a59463a1406cf2f02614079af9d24b0f453599974807a005->leave($__internal_b4035c6523d13db4a59463a1406cf2f02614079af9d24b0f453599974807a005_prof);

        
        $__internal_0610e98f623f1e1fe7d3ae48b69c7daf78172b491c8e4148a1800d2a2b13a24d->leave($__internal_0610e98f623f1e1fe7d3ae48b69c7daf78172b491c8e4148a1800d2a2b13a24d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
