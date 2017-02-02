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
        $__internal_61a84d4700057071c0252fc3329a1656b6cdf360e524907ec51ba15822d02d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a84d4700057071c0252fc3329a1656b6cdf360e524907ec51ba15822d02d44->enter($__internal_61a84d4700057071c0252fc3329a1656b6cdf360e524907ec51ba15822d02d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4fcdee1a5dad3d44bb32be610933581c9e5d9d862f59b4a886d90dad24a11746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcdee1a5dad3d44bb32be610933581c9e5d9d862f59b4a886d90dad24a11746->enter($__internal_4fcdee1a5dad3d44bb32be610933581c9e5d9d862f59b4a886d90dad24a11746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_61a84d4700057071c0252fc3329a1656b6cdf360e524907ec51ba15822d02d44->leave($__internal_61a84d4700057071c0252fc3329a1656b6cdf360e524907ec51ba15822d02d44_prof);

        
        $__internal_4fcdee1a5dad3d44bb32be610933581c9e5d9d862f59b4a886d90dad24a11746->leave($__internal_4fcdee1a5dad3d44bb32be610933581c9e5d9d862f59b4a886d90dad24a11746_prof);

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
