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
        $__internal_4268d522a700000334a1e9431efda5d7ba4cd9962ec606301d990d9fa7965712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4268d522a700000334a1e9431efda5d7ba4cd9962ec606301d990d9fa7965712->enter($__internal_4268d522a700000334a1e9431efda5d7ba4cd9962ec606301d990d9fa7965712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bfe2cc602196792d2226789b97bfa3c9db9c27b8739bd9eaf8965d199a0eb1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe2cc602196792d2226789b97bfa3c9db9c27b8739bd9eaf8965d199a0eb1cf->enter($__internal_bfe2cc602196792d2226789b97bfa3c9db9c27b8739bd9eaf8965d199a0eb1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4268d522a700000334a1e9431efda5d7ba4cd9962ec606301d990d9fa7965712->leave($__internal_4268d522a700000334a1e9431efda5d7ba4cd9962ec606301d990d9fa7965712_prof);

        
        $__internal_bfe2cc602196792d2226789b97bfa3c9db9c27b8739bd9eaf8965d199a0eb1cf->leave($__internal_bfe2cc602196792d2226789b97bfa3c9db9c27b8739bd9eaf8965d199a0eb1cf_prof);

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
