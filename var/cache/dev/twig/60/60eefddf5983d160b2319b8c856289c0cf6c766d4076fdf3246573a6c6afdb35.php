<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5aca845113715f6b4d0f6c77c21d5061d3b5865b850bd4ae945a86d72a168d95 extends Twig_Template
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
        $__internal_8b46279cc5cb7516128f67aa6596770a07b43f3bb31e3f891cb104a05a2d94f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b46279cc5cb7516128f67aa6596770a07b43f3bb31e3f891cb104a05a2d94f7->enter($__internal_8b46279cc5cb7516128f67aa6596770a07b43f3bb31e3f891cb104a05a2d94f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2acaac212650e77e0f9324d1a1d781a6c0b7f68b5d263c5e99b50e75aff6efb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acaac212650e77e0f9324d1a1d781a6c0b7f68b5d263c5e99b50e75aff6efb1->enter($__internal_2acaac212650e77e0f9324d1a1d781a6c0b7f68b5d263c5e99b50e75aff6efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8b46279cc5cb7516128f67aa6596770a07b43f3bb31e3f891cb104a05a2d94f7->leave($__internal_8b46279cc5cb7516128f67aa6596770a07b43f3bb31e3f891cb104a05a2d94f7_prof);

        
        $__internal_2acaac212650e77e0f9324d1a1d781a6c0b7f68b5d263c5e99b50e75aff6efb1->leave($__internal_2acaac212650e77e0f9324d1a1d781a6c0b7f68b5d263c5e99b50e75aff6efb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
