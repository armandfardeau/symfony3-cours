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
        $__internal_2df96c55ba8f90f4471501e1678e4a966930a80110ac5d676431e6754b331d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df96c55ba8f90f4471501e1678e4a966930a80110ac5d676431e6754b331d14->enter($__internal_2df96c55ba8f90f4471501e1678e4a966930a80110ac5d676431e6754b331d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fc7503aaded8d9e24cfed201bdd0088896f02b2a5d2fdf8f995c56fa403c39b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7503aaded8d9e24cfed201bdd0088896f02b2a5d2fdf8f995c56fa403c39b8->enter($__internal_fc7503aaded8d9e24cfed201bdd0088896f02b2a5d2fdf8f995c56fa403c39b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2df96c55ba8f90f4471501e1678e4a966930a80110ac5d676431e6754b331d14->leave($__internal_2df96c55ba8f90f4471501e1678e4a966930a80110ac5d676431e6754b331d14_prof);

        
        $__internal_fc7503aaded8d9e24cfed201bdd0088896f02b2a5d2fdf8f995c56fa403c39b8->leave($__internal_fc7503aaded8d9e24cfed201bdd0088896f02b2a5d2fdf8f995c56fa403c39b8_prof);

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
