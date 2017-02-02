<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_203fe04463205e5f86e1c3bf527bcfdd59780b363985ecb3fef57d405bfbb6e6 extends Twig_Template
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
        $__internal_9da7a93531358bf0c03a759a4fa8fd54f6e3941d89a3f3c005495be0621b4bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da7a93531358bf0c03a759a4fa8fd54f6e3941d89a3f3c005495be0621b4bf4->enter($__internal_9da7a93531358bf0c03a759a4fa8fd54f6e3941d89a3f3c005495be0621b4bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c2c924cfba42e19d94f85167f2ecc1c98e243ffe1ede3ac8683b21ce5b35d6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c924cfba42e19d94f85167f2ecc1c98e243ffe1ede3ac8683b21ce5b35d6f2->enter($__internal_c2c924cfba42e19d94f85167f2ecc1c98e243ffe1ede3ac8683b21ce5b35d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9da7a93531358bf0c03a759a4fa8fd54f6e3941d89a3f3c005495be0621b4bf4->leave($__internal_9da7a93531358bf0c03a759a4fa8fd54f6e3941d89a3f3c005495be0621b4bf4_prof);

        
        $__internal_c2c924cfba42e19d94f85167f2ecc1c98e243ffe1ede3ac8683b21ce5b35d6f2->leave($__internal_c2c924cfba42e19d94f85167f2ecc1c98e243ffe1ede3ac8683b21ce5b35d6f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
