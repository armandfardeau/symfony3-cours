<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d270871b4ac0face649158a0dce203a0208d48b6282731aa3d8ee94d505e6708 extends Twig_Template
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
        $__internal_048758e0f0d320b8928eddfac62bfbfa84342b8f4d058bc717b76e6d6940085a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048758e0f0d320b8928eddfac62bfbfa84342b8f4d058bc717b76e6d6940085a->enter($__internal_048758e0f0d320b8928eddfac62bfbfa84342b8f4d058bc717b76e6d6940085a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0b7255ba0dd0d0ea9aae4d5c9b225722c6ddcc1716ba5176b15c7bbbb9f55131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7255ba0dd0d0ea9aae4d5c9b225722c6ddcc1716ba5176b15c7bbbb9f55131->enter($__internal_0b7255ba0dd0d0ea9aae4d5c9b225722c6ddcc1716ba5176b15c7bbbb9f55131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_048758e0f0d320b8928eddfac62bfbfa84342b8f4d058bc717b76e6d6940085a->leave($__internal_048758e0f0d320b8928eddfac62bfbfa84342b8f4d058bc717b76e6d6940085a_prof);

        
        $__internal_0b7255ba0dd0d0ea9aae4d5c9b225722c6ddcc1716ba5176b15c7bbbb9f55131->leave($__internal_0b7255ba0dd0d0ea9aae4d5c9b225722c6ddcc1716ba5176b15c7bbbb9f55131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
