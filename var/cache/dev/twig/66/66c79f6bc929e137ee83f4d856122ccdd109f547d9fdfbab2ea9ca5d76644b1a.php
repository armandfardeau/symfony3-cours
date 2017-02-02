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
        $__internal_0211e3a5000c2688484b814a4091ed4c120299ee11a0606f2a4b217e5fd08ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0211e3a5000c2688484b814a4091ed4c120299ee11a0606f2a4b217e5fd08ad7->enter($__internal_0211e3a5000c2688484b814a4091ed4c120299ee11a0606f2a4b217e5fd08ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c528b3e49eafef735ad68f8d94b8eee9d0bb8224bde50fb85e44362a5090a9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c528b3e49eafef735ad68f8d94b8eee9d0bb8224bde50fb85e44362a5090a9be->enter($__internal_c528b3e49eafef735ad68f8d94b8eee9d0bb8224bde50fb85e44362a5090a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0211e3a5000c2688484b814a4091ed4c120299ee11a0606f2a4b217e5fd08ad7->leave($__internal_0211e3a5000c2688484b814a4091ed4c120299ee11a0606f2a4b217e5fd08ad7_prof);

        
        $__internal_c528b3e49eafef735ad68f8d94b8eee9d0bb8224bde50fb85e44362a5090a9be->leave($__internal_c528b3e49eafef735ad68f8d94b8eee9d0bb8224bde50fb85e44362a5090a9be_prof);

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
