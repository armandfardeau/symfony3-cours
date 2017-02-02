<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9b08e2269bc05e4968025be112396ff3745c3437c2b9bdd2b542f75210a01609 extends Twig_Template
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
        $__internal_8abd233a5dba5e6702734ebe758999fc849beb74fc227b66889e9296f5f34301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abd233a5dba5e6702734ebe758999fc849beb74fc227b66889e9296f5f34301->enter($__internal_8abd233a5dba5e6702734ebe758999fc849beb74fc227b66889e9296f5f34301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9fa73b0ef64cfa77179fabb8dab784fd48b2c2e103b96c2de888751a12a7c377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa73b0ef64cfa77179fabb8dab784fd48b2c2e103b96c2de888751a12a7c377->enter($__internal_9fa73b0ef64cfa77179fabb8dab784fd48b2c2e103b96c2de888751a12a7c377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8abd233a5dba5e6702734ebe758999fc849beb74fc227b66889e9296f5f34301->leave($__internal_8abd233a5dba5e6702734ebe758999fc849beb74fc227b66889e9296f5f34301_prof);

        
        $__internal_9fa73b0ef64cfa77179fabb8dab784fd48b2c2e103b96c2de888751a12a7c377->leave($__internal_9fa73b0ef64cfa77179fabb8dab784fd48b2c2e103b96c2de888751a12a7c377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
