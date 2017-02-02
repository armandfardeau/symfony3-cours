<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ffda8159062be7a32a793340756b9e056b24bff6d68385f4c5f0a96042de7370 extends Twig_Template
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
        $__internal_63cb247e08307d5a7bdc881bf9034ed83c1256249c816b277b14be41833de558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cb247e08307d5a7bdc881bf9034ed83c1256249c816b277b14be41833de558->enter($__internal_63cb247e08307d5a7bdc881bf9034ed83c1256249c816b277b14be41833de558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b927d057e29de5b0391fb0b70e8154c01a3f2e48b81bb5e6f7041622634508b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b927d057e29de5b0391fb0b70e8154c01a3f2e48b81bb5e6f7041622634508b1->enter($__internal_b927d057e29de5b0391fb0b70e8154c01a3f2e48b81bb5e6f7041622634508b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_63cb247e08307d5a7bdc881bf9034ed83c1256249c816b277b14be41833de558->leave($__internal_63cb247e08307d5a7bdc881bf9034ed83c1256249c816b277b14be41833de558_prof);

        
        $__internal_b927d057e29de5b0391fb0b70e8154c01a3f2e48b81bb5e6f7041622634508b1->leave($__internal_b927d057e29de5b0391fb0b70e8154c01a3f2e48b81bb5e6f7041622634508b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
