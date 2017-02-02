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
        $__internal_bc602f403cfa348d12802185e46a1156f472ce9a37a2c2bea24e1b585685ba83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc602f403cfa348d12802185e46a1156f472ce9a37a2c2bea24e1b585685ba83->enter($__internal_bc602f403cfa348d12802185e46a1156f472ce9a37a2c2bea24e1b585685ba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2afb6fc0506341e10e5000e9677b97ab22362d3f39f98a9cc3e4c440eba41289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afb6fc0506341e10e5000e9677b97ab22362d3f39f98a9cc3e4c440eba41289->enter($__internal_2afb6fc0506341e10e5000e9677b97ab22362d3f39f98a9cc3e4c440eba41289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bc602f403cfa348d12802185e46a1156f472ce9a37a2c2bea24e1b585685ba83->leave($__internal_bc602f403cfa348d12802185e46a1156f472ce9a37a2c2bea24e1b585685ba83_prof);

        
        $__internal_2afb6fc0506341e10e5000e9677b97ab22362d3f39f98a9cc3e4c440eba41289->leave($__internal_2afb6fc0506341e10e5000e9677b97ab22362d3f39f98a9cc3e4c440eba41289_prof);

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
