<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_31019be8f3658de3e0074a7ef0f250b84b6159ad072e568acf6f697c69e48448 extends Twig_Template
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
        $__internal_e6dc01532dde2d61d8b9b3dd490f8d4553f9c8f0ea6836a7fcc4e1c23d50bd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dc01532dde2d61d8b9b3dd490f8d4553f9c8f0ea6836a7fcc4e1c23d50bd23->enter($__internal_e6dc01532dde2d61d8b9b3dd490f8d4553f9c8f0ea6836a7fcc4e1c23d50bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0b2b24c79a883b6164d38d727a4eaa6790537069dc4acb7c6e8181cdc5c61693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2b24c79a883b6164d38d727a4eaa6790537069dc4acb7c6e8181cdc5c61693->enter($__internal_0b2b24c79a883b6164d38d727a4eaa6790537069dc4acb7c6e8181cdc5c61693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e6dc01532dde2d61d8b9b3dd490f8d4553f9c8f0ea6836a7fcc4e1c23d50bd23->leave($__internal_e6dc01532dde2d61d8b9b3dd490f8d4553f9c8f0ea6836a7fcc4e1c23d50bd23_prof);

        
        $__internal_0b2b24c79a883b6164d38d727a4eaa6790537069dc4acb7c6e8181cdc5c61693->leave($__internal_0b2b24c79a883b6164d38d727a4eaa6790537069dc4acb7c6e8181cdc5c61693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
