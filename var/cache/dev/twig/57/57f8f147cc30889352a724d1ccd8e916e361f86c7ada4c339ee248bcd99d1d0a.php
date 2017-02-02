<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_808d4dc9b68ea87481d98ba08d0b92f8b474c111053bead4ef9bc2ee861dae6a extends Twig_Template
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
        $__internal_4918b526816be5e6a8a8641b9042db7c91cd3b8011e9eae63fed79c27c76a2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4918b526816be5e6a8a8641b9042db7c91cd3b8011e9eae63fed79c27c76a2ac->enter($__internal_4918b526816be5e6a8a8641b9042db7c91cd3b8011e9eae63fed79c27c76a2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_de318ba3322c2455d2f9f62ed6a56dc4959055d7483fea1cbe8180454e991bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de318ba3322c2455d2f9f62ed6a56dc4959055d7483fea1cbe8180454e991bf3->enter($__internal_de318ba3322c2455d2f9f62ed6a56dc4959055d7483fea1cbe8180454e991bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4918b526816be5e6a8a8641b9042db7c91cd3b8011e9eae63fed79c27c76a2ac->leave($__internal_4918b526816be5e6a8a8641b9042db7c91cd3b8011e9eae63fed79c27c76a2ac_prof);

        
        $__internal_de318ba3322c2455d2f9f62ed6a56dc4959055d7483fea1cbe8180454e991bf3->leave($__internal_de318ba3322c2455d2f9f62ed6a56dc4959055d7483fea1cbe8180454e991bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
