<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d0a018cbfaa324d09791e58bb934b1210c643060a2d729b5db1259b97772916e extends Twig_Template
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
        $__internal_8d5a4d2d4100b43b2448b1f67f98b7db90ef48aadaa83941d4408503c2bb2cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5a4d2d4100b43b2448b1f67f98b7db90ef48aadaa83941d4408503c2bb2cc9->enter($__internal_8d5a4d2d4100b43b2448b1f67f98b7db90ef48aadaa83941d4408503c2bb2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b5db7cf5000a5ddb28ed9f5e5ea3220c517664dc7ce1475a6188a7c12b0bdb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5db7cf5000a5ddb28ed9f5e5ea3220c517664dc7ce1475a6188a7c12b0bdb07->enter($__internal_b5db7cf5000a5ddb28ed9f5e5ea3220c517664dc7ce1475a6188a7c12b0bdb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d5a4d2d4100b43b2448b1f67f98b7db90ef48aadaa83941d4408503c2bb2cc9->leave($__internal_8d5a4d2d4100b43b2448b1f67f98b7db90ef48aadaa83941d4408503c2bb2cc9_prof);

        
        $__internal_b5db7cf5000a5ddb28ed9f5e5ea3220c517664dc7ce1475a6188a7c12b0bdb07->leave($__internal_b5db7cf5000a5ddb28ed9f5e5ea3220c517664dc7ce1475a6188a7c12b0bdb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
