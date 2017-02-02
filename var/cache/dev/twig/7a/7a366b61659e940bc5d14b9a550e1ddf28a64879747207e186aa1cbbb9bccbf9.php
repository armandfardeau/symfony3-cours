<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d80f5488a760cbb06855744c9b6b151a0ef2c891c65aff590a206b2f7f9a65b0 extends Twig_Template
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
        $__internal_df9570bc6be229bf4c7b6a7c31507bbff5d0b7bdc1b0f9cf225ead63a75d4292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9570bc6be229bf4c7b6a7c31507bbff5d0b7bdc1b0f9cf225ead63a75d4292->enter($__internal_df9570bc6be229bf4c7b6a7c31507bbff5d0b7bdc1b0f9cf225ead63a75d4292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8cab1d9b864f48a51cafeb6a6b7c3a17c3468490a3ed28262d61dcf67570980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cab1d9b864f48a51cafeb6a6b7c3a17c3468490a3ed28262d61dcf67570980c->enter($__internal_8cab1d9b864f48a51cafeb6a6b7c3a17c3468490a3ed28262d61dcf67570980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_df9570bc6be229bf4c7b6a7c31507bbff5d0b7bdc1b0f9cf225ead63a75d4292->leave($__internal_df9570bc6be229bf4c7b6a7c31507bbff5d0b7bdc1b0f9cf225ead63a75d4292_prof);

        
        $__internal_8cab1d9b864f48a51cafeb6a6b7c3a17c3468490a3ed28262d61dcf67570980c->leave($__internal_8cab1d9b864f48a51cafeb6a6b7c3a17c3468490a3ed28262d61dcf67570980c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
