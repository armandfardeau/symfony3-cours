<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ab32176a561edf7eb15c88bb409bd3cb4a59c900e57b197253baaf1d9670db19 extends Twig_Template
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
        $__internal_c5512bab40e956a2d571ba83720bdc22ce02b5c9ad324f36493218ab0368e04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5512bab40e956a2d571ba83720bdc22ce02b5c9ad324f36493218ab0368e04d->enter($__internal_c5512bab40e956a2d571ba83720bdc22ce02b5c9ad324f36493218ab0368e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_182c2b4fe00123c29a8abc68aa1e1e635e52aaf830dc25ed6d68d238da2b66e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182c2b4fe00123c29a8abc68aa1e1e635e52aaf830dc25ed6d68d238da2b66e9->enter($__internal_182c2b4fe00123c29a8abc68aa1e1e635e52aaf830dc25ed6d68d238da2b66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c5512bab40e956a2d571ba83720bdc22ce02b5c9ad324f36493218ab0368e04d->leave($__internal_c5512bab40e956a2d571ba83720bdc22ce02b5c9ad324f36493218ab0368e04d_prof);

        
        $__internal_182c2b4fe00123c29a8abc68aa1e1e635e52aaf830dc25ed6d68d238da2b66e9->leave($__internal_182c2b4fe00123c29a8abc68aa1e1e635e52aaf830dc25ed6d68d238da2b66e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
