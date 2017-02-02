<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94c9df8239fbc331265e709adef3c7ae5ed284f9112d5ffbab5616aac1f1bf6e extends Twig_Template
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
        $__internal_afa54c741a4c50d365622e2ecdb17f4069632554800b1679cfc3e1590c98402e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa54c741a4c50d365622e2ecdb17f4069632554800b1679cfc3e1590c98402e->enter($__internal_afa54c741a4c50d365622e2ecdb17f4069632554800b1679cfc3e1590c98402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5f880c59a33a0ec5c4921c5fce04c309d4ecbe874bdf93ae234de17bc0f7822a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f880c59a33a0ec5c4921c5fce04c309d4ecbe874bdf93ae234de17bc0f7822a->enter($__internal_5f880c59a33a0ec5c4921c5fce04c309d4ecbe874bdf93ae234de17bc0f7822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_afa54c741a4c50d365622e2ecdb17f4069632554800b1679cfc3e1590c98402e->leave($__internal_afa54c741a4c50d365622e2ecdb17f4069632554800b1679cfc3e1590c98402e_prof);

        
        $__internal_5f880c59a33a0ec5c4921c5fce04c309d4ecbe874bdf93ae234de17bc0f7822a->leave($__internal_5f880c59a33a0ec5c4921c5fce04c309d4ecbe874bdf93ae234de17bc0f7822a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
