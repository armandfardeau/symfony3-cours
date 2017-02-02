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
        $__internal_a06b1d08c43ce01a924acb126d3dddf963fda5150962a6fa37b97dada543caf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06b1d08c43ce01a924acb126d3dddf963fda5150962a6fa37b97dada543caf7->enter($__internal_a06b1d08c43ce01a924acb126d3dddf963fda5150962a6fa37b97dada543caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f3ee873284d8c3943795df187dd4e6b2cb88e3f055a9ca21354d0f50c1670cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ee873284d8c3943795df187dd4e6b2cb88e3f055a9ca21354d0f50c1670cad->enter($__internal_f3ee873284d8c3943795df187dd4e6b2cb88e3f055a9ca21354d0f50c1670cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a06b1d08c43ce01a924acb126d3dddf963fda5150962a6fa37b97dada543caf7->leave($__internal_a06b1d08c43ce01a924acb126d3dddf963fda5150962a6fa37b97dada543caf7_prof);

        
        $__internal_f3ee873284d8c3943795df187dd4e6b2cb88e3f055a9ca21354d0f50c1670cad->leave($__internal_f3ee873284d8c3943795df187dd4e6b2cb88e3f055a9ca21354d0f50c1670cad_prof);

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
