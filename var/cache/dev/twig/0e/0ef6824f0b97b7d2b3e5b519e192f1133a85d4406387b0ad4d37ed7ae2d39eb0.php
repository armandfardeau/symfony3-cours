<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d86ee7bfc1abd7727ee34994787133350ec08be78fa3fedfed1df36f8d9aa643 extends Twig_Template
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
        $__internal_1781fe8b3debab7dc68d3843dea7399ab64fd956b233a6f4eabdb9fb6a1c7788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1781fe8b3debab7dc68d3843dea7399ab64fd956b233a6f4eabdb9fb6a1c7788->enter($__internal_1781fe8b3debab7dc68d3843dea7399ab64fd956b233a6f4eabdb9fb6a1c7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_78db0adb21cbfc34823eaad0914b6c4879e12fe0cbe89cc9af1c30106899aa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78db0adb21cbfc34823eaad0914b6c4879e12fe0cbe89cc9af1c30106899aa6b->enter($__internal_78db0adb21cbfc34823eaad0914b6c4879e12fe0cbe89cc9af1c30106899aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1781fe8b3debab7dc68d3843dea7399ab64fd956b233a6f4eabdb9fb6a1c7788->leave($__internal_1781fe8b3debab7dc68d3843dea7399ab64fd956b233a6f4eabdb9fb6a1c7788_prof);

        
        $__internal_78db0adb21cbfc34823eaad0914b6c4879e12fe0cbe89cc9af1c30106899aa6b->leave($__internal_78db0adb21cbfc34823eaad0914b6c4879e12fe0cbe89cc9af1c30106899aa6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
