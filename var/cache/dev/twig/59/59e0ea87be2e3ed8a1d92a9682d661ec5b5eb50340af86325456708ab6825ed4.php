<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5da5dcdc7bf23566dbd489f2177fcfc57816ec1991693a4fe32d5ce50c443e23 extends Twig_Template
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
        $__internal_24bf4f79f7c3f4ab2c1d76325c97958e845cdfcf58ee790bb90a155f08db9163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bf4f79f7c3f4ab2c1d76325c97958e845cdfcf58ee790bb90a155f08db9163->enter($__internal_24bf4f79f7c3f4ab2c1d76325c97958e845cdfcf58ee790bb90a155f08db9163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_02ba86e02f881a37b88cd3e1e0c03658b4ddd06c53997ae3c59009341e922623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba86e02f881a37b88cd3e1e0c03658b4ddd06c53997ae3c59009341e922623->enter($__internal_02ba86e02f881a37b88cd3e1e0c03658b4ddd06c53997ae3c59009341e922623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_24bf4f79f7c3f4ab2c1d76325c97958e845cdfcf58ee790bb90a155f08db9163->leave($__internal_24bf4f79f7c3f4ab2c1d76325c97958e845cdfcf58ee790bb90a155f08db9163_prof);

        
        $__internal_02ba86e02f881a37b88cd3e1e0c03658b4ddd06c53997ae3c59009341e922623->leave($__internal_02ba86e02f881a37b88cd3e1e0c03658b4ddd06c53997ae3c59009341e922623_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
