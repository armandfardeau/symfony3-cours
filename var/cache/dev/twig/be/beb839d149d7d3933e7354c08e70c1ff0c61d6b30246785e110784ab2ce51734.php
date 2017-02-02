<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b029e64baf600ea0f08c5898f200efc24cc51940f568c3e2a24dca4dacb3653f extends Twig_Template
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
        $__internal_2a23a05d1afff686198b10926fdd3ead437266ca7498565c7a3aee93d7cafc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a23a05d1afff686198b10926fdd3ead437266ca7498565c7a3aee93d7cafc1b->enter($__internal_2a23a05d1afff686198b10926fdd3ead437266ca7498565c7a3aee93d7cafc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b90e448da42634158f42761bd2a92085eaa17eae525f07cd6145245cf604c41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e448da42634158f42761bd2a92085eaa17eae525f07cd6145245cf604c41a->enter($__internal_b90e448da42634158f42761bd2a92085eaa17eae525f07cd6145245cf604c41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2a23a05d1afff686198b10926fdd3ead437266ca7498565c7a3aee93d7cafc1b->leave($__internal_2a23a05d1afff686198b10926fdd3ead437266ca7498565c7a3aee93d7cafc1b_prof);

        
        $__internal_b90e448da42634158f42761bd2a92085eaa17eae525f07cd6145245cf604c41a->leave($__internal_b90e448da42634158f42761bd2a92085eaa17eae525f07cd6145245cf604c41a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
