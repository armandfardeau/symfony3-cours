<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b4b960b91f7d6a8e81148c8ab4e7852ac91d37311eceaa570e2b761377a5bad1 extends Twig_Template
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
        $__internal_4d666644210e4d3678f7dc49f4871be7a5270d40e8aa069b934c2f408eadca28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d666644210e4d3678f7dc49f4871be7a5270d40e8aa069b934c2f408eadca28->enter($__internal_4d666644210e4d3678f7dc49f4871be7a5270d40e8aa069b934c2f408eadca28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_15c88ff29c18868ace8b6fb5d7ee8c774e52a92aef3af534adafba01ae2fd309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c88ff29c18868ace8b6fb5d7ee8c774e52a92aef3af534adafba01ae2fd309->enter($__internal_15c88ff29c18868ace8b6fb5d7ee8c774e52a92aef3af534adafba01ae2fd309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4d666644210e4d3678f7dc49f4871be7a5270d40e8aa069b934c2f408eadca28->leave($__internal_4d666644210e4d3678f7dc49f4871be7a5270d40e8aa069b934c2f408eadca28_prof);

        
        $__internal_15c88ff29c18868ace8b6fb5d7ee8c774e52a92aef3af534adafba01ae2fd309->leave($__internal_15c88ff29c18868ace8b6fb5d7ee8c774e52a92aef3af534adafba01ae2fd309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
